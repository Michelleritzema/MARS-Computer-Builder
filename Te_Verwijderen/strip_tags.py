__author__ = 'Michelle'

from BeautifulSoup import BeautifulSoup, NavigableString

def strip_tags(html, invalid_tags):
    soup = BeautifulSoup(html)

    for tag in soup.findAll(True):
        if tag.name in invalid_tags:
            s = ""

            for c in tag.contents:
                if not isinstance(c, NavigableString):
                    c = strip_tags(unicode(c), invalid_tags)
                s += unicode(c)

            tag.replaceWith(s)

    return soup

html = "<p>Good, <b>bad</b>, and <i>ug<b>l</b><u>y</u></i></p>"
invalid_tags = ['b', 'i', 'u']
print strip_tags(html, invalid_tags)