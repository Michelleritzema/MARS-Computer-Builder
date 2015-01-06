__author__ = 'Michelle'

from bs4 import BeautifulSoup
import requests

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
    print categories

categories()