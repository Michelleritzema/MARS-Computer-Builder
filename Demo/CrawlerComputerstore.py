__author__ = 'Anny & Michelle'

import time
import datetime
from bs4 import BeautifulSoup
import requests
from py2neo import neo4j
import socket
import errno
import re

graph = neo4j.GraphDatabaseService("http://localhost:7474/db/data/")

# Deze functie haalt van de site computerstore op hoeveel categorieen er in totaal zijn.
# Dit wordt gedaan door eerst de broncode te nemen, en vervolgens wordt binnen de broncode
# gezocht naar een li met de class 'facetcontainer'. Binnen deze container wordt er verder
# gezocht naar een link met de class 'facetAction'. Voor elke link die hierbij gevonden
# wordt, nemen we de waarde van de titel, en slaan deze op als de 'name' variabele. Deze
# variabele wordt vervolgens toegevoegd aan de array 'category_names'. Verder wordt er gezocht
# naar de links binnen de facetcontainer die een class hebben van 'image'. Hieruit wordt de
# href gehaald en opgeslagen in de variabele 'source', deze wordt vervolgens aan de array
# 'categories' toegevoegd. De functie walk_through_categories() wordt aangeroepen.
def get_categories(test):
    categories = []
    category_names = []
    url = "http://www.computerstore.nl/category/211478/computer-onderdelen.html"
    source_code = requests.get(url)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text)
    for container in soup.findAll('li', {'class': 'facetcontainer'}):
        category_link = container.findChildren('a', {'class': 'facetAction'})
        for link in category_link:
            name = link.get('title').replace(" ", "")
            category_names.append(name)
            print("name of categorie found: " + name)
        container_sources = container.findChildren('a', {'class': 'image'})
        for container_source in container_sources:
            source = "http://www.computerstore.nl" + container_source.get('href')
            categories.append(source)
    if not test == "yes":
        walk_through_categories(categories, category_names)
    done = True
    return done

# Deze functie loopt alle items in de array 'categories' door. Voor elk item wordt de
# naam opgeslagen uit de 'category_names' array onder de variabele 'cat_name'. Ook wordt
# de functie get_pages() aangeroepen, die het maximale aantal pagina's teruggeeft, dit
# wordt opgeslagen onder de variabele 'max_amount'. Wanneer de naam van de categorie
# niet "Barebones" of "UpgradeKits" is, dan wordt de functie get_info_per_page() aangeroepen.
def walk_through_categories(categories, category_names):
    a_index = 0
    for category in categories:
        cat_name = category_names[a_index]
        max_amount = get_pages(category)
        if not (cat_name == "Barebones" or cat_name == "UpgradeKits"):
            get_info_per_page(category, cat_name, max_amount)
        a_index += 1

# Deze functie neemt de broncode van de eerste pagina binnen een bepaalde categorie.
# Hier wordt de li met class 'paging-navigation-last-page' gezocht. De tekst van dit
# element wordt eruit gehaald en opgeslagen onder de variabele 'max-amount'. Deze
# waarde wordt terug gegeven aan de functie walk_through_categories().
def get_pages(url):
    time.sleep(4)
    source_code = requests.get(url)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text)
    max_amount = 0
    for item in soup.findAll('li', {'class': 'paging-navigation-last-page'}):
        number = item.text
        max_amount = int(number.strip())
    print("")
    print("Maximale aantal pagina's voor deze categorie: " + str(max_amount))
    return max_amount

# Checkt of de parameter gespecificeerd is bij save_specification.
# Als dit zo is, wordt een update (of insert) query uitgevoerd.
def run_insert_query(man_code, value, insert_string):
    if not insert_string == "":
        query = neo4j.CypherQuery(graph, insert_string)
        query.execute(man_code=man_code, value=value)

# Deze functie zoekt neemt alle parameters die in de spec_desc array zitten,
# zodat deze als losse parameters opgeslagen kunnen worden.
def save_specification(item, man_code, spec_title, spec_desc, test):
    value = spec_desc[item]
    insert_string = ""
    if spec_title[item] == "Socket":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.socket = {value} RETURN n'
    elif spec_title[item] == "Chipset":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.chipset = {value} RETURN n'
    elif spec_title[item] == "Geheugenslotentotaal":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.geheugenslotentotaal = {value} RETURN n'
    elif spec_title[item] == "Wifi":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.wifi = {value} RETURN n'
    elif spec_title[item] == "Artikelnummer":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.artikelnummer = {value} RETURN n'
    elif spec_title[item] == "Merk":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.merk = {value} RETURN n'
    elif spec_title[item] == "Formaatmoederbord":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.formaatmoederbord = {value} RETURN n'
    elif spec_title[item] == "Garantie":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.garantie = {value} RETURN n'
    elif spec_title[item] == "Garantietype":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.garantietype = {value} RETURN n'
    elif spec_title[item] == "Kloksnelheidgeheugenmodule":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.kloksnelheidgeheugenmodule = {value} RETURN n'
    elif spec_title[item] == "Maximalehoeveelheidgeheugen":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.maximalehoeveelheidgeheugen = {value} RETURN n'
    elif spec_title[item] == "Geheugenslotentotaal":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.geheugenslotentotaal = {value} RETURN n'
    elif spec_title[item] == "Geheugen":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.geheugen = {value} RETURN n'
    elif spec_title[item] == "PCIExpressx16-sloten":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.pciexpressx16sloten = {value} RETURN n'
    elif spec_title[item] == "PCIExpressx1-sloten":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.pciexpressx1sloten = {value} RETURN n'
    elif spec_title[item] == "PCI-sloten":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.pcisloten = {value} RETURN n'
    elif spec_title[item] == "Ethernetpoorten":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.ethernetpoorten = {value} RETURN n'
    elif spec_title[item] == "Bluetooth":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.bluetooth = {value} RETURN n'
    elif spec_title[item] == "FireWire":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.fireWire = {value} RETURN n'
    elif spec_title[item] == "AantalUSB3.0-poorten":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.aantalusb3poorten = {value} RETURN n'
    elif spec_title[item] == "PS/2":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.ps2 = {value} RETURN n'
    elif spec_title[item] == "SATA300-aansluitingen":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.sata300aansluitingen = {value} RETURN n'
    elif spec_title[item] == "RAID":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.raid = {value} RETURN n'
    elif spec_title[item] == "Speakerkanalen":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.speakerkanalen = {value} RETURN n'
    elif spec_title[item] == "Optischeingang":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.optischeingang = {value} RETURN n'
    elif spec_title[item] == "Audioprocessor":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.audioprocessor = {value} RETURN n'
    elif spec_title[item] == "VGA-poort":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.vgapoort = {value} RETURN n'
    elif spec_title[item] == "DVI":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.dvi = {value} RETURN n'
    elif spec_title[item] == "HDMI":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.hdmi = {value} RETURN n'
    elif spec_title[item] == "DisplayPort":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.displayport = {value} RETURN n'
    elif spec_title[item] == "Chipset-koeler":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.chipsetkoeler = {value} RETURN n'
    elif spec_title[item] == "Casefan-aansluitingen":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.casefanaansluitingen = {value} RETURN n'
    elif spec_title[item] == "UEFIBIOS":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.uefibios = {value} RETURN n'
    elif spec_title[item] == "NvidiaSLI":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.nvidiasli = {value} RETURN n'
    elif spec_title[item] == "AMDCrossfireX":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.amdcrossfirex = {value} RETURN n'
    elif spec_title[item] == "Breedte":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.breedte = {value} RETURN n'
    elif spec_title[item] == "Diepte":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.diepte = {value} RETURN n'
    elif spec_title[item] == "Serie":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.serie = {value} RETURN n'
    elif spec_title[item] == "Threads":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.threads = {value} RETURN n'
    elif spec_title[item] == "Kloksnelheid":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.kloksnelheid = {value} RETURN n'
    elif spec_title[item] == "Codenaam":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.codenaam = {value} RETURN n'
    elif spec_title[item] == "TurboFrequency":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.turbofrequency = {value} RETURN n'
    elif spec_title[item] == "Multiplierunlocked":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.multiplierunlocked = {value} RETURN n'
    elif spec_title[item] == "Cache":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.cache = {value} RETURN n'
    elif spec_title[item] == "Geheugencontroller":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.geheugencontroller = {value} RETURN n'
    elif spec_title[item] == "Productieproces":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.productieproces = {value} RETURN n'
    elif spec_title[item] == "Stroomverbruikmaximaal":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.stroomverbruikmaximaal = {value} RETURN n'
    elif spec_title[item] == "Kloksnelheid":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.kloksnelheid = {value} RETURN n'
    elif spec_title[item] == "Processorkernen":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.processorkernen = {value} RETURN n'
    elif spec_title[item] == "TypeGPU":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.typegpu = {value} RETURN n'
    elif spec_title[item] == "Koelermeegeleverd":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.koelermeegeleverd = {value} RETURN n'
    elif spec_title[item] == "RAM-geheugen":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.ramgeheugen = {value} RETURN n'
    elif spec_title[item] == "Geheugengeschiktvoor:":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.geheugengeschiktvoor = {value} RETURN n'
    elif spec_title[item] == "Aantalgeheugenkanalen":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.aantalgeheugenkanalen = {value} RETURN n'
    elif spec_title[item] == "Geschiktvoorgaming":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.geschiktvoorgaming = {value} RETURN n'
    elif spec_title[item] == "Module":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.module = {value} RETURN n'
    elif spec_title[item] == "CASlatencygeheugenmodule":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.caslatencygeheugenmodule = {value} RETURN n'
    elif spec_title[item] == "Voltage":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.voltage = {value} RETURN n'
    elif spec_title[item] == "Aansluitinggeheugenmodule":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.aansluitinggeheugenmodule = {value} RETURN n'
    elif spec_title[item] == "Bandbreedtegeheugenbus":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.bandbreedtegeheugenbus = {value} RETURN n'
    elif spec_title[item] == "Vrijeslotenbenodigd":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.vrijeslotenbenodigd = {value} RETURN n'
    elif spec_title[item] == "Bustype":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.bustype = {value} RETURN n'
    elif spec_title[item] == "Low-profile":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.lowprofile = {value} RETURN n'
    elif spec_title[item] == "Resolutie":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.resolutie = {value} RETURN n'
    elif spec_title[item] == "Fabrikant":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.fabrikant = {value} RETURN n'
    elif spec_title[item] == "Koelmethode":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.koelmethode = {value} RETURN n'
    elif spec_title[item] == "Videogeheugen":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.videogeheugen = {value} RETURN n'
    elif spec_title[item] == "Typegeheugen":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.typegeheugen = {value} RETURN n'
    elif spec_title[item] == "TypeDVI-aansluiting":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.typedviaansluiting = {value} RETURN n'
    elif spec_title[item] == "HDMI-uitgangen":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.hdmiuitgangen = {value} RETURN n'
    elif spec_title[item] == "Minimaalbenodigdevoeding":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.minimaalbenodigdevoeding = {value} RETURN n'
    elif spec_title[item] == "Voedingsconnectoren":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.voedingsconnectoren = {value} RETURN n'
    elif spec_title[item] == "DirectX":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.directx = {value} RETURN n'
    elif spec_title[item] == "OpenGL":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.opengl = {value} RETURN n'
    elif spec_title[item] == "HDCP":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.hdcp = {value} RETURN n'
    elif spec_title[item] == "Hoogte":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.hoogte = {value} RETURN n'
    elif spec_title[item] == "Computerbehuizing":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.computerbehuizing = {value} RETURN n'
    elif spec_title[item] == "Uitbreidingssloten":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.uitbreidingssloten = {value} RETURN n'
    elif spec_title[item] == "Fancontroler":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.fancontroler = {value} RETURN n'
    elif spec_title[item] == "Stoffilter":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.stoffilter = {value} RETURN n'
    elif spec_title[item] == "AantalUSB2.0-poorten":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.aantalusb2poorten = {value} RETURN n'
    elif spec_title[item] == "AantalFireWire-poorten":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.aantalfirewirepoorten = {value} RETURN n'
    elif spec_title[item] == "eSATA-aansluitingen":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.esataaansluitingen = {value} RETURN n'
    elif spec_title[item] == "3,5''Bays(HDD)":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.bays3_5 = {value} RETURN n'
    elif spec_title[item] == "2,5''Bays(HDD/SSD)":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.bays2_5 = {value} RETURN n'
    elif spec_title[item] == "5,25''Bays":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.bays5_25 = {value} RETURN n'
    elif spec_title[item] == "Maximalelengtevideokaart":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.maximalelengtevideokaart = {value} RETURN n'
    elif spec_title[item] == "Fanposities":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.fanposities = {value} RETURN n'
    elif spec_title[item] == "Voorzijde":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.voorzijde = {value} RETURN n'
    elif spec_title[item] == "Achterzijde":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.achterzijde = {value} RETURN n'
    elif spec_title[item] == "Zijkant":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.zijkant = {value} RETURN n'
    elif spec_title[item] == "Bovenzijdeslot":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.bovenzijdeslot = {value} RETURN n'
    elif spec_title[item] == "Onderzijdeslot":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.onderzijdeslot = {value} RETURN n'
    elif spec_title[item] == "Ventilatorgeleverd":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.ventilatorgeleverd = {value} RETURN n'
    elif spec_title[item] == "Maximalehoogteprocessorkoeler":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.maximalehoogteprocessorkoeler = {value} RETURN n'
    elif spec_title[item] == "Locatieaansluitingvoeding":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.locatieaansluitingvoeding = {value} RETURN n'
    elif spec_title[item] == "Paneeldeur":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.paneeldeur = {value} RETURN n'
    elif spec_title[item] == "Ruisreductie":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.ruisreductie = {value} RETURN n'
    elif spec_title[item] == "Stoffilter":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.stoffilter = {value} RETURN n'
    elif spec_title[item] == "Geluidsdempendematten":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.geluidsdempendematten = {value} RETURN n'
    elif spec_title[item] == "Kleur":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.kleur = {value} RETURN n'
    elif spec_title[item] == "Materiaal":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.materiaal = {value} RETURN n'
    elif spec_title[item] == "Locatieaansluitingvoeding":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.locatieaansluitingvoeding = {value} RETURN n'
    elif spec_title[item] == "Locatieaansluitingvoeding":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.locatieaansluitingvoeding = {value} RETURN n'
    elif spec_title[item] == "Modulair":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.modulair = {value} RETURN n'
    elif spec_title[item] == "Certificering":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.certificering = {value} RETURN n'
    elif spec_title[item] == "Gemiddeldelevensduur":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.gemiddeldelevensduur = {value} RETURN n'
    elif spec_title[item] == "Versievormfactor":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.versievormfactor = {value} RETURN n'
    elif spec_title[item] == "Vermogen":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.vermogen = {value} RETURN n'
    elif spec_title[item] == "ATX20+4-pin":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.atx20_4pin = {value} RETURN n'
    elif spec_title[item] == "CPUP4+P4":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.cpuP4_P4 = {value} RETURN n'
    elif spec_title[item] == "PCIExpress6+2-pin":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.pciexpress6_2pin = {value} RETURN n'
    elif spec_title[item] == "IDE(4-pinMolex)":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.ide_4_pinmolex = {value} RETURN n'
    elif spec_title[item] == "FDD(Floppy)":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.fdd_floppy = {value} RETURN n'
    elif spec_title[item] == "Stroompieken":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.stroompieken = {value} RETURN n'
    elif spec_title[item] == "Overspanning":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.overspanning = {value} RETURN n'
    elif spec_title[item] == "Onderspanning":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.onderspanning = {value} RETURN n'
    elif spec_title[item] == "Overbelasting":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.overbelasting = {value} RETURN n'
    elif spec_title[item] == "Kortsluiting":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.kortsluiting = {value} RETURN n'
    elif spec_title[item] == "Oververhittingsbeveiliging":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.oververhittingsbeveiliging = {value} RETURN n'
    elif spec_title[item] == "Gewicht":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.gewicht = {value} RETURN n'
    elif spec_title[item] == "Hardeschijfsnelheid":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.hardeschijfsnelheid = {value} RETURN n'
    elif spec_title[item] == "Opslagcapaciteit":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.opslagcapaciteit = {value} RETURN n'
    elif spec_title[item] == "Formaathardeschijf":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.formaathardeschijf = {value} RETURN n'
    elif spec_title[item] == "Aansluiting":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.aansluiting = {value} RETURN n'
    elif spec_title[item] == "Hardeschijf":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.hardeschijf = {value} RETURN n'
    elif spec_title[item] == "Energiezuinig":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.energiezuinig = {value} RETURN n'
    elif spec_title[item] == "Formaathardeschijf":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.formaathardeschijf = {value} RETURN n'
    elif spec_title[item] == "Maximaleschrijfsnelheid":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.maximaleschrijfsnelheid = {value} RETURN n'
    elif spec_title[item] == "Maximaleleessnelheid":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.maximaleleessnelheid = {value} RETURN n'
    elif spec_title[item] == "SSDController":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.ssdcontroller = {value} RETURN n'
    elif spec_title[item] == "OpslagcapaciteitCache-SSD":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.opslagcapaciteitcachessd = {value} RETURN n'
    elif spec_title[item] == "Zoektijd(Seektime)":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.zoektijd_seektime = {value} RETURN n'
    elif spec_title[item] == "Gemiddeldetijdtussenstoringen(MTBF)":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.gemiddeldetijdtussenstoringen = {value} RETURN n'
    elif spec_title[item] == "Soortgeheugen":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.soortgeheugen = {value} RETURN n'
    elif spec_title[item] == "Willekeurigeleessnelheid(IOPS)":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.willekeurigeleessnelheid = {value} RETURN n'
    elif spec_title[item] == "Willekeurigeschrijfsnelheid(IOPS)":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.willekeurigeschrijfsnelheid = {value} RETURN n'
    elif spec_title[item] == "Frequentiebereik":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.frequentiebereik = {value} RETURN n'
    elif spec_title[item] == "Samplefrequentie":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.samplefrequentie = {value} RETURN n'
    elif spec_title[item] == "Signaal-ruisverhouding":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.signaalruisverhouding = {value} RETURN n'
    elif spec_title[item] == "3,5mmmini-jack":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.minijack3_5mm = {value} RETURN n'
    elif spec_title[item] == "Hoofdtelefoonaansluiting":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.hoofdtelefoonaansluiting = {value} RETURN n'
    elif spec_title[item] == "Typedrive":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.typedrive = {value} RETURN n'
    elif spec_title[item] == "Typelade":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.typelade = {value} RETURN n'
    elif spec_title[item] == "Speeltvandisc":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.speeltvandisc = {value} RETURN n'
    elif spec_title[item] == "CD-ROMleessnelheid":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.cdromleessnelheid = {value} RETURN n'
    elif spec_title[item] == "DVDleessnelheid":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.dvdleessnelheid = {value} RETURN n'
    elif spec_title[item] == "CD-ROMschrijfsnelheid":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.cdromschrijfsnelheid = {value} RETURN n'
    elif spec_title[item] == "DVDschrijfsnelheid":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.dvdschrijfsnelheid = {value} RETURN n'
    elif spec_title[item] == "Geschiktvoor":
        insert_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.geschiktvoor = {value} RETURN n'
    if not test == "yes":
        run_insert_query(man_code, value, insert_string)
    done = True
    return done

# Deze functie checkt of een bepaalde node al in de Neo4j database aanwezig is.
# Dit wordt gedaan door een lijst te maken van alle nodes die een bepaalde manufacture_code
# property hebben die overeenkomt met de variabele 'manufacture_code' die meegegeven wordt.
# Wanneer de lengte van de lijst groter is dan 0, dan wordt de node niet aangemaakt, maar wordt
# een update_node() functie uitgevoerd. Anders wordt de functie add_node() aangeroepen.
def check_for_nodes(cat_name, link_item, name, price, source, date, manufacture_code, spec_title, spec_desc):
    existing_nodes = list(graph.find('Item', property_key='manufacture_code', property_value=manufacture_code))
    print("Existing nodes: " + str(existing_nodes))
    if len(existing_nodes) > 0:
        #print("Deze node is al eens aangemaakt, updating node.")
        update_node(date, link_item, source, price, manufacture_code, spec_title, spec_desc)
    else:
        #print("Deze node bestaat nog niet")
        add_node(cat_name, link_item, name, price, source, date, manufacture_code, spec_title, spec_desc)

# Deze functie maakt nodes aan in de Neo4j database met het label 'Item' en 'Price'. Hierin
# worden de variabelen 'cat_name', 'link', 'name', 'price', 'img' 'date', 'man_code',
# 'spec_title' en 'spec_desc' opgeslagen. Spec_title en spec_desc zijn twee arrays die alle
# specificaties van de node bevatten. De prijs wordt opgeslagen met een datum, zodat later
# terug te vinden is hoeveel het product kost op een bepaalde datum
def add_node(cat_name, link, name, price, source, date, man_code, spec_title, spec_desc):
    create_string = 'CREATE (:Item { manufacture_code: {man_code}, category: {cat_name}, link: {link}, name: {name}, img: {img}, date: {date}, spec_title: {spec_title}, spec_desc: {spec_desc}});'
    query = neo4j.CypherQuery(graph, create_string)
    query.execute(man_code=man_code, cat_name=cat_name, link=link, name=name, img=source, date=date,
                  spec_title=spec_title,
                  spec_desc=spec_desc)
    for item in range(len(spec_title)):
        save_specification(item, man_code, spec_title, spec_desc)
    create_string2 = 'MATCH (n:Item) WHERE n.manufacture_code = {man_code} CREATE (m:Price { date: {date}, price: {price}, link: {link}}) CREATE (m)-[:BELONGS_TO]->(n);'
    query2 = neo4j.CypherQuery(graph, create_string2)
    query2.execute(man_code=man_code, date=date, price=price, link=link)
    print("product is toegevoegd")

def update_node(date, link, source, price, man_code, spec_title, spec_desc):
    update_string = 'MATCH (n:Item { manufacture_code: {man_code} }) SET n.date = {date}, n.link = {link}, n.source = {source} RETURN n'
    query = neo4j.CypherQuery(graph, update_string)
    query.execute(man_code=man_code, link=link, date=date, source=source)
    for item in range(len(spec_title)):
        save_specification(item, man_code, spec_title, spec_desc)
    create_string2 = 'MATCH (n:Item) WHERE n.manufacture_code = {man_code} CREATE (m:Price { date: {date}, price: {price}, link: {link}}) CREATE (m)-[:BELONGS_TO]->(n);'
    query2 = neo4j.CypherQuery(graph, create_string2)
    query2.execute(man_code=man_code, date=date, price=price, link=link)
    print("product is geupdate")

# Deze functie gaat alle pagina's langs van een bepaalde categorie. Van elke pagina wordt
# gezocht naar alle li's met de class 'product-list-item'. Van al deze li's worden vervolgens
# alle links gezocht met de class 'product-list-item--image-link'. Elke link die hierbij
# gevonden wordt, wordt opgeslagen onder de variabele 'link-item' en deze wordt, samen met
# de variabele 'cat_name', doorgegeven aan de get_details() functie.
def get_info_per_page(url, cat_name, max_pages):
    page = 1
    while page <= max_pages:
        print("")
        print("---------------------------------------")
        print("   Starting at a new page of items")
        print("---------------------------------------")
        time.sleep(8)
        url = url + "?sort=popularity&dir=d&page=" + str(page) + "&items=12"
        source_code = requests.get(url)
        plain_text = source_code.text
        soup = BeautifulSoup(plain_text)
        for item in soup.findAll('li', {'class': 'product-list-item'}):
            print("-------------------------------------")
            print("   Starting at a new detail page")
            print("-------------------------------------")
            a_children = item.findChildren('a', {'class': 'product-list-item--image-link'})
            if not (a_children == ""):
                link_obj = ""
                for a_child in a_children:
                    link_obj = a_child
                link_item = "http://www.computerstore.nl" + link_obj.get('href')
                print("cat_name: " + cat_name)
                try:
                    get_details(link_item, cat_name)
                except socket.error as error:
                    if error.errno == errno.WSAECONNRESET:
                        print("there was an error, sleeping for 30 seconds and trying again...")
                        time.sleep(30)
                        get_info_per_page(url, cat_name, max_pages)
        page += 1

# Deze functie neemt de naam en stopt deze in een variabele name.
# De variabele wordt teruggegeven aan de functie get_details()
def get_name(item_name, item_container):
    name = "unknown"
    if item_name == "product_container":
        for name_children in item_container.findChildren('span', {'itemprop': 'name'}):
            for name_child in name_children:
                name = name_child.strip()
    elif item_name == "product-page":
        for name_child in item_container.findChildren('span', {'class': 'js-product-name'}):
            name_raw = name_child.text
            name = name_raw.strip()
    print("name: " + name)
    return name

# Deze functie neemt de prijs en stopt deze in een variabele price.
# De variabele wordt teruggegeven aan de functie get_details()
def get_price(item_name, item_container):
    price = 0
    price_raw = "0,-"
    if item_name == "product_container":
        for price_child in item_container.findChildren('div', {'class': 'price'}):
            price_raw = price_child.text
    elif item_name == "product-page":
        for price_child in item_container.findChildren('strong', {'class': 'sales-price--current'}):
            price_raw = price_child.text
    price_array = re.findall(r'\d{1,6}[,.]\d{0,2}', price_raw)
    for price_item in price_array:
        price_str = price_item.replace(',', '.')
        price_float = float(price_str)
        price = ('%.2f' % price_float)
    print("price: " + str(price))
    return price

# Deze functie neemt de afbeelding en stopt deze in een variabele source.
# De variabele wordt teruggegeven aan de functie get_details()
def get_img(item_name, item_container):
    source = "unknown"
    if item_name == "product_container":
        for img_child in item_container.findChildren('img', {'class': 'hasImageZoom'}):
            source = img_child.get('data-img-large')
    elif item_name == "product-page":
        for img_child in item_container.findChildren('img', {'class': 'media-gallery--main-image'}):
            source = str(img_child.get('src'))
    return source

# Deze functie verzamelt al de specificatie titels en stopt ze in een array spec_title[].
# De array wordt teruggegeven aan de functie get_details()
def get_spec_title(item_name, item_container, soup):
    spec_title = []
    if item_name == "product_container":
        for specs_title_child in item_container.findChildren('td', {'class': 'table_spectable_spec'}):
            print("found table_spectable_spec")
            if specs_title_child.findChildren('span', {'class': 'table_spectable_spec_titletext'}):
                for specs_title_raw in specs_title_child.findChildren('span',
                                                                      {'class': 'table_spectable_spec_titletext'}):
                    specs_title_txt = specs_title_raw.text.replace(" ", "").lstrip().rstrip()
                    spec_title.append(re.sub('\s+', ' ', specs_title_txt))
            else:
                specs_title_txt = specs_title_child.text.replace(" ", "").lstrip().rstrip()
                spec_title.append(re.sub('\s+', ' ', specs_title_txt))
    elif item_name == "product-page":
        for specs_title_child in soup.findChildren('div', {'class': 'product-specs'}):
            for title_child in specs_title_child.findChildren('dt', {'class': 'product-specs--item-title'}):
                if title_child.findChildren('span', {'class': 'product-specs--help-title'}):
                    for specs_title_raw in title_child.findChildren('span', {'class': 'product-specs--help-title'}):
                        specs_title_txt = specs_title_raw.text.replace(" ", "").lstrip().rstrip()
                        spec_title.append(re.sub('\s+', ' ', specs_title_txt))
                else:
                    specs_title_txt = title_child.text.replace(" ", "").lstrip().rstrip()
                    spec_title.append(re.sub('\s+', ' ', specs_title_txt))
    return spec_title

def get_spec_desc(item_name, item_container, soup):
    spec_desc = []
    if item_name == "product_container":
        for specs_desc_child in item_container.findChildren('td', {'class': 'table_spectable_specdescription'}):
            specs_desc_txt = specs_desc_child.text.lstrip().rstrip()
            spec_desc.append(re.sub('\s+', ' ', specs_desc_txt))
    elif item_name == "product-page":
        for specs_desc_child in soup.findChildren('div', {'class': 'product-specs'}):
            for desc_child in specs_desc_child.findChildren('dd', {'class': 'product-specs--item-spec'}):
                if desc_child.findChildren('span', {'class': 'icon-fallback'}):
                    for specs_desc_raw in desc_child.findChildren('span', {'class': 'icon-fallback'}):
                        specs_desc_txt = specs_desc_raw.text.replace(" ", "").lstrip().rstrip()
                        spec_desc.append(re.sub('\s+', ' ', specs_desc_txt))
                else:
                    specs_desc_txt = desc_child.text.lstrip().rstrip()
                    spec_desc.append(re.sub('\s+', ' ', specs_desc_txt))
    return spec_desc

def get_manufacture_code(spec_title, spec_desc):
    try:
        index = spec_title.index('Fabrikantcode')
        manufacture_code = spec_desc[index]
    except:
        manufacture_code = "unknown"
    return manufacture_code


# Deze functie haalt alle details op van elk product dat gevonden wordt. Er wordt gezocht
# naar alle divs met de klas 'product_container'. Vervolgens wordt hierbinnen gezocht
# naar alle spans met een itemprop die 'name' is. De naam wordt opgeslagen onder de
# 'name' variabele. Er wordt ook gezocht naar alle img elementen die de class
# 'hasImageZoom' hebben. Hiervan wordt de link opgeslagen van de gevonden afbeelding in
# de 'source' variabele. Vervolgens wordt de functie check_for_nodes() aangeroepen om
# te checken of de node zich al in de database bevindt.
def get_details(link_item, cat_name):
    time.sleep(8)
    today = datetime.date.today()
    date = today.strftime("%d-%m-%Y")
    source_code = requests.get(link_item)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text)
    for item_container in soup.findAll('div', {'class': 'product_container'}):
        item_name = "product_container"
    for item_container in soup.findAll('div', {'class': 'product-page'}):
        item_name = "product-page"
    name = get_name(item_name, item_container)
    price = get_price(item_name, item_container)
    source = get_img(item_name, item_container)
    spec_title = get_spec_title(item_name, item_container, soup)
    spec_desc = get_spec_desc(item_name, item_container, soup)
    manufacture_code = get_manufacture_code(spec_title, spec_desc)
    if not manufacture_code == "unknown":
        check_for_nodes(cat_name, link_item, name, price, source, date, manufacture_code, spec_title, spec_desc)

if time.strftime("%H:%M") == "23:00":
    get_categories()
    input('Press enter to close this window ')
else:
    print("this is a test")

#test = 'no'
#get_categories(test)