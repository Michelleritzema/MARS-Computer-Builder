import requests
from bs4 import BeautifulSoup
import re


def spider_mars(max_pages):
    page = 1
    while page <= max_pages:
        url = "http://michelle.initworks.com/TestCrawler//index.php?page=" + str(page)
        source_code = requests.get(url)
        plain_text = source_code.text
        soup = BeautifulSoup(plain_text)
        for link in soup.findAll('a', {'class': ''}):
            href = "http://michelle.initworks.com/TestCrawler/" + link.get('href')
            if re.search(r'\bitems\b', href):
                print(href)
                spider_text(href)
        page += 1


def spider_text(item_url):
    source_code = requests.get(item_url)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text)
    for item in soup.findAll('td', {':': ''}):
        if not (re.search(r'\bNaam\b', item.text) or re.search(r'\bPrijs\b', item.text) or re.search(r'\bInfo\b', item.text) or re.search(r'\bSpecifiek\b', item.text)):
            if item.text:
                print(item.text)
    for item_img in soup.findAll('img',{'':''}):
        source = item_img.get('src')
        print(source)

spider_mars(4)