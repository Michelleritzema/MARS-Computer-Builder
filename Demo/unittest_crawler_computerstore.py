__author__ = 'Michelle'
# coding: utf-8

from bs4 import BeautifulSoup
import requests
import unittest
from CrawlerComputerstore import get_name, get_price, get_img, get_spec_title, get_spec_desc

url = "http://www.computerstore.nl/category/208983/moederborden.html"
source_code = requests.get(url)
plain_text = source_code.text
soup = BeautifulSoup(plain_text)

categories = []
for container in soup.findAll('li', {'class': 'facetcontainer'}):
    container_sources = container.findChildren('a', {'class': 'image'})
    source = "http://www.computerstore.nl" + container_sources[0].get('href')
    categories.append(source)
    url = source + "?sort=popularity&dir=d&page=1&items=12"
    source_code = requests.get(url)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text)

#print soup;


spec_title = ['Titel1', 'Titel2']
spec_desc_noicon = ['Desc 1', 'Desc 2']
spec_desc_icon = ['Desc1', 'Desc 2']

class TestUM(unittest.TestCase):
    def setUp(self):
        pass

    def test_name(self):
        for item_container in soup.findAll('div', {'class': 'product_container'}):
            self.assertEqual(get_name("product_container", item_container), "Example name")
        for item_container in soup.findAll('div', {'class': 'product-page'}):
            self.assertEqual(get_name("product-page", item_container), "Example name")

    def test_price(self):
        for item_container in soup.findAll('div', {'class': 'product_container'}):
            self.assertEqual(get_price("product_container", item_container), "100.50")
        for item_container in soup.findAll('div', {'class': 'product-page'}):
            self.assertEqual(get_price("product-page", item_container), "100.50")

    def test_img(self):
        for item_container in soup.findAll('div', {'class': 'product_container'}):
            self.assertEqual(get_img("product_container", item_container),
                             "http://img.cbcdn.net/products/315988?width=1172&height=894")
        for item_container in soup.findAll('div', {'class': 'product-page'}):
            self.assertEqual(get_img("product-page", item_container),
                             "http://img.cbcdn.net/products/315988?width=1172&height=894")

    def test_spec_title(self):
        for item_container in soup.findAll('div', {'class': 'product_container'}):
            self.assertEqual(get_spec_title("product_container", item_container, soup), spec_title)
        for item_container in soup.findAll('div', {'class': 'product-page'}):
            self.assertEqual(get_spec_title("product-page", item_container, soup), spec_title)

    def test_spec_desc(self):
        for item_container in soup.findAll('div', {'class': 'product_container'}):
            self.assertEqual(get_spec_desc("product_container", item_container, soup), spec_desc_noicon)
        for item_container in soup.findAll('div', {'class': 'product-page'}):
            self.assertEqual(get_spec_desc("product-page", item_container, soup), spec_desc_icon)
        print "Klaar met testen"

if __name__ == '__main__':
    unittest.main()
