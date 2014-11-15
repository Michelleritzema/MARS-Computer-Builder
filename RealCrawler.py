__author__ = 'Anny & Michelle'

from bs4 import BeautifulSoup
import requests, re, time, urllib, io, codecs, pdb
from py2neo import neo4j

graph = neo4j.GraphDatabaseService("http://localhost:7474/db/data/")

def categories():
    categories = []
    url = "http://www.computerstore.nl/category/211478/computer-onderdelen.html"
    source_code = requests.get(url)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text)
    for container in soup.findAll('li', {'class': 'facetcontainer'}):
        container_sources = container.findChildren('a', {'class': 'image'})
        for container_source in container_sources:
            #print(container_source)
            source = "http://www.computerstore.nl" + container_source.get('href')
            categories.append(source)
            #print source
    for category in categories:
        computerstore(category, 1)

def computerstore(url, max_pages):
    page = 1
    while page <= max_pages:
        url = url + "?sort=popularity&dir=d&page=" + str(page) + "&items=12"
        source_code = requests.get(url)
        plain_text = source_code.text
        soup = BeautifulSoup(plain_text)
        for item in soup.findAll('li', {'class': 'product-list-item'}):
            a_children = item.findChildren('a', {'class': 'product-list-item--image-link'})
            for a_child in a_children:
                link_item = "http://www.computerstore.nl" + a_child.get('href')
                get_details(link_item)
        page += 1

def get_details(link_item):
    time.sleep(2)
    source_code = requests.get(link_item)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text)
    #print soup
    for item in soup.findAll('div', {'class': 'product-page'}):
        #print item
        name_children = item.findChildren('span', {'class': 'js-product-name'})
        for name_child in name_children:
            #print link_item
            name_raw = name_child.text
            name = name_raw.strip()
            #print name
        img_children = item.findChildren('img', {'class': 'media-gallery--main-image'})
        for img_child in img_children:
            source = img_child.get('src')
            #print(source)
        print link_item + ", " + name + ", " + source
        #create_string = 'CREATE (:Item { link: {link}, name: {name}, img: {img}})'
        #query = neo4j.CypherQuery(graph, create_string)
        #query.execute(link=link_item, name=name, img=source)
        #print("node is toegevoegd")

categories()
#computerstore(1)