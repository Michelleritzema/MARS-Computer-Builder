import requests
from bs4 import BeautifulSoup
import urllib
import io
import codecs
import pdb


f = codecs.open('siteinfoo.csv', 'w+', encoding='utf8')


def soundcard_spider(max_pages):
    page = 1
    while page <= max_pages:
        url = 'http://www.alternate.nl/html/product/listing.html?page=' + str (page) + '&lk=9517&tk=7&navId=17362&navId=17363&navId=17364#listingResult'
        source_code = requests.get(url)
        plain_text = source_code.text
        soup = BeautifulSoup(plain_text)
        for link in soup.findAll('a',{'class':'productLink'}):
            href = "http://www.alternate.nl" + link.get('href')
            print>>f,(href)
            print>>f,get_single_product(href)

def get_single_product(item_url):
    source_code = requests.get(item_url)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text)
    # if you want to gather information from that page
    for item_name in soup.findAll('div', {'class': 'productNameContainer'}):
        for item_span in soup.findAll('span', {'itemprop': ''}):
            print>>f,(item_name.text)
            print>>f,(item_span.text)




soundcard_spider(1)
f.close()