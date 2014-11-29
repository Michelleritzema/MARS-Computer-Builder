import re

__author__ = 'Anny & Michelle'

import time
import datetime
from bs4 import BeautifulSoup
import requests
from py2neo import neo4j
import socket
import errno


graph = neo4j.GraphDatabaseService("http://localhost:7474/db/data/")


# Deze functie haalt van de site computerstore op hoeveel categorieen er in totaal zijn.
# Dit wordt gedaan door eerst de broncode te nemen, en vervolgens wordt binnen de broncode
# gezocht naar een li met de class 'facetcontainer'. Binnen deze container wordt er verder
# gezocht naar een link met de class 'facetAction'. Voor elke link die hierbij gevonden
# wordt, nemen we de waarde van de titel, en slaan deze op als de 'name' variabele. Deze
# variabele wordt vervolgens toegevoegd aan de array 'category_names'. Verder wordt er gezocht
# naar de links binnen de facetcontainer die een class hebben van 'image'. Hieruit wordt de
# href gehaald en opgeslagen in de variabele 'source', deze wordt vervolgens aan de array
# 'categories' toegevoegd. De functie walk_through_categories() wordt aangeroepen.
def get_categories():
    categories = []
    category_names = []
    url = "http://www.computerstore.nl/category/211478/computer-onderdelen.html"
    source_code = requests.get(url)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text)
    for container in soup.findAll('li', {'class': 'facetcontainer'}):
        category_link = container.findChildren('a', {'class': 'facetAction'})
        for link in category_link:
            name = link.get('title').replace(" ", "")
            category_names.append(name)
            print "name of categorie found: " + name
        container_sources = container.findChildren('a', {'class': 'image'})
        for container_source in container_sources:
            source = "http://www.computerstore.nl" + container_source.get('href')
            categories.append(source)
    walk_through_categories(categories, category_names)


# Deze functie loopt alle items in de array 'categories' door. Voor elk item wordt de
# naam opgeslagen uit de 'category_names' array onder de variabele 'cat_name'. Ook wordt
# de functie get_pages() aangeroepen, die het maximale aantal pagina's teruggeeft, dit
# wordt opgeslagen onder de variabele 'max_amount'. Wanneer de naam van de categorie
# niet "Barebones" of "UpgradeKits" is, dan wordt de functie get_info_per_page() aangeroepen.
def walk_through_categories(categories, category_names):
    a_index = 0
    for category in categories:
        cat_name = category_names[a_index]
        max_amount = get_pages(category)
        if not (cat_name == "Moederborden" or cat_name == "Processoren" or cat_name == "Interngeheugen(RAM)"):
            # print "check"
            get_info_per_page(category, cat_name, max_amount)
            #else:
            #print "no check"
        a_index += 1


# Deze functie neemt de broncode van de eerste pagina binnen een bepaalde categorie.
# Hier wordt de li met class 'paging-navigation-last-page' gezocht. De tekst van dit
# element wordt eruit gehaald en opgeslagen onder de variabele 'max-amount'. Deze
# waarde wordt terug gegeven aan de functie walk_through_categories().
def get_pages(url):
    time.sleep(4)
    source_code = requests.get(url)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text)
    max_amount = 0
    for item in soup.findAll('li', {'class': 'paging-navigation-last-page'}):
        number = item.text
        max_amount = int(number.strip())
    print ""
    print "Maximale aantal pagina's voor deze categorie: " + str(max_amount)
    return max_amount


# Deze functie checkt of een bepaalde node al in de Neo4j database aanwezig is.
# Dit wordt gedaan door een lijst te maken van alle nodes die een bepaalde manufacture_code
# property hebben die overeenkomt met de variabele 'manufacture_code' die meegegeven wordt.
# Wanneer de lengte van de lijst groter is dan 0, dan wordt de node niet aangemaakt, maar wordt
# een update_node() functie uitgevoerd. Anders wordt de functie add_node() aangeroepen.
def check_for_nodes(cat_name, link_item, name, price, source, date, manufacture_code, spec_title, spec_desc):
    existing_nodes = list(graph.find('Item', property_key='manufacture_code', property_value=manufacture_code))
    print "Existing nodes: " + str(existing_nodes)
    if len(existing_nodes) > 0:
        print ("Deze node is al eens aangemaakt, updating node.")
        update_node(date, link_item, source, price, manufacture_code)
    else:
        print ("Deze node bestaat nog niet")
        add_node(cat_name, link_item, name, price, source, date, manufacture_code, spec_title, spec_desc)


# Deze functie maakt nodes aan in de Neo4j database met het label 'Item' en 'Price'. Hierin
# worden de variabelen 'cat_name', 'link', 'name', 'price', 'img' 'date', 'man_code',
# 'spec_title' en 'spec_desc' opgeslagen. Spec_title en spec_desc zijn twee arrays die alle
# specificaties van de node bevatten. De prijs wordt opgeslagen met een datum, zodat later
# terug te vinden is hoeveel het product kost op een bepaalde datum
def add_node(cat_name, link, name, price, source, date, man_code, spec_title, spec_desc):
    create_string = 'CREATE (:Item { manufacture_code: {man_code}, category: {cat_name}, link: {link}, name: {name}, img: {img}, date: {date}, spec_title: {spec_title}, spec_desc: {spec_desc}});'
    query = neo4j.CypherQuery(graph, create_string)
    query.execute(man_code=man_code, cat_name=cat_name, link=link, name=name, img=source, date=date,
                  spec_title=spec_title,
                  spec_desc=spec_desc)
    create_string2 = 'MATCH (n:Item) WHERE n.manufacture_code = {man_code} CREATE (m:Price { date: {date}, price: {price}, link: {link}}) CREATE (m)-[:BELONGS_TO]->(n);'
    query2 = neo4j.CypherQuery(graph, create_string2)
    query2.execute(man_code=man_code, date=date, price=price, link=link)
    print("node is toegevoegd")


def update_node(date, link, source, price, man_code):
    update_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.date = {date}, n.link = {link}, n.source = {source} RETURN n'
    query = neo4j.CypherQuery(graph, update_string)
    query.execute(man_code=man_code, link=link, date=date, source=source)
    create_string2 = 'MATCH (n:Item) WHERE n.manufacture_code = {man_code} CREATE (m:Price { date: {date}, price: {price}, link: {link}}) CREATE (m)-[:BELONGS_TO]->(n);'
    query2 = neo4j.CypherQuery(graph, create_string2)
    query2.execute(man_code=man_code, date=date, price=price, link=link)
    print("node is geupdate")


# Deze functie gaat alle pagina's langs van een bepaalde categorie. Van elke pagina wordt
# gezocht naar alle li's met de class 'product-list-item'. Van al deze li's worden vervolgens
# alle links gezocht met de class 'product-list-item--image-link'. Elke link die hierbij
# gevonden wordt, wordt opgeslagen onder de variabele 'link-item' en deze wordt, samen met
# de variabele 'cat_name', doorgegeven aan de get_details() functie.
def get_info_per_page(url, cat_name, max_pages):
    page = 1
    while page <= max_pages:
        print ""
        print "---------------------------------------"
        print "   Starting at a new page of items"
        print "---------------------------------------"
        time.sleep(8)
        url = url + "?sort=popularity&dir=d&page=" + str(page) + "&items=12"
        source_code = requests.get(url)
        plain_text = source_code.text
        soup = BeautifulSoup(plain_text)
        for item in soup.findAll('li', {'class': 'product-list-item'}):
            print "-------------------------------------"
            print "   Starting at a new detail page"
            print "-------------------------------------"
            a_children = item.findChildren('a', {'class': 'product-list-item--image-link'})
            if not (a_children == ""):
                link_obj = ""
                for a_child in a_children:
                    link_obj = a_child
                # print a_child
                link_item = "http://www.computerstore.nl" + link_obj.get('href')
                print "cat_name: " + cat_name
                print "link_item: " + link_item
                try:
                    print "test: inside try function, getting details"
                    get_details(link_item, cat_name)
                    #break
                except socket.error as error:
                    if error.errno == errno.WSAECONNRESET:
                        print "there was an error, sleeping for 30 seconds and trying again..."
                        time.sleep(30)
                        get_info_per_page(url, cat_name, max_pages)
        page += 1


# Deze functie neemt de naam en stopt deze in een variabele name.
# De variabele wordt teruggegeven aan de functie get_details()
def get_name(item_name, item_container):
    name = "unknown"
    if item_name == "product_container":
        for name_children in item_container.findChildren('span', {'itemprop': 'name'}):
            for name_child in name_children:
                name = name_child.strip()
    elif item_name == "product-page":
        for name_child in item_container.findChildren('span', {'class': 'js-product-name'}):
            name_raw = name_child.text
            name = name_raw.strip()
    print "name: " + name
    return name


# Deze functie neemt de prijs en stopt deze in een variabele price.
# De variabele wordt teruggegeven aan de functie get_details()
def get_price(item_name, item_container):
    price = 0
    price_raw = "0"
    if item_name == "product_container":
        for price_child in item_container.findChildren('div', {'class': 'price'}):
            price_raw = price_child.text
    elif item_name == "product-page":
        for price_child in item_container.findChildren('strong', {'class': 'sales-price--current'}):
            price_raw = price_child.text
    price_array = re.findall(r'\d{1,6}[\,.]{1}\d{0,2}', price_raw)
    for price_item in price_array:
        price_str = price_item.replace(',', '.')
        price_float = float(price_str)
        price = ('%.2f' % price_float)
    print "price: " + str(price)
    return price


# Deze functie neemt de afbeelding en stopt deze in een variabele source.
# De variabele wordt teruggegeven aan de functie get_details()
def get_img(item_name, item_container):
    source = "unknown"
    if item_name == "product_container":
        for img_child in item_container.findChildren('img', {'class': 'hasImageZoom'}):
            source = img_child.get('data-img-large')
    elif item_name == "product-page":
        for img_child in item_container.findChildren('img', {'class': 'media-gallery--main-image'}):
            source = str(img_child.get('src'))
    print "source: " + source
    return source


# Deze functie verzamelt al de specificatie titels en stopt ze in een array spec_title[].
# De array wordt teruggegeven aan de functie get_details()
def get_spec_title(item_name, item_container, soup):
    spec_title = []
    if item_name == "product_container":
        for specs_title_child in item_container.findChildren('td', {'class': 'table_spectable_spec'}):
            if specs_title_child.findChildren('span', {'class': 'table_spectable_spec_titletext'}):
                for specs_title_raw in specs_title_child.findChildren('span',
                                                                      {'class': 'table_spectable_spec_titletext'}):
                    specs_title_txt = specs_title_raw.text.replace(" ", "").lstrip().rstrip()
                    spec_title.append(re.sub('\s+', ' ', specs_title_txt))
            else:
                specs_title_txt = specs_title_child.text.replace(" ", "").lstrip().rstrip()
                spec_title.append(re.sub('\s+', ' ', specs_title_txt))
    elif item_name == "product-page":
        for specs_title_child in soup.findChildren('div', {'class': 'show-more--content'}):
            for title_child in specs_title_child.findChildren('dt', {'class': 'product-specs--item-title'}):
                if title_child.findChildren('span', {'class': 'product-specs--help-title'}):
                    for specs_title_raw in title_child.findChildren('span', {'class': 'product-specs--help-title'}):
                        specs_title_txt = specs_title_raw.text.replace(" ", "").lstrip().rstrip()
                        spec_title.append(re.sub('\s+', ' ', specs_title_txt))
                else:
                    specs_title_txt = title_child.text.replace(" ", "").lstrip().rstrip()
                    spec_title.append(re.sub('\s+', ' ', specs_title_txt))
    print spec_title
    return spec_title


def get_spec_desc(item_name, item_container, soup):
    spec_desc = []
    if item_name == "product_container":
        for specs_desc_child in item_container.findChildren('td', {'class': 'table_spectable_specdescription'}):
            specs_desc_txt = specs_desc_child.text.lstrip().rstrip()
            spec_desc.append(re.sub('\s+', ' ', specs_desc_txt))
    elif item_name == "product-page":
        for specs_desc_child in soup.findChildren('div', {'class': 'show-more--content'}):
            # print specs_title_child
            for desc_child in specs_desc_child.findChildren('dd', {'class': 'product-specs--item-spec'}):
                if desc_child.findChildren('span', {'class': 'icon-fallback'}):
                    for specs_desc_raw in desc_child.findChildren('span', {'class': 'icon-fallback'}):
                        specs_desc_txt = specs_desc_raw.text.replace(" ", "").lstrip().rstrip()
                        spec_desc.append(re.sub('\s+', ' ', specs_desc_txt))
                else:
                    specs_desc_txt = desc_child.text.replace(" ", "").lstrip().rstrip()
                    spec_desc.append(re.sub('\s+', ' ', specs_desc_txt))
    print spec_desc
    return spec_desc


# noinspection PyBroadException
def get_manufacture_code(spec_title, spec_desc):
    try:
        index = spec_title.index('Fabrikantcode')
        manufacture_code = spec_desc[index]
    except:
        manufacture_code = "unknown"
    print "manufacture_code: " + manufacture_code
    return manufacture_code


# Deze functie haalt alle details op van elk product dat gevonden wordt. Er wordt gezocht
# naar alle divs met de klas 'product_container'. Vervolgens wordt hierbinnen gezocht
# naar alle spans met een itemprop die 'name' is. De naam wordt opgeslagen onder de
# 'name' variabele. Er wordt ook gezocht naar alle img elementen die de class
# 'hasImageZoom' hebben. Hiervan wordt de link opgeslagen van de gevonden afbeelding in
# de 'source' variabele. Vervolgens wordt de functie check_for_nodes() aangeroepen om
# te checken of de node zich al in de database bevindt.
def get_details(link_item, cat_name):
    time.sleep(8)
    today = datetime.date.today()
    date = today.strftime("%d-%m-%Y")
    print "Current date: " + date
    source_code = requests.get(link_item)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text)
    # print soup
    for item_container in soup.findAll('div', {'class': 'product_container'}):
        #print item_container
        item_name = "product_container"
    for item_container in soup.findAll('div', {'class': 'product-page'}):
        #print item_container
        item_name = "product-page"
    print "test: found " + item_name
    name = get_name(item_name, item_container)
    price = get_price(item_name, item_container)
    source = get_img(item_name, item_container)
    spec_title = get_spec_title(item_name, item_container, soup)
    spec_desc = get_spec_desc(item_name, item_container, soup)
    manufacture_code = get_manufacture_code(spec_title, spec_desc)
    if not manufacture_code == "unknown":
        check_for_nodes(cat_name, link_item, name, price, source, date, manufacture_code, spec_title, spec_desc)


get_categories()