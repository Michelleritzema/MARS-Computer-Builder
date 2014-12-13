__author__ = 'Michelle'

import unittest
from bs4 import BeautifulSoup
from CrawlerComputerstore import get_name

soup = BeautifulSoup("<div class='product_container'>" \
                     "<span itemprop='name'>	Example name  </span>" \
                     "</div>" \
                     "<div class='product-page'>" \
                     "<span class='js-product-name'>Example name</span>" \
                     "</div>")

class TestUM(unittest.TestCase):

    def setUp(self):
        pass

    def test_name(self):
        for item_container in soup.findAll('div', {'class': 'product_container'}):
            self.assertEqual(get_name("product_container", item_container), "Example name")
        for item_container in soup.findAll('div', {'class': 'product-page'}):
            self.assertEqual(get_name("product-page", item_container), "Example name")

    #def test_price(self):

    #def test_strings_a_3(self):
        #self.assertEqual( multiply('a',3), 'aaa')

if __name__ == '__main__':
    unittest.main()