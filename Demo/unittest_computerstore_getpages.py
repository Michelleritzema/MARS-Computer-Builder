__author__ = 'Michelle'
# coding: utf-8

from bs4 import BeautifulSoup
import requests
import unittest
from CrawlerComputerstore import get_pages

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

class TestUM(unittest.TestCase):
    def setUp(self):
        pass

    def test_spec_desc(self):
        self.assertIsNotNone(get_pages(url))
        print "Klaar met testen"

if __name__ == '__main__':
    unittest.main()