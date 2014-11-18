__author__ = 'Anny & Michelle'

import time
import datetime
from bs4 import BeautifulSoup
import requests
from py2neo import neo4j


graph = neo4j.GraphDatabaseService("http://localhost:7474/db/data/")


def categories():
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
            # print name
            container_sources = container.findChildren('a', {'class': 'image'})
        for container_source in container_sources:
            source = "http://www.computerstore.nl" + container_source.get('href')
            categories.append(source)
            # print source
    a_index = 0
    for category in categories:
        cat_name = category_names[a_index]
        max_amount = get_pages(category)
        if not(cat_name == "Barebones" or cat_name == "UpgradeKits"):
            computerstore(category, cat_name, max_amount)
        a_index += 1


def get_pages(url):
    source_code = requests.get(url)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text)
    for item in soup.findAll('li', {'class': 'paging-navigation-last-page'}):
        number = item.text
    max_amount = int(number.strip())
    print "Maximale aantal pagina's voor deze categorie: " + str(max_amount)
    return max_amount


def check_for_nodes(cat_name, link_item, name, source, date):
    #print "Name = " + name
    existing_nodes = list(graph.find('Onderdeel', property_key='name', property_value=name))
    print "Existing nodes: " + str((existing_nodes))
    if len(existing_nodes) > 0:
        print ("Deze node is al eens aangemaakt")
    else:
        print ("Deze node bestaat nog niet")
        add_node(cat_name, link_item, name, source, date)


def add_node(cat_name, link, name, source, date):
    create_string = 'CREATE (:Onderdeel { category: {cat_name}, link: {link}, name: {name}, img: {img}, date: {date}})'
    query = neo4j.CypherQuery(graph, create_string)
    query.execute(cat_name=cat_name, link=link, name=name, img=source, date=date)
    print("node is toegevoegd")


def computerstore(url, cat_name, max_pages):
    page = 1
    while page <= max_pages:
        time.sleep(10)
        url = url + "?sort=popularity&dir=d&page=" + str(page) + "&items=12"
        source_code = requests.get(url)
        plain_text = source_code.text
        soup = BeautifulSoup(plain_text)
        for item in soup.findAll('li', {'class': 'product-list-item'}):
            a_children = item.findChildren('a', {'class': 'product-list-item--image-link'})
            for a_child in a_children:
                link_item = "http://www.computerstore.nl" + a_child.get('href')
                get_details(link_item, cat_name)
        page += 1


def get_details(link_item, cat_name):
    time.sleep(2)
    today = datetime.date.today()
    date = today.strftime("%d-%m-%Y")
    print "Current date: " + date
    source_code = requests.get(link_item)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text)
    #print soup
    for item in soup.findAll('div', {'class': 'product_container'}):
        #print item
        name_children = item.findChildren('span', {'itemprop': 'name'})
        for name_child in name_children:
            name_raw = name_child.text
            name = name_raw.strip()
            #print name
        img_children = item.findChildren('img', {'class': 'hasImageZoom'})
        for img_child in img_children:
            source = img_child.get('data-img-large')
            #print(source)
        print cat_name + ", " + link_item + ", " + name + ", " + source
        check_for_nodes(cat_name, link_item, name, source, date)


categories()