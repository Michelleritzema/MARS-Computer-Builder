__author__ = 'Michelle'
# coding: utf-8

import unittest
from CrawlerComputerstore import get_categories

class TestUM(unittest.TestCase):
    def setUp(self):
        pass

    def test_get_categories(self):
        test = "yes"
        self.assertTrue(get_categories(test))
        print "Klaar met testen"

if __name__ == '__main__':
    unittest.main()