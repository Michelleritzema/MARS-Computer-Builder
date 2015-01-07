__author__ = 'Michelle'

import re

strs = "http://michelle.initworks.com/TestCrawler/items/item1.php"

match = re.search(r'\bitems\b',strs)
if re.search(r'\bitems\b',strs):
    print "Found"
else:
    print "Not Found"