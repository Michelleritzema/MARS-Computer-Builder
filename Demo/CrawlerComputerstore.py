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
        if not(cat_name == "Barebones" or cat_name == "UpgradeKits"):
            get_info_per_page(category, cat_name, max_amount)
        a_index += 1


# Deze functie neemt de broncode van de eerste pagina binnen een bepaalde categorie.
# Hier wordt de li met class 'paging-navigation-last-page' gezocht. De tekst van dit
# element wordt eruit gehaald en opgeslagen onder de variabele 'max-amount'. Deze
# waarde wordt terug gegeven aan de functie walk_through_categories().
def get_pages(url):
    time.sleep(3)
    source_code = requests.get(url)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text)
    for item in soup.findAll('li', {'class': 'paging-navigation-last-page'}):
        number = item.text
    max_amount = int(number.strip())
    print "Maximale aantal pagina's voor deze categorie: " + str(max_amount)
    return max_amount


# Deze functie checkt of een bepaalde node al in de Neo4j database aanwezig is.
# Dit wordt gedaan door een lijst te maken van alle nodes die een bepaalde naam
# property hebben die overeenkomt met de variabele 'name' die meegegeven wordt.
# Wanneer de lengte van de lijst groter is dan 0, dan wordt de node niet aangemaakt.
# Anders wordt de functie add_node() aangeroepen.
def check_for_nodes(cat_name, link_item, name, source, date):
    existing_nodes = list(graph.find('Onderdeel', property_key='name', property_value=name))
    print "Existing nodes: " + str((existing_nodes))
    if len(existing_nodes) > 0:
        print ("Deze node is al eens aangemaakt, updating node.")
        update_node(name, date)
    else:
        print ("Deze node bestaat nog niet")
        add_node(cat_name, link_item, name, source, date)


# Deze functie maakt een node aan in de Neo4j database met het label 'Onderdeel'. Hierin
# worden de variabelen 'cat_name', 'link', 'name', 'img' en 'date' opgeslagen.
def add_node(cat_name, link, name, source, date):
    create_string = 'CREATE (:Onderdeel { category: {cat_name}, link: {link}, name: {name}, img: {img}, date: {date}})'
    query = neo4j.CypherQuery(graph, create_string)
    query.execute(cat_name=cat_name, link=link, name=name, img=source, date=date)
    print("node is toegevoegd")


def update_node(name, date):
    update_string = 'MATCH (n:Onderdeel { name: {name} }) SET n.date = {date} RETURN n'
    query = neo4j.CypherQuery(graph, update_string)
    query.execute(name=name, date=date)
    print("node is geupdate")

# Deze functie gaat alle pagina's langs van een bepaalde categorie. Van elke pagina wordt
# gezocht naar alle li's met de class 'product-list-item'. Van al deze li's worden vervolgens
# alle links gezocht met de class 'product-list-item--image-link'. Elke link die hierbij
# gevonden wordt, wordt opgeslagen onder de variabele 'link-item' en deze wordt, samen met
# de variabele 'cat_name', doorgegeven aan de get_details() functie.
def get_info_per_page(url, cat_name, max_pages):
    page = 1
    while page <= max_pages:
        print "---------------------------------------"
        print "   Starting at a new page of items"
        print "---------------------------------------"
        print ""
        time.sleep(5)
        url = url + "?sort=popularity&dir=d&page=" + str(page) + "&items=12"
        source_code = requests.get(url)
        plain_text = source_code.text
        soup = BeautifulSoup(plain_text)
        print "test: made soup of items page"
        for item in soup.findAll('li', {'class': 'product-list-item'}):
            print "test: found product-list-item"
            a_children = item.findChildren('a', {'class': 'product-list-item--image-link'})
            for a_child in a_children:
                #print a_child
                print "test: found product-list-item--image-link"
                link_item = "http://www.computerstore.nl" + a_child.get('href')
                print "cat_name: " + cat_name
                print "link_item: " + link_item
                try:
                    print "test: inside try function, getting details"
                    get_details(link_item, cat_name)
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
    print "-------------------------------------"
    print "   Starting at a new detail page"
    print "-------------------------------------"
    print ""
    time.sleep(5)
    today = datetime.date.today()
    date = today.strftime("%d-%m-%Y")
    print "Current date: " + date
    source_code = requests.get(link_item)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text)
    print "test: made a soup of the item detail page"
    #print soup
    for item in soup.findAll('div', {'class': 'product_container'}):
        #print item
        print "test: found product_container"
        name_children = item.findChildren('span', {'itemprop': 'name'})
        if not (name_children == ""):
            print "test: name is found"
            for name_child in name_children:
                name_raw = name_child.text
                name = name_raw.strip()
                print "name: " + name
        else:
            print "test: name is empty, using default name."
            name = "unknown"
            print "name: " + name
        img_children = item.findChildren('img', {'class': 'hasImageZoom'})
        if not (img_children == ""):
            print "test: image is found"
            for img_child in img_children:
                source = img_child.get('data-img-large')
                print "source: " + source
        else:
            print "Img is empty, using default img."
            source = "empty_img"
            print "source: " + source
        #check_for_nodes(cat_name, link_item, name, source, date)


get_categories()