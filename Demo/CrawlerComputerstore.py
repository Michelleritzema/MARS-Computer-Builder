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
            # print source
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
        if not (cat_name == "Barebones" or cat_name == "UpgradeKits"):
            get_info_per_page(category, cat_name, max_amount)
        a_index += 1


# Deze functie neemt de broncode van de eerste pagina binnen een bepaalde categorie.
# Hier wordt de li met class 'paging-navigation-last-page' gezocht. De tekst van dit
# element wordt eruit gehaald en opgeslagen onder de variabele 'max-amount'. Deze
# waarde wordt terug gegeven aan de functie walk_through_categories().
def get_pages(url):
    time.sleep(10)
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
# Dit wordt gedaan door een lijst te maken van alle nodes die een bepaalde naam
# property hebben die overeenkomt met de variabele 'name' die meegegeven wordt.
# Wanneer de lengte van de lijst groter is dan 0, dan wordt de node niet aangemaakt.
# Anders wordt de functie add_node() aangeroepen.
def check_for_nodes(cat_name, link_item, name, price, source, date, manufacture_code, spec_title, spec_desc):
    existing_nodes = list(graph.find('Item', property_key='manufacture_code', property_value=manufacture_code))
    print "Existing nodes: " + str((existing_nodes))
    if len(existing_nodes) > 0:
        print ("Deze node is al eens aangemaakt, updating node.")
        update_node(name, date, link_item, source, price, manufacture_code)
    else:
        print ("Deze node bestaat nog niet")
        add_node(cat_name, link_item, name, price, source, date, manufacture_code, spec_title, spec_desc)


# Deze functie maakt een node aan in de Neo4j database met het label 'Onderdeel'. Hierin
# worden de variabelen 'cat_name', 'link', 'name', 'img' en 'date' opgeslagen.
def add_node(cat_name, link, name, price, source, date, man_code, spec_title, spec_desc):
    create_string = 'CREATE (:Item { manufacture_code: {man_code}, category: {cat_name}, link: {link}, name: {name}, img: {img}, date: {date}, spec_title: {spec_title}, spec_desc: {spec_desc}});'
    query = neo4j.CypherQuery(graph, create_string)
    query.execute(man_code=man_code, cat_name=cat_name, link=link, name=name, img=source, date=date, spec_title=spec_title,
                  spec_desc=spec_desc)
    create_string2 = 'MATCH (n:Item) WHERE n.manufacture_code = {man_code} CREATE (m:Price { date: {date}, price: {price}, link: {link}}) CREATE (m)-[:BELONGS_TO]->(n);'
    query2 = neo4j.CypherQuery(graph, create_string2)
    query2.execute(man_code=man_code, date=date, price=price, link=link)
    print("node is toegevoegd")


def update_node(name, date, link, source, price, man_code):
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
        time.sleep(10)
        url = url + "?sort=popularity&dir=d&page=" + str(page) + "&items=12"
        source_code = requests.get(url)
        plain_text = source_code.text
        soup = BeautifulSoup(plain_text)
        # print "test: made soup of items page"
        for item in soup.findAll('li', {'class': 'product-list-item'}):
            print "-------------------------------------"
            print "   Starting at a new detail page"
            print "-------------------------------------"
            # print "test: found product-list-item"
            a_children = item.findChildren('a', {'class': 'product-list-item--image-link'})
            if not (a_children == ""):
                for a_child in a_children:
                    link_obj = a_child
                # print a_child
                #print "test: found product-list-item--image-link"
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


# Deze functie haalt alle details op van elk product dat gevonden wordt. Er wordt gezocht
# naar alle divs met de klas 'product_container'. Vervolgens wordt hierbinnen gezocht
# naar alle spans met een itemprop die 'name' is. De naam wordt opgeslagen onder de
# 'name' variabele. Er wordt ook gezocht naar alle img elementen die de class
# 'hasImageZoom' hebben. Hiervan wordt de link opgeslagen van de gevonden afbeelding in
# de 'source' variabele. Vervolgens wordt de functie check_for_nodes() aangeroepen om
# te checken of de node zich al in de database bevindt.
def get_details(link_item, cat_name):
    time.sleep(15)
    today = datetime.date.today()
    date = today.strftime("%d-%m-%Y")
    print "Current date: " + date
    source_code = requests.get(link_item)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text)
    # print soup
    spec_title = []
    spec_desc = []
    name = "unknown"
    price = 0
    source = "unknown"
    for item in soup.findAll('div', {'class': 'product_container'}):
        print "test: found product_container"
        #print item
        for name_children in item.findChildren('span', {'itemprop': 'name'}):
            for name_child in name_children:
                #print name_child
                name = name_child.strip()
                print "name: " + name
        for price_child in item.findChildren('div', {'class': 'price'}):
            #print price_child
            price_raw = price_child.text
            price_array = re.findall(r'\d{1,6}[\,.]{1}\d{0,2}', price_raw)
            for price_item in price_array:
                price_str = price_item.replace(',', '.')
                price_float = float(price_str)
                price = ('%.2f' % price_float)
                print "price: " + price
        for img_child in item.findChildren('img', {'class': 'hasImageZoom'}):
            #print img_children
            source = img_child.get('data-img-large')
            print "source: " + source
        for specs_title_child in item.findChildren('td', {'class': 'table_spectable_spec'}):
            #print specs_title_child
            if specs_title_child.findChildren('span', {'class': 'table_spectable_spec_titletext'}):
                #print "has span"
                for specs_title_raw in specs_title_child.findChildren('span',
                                                                      {'class': 'table_spectable_spec_titletext'}):
                    specs_title_txt = specs_title_raw.text.replace(" ", "").lstrip().rstrip()
                    spec_title.append(re.sub('\s+', ' ', specs_title_txt))
            else:
                #print "no span"
                specs_title_txt = specs_title_child.text.replace(" ", "").lstrip().rstrip()
                spec_title.append(re.sub('\s+', ' ', specs_title_txt))
        for specs_desc_child in item.findChildren('td', {'class': 'table_spectable_specdescription'}):
            #print specs_desc_child
            specs_desc_txt = specs_desc_child.text.lstrip().rstrip()
            spec_desc.append(re.sub('\s+', ' ', specs_desc_txt))
        #i = 0
        #while i < len(spec_title):
        #    print spec_title[i] + ": " + spec_desc[i]
        #    i += 1
    for item in soup.findAll('div', {'class': 'product-page'}):
        print "test: found product-page"
        for name_child in item.findChildren('span', {'class': 'js-product-name'}):
            #print "test: found js-product-name"
            name_raw = name_child.text
            name = name_raw.strip()
            print "name: " + name
        for price_child in item.findChildren('strong', {'class': 'sales-price--current'}):
            #print price_child
            price_raw = price_child.text
            price_array = re.findall(r'\d{1,6}[\,.]{1}\d{0,2}', price_raw)
            for price_item in price_array:
                price_str = price_item.replace(',', '.')
                price_float = float(price_str)
                price = ('%.2f' % price_float)
                print "price: " + price
        for img_child in item.findChildren('img', {'class': 'media-gallery--main-image'}):
            #print "test: found media-gallery--main-image"
            source = str(img_child.get('src'))
            print "source: " + source
        #print item
        for specs_title_child in item.findChildren('dt', {'class': 'product-specs--item-title'}):
            #print specs_title_child
            if specs_title_child.findChildren('span', {'class': 'product-specs--help-title'}):
                #print "has span"
                for specs_title_raw in specs_title_child.findChildren('span', {'class': 'product-specs--help-title'}):
                    specs_title_txt = specs_title_raw.text.replace(" ", "").lstrip().rstrip()
                    spec_title.append(re.sub('\s+', ' ', specs_title_txt))
            else:
                #print "no span"
                specs_title_txt = specs_title_child.text.replace(" ", "").lstrip().rstrip()
                spec_title.append(re.sub('\s+', ' ', specs_title_txt))
        for specs_desc_child in item.findChildren('dd', {'class': 'product-specs--item-spec'}):
            #print specs_desc_child
            if specs_desc_child.findChildren('span', {'class': 'icon-fallback'}):
                #print "has span"
                for specs_desc_raw in specs_desc_child.findChildren('span', {'class': 'icon-fallback'}):
                    specs_desc_txt = specs_desc_raw.text.replace(" ", "").lstrip().rstrip()
                    spec_desc.append(re.sub('\s+', ' ', specs_desc_txt))
            else:
                #print "no span"
                specs_desc_txt = specs_desc_child.text.replace(" ", "").lstrip().rstrip()
                spec_desc.append(re.sub('\s+', ' ', specs_desc_txt))
        #i = 0
        #while i < len(spec_title):
        #    print spec_title[i] + ": " + spec_desc[i]
        #    i += 1
    manufacture_code = get_manufacture_code(spec_title, spec_desc)
    print "manufacture_code: " + manufacture_code
    if not (name == ""):
        check_for_nodes(cat_name, link_item, name, price, source, date, manufacture_code, spec_title, spec_desc)
        #add_node(cat_name, link_item, name, price, source, date, manufacturer_code, spec_title, spec_desc)


def get_manufacture_code(spec_title, spec_desc):
    index = spec_title.index('Fabrikantcode')
    print "index: " + str(index)
    manufacture_code = spec_desc[index]
    return manufacture_code


get_categories()