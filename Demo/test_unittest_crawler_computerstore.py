__author__ = 'Michelle'

import unittest
from bs4 import BeautifulSoup
from CrawlerComputerstore import get_name, get_price, get_img, get_spec_title, get_spec_desc

soup = BeautifulSoup("<div class='product_container'><span itemprop='name'>	Example name  </span>"
                     "<div class='price'>€@!100,50,-</div><img class='hasImageZoom' "
                     "data-img-large='http://img.cbcdn.net/products/315988?width=1172&height=894'/>"
                     "<td class='table_spectable_spec'><span class='table_spectable_spec_titletext'>"
                     "   Titel 1 </span></td><td class='table_spectable_specdescription'> Desc 1 </td>"
                     "<td class='table_spectable_spec'> Titel 2 </td>"
                     "<td class='table_spectable_specdescription'> Desc 2 </td></div>"
                     "<div class='product-page'><span class='js-product-name'>Example name</span>"
                     "<strong class='sales-price--current'>€@!100,50,-</strong><img class='media-gallery--main-image' "
                     "src='http://img.cbcdn.net/products/315988?width=1172&height=894'/>"
                     "<div class='show-more--content'><dt class='product-specs--item-title'>"
                     "<span class='product-specs--help-title'> Titel 1 </span></dt>"
                     "<dd class='product-specs--item-spec'><span class='icon-fallback'> Desc 1 </span></dd>"
                     "<dt class='product-specs--item-title'> Titel 2 </dt>"
                     "<dd class='product-specs--item-spec'> Desc 2 </dd></div>"
                     "</div>")

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

if __name__ == '__main__':
    unittest.main()