@include('include.session_start')

<?php
$menuitem = Session::get('menuitem');
$powersupply_check = Session::get('powersupply_check');
$processorcooler_check = Session::get('processorcooler_check');
$internalharddrive_check = Session::get('internalharddrive_check');
$soundcard_check = Session::get('soundcard_check');
$pci_check = Session::get('pci_check');
$videocard_check = Session::get('videocard_check');
$processor_check = Session::get('processor_check');
$internalmemory_check = Session::get('internalmemory_check');
$motherboard_check = Session::get('motherboard_check');
$casing_check = Session::get('casing_check');
$ssd_check = Session::get('ssd_check');
$bluraydvd_check = Session::get('bluraydvd_check');
?>

@extends('layout.template')

@section('content')
    <div class="content col-md-10">
        <div class="intro_accordion">
            <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-1">
                    <span class="intro_arrow" id="intro_arrow1" href="#accordion-1"></span>
                    Klik hier voor meer informatie over deze site
                    <span class="intro_arrow" id="intro_arrow2" href="#accordion-1"></span>
                </a>
                <div id="accordion-1" class="accordion-section-content">
                    <h4>Welkom bij Icompare, de perfecte website voor het samenstellen van je eigen computer!</h4>
                    <p>Icompare biedt u de mogelijkheid om snel en zonder moeite een eigen computer samen te stellen.<br>
                    U geeft de specificaties op en wij doen de rest.</p>
                    <p>Onderstaand ziet u het menu met de 12 onderdelen waaruit een computer bestaat. Bij elk onderdeel
                    kiest u de gewenste specificaties. Hierbij is niet alles verplicht om in te vullen: optionele specificaties
                    worden aangegeven d.m.v. de tekst "optioneel". Aan de rechterkant van het scherm is een lijst met alle onderdelen.
                    Hier wordt aangegeven wanneer een categorie goed is ingevuld, door middel van een groen vinkje. Wanneer alle
                    vinkjes groen zijn, kan op de knop "creëer profiel" geklikt worden. De website gaat dan voor u aan de slag en toont
                    een overzicht van de hardware producten die nodig zijn voor uw computer, inclusief de link naar de website waar dit
                    verkrijgbaar is.</p>
                    <p>Sommige onderdelen zijn voorzien van uitleg, dit wordt aangegeven door een blauw vraagteken
                    ({{ HTML::image('images/help.png', 'help', array('class' => 'help_icon')) }}).
                    Wanneer u met uw muis over deze vraagtekens zweeft, zal uitleg tevoorschijn komen.</p>
                    <p>Tijdens het zoeken naar de ideale producten zal rekening gehouden worden met de prijs. Hierdoor bent u verzekerd
                    van een overzicht met de beste en goedkoopste producten.</p>
                </div>
            </div>
        </div>
        @include('include.menu')
        <div class="col-md-12 title">
            @if($menuitem == "motherboard")
                Moederbord {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                    'alt' => 'test', 'title'=> 'Het moederbord verbindt alle componenten van je computer met elkaar en zorgt dat deze kunnen communiceren. Een moederbord en processor kunnen alleen met elkaar communiceren wanneer ze hetzelfde socket hebben.')) }}
            @elseif($menuitem == "bluraydvd")
                Blu-Ray & DVD {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                    'alt' => 'test', 'title'=> 'Een optische drive (of brander) is geschikt voor het lezen en branden van lege schijven (cd-rom, dvd en blu-ray). Een dvd brander is geschikt voor het lezen en schrijven van dvd- en cd-rom-schijven. Met een blu-ray brander is het mogelijk om alle type schijven te lezen en te schrijven.')) }}
            @elseif($menuitem == "ssd")
                SSD {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                    'alt' => 'test', 'title'=> 'Een SSD (Solid State Drive) is een compact opslagmedium dat, anders dan een traditionele harde schijf, gebruik maakt van flashgeheugen. Het flashgeheugen van een SSD werkt vele malen sneller dan een traditionele harde schijf. Dit maakt een SSD bijzonder geschikt als upgrade voor je computer, maar ook voor je laptop.')) }}
            @elseif($menuitem == "soundcard")
                Geluidskaart {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                    'alt' => 'test', 'title'=> 'Een geluidskaart verzorgt de audio binnen een laptop of PC. De standaard onboard geluidskaart van een laptop of PC is vaak niet in staat om hoogwaardig geluid te produceren. Met een dedicated geluidskaart (extern of intern) bereik je dit wel en geniet je meer van films, muziek en games.')) }}
            @elseif($menuitem == "casing")
                Behuizing {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                    'alt' => 'test', 'title'=> 'Bij het in elkaar zetten van een PC, is de type behuizing bepalend voor welk type moederbord erin past, hoeveel uitbreidings sloten er beschikbaar zijn en hoeveel harde schijven je kan plaatsen. Computerbehuizingen zijn er in verschillende maten en voor verschillende soorten moederenborden.')) }}
            @elseif($menuitem == "powersupply")
                Voeding {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                    'alt' => 'test', 'title'=> 'De PC-voeding zorgt ervoor dat de componenten van je computer van voldoende stroom worden voorzien. Een game-computer heeft een voeding met meer vermogen nodig dan een basis-computer.')) }}
            @elseif($menuitem == "PCI")
                PCI express {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                    'alt' => 'test', 'title'=> 'PCI Express kaarten zijn uitbreidingen die je snel en makkelijk kan inbouwen in een PC. Met een uitbreidingskaart creëer je extra interfaces om apparatuur op aan te sluiten of om een draadloze verbinding op te zetten. PCI express kaarten zijn er voor uitbreiding van het aantal poorten voor firewire, USB, SATA en voor netwerkverbindingen.')) }}
            @elseif($menuitem == "processorcooler")
                Processor koeler {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                    'alt' => 'test', 'title'=> 'De processorkoeler zorgt ervoor dat de hitte die de processor van je computer produceert, afgevoerd wordt. Veel processoren worden geleverd met een koeler. Vaak produceren deze meegeleverde koelers (te) veel geluid en/of koelen ze niet optimaal.')) }}
            @elseif($menuitem == "internalharddrive")
                Interne harde schrijf
            @elseif($menuitem == "internalmemory")
                Intern geheugen {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                    'alt' => 'test', 'title'=> 'RAM-geheugen, ook wel intern geheugen of werkgeheugen genoemd, wordt door computers gebruikt om snel te functioneren.')) }}
            @elseif($menuitem == "videocard")
                Videokaart
            @elseif($menuitem == "processor")
                Processor {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                    'alt' => 'test', 'title'=> 'De processor is het hart van je computer en bepaalt voor het grootste gedeelte de snelheid ervan. De prestaties van de processor worden onder andere bepaald door de serie, kloksnelheid, het aantal kernen (cores) en de hoeveelheid cache.')) }}
            @endif
        </div>
        <div class="col-md-12 specification">
            @if($menuitem == "powersupply")
                {{ Form::open(array('action' => 'SessionController@determineSection')) }}
                    <div class="col-md-6 left_div">
                        <table class="voeding_cpu_table">
                            <tr><th colspan="2"><h5>CPU Aansluiting
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Een 4-pin en/of 8-pin voedingsstekker voor de processor.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">CPU P4</td>
                                <td style="width:50%">CPU P8</td>
                            </tr>
                            <tr>
                                @if(Session::get('cpu_p4') == "0")
                                    <td><input type="checkbox" name="voeding_cpup4" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="voeding_cpup4" value="1" checked></td>
                                @endif
                                @if(Session::get('cpu_p8') == "0")
                                    <td><input type="checkbox" name="voeding_cpup8" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="voeding_cpup8" value="1" checked></td>
                                @endif
                            </tr>
                        </table>
                        <table class="voeding_cpu+_table">
                            <tr><th colspan="4"><h5> CPU P4+P4 Aansluiting
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Twee keer 4-pin voedingsstekker voor de processor aan één kabel.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:25%">0</td>
                                <td style="width:25%">1</td>
                                <td style="width:25%">2</td>
                                <td style="width:25%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                @if(Session::get('cpu_p4+p4') == "1")
                                    <td><input type="radio" name="voeding_cpup4p4" value="1" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_cpup4p4" value="1"></td>
                                @endif
                                @if(Session::get('cpu_p4+p4') == "2")
                                    <td><input type="radio" name="voeding_cpup4p4" value="2" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_cpup4p4" value="2"></td>
                                @endif
                                @if(Session::get('cpu_p4+p4') == "3")
                                    <td><input type="radio" name="voeding_cpup4p4" value="3" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_cpup4p4" value="3"></td>
                                @endif
                                @if(Session::get('cpu_p4+p4') == "4")
                                    <td><input type="radio" name="voeding_cpup4p4" value="4" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_cpup4p4" value="4"></td>
                                @endif
                            </tr>
                        </table>
                        <table class="voeding_modulair_table">
                            <tr><th colspan="2" style="position:relative"><h5>Modulair
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Een modulaire voeding heeft afneembare kabels. Alleen de benodigde kabels sluit je aan op de voeding en op de componenten. Dit zorgt ervoor dat je geen losse kabels in de computerkast hebt liggen. Een niet-modulaire voeding heeft vaste kabels.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                @if(Session::get('powersupply_modular') == "1")
                                    <td><input type="radio" name="voeding_modulair" value="1" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_modulair" value="1"></td>
                                @endif
                                @if(Session::get('powersupply_modular') == "2")
                                    <td><input type="radio" name="voeding_modulair" value="2" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_modulair" value="2"></td>
                                @endif
                            </tr>
                        </table>
                        <table class="voeding_certificering_table">
                            <tr><th colspan="3"><h5>Certificering
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Geeft aan of de voeding een 80 PLUS certificaat voor zijn efficiëntie heeft gekregen. Voor twee vergelijkbare voedingen geldt: hoe beter het certificaat, hoe hoger de efficiëntie en hoe lager het energieverbruik.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:33.3%">80 PLUS</td>
                                <td style="width:33.3%">80 PLUS Bronze</td>
                                <td style="width:33.3%">80 PLUS Silver</td>
                            </tr>
                            <tr>
                                @if(Session::get('powersupply_certificate') == "1")
                                    <td><input type="radio" name="voeding_certificering" value="1" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_certificering" value="1"></td>
                                @endif
                                @if(Session::get('powersupply_certificate') == "2")
                                    <td><input type="radio" name="voeding_certificering" value="2" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_certificering" value="2"></td>
                                @endif
                                @if(Session::get('powersupply_certificate') == "3")
                                    <td><input type="radio" name="voeding_certificering" value="3" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_certificering" value="3"></td>
                                @endif
                            </tr>
                            <tr>
                                <td style="width:33.3%">80 PLUS Gold</td>
                                <td style="width:33.3%">Geen certificering</td>
                                <td style="width:33.3%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                @if(Session::get('powersupply_certificate') == "4")
                                    <td><input type="radio" name="voeding_certificering" value="4" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_certificering" value="4"></td>
                                @endif
                                @if(Session::get('powersupply_certificate') == "5")
                                    <td><input type="radio" name="voeding_certificering" value="5" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_certificering" value="5"></td>
                                @endif
                                @if(Session::get('powersupply_certificate') == "6")
                                    <td><input type="radio" name="voeding_certificering" value="6" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_certificering" value="6"></td>
                                @endif
                            </tr>
                        </table>
                        <table class="voeding_merk_table">
                            <tr><th colspan="5"><h5>Merk voeding
                                <br><span class="annotation">(optioneel)</span>
                            </h5></th></tr>
                            <tr>
                                <td style="width:20%">Be quiet!</td>
                                <td style="width:20%">Cooler Master</td>
                                <td style="width:20%">Corsair</td>
                                <td style="width:20%">Seasonic</td>
                                <td style="width:20%">XFX</td>
                            </tr>
                            <tr>
                                @if(Session::get('powersupply_brand1') == "0")
                                    <td><input type="checkbox" name="voeding_merk1" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="voeding_merk1" value="1" checked></td>
                                @endif
                                @if(Session::get('powersupply_brand2') == "0")
                                    <td><input type="checkbox" name="voeding_merk2" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="voeding_merk2" value="1" checked></td>
                                @endif
                                @if(Session::get('powersupply_brand3') == "0")
                                    <td><input type="checkbox" name="voeding_merk3" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="voeding_merk3" value="1" checked></td>
                                @endif
                                @if(Session::get('powersupply_brand4') == "0")
                                    <td><input type="checkbox" name="voeding_merk4" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="voeding_merk4" value="1" checked></td>
                                @endif
                                @if(Session::get('powersupply_brand5') == "0")
                                    <td><input type="checkbox" name="voeding_merk5" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="voeding_merk5" value="1" checked></td>
                                @endif
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="pci_express_6pin_table">
                            <tr><th colspan="4"><h5>PCI Express 6-pin
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Een 6-pin voedingsstekker voor de videokaart.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:25%">0</td>
                                <td style="width:25%">1</td>
                                <td style="width:25%">2</td>
                                <td style="width:25%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                @if(Session::get('pci_express_6pin') == "1")
                                    <td><input type="radio" name="voeding_pci6" value="1" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_pci6" value="1"></td>
                                @endif
                                @if(Session::get('pci_express_6pin') == "2")
                                    <td><input type="radio" name="voeding_pci6" value="2" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_pci6" value="2"></td>
                                @endif
                                @if(Session::get('pci_express_6pin') == "3")
                                    <td><input type="radio" name="voeding_pci6" value="3" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_pci6" value="3"></td>
                                @endif
                                @if(Session::get('pci_express_6pin') == "4")
                                    <td><input type="radio" name="voeding_pci6" value="4" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_pci6" value="4"></td>
                                @endif
                            </tr>
                        </table>
                        <table class="pci_express_6pin2pin_table">
                            <tr><th colspan="6"><h5>PCI Express 6+2-pin
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Een 6-pin en 2-pin voedingsstekker voor de videokaart.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:16.6%">0</td>
                                <td style="width:16.6%">1</td>
                                <td style="width:16.6%">2</td>
                                <td style="width:16.6%">3</td>
                                <td style="width:16.6%">4</td>
                                <td style="width:16.6%">5</td>
                            </tr>
                            <tr>
                                @if(Session::get('pci_express_6pin2pin') == "1")
                                    <td><input type="radio" name="voeding_pci6+2" value="1" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_pci6+2" value="1"></td>
                                @endif
                                @if(Session::get('pci_express_6pin2pin') == "2")
                                    <td><input type="radio" name="voeding_pci6+2" value="2" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_pci6+2" value="2"></td>
                                @endif
                                @if(Session::get('pci_express_6pin2pin') == "3")
                                    <td><input type="radio" name="voeding_pci6+2" value="3" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_pci6+2" value="3"></td>
                                @endif
                                @if(Session::get('pci_express_6pin2pin') == "4")
                                    <td><input type="radio" name="voeding_pci6+2" value="4" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_pci6+2" value="4"></td>
                                @endif
                                @if(Session::get('pci_express_6pin2pin') == "5")
                                    <td><input type="radio" name="voeding_pci6+2" value="5" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_pci6+2" value="5"></td>
                                @endif
                                @if(Session::get('pci_express_6pin2pin') == "6")
                                    <td><input type="radio" name="voeding_pci6+2" value="6" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_pci6+2" value="6"></td>
                                @endif
                            </tr>
                            <tr>
                                <td style="width:16.6%">6</td>
                                <td style="width:16.6%">7</td>
                                <td style="width:16.6%">8</td>
                                <td colspan="3" style="width:16.6%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                @if(Session::get('pci_express_6pin2pin') == "7")
                                    <td><input type="radio" name="voeding_pci6+2" value="7" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_pci6+2" value="7"></td>
                                @endif
                                @if(Session::get('pci_express_6pin2pin') == "8")
                                    <td><input type="radio" name="voeding_pci6+2" value="8" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_pci6+2" value="8"></td>
                                @endif
                                @if(Session::get('pci_express_6pin2pin') == "9")
                                    <td><input type="radio" name="voeding_pci6+2" value="9" checked></td>
                                @else
                                    <td><input type="radio" name="voeding_pci6+2" value="9"></td>
                                @endif
                                @if(Session::get('pci_express_6pin2pin') == "a")
                                    <td colspan="3"><input type="radio" name="voeding_pci6+2" value="a" checked></td>
                                @else
                                    <td colspan="3"><input type="radio" name="voeding_pci6+2" value="a"></td>
                                @endif
                            </tr>
                        </table>
                        <div class="specification_table" id="voeding_cost">
                            <h5>Prijs<br><span class="annotation">(minimum - maximum)</span></h5>
                            <p><input class="slider_label" type="text" id="amount_voeding" readonly></p>
                            <div class="specification_table_slider" id="slider_powersupply_price"></div>
                            <input name="voeding_cost0" type="hidden"  value="60" id="voeding_cost0">
                            <input name="voeding_cost1" type="hidden" value="200" id="voeding_cost1">
                        </div>
                        <div class="voeding_vermogen specification_table">
                            <h5>Vermogen (in Watt)<br><span class="annotation">(minimum - maximum)</span></h5>
                            <p><input class="slider_label" type="text" id="voeding_vermogen" readonly></p>
                            <div class="specification_table_slider" id="slider_powersupply_power"></div>
                            <input name="Powersupply_power0" type="hidden" value="410" type="hidden"  id="Powersupply_power0">
                            <input name="Powersupply_power1" type="hidden" value="60" type="hidden" id="Powersupply_power1">
                        </div>
                        <div class="voeding_sata specification_table">
                            <h5>S-ATA aansluiting
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Een voedingsstekker voor een optische drive of harde schijf.')) }}
                                <br><span class="annotation">(minimum - maximum)</span>
                            </h5>
                            <p><input class="slider_label" type="text" id="voeding_sata" readonly></p>
                            <div class="specification_table_slider" id="slider_sata"></div>
                            <input name="Sata-connection0"  type="hidden" value="0" id="Sata-connection0">
                            <input name="Sata-connection1"  type="hidden" value="4" id="Sata-connection1">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input class="myButton" type="submit" value="Onderdeel opslaan">
                    </div>
                {{ Form::close() }}
            @elseif($menuitem == "processorcooler")
                {{ Form::open(array('action' => 'SessionController@determineSection')) }}
                    <div class="col-md-6 left_div">
                        <table class="koeler_merk_table">
                            <tr><th colspan="4"><h5>Merk koeler
                                <br><span class="annotation">(optioneel)</span>
                            </h5></th></tr>
                            <tr>
                                <td style="width:25%">Be quiet!</td>
                                <td style="width:25%">Cooler Master</td>
                                <td style="width:25%">Corsair</td>
                                <td style="width:25%">Artic</td>
                            </tr>
                            <tr>
                                @if(Session::get('processorcooler_brand1') == "0")
                                    <td><input type="checkbox" name="koeler_merk1" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="koeler_merk1" value="1" checked></td>
                                @endif
                                @if(Session::get('processorcooler_brand2') == "0")
                                    <td><input type="checkbox" name="koeler_merk2" value="1"></td>
                                @else
                                        <td><input type="checkbox" name="koeler_merk2" value="1" checked></td>
                                @endif
                                @if(Session::get('processorcooler_brand3') == "0")
                                    <td><input type="checkbox" name="koeler_merk3" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="koeler_merk3" value="1" checked></td>
                                @endif
                                @if(Session::get('processorcooler_brand4') == "0")
                                    <td><input type="checkbox" name="koeler_merk4" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="koeler_merk4" value="1" checked></td>
                                @endif
                            </tr>
                            <tr>
                                <td style="width:25%">Crucial</td>
                                <td colspan="2" style="width:25%">Kingston</td>
                                <td style="width:25%">Scythe</td>
                            </tr>
                            <tr>
                                @if(Session::get('processorcooler_brand5') == "0")
                                    <td><input type="checkbox" name="koeler_merk5" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="koeler_merk5" value="1" checked></td>
                                @endif
                                @if(Session::get('processorcooler_brand6') == "0")
                                    <td colspan="2"><input type="checkbox" name="koeler_merk6" value="1"></td>
                                @else
                                    <td colspan="2"><input type="checkbox" name="koeler_merk6" value="1" checked></td>
                                @endif
                                @if(Session::get('processorcooler_brand7') == "0")
                                    <td><input type="checkbox" name="koeler_merk7" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="koeler_merk7" value="1" checked></td>
                                @endif
                            </tr>
                        </table>
                        <div class="koeler_cost specification_table">
                            <h5>Prijs</h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label" type="text" id="amount_koeler" readonly></p>
                            <div class="specification_table_slider" id="slider_processorcooler_price"></div>
                            <input name="ProcessorCoolerP0" type="hidden" value= "60" id="ProcessorCoolerP0">
                            <input name="ProcessorCoolerP1"  type="hidden" value= "100" id="ProcessorCoolerP1">
                        </div>

                    </div>
                    <div class="col-md-6 right_div">
                        <table class="koeler_methode_table">
                            <tr><th colspan="2"><h5>Koel methode
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Actief gekoelde kaarten zijn uitgerust met een ventilator. Passieve gekoelde kaarten zijn uitgerust met een koelblok.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">Lucht</td>
                                <td style="width:50%">Water</td>
                            </tr>
                            <tr>
                                @if(Session::get('processorcooler_method') == "1")
                                    <td><input type="radio" name="koeler_type" value="1" checked></td>
                                @else
                                    <td><input type="radio" name="koeler_type" value="1"></td>
                                @endif
                                @if(Session::get('processorcooler_method') == "2")
                                    <td><input type="radio" name="koeler_type" value="2" checked></td>
                                @else
                                    <td><input type="radio" name="koeler_type" value="2"></td>
                                @endif
                            </tr>
                        </table>
                        <div class="koeler_diameterventilator specification_table">
                            <h5>Diameter ventilator</h5><span class="annotation">(in cm)</span>
                            <p><input class="slider_label" type="text" id="koeler_diameter" readonly></p>
                            <div class="specification_table_slider" id="slider_processorcooler_diameter"></div>
                            <input name="ProcessorCoolerVentilatorDm0"  type="hidden" value= "9" id="ProcessorCoolerVentilatorDm0">
                        </div>
                        <div class="koeler_rotatiesnelheid specification_table">
                            <h5>Rotatiesnelheid </h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label" type="text" id="koeler_rotatie" readonly></p>
                            <div class="specification_table_slider" id="slider_processorcooler_rotation"></div>
                            <input name="ProcessorCoolerRSpeed0"  type="hidden" value= "800" id="ProcessorCoolerRSpeed0">
                            <input name="ProcessorCoolerRSpeed1" type="hidden"  value= "1200" id="ProcessorCoolerRSpeed1">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input class="myButton" type="submit" value="Onderdeel opslaan">
                    </div>
                {{ Form::close() }}
            @elseif($menuitem == "internalharddrive")
                {{ Form::open(array('action' => 'SessionController@determineSection')) }}
                    <div class="col-md-6 left_div">
                        <table class="HDD_merk_table" cellspacing="1px">
                            <tr><th colspan="4"><h5>Merk harde schijf
                                <br><span class="annotation">(optioneel)</span>
                            </h5></th></tr>
                            <tr>
                                <td style="width:25%">LaCie</td>
                                <td style="width:25%">Seagate</td>
                                <td style="width:25%">Toshiba</td>
                                <td style="width:25%">Western Digital</td>
                            </tr>
                            <tr>
                                @if(Session::get('hdd_brand1') == "0")
                                    <td><input type="checkbox" name="HDD_merk1" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="HDD_merk1" value="1" checked></td>
                                @endif
                                @if(Session::get('hdd_brand2') == "0")
                                    <td><input type="checkbox" name="HDD_merk2" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="HDD_merk2" value="1" checked></td>
                                @endif
                                @if(Session::get('hdd_brand3') == "0")
                                    <td><input type="checkbox" name="HDD_merk3" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="HDD_merk3" value="1" checked></td>
                                @endif
                                @if(Session::get('hdd_brand4') == "0")
                                    <td><input type="checkbox" name="HDD_merk4" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="HDD_merk4" value="1" checked></td>
                                @endif
                            </tr>
                        </table>
                        <table class="HDD_formaat_table">
                            <tr><th colspan="2"><h5>Formaat
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Kijk altijd eerst welk formaat in het apparaat past waar je de schijf in wilt doen.
                                2,5 inch: geschikt voor laptops, barebones en ultrabooks.
                                3,5 inch: geschikt voor desktops, NAS en mediaspelers')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">2,5 inch (Laptop)</td>
                                <td style="width:50%">3,5 inch (Desktop)</td>
                            </tr>
                            <tr>
                                @if(Session::get('hdd_format') == "1")
                                    <td><input type="radio" name="HDD_formaat" value="1" checked></td>
                                @else
                                    <td><input type="radio" name="HDD_formaat" value="1"></td>
                                @endif
                                @if(Session::get('hdd_format') == "2")
                                    <td><input type="radio" name="HDD_formaat" value="2" checked></td>
                                @else
                                    <td><input type="radio" name="HDD_formaat" value="2"></td>
                                @endif
                            </tr>
                        </table>
                        <table class="HDD_opslag_table">
                            <tr><th colspan="5"><h5>Opslag capaciteit
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Houd er bij het kiezen van de opslagcapaciteit rekening mee dat bestanden steeds meer opslagcapaciteit in beslag nemen. 1 TB (terabyte) staat gelijk aan 1024 GB (gigabyte). 1 TB is te vullen met ongeveer: 20000 mp3 nummers, 100 Full HD-films en 7500 foto&#39;s (hoge kwaliteit).')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:20%">160 GB</td>
                                <td style="width:20%">320 GB</td>
                                <td style="width:20%">500 GB</td>
                                <td style="width:20%">750 GB</td>
                                <td style="width:20%">1 TB</td>
                            </tr>
                            <tr>
                                @if(Session::get('hdd_storagecapacity1') == "0")
                                    <td><input type="checkbox" name="HDD_opslag1" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="HDD_opslag1" value="1" checked></td>
                                @endif
                                @if(Session::get('hdd_storagecapacity2') == "0")
                                    <td><input type="checkbox" name="HDD_opslag2" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="HDD_opslag2" value="1" checked></td>
                                @endif
                                @if(Session::get('hdd_storagecapacity3') == "0")
                                    <td><input type="checkbox" name="HDD_opslag3" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="HDD_opslag3" value="1" checked></td>
                                @endif
                                @if(Session::get('hdd_storagecapacity4') == "0")
                                    <td><input type="checkbox" name="HDD_opslag4" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="HDD_opslag4" value="1" checked></td>
                                @endif
                                @if(Session::get('hdd_storagecapacity5') == "0")
                                    <td><input type="checkbox" name="HDD_opslag5" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="HDD_opslag5" value="1" checked></td>
                                @endif
                            </tr>
                            <tr>
                                <td style="width:20%">2 TB</td>
                                <td style="width:20%">3 TB</td>
                                <td style="width:20%">4 TB</td>
                                <td style="width:20%">5 TB</td>
                                <td style="width:20%">6 TB</td>
                            </tr>
                            <tr>
                                @if(Session::get('hdd_storagecapacity6') == "0")
                                    <td><input type="checkbox" name="HDD_opslag6" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="HDD_opslag6" value="1" checked></td>
                                @endif
                                @if(Session::get('hdd_storagecapacity7') == "0")
                                    <td><input type="checkbox" name="HDD_opslag7" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="HDD_opslag7" value="1" checked></td>
                                @endif
                                @if(Session::get('hdd_storagecapacity8') == "0")
                                    <td><input type="checkbox" name="HDD_opslag8" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="HDD_opslag8" value="1" checked></td>
                                @endif
                                @if(Session::get('hdd_storagecapacity9') == "0")
                                    <td><input type="checkbox" name="HDD_opslag9" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="HDD_opslag9" value="1" checked></td>
                                @endif
                                @if(Session::get('hdd_storagecapacity10') == "0")
                                    <td><input type="checkbox" name="HDD_opslag10" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="HDD_opslag10" value="1" checked></td>
                                @endif
                            </tr>
                        </table>
                        <table class="HDD_aansluiting_table" cellspacing="1px">
                            <tr><th colspan="2"><h5>Aansluiting
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'SATA III heeft een doorvoersnelheid van 6 Gb/s. De doorvoersnelheid wordt bepaald door het maximale aantal bits (in dit geval gigabits) dat per seconde van de harde schijf naar de computer wordt verzonden. SATA II heeft een doorvoersnelheid van 3 Gb/s. Niet alle apparaten ondersteunen SATA III.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">S-ATA(II)</td>
                                <td style="width:50%">S-ATA(III)</td>
                            </tr>
                            <tr>
                                @if(Session::get('hdd_connection') == "1")
                                    <td><input type="radio" name="HDD_aansluiting" value="1" checked></td>
                                @else
                                    <td><input type="radio" name="HDD_aansluiting" value="1"></td>
                                @endif
                                @if(Session::get('hdd_connection') == "2")
                                    <td><input type="radio" name="HDD_aansluiting" value="2" checked></td>
                                @else
                                    <td><input type="radio" name="HDD_aansluiting" value="2"></td>
                                @endif
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="HDD_cache_table" cellspacing="1px">
                            <tr><th colspan="3"><h5>Buffer / Cache
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Het cachegeheugen (de buffer) is geheugen waarin bestanden die in gebruik zijn tijdelijk worden opgeslagen, waarna ze sneller toegankelijk zijn. Hoe meer MB cache, hoe vlotter bestanden laden.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:33.3%">8 MB</td>
                                <td style="width:33.3%">16 MB</td>
                                <td style="width:33.3%">32 MB</td>
                            </tr>
                            <tr>
                                @if(Session::get('hdd_buffer') == "1")
                                    <td><input type="radio" name="HDD_cache" value="1" checked></td>
                                @else
                                    <td><input type="radio" name="HDD_cache" value="1"></td>
                                @endif
                                @if(Session::get('hdd_buffer') == "2")
                                    <td><input type="radio" name="HDD_cache" value="2" checked></td>
                                @else
                                    <td><input type="radio" name="HDD_cache" value="2"></td>
                                @endif
                                @if(Session::get('hdd_buffer') == "3")
                                    <td><input type="radio" name="HDD_cache" value="3" checked></td>
                                @else
                                    <td><input type="radio" name="HDD_cache" value="3"></td>
                                @endif
                            </tr>
                            <tr>
                                <td style="width:33.3%">64 MB</td>
                                <td style="width:33.3%">128 MB</td>
                                <td style="width:33.3%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                @if(Session::get('hdd_buffer') == "4")
                                    <td><input type="radio" name="HDD_cache" value="4" checked></td>
                                @else
                                    <td><input type="radio" name="HDD_cache" value="4"></td>
                                @endif
                                @if(Session::get('hdd_buffer') == "5")
                                    <td><input type="radio" name="HDD_cache" value="5" checked></td>
                                @else
                                    <td><input type="radio" name="HDD_cache" value="5"></td>
                                @endif
                                @if(Session::get('hdd_buffer') == "6")
                                    <td><input type="radio" name="HDD_cache" value="6" checked></td>
                                @else
                                    <td><input type="radio" name="HDD_cache" value="6"></td>
                                @endif
                            </tr>
                        </table>
                        <table class="HDD_snelheid_table" cellspacing="1px">
                            <tr>
                                <th colspan="4"><h5>Hardeschijfsnelheid
                                    {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                    'alt' => 'test', 'title'=> 'Hoe meer rotaties per minuut (rpm), hoe sneller de lees- en schrijfsnelheid van de schijf.')) }}
                                    <br><span class="annotation">(optioneel)</span>
                                </h5></th></tr>
                            <tr>
                                <td style="width:25%">5400 rpm</td>
                                <td style="width:25%">5700 rpm</td>
                                <td style="width:25%">5900 rpm</td>
                                <td style="width:25%">5940 rpm</td>
                            </tr>
                            <tr>
                                @if(Session::get('hdd_speed') == "1")
                                    <td><input type="radio" name="HDD_snelheid" value="1" checked></td>
                                @else
                                    <td><input type="radio" name="HDD_snelheid" value="1"></td>
                                @endif
                                @if(Session::get('hdd_speed') == "2")
                                    <td><input type="radio" name="HDD_snelheid" value="2" checked></td>
                                @else
                                    <td><input type="radio" name="HDD_snelheid" value="2"></td>
                                @endif
                                @if(Session::get('hdd_speed') == "3")
                                    <td><input type="radio" name="HDD_snelheid" value="3" checked></td>
                                @else
                                    <td><input type="radio" name="HDD_snelheid" value="3"></td>
                                @endif
                                @if(Session::get('hdd_speed') == "4")
                                    <td><input type="radio" name="HDD_snelheid" value="4" checked></td>
                                @else
                                    <td><input type="radio" name="HDD_snelheid" value="4"></td>
                                @endif
                            </tr>
                            <tr>
                                <td style="width:25%">7200 rpm</td>
                                <td style="width:25%" colspan="2">Variabel</td>
                                <td style="width:25%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                @if(Session::get('hdd_speed') == "5")
                                    <td><input type="radio" name="HDD_snelheid" value="5" checked></td>
                                @else
                                    <td><input type="radio" name="HDD_snelheid" value="5"></td>
                                @endif
                                @if(Session::get('hdd_speed') == "6")
                                    <td colspan="2"><input type="radio" name="HDD_snelheid" value="6" checked></td>
                                @else
                                    <td colspan="2"><input type="radio" name="HDD_snelheid" value="6"></td>
                                @endif
                                @if(Session::get('hdd_speed') == "7")
                                    <td><input type="radio" name="HDD_snelheid" value="7" checked></td>
                                @else
                                    <td><input type="radio" name="HDD_snelheid" value="7"></td>
                                @endif
                            </tr>
                        </table>
                        <div class="specification_table" id="HDD_cost">
                            <h5>Prijs</h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label" type="text" id="amount_hdd" readonly></p>
                            <div class="specification_table_slider" id="slider_harddiskdrive_price"></div>
                            <input name="harddiskdrive_price0" type="hidden"  value="60" id="harddiskdrive_price0">
                            <input name="harddiskdrive_price1" type="hidden"  value="160" id="harddiskdrive_price1">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input class="myButton" type="submit" value="Onderdeel opslaan">
                    </div>
                {{ Form::close() }}
            @elseif($menuitem == "soundcard")
                {{ Form::open(array('action' => 'SessionController@determineSection')) }}
                    <div class="col-md-6 left_div">
                        <table class="geluid_merk_table">
                            <tr><th colspan="2"><h5>Geluidskaart merk
                                <br><span class="annotation">(optioneel)</span>
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">Asus</td>
                                <td style="width:50%">Creative</td>
                            </tr>
                            <tr>
                                @if(Session::get('soundcard_brand1') == "0")
                                    <td><input type="checkbox" name="geluid_merk1" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="geluid_merk1" value="1" checked></td>
                                @endif
                                @if(Session::get('soundcard_brand2') == "0")
                                    <td><input type="checkbox" name="geluid_merk2" value="1"></td>
                                @else
                                    <td><input type="checkbox" name="geluid_merk2" value="1" checked></td>
                                @endif
                            </tr>
                        </table>
                        <table class="geluid_sample_table">
                            <tr><th colspan="6"><h5>Sample frequentie
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Het aantal malen per seconde dat de sterkte van een geluidssignaal gemeten wordt. Hoe hoger de samplefrequentie, hoe hoger de kwaliteit van het eindresultaat.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:16.6%">8</td>
                                <td style="width:16.6%">11,025</td>
                                <td style="width:16.6%">16</td>
                                <td style="width:16.6%">22,05</td>
                                <td style="width:16.6%">24</td>
                                <td style="width:16.6%">32</td>
                            </tr>
                            <tr>
                                @if(Session::get('soundcard_sample') == "1")
                                    <td><input type="radio" name="geluid_sample" value="1" checked></td>
                                @else
                                    <td><input type="radio" name="geluid_sample" value="1"></td>
                                @endif
                                @if(Session::get('soundcard_sample') == "2")
                                    <td><input type="radio" name="geluid_sample" value="2" checked></td>
                                @else
                                    <td><input type="radio" name="geluid_sample" value="2"></td>
                                @endif
                                @if(Session::get('soundcard_sample') == "3")
                                    <td><input type="radio" name="geluid_sample" value="3"checked></td>
                                @else
                                    <td><input type="radio" name="geluid_sample" value="3"></td>
                                @endif
                                @if(Session::get('soundcard_sample') == "4")
                                    <td><input type="radio" name="geluid_sample" value="4" checked></td>
                                @else
                                    <td><input type="radio" name="geluid_sample" value="4"></td>
                                @endif
                                @if(Session::get('soundcard_sample') == "5")
                                    <td><input type="radio" name="geluid_sample" value="5" checked></td>
                                @else
                                    <td><input type="radio" name="geluid_sample" value="5"></td>
                                @endif
                                @if(Session::get('soundcard_sample') == "6")
                                    <td><input type="radio" name="geluid_sample" value="6" checked></td>
                                @else
                                    <td><input type="radio" name="geluid_sample" value="6"></td>
                                @endif
                            </tr>
                            <tr>
                                <td style="width:16.6%">44,1</td>
                                <td style="width:16.6%">48</td>
                                <td style="width:16.6%">88,2</td>
                                <td style="width:16.6%">96</td>
                                <td style="width:16.6%">176,4</td>
                                <td style="width:16.6%">192</td>
                            </tr>
                            <tr>
                                @if(Session::get('soundcard_sample') == "7")
                                <td><input type="radio" name="geluid_sample" value="7" checked></td>
                                @else
                                <td><input type="radio" name="geluid_sample" value="7"></td>
                                @endif
                                @if(Session::get('soundcard_sample') == "8")
                                    <td><input type="radio" name="geluid_sample" value="8" checked></td>
                                @else
                                    <td><input type="radio" name="geluid_sample" value="8"></td>
                                @endif
                                @if(Session::get('soundcard_sample') == "9")
                                    <td><input type="radio" name="geluid_sample" value="9" checked></td>
                                @else
                                    <td><input type="radio" name="geluid_sample" value="9"></td>
                                @endif
                                @if(Session::get('soundcard_sample') == "a")
                                    <td><input type="radio" name="geluid_sample" value="a" checked></td>
                                @else
                                    <td><input type="radio" name="geluid_sample" value="a"></td>
                                @endif
                                @if(Session::get('soundcard_sample') == "b")
                                    <td><input type="radio" name="geluid_sample" value="b" checked></td>
                                @else
                                    <td><input type="radio" name="geluid_sample" value="b"></td>
                                @endif
                                @if(Session::get('soundcard_sample') == "c")
                                    <td><input type="radio" name="geluid_sample" value="c" checked></td>
                                @else
                                    <td><input type="radio" name="geluid_sample" value="c"></td>
                                @endif
                            </tr>
                            <tr>
                                <td style="width:16.6%" colspan="6">Geen voorkeur</td>
                            </tr>
                            <tr>
                                @if(Session::get('soundcard_sample') == "d")
                                    <td colspan="6"><input type="radio" name="geluid_sample" value="d" checked></td>
                                @else
                                    <td colspan="6"><input type="radio" name="geluid_sample" value="d"></td>
                                @endif
                            </tr>
                        </table>
                        <table class="geluid_aiso_table">
                            <tr>
                                <th colspan="6"><h5>AISO Sample frequentie</h5></th>
                            </tr>
                            <tr>
                                <td style="width:16.6%">44,1</td>
                                <td style="width:16.6%">48</td>
                                <td style="width:16.6%">88,2</td>
                                <td style="width:16.6%">96</td>
                                <td style="width:16.6%">176,4</td>
                                <td style="width:16.6%">192</td>
                            </tr>
                            <tr>
                                @if(Session::get('soundcard_aiso') == "1")
                                    <td><input type="radio" name="geluid_aiso" value="1" checked></td>
                                @else
                                    <td><input type="radio" name="geluid_aiso" value="1"></td>
                                @endif
                                @if(Session::get('soundcard_aiso') == "2")
                                    <td><input type="radio" name="geluid_aiso" value="2" checked></td>
                                @else
                                    <td><input type="radio" name="geluid_aiso" value="2"></td>
                                @endif
                                @if(Session::get('soundcard_aiso') == "3")
                                    <td><input type="radio" name="geluid_aiso" value="3" checked></td>
                                @else
                                    <td><input type="radio" name="geluid_aiso" value="3"></td>
                                @endif
                                @if(Session::get('soundcard_aiso') == "4")
                                    <td><input type="radio" name="geluid_aiso" value="4" checked></td>
                                @else
                                    <td><input type="radio" name="geluid_aiso" value="4"></td>
                                @endif
                                @if(Session::get('soundcard_aiso') == "5")
                                    <td><input type="radio" name="geluid_aiso" value="5" checked></td>
                                @else
                                    <td><input type="radio" name="geluid_aiso" value="5"></td>
                                @endif
                                @if(Session::get('soundcard_aiso') == "6")
                                    <td><input type="radio" name="geluid_aiso" value="6" checked></td>
                                @else
                                    <td><input type="radio" name="geluid_aiso" value="6"></td>
                                @endif
                            </tr>
                            <tr>
                                <td style="width:16.6%" colspan="6">Geen voorkeur</td>
                            </tr>
                            <tr>
                                @if(Session::get('soundcard_aiso') == "7")
                                    <td colspan="6"><input type="radio" name="geluid_aiso" value="7" checked></td>
                                @else
                                    <td colspan="6"><input type="radio" name="geluid_aiso" value="7"></td>
                                @endif
                            </tr>
                        </table>
                        <table class="geluid_optisch_table">
                            <tr><th colspan="2"><h5>Optische ingang
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Een optische aansluiting geeft een digitaal geluidssignaal perfect door. Optische kabels zijn ongevoelig voor elektrische storingen. Er worden namelijk geen elektrische signalen door verzonden, maar alleen lichtpulsen. Deze aansluiting word ook TOSLINK genoemd.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                @if(Session::get('tmp') == "1")
                                @else
                                @endif
                                <td><input type="radio" name="geluid_optisch" value="1"></td>
                                <td><input type="radio" name="geluid_optisch" value="2"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="geluid_processor_table">
                            <tr><th colspan="3"><h5>Audio processor</h5></th></tr>
                            <tr>
                                <td style="width:33.3%">Asus AV100</td>
                                <td style="width:33.3%">Asus UA100</td>
                                <td style="width:33.3%">C-Media CMI8786</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="geluid_processor1" value="1"></td>
                                <td><input type="checkbox" name="geluid_processor2" value="1"></td>
                                <td><input type="checkbox" name="geluid_processor3" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:33.3%">CMI8888DHT</td>
                                <td style="width:33.3%">Sound Core3D</td>
                                <td style="width:33.3%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="geluid_processor4" value="1"></td>
                                <td><input type="checkbox" name="geluid_processor5" value="1"></td>
                                <td><input type="checkbox" name="geluid_processor6" value="1"></td>
                        </table>
                        <table class="geluid_kanalen_table">
                            <tr><th colspan="2"><h5>Speaker kanalen
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Hoeveel geluidskanalen heeft het speakersysteem? Het getal voor de punt geeft het aantal speakers aan. Wanneer er een 1 achter de punt staat, beschikt het systeem over een apart kanaal voor de lage tonen (Low Frequency Effects). Een 2.0-systeem geeft het geluid in stereo weer uit twee speakers. Bij een 5.1-systeem zorgen vijf speakers voor het geluid, met een apart kanaal voor een strakke basweergave.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">5.1 Surround</td>
                                <td style="width:50%">7.1 Surround</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="geluid_kanalen" value="1"></td>
                                <td><input type="radio" name="geluid_kanalen" value="2"></td>
                            </tr>
                        </table>
                        <table class="geluid_hoofdtelefoonaansluiting_table">
                            <tr><th colspan="2"><h5>Hoofdtelefoon aansluiting</h5></th></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="geluid_hoofd" value="1"></td>
                                <td><input type="radio" name="geluid_hoofd" value="2"></td>
                            </tr>
                        </table>
                        <table class="geluid_minijack_table">
                            <tr><th colspan="2"><h5>3,5 mm mini-jack
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Geeft aan of het product beschikt over een 3,5 mm mini-jack-ingang.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="geluid_jack" value="1"></td>
                                <td><input type="radio" name="geluid_jack" value="2"></td>
                            </tr>
                        </table>
                        <div class="geluid_cost specification_table">
                            <h5>Prijs</h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label" type="text" id="amount_geluid" readonly></p>
                            <div class="specification_table_slider" id="soundcard_price"></div>

                            <input name="soundcard_price0" type="hidden" value="60" id="soundcard_price0" style="background: red">
                            <input name="soundcard_price1" type="hidden" value="100" id="soundcard_price1" style="background: yellow">

                        </div>
                    </div>
                    <div class="col-md-12">
                        <input class="myButton" type="submit" value="Onderdeel opslaan">
                    </div>
                {{ Form::close() }}
            @elseif($menuitem == "PCI")
                {{ Form::open(array('action' => 'SessionController@determineSection')) }}
                    <div class="col-md-6 left_div">
                        <table class="pci_usb_table">
                            <tr><th colspan="2"><h5>USB-poort</h5></th></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="pci_usb" value="1"></td>
                                <td><input type="radio" name="pci_usb" value="2"></td>
                            </tr>
                        </table>
                        <table class="pci_firewire_table">
                            <tr><th colspan="2"><h5>FireWire
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Met behulp van een FireWire-kabel kan samen met ondersteunde randapparatuur een hoge overdrachtssnelheid worden behaald. Toepassingen hiervoor zijn bijvoorbeeld harde schijven en computer-naar-computer-verbindingen. FireWire ondersteunt zowel beeld als geluid door één kabel, waardoor audiovisuele apparatuur als camcorders op de FireWire-poort van de computer kunnen worden aangesloten.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="pci_firewire" value="1"></td>
                                <td><input type="radio" name="pci_firewire" value="2"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="pci_sata_table">
                            <tr><th colspan="2"><h5>SATA aansluiting aanwezig
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Serial ATA (ook SATA of S-ATA) is een computerbus ontworpen voor het transport van gegevens tussen de computer en de harde schijf. Serial ATA is de opvolger van Parallel ATA/PATA/P-ATA (Advanced Technology Attachment) of IDE-bus.')) }}
                                    </h5></th></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="pci_sata" value="1"></td>
                                <td><input type="radio" name="pci_sata" value="2"></td>
                            </tr>
                        </table>
                        <table class="pci_esata_table">
                            <tr><th colspan="2"><h5>e-SATA aansluiting aanwezig
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'e-SATA, kort voor External SATA, is een op Serial ATA gebaseerde aansluiting welke (op de buitenkant van de computer) de mogelijkheid biedt om externe media als harde schijven, docking stations en Blu-ray-spelers via de snelle SATA-interface aan te sluiten. Voor dit soort toepassingen is een e-SATA naar e-SATA kabel nodig. e-SATA is tot wel 5 x sneller dan usb 2.0.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="pci_esata" value="1"></td>
                                <td><input type="radio" name="pci_esata" value="2"></td>
                            </tr>
                        </table>
                        <div class="pci_cost specification_table">
                            <h5>Prijs</h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label" type="text" id="amount_pci" readonly></p>
                            <div class="specification_table_slider" id="pci_price"></div>
                            <input name="pci_price0" type="hidden"  value="20" id="pci_price0" style="background: red">
                            <input name="pci_price1" type="hidden" value="60" id="pci_price1" style="background: yellow">


                        </div>
                    </div>
                    <div class="col-md-12">
                        <input class="myButton" type="submit" value="Onderdeel opslaan">
                    </div>
                {{ Form::close() }}
            @elseif($menuitem == "videocard")
                {{ Form::open(array('action' => 'SessionController@determineSection')) }}
                    <div class="col-md-6 left_div">
                        <table class="GPU_producer_table">
                            <tr><th colspan="2"><h5>Fabrikant videokaart
                                <br><span class="annotation">(optioneel)</span>
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">NVIDIA</td>
                                <td style="width:50%">AMD</td>
                            </tr>
                            <tr>
                                <td><input id="GPU_producer1" type="checkbox" name="GPU_producer1" value="1" onclick="EnableDisableNvidia()"></td>
                                <td><input id="GPU_producer2" type="checkbox" name="GPU_producer2" value="1" onclick="EnableDisableAMD()"></td>
                            </tr>
                        </table>
                        <table id="amd_hidden" class="GPU_type_AMD_table">
                            <tr><th colspan="2"><h5>AMD videokaart
                                <br><span class="annotation">(optioneel)</span>
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">AMD Radeon R9 270X</td>
                                <td style="width:50%">AMD Radeon R9 270</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_AMD1" value="1"></td>
                                <td><input type="checkbox" name="GPU_type_AMD2" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">AMD Radeon R7 240</td>
                                <td style="width:50%">AMD Radeon HD 6450</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_AMD3" value="1"></td>
                                <td><input type="checkbox" name="GPU_type_AMD4" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">AMD Radeon R9 280</td>
                                <td style="width:50%">AMD Radeon R9 280X</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_AMD5" value="1"></td>
                                <td><input type="checkbox" name="GPU_type_AMD6" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">AMD Radeon R9 290</td>
                                <td style="width:50%">AMD Radeon R9 290X</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_AMD7" value="1"></td>
                                <td><input type="checkbox" name="GPU_type_AMD8" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">AMD Radeon R7 250</td>
                                <td style="width:50%">AMD Radeon HD 3450 AGP</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_AMD9" value="1"></td>
                                <td><input type="checkbox" name="GPU_type_AMD10" value="1"></td>
                            </tr>
                        </table>
                        <table id="nvidia_hidden" class="GPU_type_NVIDIA_table">
                            <tr><th colspan="2"><h5>NVIDIA videokaart
                                <br><span class="annotation">(optioneel)</span>
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">NVIDIA FX5500</td>
                                <td style="width:50%">NVIDIA GeForce GTX 780</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA1" value="1"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA2" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">NVIDIA GeForce GTX 980</td>
                                <td style="width:50%">NVIDIA GeForce GTX 970</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA3" value="1"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA4" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">NVIDIA GeForce GT 730</td>
                                <td style="width:50%">NVIDIA GeForce GTX 660</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA5" value="1"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA6" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">NVIDIA GeForce GTX 750</td>
                                <td style="width:50%">NVIDIA GeForce GTX 760</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA7" value="1"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA8" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">NVIDIA GeForce GT 740</td>
                                <td style="width:50%">NVIDIA GeForce GTX 770</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA9" value="1"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA10" value="1"></td>
                            </tr>
                        </table>
                        <table class="GPU_brand_table">
                            <tr><th colspan="3"><h5>Merk videokaart
                                <br><span class="annotation">(optioneel)</span>
                            </h5></th></tr>
                            <tr>
                                <td style="width:33.3%">Asus</td>
                                <td style="width:33.3%">Club 3D</td>
                                <td style="width:33.3%">Gigabyte</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_brand1" value="1"></td>
                                <td><input type="checkbox" name="GPU_brand2" value="1"></td>
                                <td><input type="checkbox" name="GPU_brand3" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:33.3%">Sapphire</td>
                                <td style="width:33.3%">MSI</td>
                                <td style="width:33.3%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_brand4" value="1"></td>
                                <td><input type="checkbox" name="GPU_brand5" value="1"></td>
                                <td><input type="checkbox" name="GPU_brand6" value="1"></td>
                            </tr>
                        </table>
                        <table class="GPU_geheugen_type_table">
                            <tr><th colspan="4"><h5>Type geheugen
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Het type geheugen dat gebruikt wordt. GDDR geheugen is speciaal ontworpen voor gebruik in videokaarten terwijl DDR geheugen dat niet is. Hoe hoger het getal, hoe hoger de snelheid.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:25%">DDR2</td>
                                <td style="width:25%">DDR3</td>
                                <td style="width:25%">GDDR5</td>
                                <td style="width:25%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="GPU_geheugen_type" value="1"></td>
                                <td><input type="radio" name="GPU_geheugen_type" value="2"></td>
                                <td><input type="radio" name="GPU_geheugen_type" value="3"></td>
                                <td><input type="radio" name="GPU_geheugen_type" value="4"></td>
                            </tr>
                        </table>
                        <table>
                            <tr><th colspan="3"><h5>HDMI aansluitingen
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Met een HDMI-aansluiting is High Definition apparatuur digitaal te koppelen. Via HDMI kunnen zowel beeld als geluid tegelijk worden getransporteerd. Hierbij gaat er geen kwaliteit verloren bij resoluties tot 1080p.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:33.3%">0</td>
                                <td style="width:33.3%">1</td>
                                <td style="width:33.3%">2</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="GPU_HDMI" value="1"></td>
                                <td><input type="radio" name="GPU_HDMI" value="2"></td>
                                <td><input type="radio" name="GPU_HDMI" value="3"></td>
                            </tr>
                        </table>
                        <table>
                            <tr><th colspan="2"><h5>VGA-poort
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Een VGA-aansluiting (ook wel 15-pin D-sub genoemd) maakt het mogelijk om PC&#39;s op monitoren, tv&#39;s of beamers aan te sluiten.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="GPU_VGA" value="1"></td>
                                <td><input type="radio" name="GPU_VGA" value="2"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="GPU_memory_table">
                            <tr><th colspan="6"><h5>Brandbreedte geheugenbus
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Wat is de bandbreedte van het geheugen? Hoe hoger, hoe beter.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:16.6%">64</td>
                                <td style="width:16.6%">128</td>
                                <td style="width:16.6%">192</td>
                                <td style="width:16.6%">256</td>
                                <td style="width:16.6%">384</td>
                                <td style="width:16.6%">512</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="GPU_bandwidth_memory" value="1"></td>
                                <td><input type="radio" name="GPU_bandwidth_memory" value="2"></td>
                                <td><input type="radio" name="GPU_bandwidth_memory" value="3"></td>
                                <td><input type="radio" name="GPU_bandwidth_memory" value="4"></td>
                                <td><input type="radio" name="GPU_bandwidth_memory" value="5"></td>
                                <td><input type="radio" name="GPU_bandwidth_memory" value="6"></td>
                            </tr>
                            <tr>
                                <td style="width:16.6%" colspan="6">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td colspan="6"><input type="radio" name="GPU_bandwidth_memory" value="7"></td>
                            </tr>
                        </table>
                        <table>
                            <tr><th colspan="2"><h5>DVI-I aansluiting
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Een aansluiting die zowel analoge als digitale beelden naar de monitor kan sturen.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">ja</td>
                                <td style="width:50%">nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="GPU_DVI-I" value="1"></td>
                                <td><input type="radio" name="GPU_DVI-I" value="2"></td>
                            </tr>
                        </table>
                        <table>
                            <tr><th colspan="3"><h5>DVI-D aansluiting
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Een aansluiting die digitale beelden naar de monitor stuurt.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:33.3%">0</td>
                                <td style="width:33.3%">1</td>
                                <td style="width:33.3%">2</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="GPU_DVI-D" value="1"></td>
                                <td><input type="radio" name="GPU_DVI-D" value="2"></td>
                                <td><input type="radio" name="GPU_DVI-D" value="3"></td>
                            </tr>
                        </table>
                        <div class="GPU_cost specification_table">
                            <h5>Prijs </h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label"   type="text" id="amount_GPU_prijs" readonly></p>
                            <div class="specification_table_slider" type="hidden"  id="videocard_price"></div>

                            <input name="videocard_price0" type="hidden" value="100" id="videocard_price0" style="background: red">
                            <input name="videocard_price1"  type="hidden" value="600" id="videocard_price1" style="background: yellow">


                        </div>
                        <div class="GPU_memory specification_table">
                            <h5>Gewenst videogeheugen</h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label"  type="text" id="amount_GPU_geheugen" readonly></p>
                            <div class="specification_table_slider" id="videocard_memory"></div>

                            <input name="videocard_memoryMb0" type="hidden"  value="516" id="videocard_memoryMb0" style="background: red">
                            <input name="videocard_memoryMb1" type="hidden"  value="4096" id="videocard_memoryMb1" style="background: yellow">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input class="myButton" type="submit" value="Onderdeel opslaan">
                    </div>
                {{ Form::close() }}
            @elseif($menuitem == "processor")
                {{ Form::open(array('action' => 'SessionController@determineSection')) }}
                    <div class="col-md-6 left_div">
                        <table class="brand_table">
                            <tr><th colspan="2"><h5>Merk processor
                                <br><span class="annotation">(optioneel)</span>
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">Intel</td>
                                <td style="width:50%">AMD</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="processor_brand1" value="1"></td>
                                <td><input type="checkbox" name="processor_brand2" value="1"></td>
                            </tr>
                        </table>
                        <table class="core_table">
                            <tr><th colspan="4"><h5>Aantal processorkernen
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'De aantal rekenkamers die de processor heeft. Een single-core processor zien we terug in basic computers. dual-core heeft 2 core&#39;s en kan twee taken tegelijk berekenen. Dit maakt de computer een stuk sneller met het bewerken van computertaken. Zo telt zich dat op naar triple, quad, hexa, octo.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:25%">Dual core</td>
                                <td style="width:25%">Quad core</td>
                                <td style="width:25%">6-core</td>
                                <td style="width:25%">8-core</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="processor_core1" value="1"></td>
                                <td><input type="checkbox" name="processor_core2" value="1"></td>
                                <td><input type="checkbox" name="processor_core3" value="1"></td>
                                <td><input type="checkbox" name="processor_core4" value="1"></td>
                            </tr>
                        </table>
                        <div class="processor_cost specification_table">
                            <h5>Prijs</h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label" type="text" id="amount" readonly></p>
                            <div class="specification_table_slider" id="processor_price"></div>
                            <input name="processor_price0"  type="hidden" value="100" id="processor_price0" style="background: red">
                            <input name="processor_price1"  type="hidden" value="400" id="processor_price1" style="background: yellow">
                        </div>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="serie_table">
                            <tr><th colspan="3"><h5>Processor serie
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Zowel AMD als Intel produceren processoren in verschillende series. Een serie is bedoeld voor bepaald gebruik. Zo zijn Core i3 processoren geschikt voor internet & office werkzaamheden en Core i7 processoren voor veeleisende multitasking en gaming. Binnen een serie zijn verschillende modellen processoren verkrijgbaar. Van welke serie is deze processor onderdeel?')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:33.3%">A10</td>
                                <td style="width:33.3%">A6</td>
                                <td style="width:33.3%">A8</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="processor_serie1" value="1"></td>
                                <td><input type="checkbox" name="processor_serie2" value="1"></td>
                                <td><input type="checkbox" name="processor_serie3" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:33.3%">Core i3</td>
                                <td style="width:33.3%">Core i5</td>
                                <td style="width:33.3%">Core i7</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="processor_serie4" value="1"></td>
                                <td><input type="checkbox" name="processor_serie5" value="1"></td>
                                <td><input type="checkbox" name="processor_serie6" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:33.3%">FX</td>
                                <td style="width:33.3%">Pentium</td>
                                <td style="width:33.3%">Sempron</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="processor_serie7" value="1"></td>
                                <td><input type="checkbox" name="processor_serie8" value="1"></td>
                                <td><input type="checkbox" name="processor_serie9" value="1"></td>
                            </tr>
                        </table>
                        <div class="processor_speed specification_table">
                            <h5>Kloksnelheid
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'De processor is het hart van het apparaat en voert alle opdrachten uit. Hoe meer functies je tegelijk gebruikt, hoe langer de processor over opdrachten doet. Met een hogere kloksnelheid werkt een processor sneller. Verschillende merken of families processoren met dezelfde kloksnelheid kunnen in de praktijk een verschillende verwerkingssnelheid hebben.')) }}
                            </h5>
                            <span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label" type="text" id="speed" readonly></p>
                            <div class="specification_table_slider" id="slider-range1"></div>

                            <input name="processor_clocking0" type="hidden" value="1450" id="processor_clocking0" style="background: red">
                            <input name="processor_clocking1"  type="hidden" value="2510"  id="processor_clocking1" style="background: yellow">

                        </div>
                    </div>
                    <div class="col-md-12">
                        <input class="myButton" type="submit" value="Onderdeel opslaan">
                    </div>
                {{ Form::close() }}
            @elseif($menuitem == "internalmemory")
                {{ Form::open(array('action' => 'SessionController@determineSection')) }}
                    <div class="col-md-6 left_div">
                        <table class="RAM_Merk_table">
                            <tr><th colspan="3"><h5>Merk geheugen
                                <br><span class="annotation">(optioneel)</span>
                            </h5></th></tr>
                            <tr>
                                <td style="width:33.3%">Corsair</td>
                                <td style="width:33.3%">Crucial</td>
                                <td style="width:33.3%">Kingston</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="RAM_merk1" value="1"></td>
                                <td><input type="checkbox" name="RAM_merk2" value="1"></td>
                                <td><input type="checkbox" name="RAM_merk3" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:33.3%">Qnap</td>
                                <td style="width:33.3%">Synology</td>
                                <td style="width:33.3%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="RAM_merk4" value="1"></td>
                                <td><input type="checkbox" name="RAM_merk5" value="1"></td>
                                <td><input type="checkbox" name="RAM_merk6" value="1"></td>
                            </tr>
                        </table>
                        <table class="RAM_geheugen_table">
                            <tr><th colspan="6"><h5>RAM-geheugen
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'RAM staat voor Random Access Memory, en wordt ook wel het werkgeheugen genoemd. Hoe meer RAM-geheugen, hoe soepeler het apparaat jouw opdrachten verwerkt.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:16.6%">1 GB</td>
                                <td style="width:16.6%">2 GB</td>
                                <td style="width:16.6%">4 GB</td>
                                <td style="width:16.6%">8 GB</td>
                                <td style="width:16.6%">16 GB</td>
                                <td style="width:16.6%">32 GB</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="RAM_geheugen1" value="1"></td>
                                <td><input type="checkbox" name="RAM_geheugen2" value="1"></td>
                                <td><input type="checkbox" name="RAM_geheugen3" value="1"></td>
                                <td><input type="checkbox" name="RAM_geheugen4" value="1"></td>
                                <td><input type="checkbox" name="RAM_geheugen5" value="1"></td>
                                <td><input type="checkbox" name="RAM_geheugen6" value="1"></td>
                            </tr>
                        </table>
                        <table class="RAM_klok_table">
                            <tr><th colspan="4"><h5>Kloksnelheid geheugenmodule</h5></th></tr>
                            <tr>
                                <td style="width:25%">667 MHz</td>
                                <td style="width:25%">800 MHz</td>
                                <td style="width:25%">1333 MHz</td>
                                <td style="width:25%">1600 MHz</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="RAM_klok" value="1"></td>
                                <td><input type="radio" name="RAM_klok" value="2"></td>
                                <td><input type="radio" name="RAM_klok" value="3"></td>
                                <td><input type="radio" name="RAM_klok" value="4"></td>
                            </tr>
                        </table>
                        <table class="RAM_game_table">
                            <tr><th colspan="2"><h5>Geheugen geschikt voor gaming</h5></th></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="RAM_game" value="1"></td>
                                <td><input type="radio" name="RAM_game" value="2"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="RAM_geschikt_table">
                            <tr><th colspan="4"><h5>Geheugen geschikt voor:</h5></th></tr>
                            <tr>
                                <td style="width:25%">Desktop</td>
                                <td style="width:25%">Laptop</td>
                                <td style="width:25%">NAS</td>
                                <td style="width:25%">Mac</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="RAM_geschikt1" value="1"></td>
                                <td><input type="checkbox" name="RAM_geschikt2" value="1"></td>
                                <td><input type="checkbox" name="RAM_geschikt3" value="1"></td>
                                <td><input type="checkbox" name="RAM_geschikt4" value="1"></td>
                            </tr>
                        </table>
                        <table class="RAM_type_table">
                            <tr><th colspan="4"><h5>Geheugen type
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Van welk type geheugen maakt dit product gebruik? DDR2 is de tweede versie van Double Data Rate. Het grootste verschil met DDR is dat er 4 bits tegelijk worden uitgelezen, in plaats van de gebruikelijke 2 bits. Hierdoor is er tweemaal zoveel bandbreedte ten opzichte van DDR. De buffer van DDR3 betreft 8 bit.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:25%">DDR2</td>
                                <td style="width:25%">DDR3</td>
                                <td style="width:25%">DIMM DDR3</td>
                                <td style="width:25%">DIMM DDR4</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="RAM_type" value="1"></td>
                                <td><input type="radio" name="RAM_type" value="1"></td>
                                <td><input type="radio" name="RAM_type" value="1"></td>
                                <td><input type="radio" name="RAM_type" value="1"></td>
                            </tr>
                        </table>
                        <table class="RAM_kanalen_table">
                            <tr><th colspan="3"><h5>Geheugenkanaal
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                               'alt' => 'test', 'title'=> 'Geeft aan over hoeveel kanalen het geheugen dat op het moederbord geplaatst is de beschikking heeft. Bij Dual channel heeft het geheugen de beschikking over twee kanalen. Bij Quad channel heeft het geheugen de beschikking over 4 kanalen. Hoe meer kanalen, hoe sneller het geheugen kan werken.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:33.3%">Single Channel</td>
                                <td style="width:33.3%">Dual Channel</td>
                                <td style="width:33.3%">Quad Channel</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="RAM_kanalen" value="1"></td>
                                <td><input type="radio" name="RAM_kanalen" value="2"></td>
                                <td><input type="radio" name="RAM_kanalen" value="3"></td>
                            </tr>
                        </table>
                        <div class="RAM_cost specification_table">
                            <h5>Prijs</h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label" type="text" id="amount_ram" readonly></p>
                            <div class="specification_table_slider" id="ram_price"></div>
                            <input name="ram_price0"  type="hidden" value="60" id="ram_price0" style="background: red">
                            <input name="ram_price"1  type="hidden"  value="120" id="ram_price1" style="background: yellow">

                        </div>
                    </div>
                    <div class="col-md-12">
                        <input class="myButton" type="submit" value="Onderdeel opslaan">
                    </div>
                {{ Form::close() }}
            @elseif($menuitem == "motherboard")
                {{ Form::open(array('action' => 'SessionController@determineSection')) }}
                    <div class="col-md-6 left_div">
                        <table class="Moederbord_merk_table">
                            <tr><th colspan="3"><h5>Moederbord merk
                                <br><span class="annotation">(optioneel)</span>
                            </h5></th></tr>
                            <tr>
                                <td style="width:33.3%">Asrock</td>
                                <td style="width:33.3%">Asus</td>
                                <td style="width:33.3%">MSI</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="moederbord_merk1" value="1"></td>
                                <td><input type="checkbox" name="moederbord_merk2" value="1"></td>
                                <td><input type="checkbox" name="moederbord_merk3" value="1"></td>
                            </tr>
                        </table>
                        <table class="Moederbord_formaat_table">
                            <tr><th colspan="3"><h5>Moederbord formaat
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'De moederborden die passen in deze computerbehuizing.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:33.3%">ATX</td>
                                <td style="width:33.3%">E-ATX</td>
                                <td style="width:33.3%">Micro-ATX</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_merk" value="1"></td>
                                <td><input type="radio" name="moederbord_merk" value="2"></td>
                                <td><input type="radio" name="moederbord_merk" value="3"></td>
                            </tr>
                            <tr>
                                <td style="width:33.3%">Mini-ITX</td>
                                <td style="width:33.3%"></td>
                                <td style="width:33.3%">XL-ATX</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_merk" value="4"></td>
                                <td></td>
                                <td><input type="radio" name="moederbord_merk" value="5"></td>
                            </tr>
                        </table>
                        <table class="moederbord_wifi_table">
                            <tr><th colspan="2"><h5>Wifi</h5></th></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_wifi" value="1"></td>
                                <td><input type="radio" name="moederbord_wifi" value="2"></td>
                            </tr>
                        </table>
                        <table class="moederbord_geheugenslot_table">
                            <tr><th colspan="3"><h5>Aantal geheugenslots
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Geeft aan hoeveel geheugenmodules tegelijk op het moederbord geplaatst kunnen worden.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:33.3%">2</td>
                                <td style="width:33.3%">4</td>
                                <td style="width:33.3%">8</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_geheugen" value="1"></td>
                                <td><input type="radio" name="moederbord_geheugen" value="2"></td>
                                <td><input type="radio" name="moederbord_geheugen" value="3"></td>
                            </tr>
                        </table>
                        <table class="moederbord_HDMI_table">
                            <tr><th colspan="2"><h5>HDMI
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'HDMI is een type aansluiting waarbij je heel eenvoudig beeld en geluid via één kabel kan doorsturen naar een ander apparaat zoals bijvoorbeeld: een groter scherm, een televisie of een mediaspeler. Deze aansluiting is universeel en is dus op bijna alle multimedia-apparaten terug te vinden.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_HDMI" value="1"></td>
                                <td><input type="radio" name="moederbord_HDMI" value="2"></td>
                            </tr>
                        </table>
                        <table class="moederbord_VGA_table">
                            <tr><th colspan="2"><h5>VGA-poort
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Een VGA-aansluiting (ook wel 15-pin D-sub genoemd) maakt het mogelijk om PC&#39;s op monitoren, tv&#39;s of beamers aan te sluiten.')) }}
                                    </h5></th></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_VGA" value="1"></td>
                                <td><input type="radio" name="moederbord_VGA" value="2"></td>
                            </tr>
                        </table>
                        <table class="moederbord_displayport_table">
                            <tr><th colspan="2"><h5>DisplayPort
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Digitale video en audio-aansluiting. DisplayPort wordt voornamelijk gebruikt bij Apple producten.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_displayport" value="1"></td>
                                <td><input type="radio" name="moederbord_displayport" value="2"></td>
                            </tr>
                        </table>
                        <div class="moederbord_cost specification_table">
                            <h5>Prijs</h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label" type="text" id="amount_moederbord" readonly></p>
                            <div class="specification_table_slider" id="motherboard_price"></div>
                            <input name="motherboard_price0"  type="hidden" value="100" id="motherboard_price0" style="background: red">
                            <input name="motherboard_price1" type="hidden"  value="260" id="motherboard_price1" style="background: yellow">

                        </div>
                        <div class="moederbord_usb specification_table">
                            <h5>Aantal USB 3.0 poorten</h5>
                            <p><input class="slider_label" type="text" id="amount_usb" readonly></p>
                            <div class="specification_table_slider" id="motherboard_ports"></div>
                            <input name="Usb_port0" type="hidden" value="3" id="Usb_port0" style="background: red">

                        </div>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="moederbord_ethernet_table">
                            <tr><th colspan="2"><h5>Aantal ethernetpoorten
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Het aantal ethernet-poorten waarover het product beschikt. Via deze poorten sluit je andere netwerkapparaten aan.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">1</td>
                                <td style="width:50%">2</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_ethernet" value="1"></td>
                                <td><input type="radio" name="moederbord_ethernet" value="2"></td>
                            </tr>
                        </table>
                        <table class="moederbord_DVI_table">
                            <tr><th colspan="2"><h5>DVI
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'De Digital Visual Interface (DVI) zorgt voor een ongerepte overdracht van videosignalen, bijvoorbeeld van uw pc naar een monitor. DVI kent 3 versies: DVI-D (alleen digitaal), DVI-A (alleen analoog) en DVI-I (digitaal & analoog).')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_DVI" value="1"></td>
                                <td><input type="radio" name="moederbord_DVI" value="2"></td>
                            </tr>
                        </table>
                        <table class="moederbord_RAID_table">
                            <tr><th colspan="4"><h5>RAID configuratie
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'RAID staat voor Redundant Array of Independent Disks. Met RAID kan je data opslaan en/of verdelen over meerdere schijven. Dit zorgt voor snelheidswinst bij bestanden lezen en/of beveiliging tegen gegevensverlies.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:25%">RAID-0</td>
                                <td style="width:25%">RAID-1</td>
                                <td style="width:25%">RAID-5</td>
                                <td style="width:25%">RAID-10</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="moederbord_raid1" value="1"></td>
                                <td><input type="checkbox" name="moederbord_raid2" value="1"></td>
                                <td><input type="checkbox" name="moederbord_raid3" value="1"></td>
                                <td><input type="checkbox" name="moederbord_raid4" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:25%" colspan="2">JBOD</td>
                                <td style="width:25%" colspan="2">Geen</td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="checkbox" name="moederbord_raid5" value="1"></td>
                                <td colspan="2"><input type="checkbox" name="moederbord_raid6" value="1"></td>
                            </tr>
                        </table>
                        <table class="moederbord_audiokanalen_table">
                            <tr><th colspan="2"><h5>Audiokanaal
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Het aantal audiokanalen geeft aan hoeveel speakers aangesloten kunnen worden. Bij een 5.1 opstelling worden er twee frontspeakers, 2 surroundspeakers, een centerspeaker en een (sub)woofer aangesloten. Bij een 7.1 opstelling worden daar nog twee rearspeakers aan toegevoegd.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">5.1</td>
                                <td style="width:50%">7.1</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_audiokanalen" value="1"></td>
                                <td><input type="radio" name="moederbord_audiokanalen" value="2"></td>
                            </tr>
                        </table>
                        <table class="moederbord_geheugen_table">
                            <tr><th colspan="3"><h5>Geheugen type
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'DDR3 is de naam van de vernieuwde DDR-geheugenstandaard die ontwikkeld is als de opvolger van DDR2. Het reduceert het energieverbruik met 40% vergeleken met DDR2.')) }}

                                    </h5></th></tr>
                            <tr>
                                <td style="width:33.3%">DDR3</td>
                                <td style="width:33.3%">DIMM</td>
                                <td style="width:33.3%">DIMM DDR4</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_geheugen" value="1"></td>
                                <td><input type="radio" name="moederbord_geheugen" value="2"></td>
                                <td><input type="radio" name="moederbord_geheugen" value="3"></td>
                            </tr>
                        </table>
                        <table class="moederbord_msata_table">
                            <tr><th colspan="2"><h5>mSATA-aansluiting
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'mSATA is een variant van SATA bedoeld voor harde schijven in mobiele apparaten. mSATA-SSD-schijven kunnen vaak direct op het moederbord zonder tussenkomst van een SATA kabel worden aangesloten.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_msata" value="1"></td>
                                <td><input type="radio" name="moederbord_msata" value="2"></td>
                            </tr>
                        </table>
                        <div class="moederbord_SATA300 specification_table">
                            <h5>Aantal SATA 300 aansluitingen</h5>
                            <p><input class="slider_label" type="text" id="amount_sata300" readonly></p>
                            <div class="specification_table_slider" id="motherboard_sata300"></div>
                            <input name="motherboard_sata600connection0"  type="hidden" value="3" id="motherboard_sata300connection0" style="background: red">

                        </div>
                        <div class="moederbord_SATA600 specification_table">
                            <h5>Aantal SATA 600 aansluitingen</h5>
                            <p><input class="slider_label" type="text" id="amount_sata600" readonly></p>
                            <div class="specification_table_slider" id="motherboard_sata600"></div>
                            <input name="motherboard_sata600connection0" type="hidden"  value="4" id="motherboard_sata600connection0" style="background: red">

                        </div>
                    </div>
                    <div class="col-md-12">
                        <input class="myButton" type="submit" value="Onderdeel opslaan">
                    </div>
                {{ Form::close() }}
            @elseif($menuitem == "casing")
                {{ Form::open(array('action' => 'SessionController@determineSection')) }}
                <div class="col-md-6 left_div">
                    <table class="behuizing_merk_table">
                        <tr><th colspan="5"><h5>Behuizing merk
                                    <br><span class="annotation">(optioneel)</span>
                                </h5></th></tr>
                        <tr>
                            <td style="width:20%">Antec</td>
                            <td style="width:20%">CoolerMaster</td>
                            <td style="width:20%">Corsair</td>
                            <td style="width:20%">Fractal Design</td>
                            <td style="width:20%">SilverStone</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="behuizing_merk1" value="1"></td>
                            <td><input type="checkbox" name="behuizing_merk2" value="2"></td>
                            <td><input type="checkbox" name="behuizing_merk3" value="3"></td>
                            <td><input type="checkbox" name="behuising_merk4" value="4"></td>
                            <td><input type="checkbox" name="behuising_merk5" value="5"></td>
                        </tr>
                        <tr>
                            <td style="width:20%" colspan="5">Geen voorkeur</td>
                        </tr>
                        <tr>
                            <td colspan="5"><input type="checkbox" name="behuizing_merk6" value="1"></td>
                        </tr>
                    </table>
                    <table class="behuizing_computer_table">
                        <tr><th colspan="5"><h5>Model computerbehuizing
                                    {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                    'alt' => 'test', 'title'=> 'Welk model heeft deze computerbehuizing. Meest voorkomende vorm is een Tower computerbehuizing.')) }}
                                </h5></th></tr>
                        <tr>
                            <td style="width:20%">Cube</td>
                            <td style="width:20%">Full Tower</td>
                            <td style="width:20%">HTPC</td>
                            <td style="width:20%">Miditower</td>
                            <td style="width:20%">Mini Tower</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="behuizing_computer" value="1"></td>
                            <td><input type="radio" name="behuizing_computer" value="2"></td>
                            <td><input type="radio" name="behuizing_computer" value="3"></td>
                            <td><input type="radio" name="behuizing_computer" value="4"></td>
                            <td><input type="radio" name="behuizing_computer" value="5"></td>
                        </tr>
                    </table>
                    <table class="behuizing_fan_table">
                        <tr><th colspan="2"><h5>Fan controller</h5></th></tr>
                        <tr>
                            <td style="width:50%">Ja</td>
                            <td style="width:50%">Nee</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="behuizing_fan" value="1"></td>
                            <td><input type="radio" name="behuizing_fan" value="2"></td>
                        </tr>
                    </table>
                    <table class="behuizing_stof_table">
                        <tr><th colspan="2"><h5>Stoffilter</h5></th></tr>
                        <tr>
                            <td style="width:50%">Ja</td>
                            <td style="width:50%">Nee</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="behuizing_stof" value="1"></td>
                            <td><input type="radio" name="behuizing_stof" value="2"></td>
                        </tr>
                    </table>
                    <table class="behuizing_water_table">
                        <tr><th colspan="2"><h5>Voorziening waterkoeling</h5></th></tr>
                        <tr>
                            <td style="width:50%">Ja</td>
                            <td style="width:50%">Nee</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="behuizing_water" value="1"></td>
                            <td><input type="radio" name="behuizing_water" value="2"></td>
                        </tr>
                    </table>
                    <table class="behuizing_led_table">
                        <tr><th colspan="2"><h5>LED display aanwezig</h5></th></tr>
                        <tr>
                            <td style="width:50%">Ja</td>
                            <td style="width:50%">Nee</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="behuizing_led" value="1"></td>
                            <td><input type="radio" name="behuizing_led" value="2"></td>
                        </tr>
                    </table>
                    <table class="behuizing_Ruisreductie_table">
                        <tr><th colspan="2"><h5>Ruisreductie aanwezig</h5></th></tr>
                        <tr>
                            <td style="width:50%">Ja</td>
                            <td style="width:50%">Nee</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="behuizing_ruis" value="1"></td>
                            <td><input type="radio" name="behuizing_ruis" value="2"></td>
                        </tr>
                    </table>
                    <table class="behuizing_Geluid_table">
                        <tr><th colspan="2"><h5>Geluidsdempende matten</h5></th></tr>
                        <tr>
                            <td style="width:50%">Ja</td>
                            <td style="width:50%">Nee</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="behuizing_geluid" value="1"></td>
                            <td><input type="radio" name="behuizing_geluid" value="2"></td>
                        </tr>
                    </table>
                    <table class="behuizing_paneel_table" cellspacing="1px">
                        <tr><th colspan="2"><h5>Paneeldeur
                                    {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                    'alt' => 'test', 'title'=> 'Zit er een deur in het paneel aan de voorzijde?')) }}
                                </h5></th></tr>
                        <tr>
                            <td style="width:50%">Ja</td>
                            <td style="width:50%">Nee</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="behuizing_paneel" value="1"></td>
                            <td><input type="radio" name="behuizing_paneel" value="2"></td>
                        </tr>
                    </table>
                    <div class="behuizing_prijs specification_table">
                        <h5>Prijs</h5><span class="annotation">(minimum - maximum)</span>
                        <p><input class="slider_label" type="text" id="amount_behuizing" readonly></p>
                        <div class="specification_table_slider" id="slider-range14"></div>
                        <input name="casing_Price0" type="hidden" value="100" id="casing_Price0" style="background: red">
                        <input name="casing_Price1"  type="hidden" value="160" id="casing_Price1" style="background: yellow">

                    </div>
                    <div class="behuizing_uitbreiding specification_table">
                        <h5>Aantal uitbreidingssloten</h5><span class="annotation">(minimum - maximum)</span>
                        <p><input class="slider_label" type="text" id="amount_behuizing_uitbreiding" readonly></p>
                        <div class="specification_table_slider" id="slider-range18"></div>
                        <input name="casing_expansion_0"  type="hidden"  value="3" id="casing_expansion_0" style="background: red">
                        <input name="casing_expansion_1"  type="hidden" value="7" id="casing_expansion_1" style="background: yellow">

                    </div>
                </div>
                <div class="col-md-6 right_div">
                    <table class="behuizing_kleur_table">
                        <tr><th colspan="4"><h5>Kleur behuizing</h5></th></tr>
                        <tr>
                            <td style="width:25%">Grijs</td>
                            <td style="width:25%">Oranje</td>
                            <td style="width:25%">Wit</td>
                            <td style="width:25%">Zwart</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="behuizing_kleur" value="1"></td>
                            <td><input type="radio" name="behuizing_kleur" value="2"></td>
                            <td><input type="radio" name="behuizing_kleur" value="3"></td>
                            <td><input type="radio" name="behuizing_kleur" value="4"></td>
                        </tr>
                        <tr>
                            <td style="width:25%" colspan="4">Geen voorkeur</td>
                        </tr>
                        <tr>
                            <td colspan="4"><input type="radio" name="behuizing_kleur" value="5"></td>
                        </tr>
                    </table>
                    <table class="behuizing_materiaal_table">
                        <tr><th colspan="3"><h5>Materiaal behuizing</h5></th></tr>
                        <tr>
                            <td style="width:25%">Aluminium</td>
                            <td style="width:25%">Kunststof</td>
                            <td style="width:25%">Plastic</td>
                            <td style="width:25%">Polymeer</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="behuizing_materiaal" value="1"></td>
                            <td><input type="radio" name="behuizing_materiaal" value="2"></td>
                            <td><input type="radio" name="behuizing_materiaal" value="3"></td>
                            <td><input type="radio" name="behuizing_materiaal" value="4"></td>
                        </tr>
                        <tr>
                            <td style="width:25%">Rubber</td>
                            <td style="width:25%">Staal</td>
                            <td style="width:25%" colspan="2">Geen voorkeur</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="behuizing_materiaal" value="5"></td>
                            <td><input type="radio" name="behuizing_materiaal" value="6"></td>
                            <td colspan="2"><input type="radio" name="behuizing_materiaal" value="7"></td>
                        </tr>
                    </table>
                    <table class="behuizing_usb2_table">
                        <tr><th colspan="3"><h5>Aantal USB 2.0 poorten
                                    {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                    'alt' => 'test', 'title'=> 'USB is een veelgebruikte standaard voor de aansluiting van randapparatuur bij computers. USB 2.0 is de meest gebruikte versie. Via USB 2.0 kunnen gegevens met een snelheid van 35 MB/s doorgevoerd worden.')) }}
                                </h5></th></tr>
                        <tr>
                            <td style="width:33.3%">0</td>
                            <td style="width:33.3%">1</td>
                            <td style="width:33.3%">2</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="behuizing_usb2_1" value="1"></td>
                            <td><input type="checkbox" name="behuizing_usb2_2" value="1"></td>
                            <td><input type="checkbox" name="behuizing_usb2_3" value="1"></td>
                        </tr>
                    </table>
                    <table class="behuizing_usb3_table">
                        <tr><th colspan="3"><h5>Aantal USB 3.0 poorten
                                    {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                    'alt' => 'test', 'title'=> 'USB is een veelgebruikte standaard voor de aansluiting van randapparatuur bij computers. Via USB 3.0 kunnen gegevens met een snelheid van 625 MB/s doorgevoerd worden.')) }}
                                </h5></th></tr>
                        <tr>
                            <td style="width:33.3%">0</td>
                            <td style="width:33.3%">1</td>
                            <td style="width:33.3%">2</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="behuizing_usb3_1" value="1"></td>
                            <td><input type="checkbox" name="behuizing_usb3_2" value="1"></td>
                            <td><input type="checkbox" name="behuizing_usb3_3" value="1"></td>
                        </tr>
                    </table>
                    <table class="behuizing_firewire_table">
                        <tr><th colspan="3"><h5>Firewire poort</h5></th></tr>
                        <tr>
                            <td style="width:33.3%">0</td>
                            <td style="width:33.3%">1</td>
                            <td style="width:33.3%">Geen voorkeur</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="behuizing_firewire" value="1"></td>
                            <td><input type="radio" name="behuizing_firewire" value="2"></td>
                            <td><input type="radio" name="behuizing_firewire" value="3"></td>
                        </tr>
                    </table>
                    <table class="behuizing_eSATA_table">
                        <tr><th colspan="3"><h5>eSATA aansluitingen
                                    {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                    'alt' => 'test', 'title'=> 'eSATA is een computerbus ontworpen voor het transport van gegevens tussen het moederbord en externe opslagmedia. eSATA is een aangepaste versie van SATA. De kabels zijn langer en de connector is steviger.')) }}
                                </h5></th></tr>
                        <tr>
                            <td style="width:33.3%">0</td>
                            <td style="width:33.3%">1</td>
                            <td style="width:33.3%">Geen voorkeur</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="behuizing_esata" value="1"></td>
                            <td><input type="radio" name="behuizing_esata" value="2"></td>
                            <td><input type="radio" name="behuizing_esata" value="3"></td>
                        </tr>
                    </table>
                    <div class="behuizing_2,5bay specification_table">
                        <h5>2,5'' Bays (HDD/SSD) {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                    'alt' => 'test', 'title'=> 'Hoeveel 2,5 inch bays voor uitbreiding zijn er in deze computerbehuizing? Een 2,5 inch bay is geschikt voor een harde schijf of SSD.')) }}
                        </h5>
                        <p><input class="slider_label" type="text" id="amount_behuizing_2bay" readonly></p>
                        <div class="specification_table_slider" id="slider-range16"></div>
                        <input name="casing_HDD/SSD_0"  type="hidden" id="casing_HDD/SSD_0" value="2" style="background: red">
                        <input name="casing_HDD/SSD_1"  type="hidden" id="casing_HDD/SSD_1" value="5" style="background: yellow">
                    </div>
                    <div class="behuizing_3,5bay specification_table">
                        <h5>3,5'' Bays (HDD) {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                    'alt' => 'test', 'title'=> 'Hoeveel 3,5 inch bays voor uitbreiding zijn er in deze computerbehuizing? Een 3,5 inch bay is geschikt voor een harde schijf.')) }}
                        </h5>
                        <p><input class="slider_label" type="text" id="amount_behuizing_3bay" readonly></p>
                        <div class="specification_table_slider" id="slider-range15"></div>
                        <input name="casing_HDD_0" type="hidden" id="casing_HDD_0" value="2" style="background: red">
                        <input name="casing_HDD_1"  type="hidden" id="casing_HDD_1" value="5" style="background: yellow">
                    </div>

                    <div class="behuizing_5,25bay specification_table">
                        <h5>5,25'' Bays {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                    'alt' => 'test', 'title'=> 'Hoeveel 5,25 inch bays zijn er beschikbaar in deze computerbehuizing? Een 5,25 inch bay is geschikt voor een optische drive, een harde schijf (met behulp van een bracket), of andere uitbreidingen.')) }}
                        </h5>
                        <p><input class="slider_label" type="text" id="amount_behuizing_5bay" readonly></p>
                        <div class="specification_table_slider" id="slider-range17"></div>
                        <input name="casing_Bayss"  type="hidden" id="casing_Bayss0" value="2" style="background: red">
                        <input name="casing_Bayss1"  type="hidden" id="casing_Bayss1" value="5" style="background: yellow">
                    </div>
                </div>
                <div class="col-md-12">
                    <input class="myButton" type="submit" value="Onderdeel opslaan">
                </div>
                {{ Form::close() }}
            @elseif($menuitem == "ssd")
                {{ Form::open(array('action' => 'SessionController@determineSection')) }}
                    <div class="col-md-6 left_div">
                        <table class="SDD_opslag_table">
                            <tr><th colspan="5"><h5>Opslag capaciteit</h5></th></tr>
                            <tr>
                                <td style="width:20%">30 GB</td>
                                <td style="width:20%">60 GB</td>
                                <td style="width:20%">64 GB</td>
                                <td style="width:20%">80 GB</td>
                                <td style="width:20%">120 GB</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SDD_opslag1" value="1"></td>
                                <td><input type="checkbox" name="SDD_opslag2" value="1"></td>
                                <td><input type="checkbox" name="SDD_opslag3" value="1"></td>
                                <td><input type="checkbox" name="SDD_opslag4" value="1"></td>
                                <td><input type="checkbox" name="SDD_opslag5" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:20%">128 GB</td>
                                <td style="width:20%">180 GB</td>
                                <td style="width:20%">240 GB</td>
                                <td style="width:20%">250 GB</td>
                                <td style="width:20%">256 GB</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SDD_opslag6" value="1"></td>
                                <td><input type="checkbox" name="SDD_opslag7" value="1"></td>
                                <td><input type="checkbox" name="SDD_opslag8" value="1"></td>
                                <td><input type="checkbox" name="SDD_opslag9" value="1"></td>
                                <td><input type="checkbox" name="SDD_opslag10" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:20%">480 GB</td>
                                <td style="width:20%">500 GB</td>
                                <td style="width:20%">512 GB</td>
                                <td style="width:20%">960 GB</td>
                                <td style="width:20%">1 TB</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SDD_opslag11" value="1"></td>
                                <td><input type="checkbox" name="SDD_opslag12" value="1"></td>
                                <td><input type="checkbox" name="SDD_opslag13" value="1"></td>
                                <td><input type="checkbox" name="SDD_opslag14" value="1"></td>
                                <td><input type="checkbox" name="SDD_opslag15" value="1"></td>
                            </tr>
                        </table>
                        <table class="SDD_formaat_table">
                            <tr><th colspan="5"></th><h5>Formaat
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Een 2,5 inch SSD is geschikt voor laptops. Een mSATA SSD is geschikt voor directe aansluiting op een mSATA-aansluiting.')) }}
                            </h5></tr>
                            <tr>
                                <td style="width:33.3%">2,5 inch</td>
                                <td style="width:33.3%">mSATA</td>
                                <td style="width:33.3%">M.2</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="SDD_formaat" value="1"></td>
                                <td><input type="radio" name="SDD_formaat" value="2"></td>
                                <td><input type="radio" name="SDD_formaat" value="3"></td>
                            </tr>
                        </table>
                        <table class="SSD_soort_table" cellspacing="1px">
                            <tr><h5>Soort geheugen {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Van welk soort geheugen maakt deze SSD gebruik? SLC wordt vaak in een zakelijke omgeving gebruikt en MLC is gangbaar bij consumentenproducten.')) }}
                            </h5></tr>
                            <tr>
                                <td style="width:50%">Multi Level Cell (MLC)</td>
                                <td style="width:50%">Triple Level Cell (TLC)</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="SSD_soort" value="1"></td>
                                <td><input type="radio" name="SSD_soort" value="2"></td>
                            </tr>
                        </table>
                        <div class="SSD_cost specification_table">
                            <h5>Prijs</h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label" type="text" id="amount_ssd" readonly></p>
                            <div class="specification_table_slider" id="ssd_price"></div>
                            <input name="casing_Bayss" type="hidden" id="ssd_price0" value="2" style="background: red">
                            <input name="casing_Bayss1"  type="hidden" id="ssd_price1" value="5" style="background: yellow">
                        </div>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="SDD_merk_table">
                            <tr><h5>SSD merk<br><span class="annotation">(optioneel)</span></h5></tr>
                            <tr>
                                <td style="width:25%">AMD</td>
                                <td style="width:25%">Crucial</td>
                                <td style="width:25%">Intel</td>
                                <td style="width:25%">Kingston</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SSD_merk1" value="1"></td>
                                <td><input type="checkbox" name="SSD_merk2" value="1"></td>
                                <td><input type="checkbox" name="SSD_merk3" value="1"></td>
                                <td><input type="checkbox" name="SSD_merk4" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:25%">OCZ</td>
                                <td style="width:25%">Samsung</td>
                                <td style="width:25%">SanDisk</td>
                                <td style="width:25%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SSD_merk5" value="1"></td>
                                <td><input type="checkbox" name="SSD_merk6" value="1"></td>
                                <td><input type="checkbox" name="SSD_merk7" value="1"></td>
                                <td><input type="checkbox" name="SSD_merk8" value="1"></td>
                            </tr>
                        </table>
                        <table class="SSD_controller_table" cellspacing="1px">
                            <tr><h5>SSD-controller
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'De fabrikant van de controller van de SSD')) }}
                                <br><span class="annotation">(optioneel)</span>
                            </h5></tr>
                            <tr>
                                <td style="width:33.3%">Indilinx</td>
                                <td style="width:33.3%">Intel</td>
                                <td style="width:33.3%">Marvell</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SSD_controller1" value="1"></td>
                                <td><input type="checkbox" name="SSD_controller2" value="1"></td>
                                <td><input type="checkbox" name="SSD_controller3" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:33.3%">Samsung</td>
                                <td style="width:33.3%">SandForce</td>
                                <td style="width:33.3%">Phison</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SSD_controller4" value="1"></td>
                                <td><input type="checkbox" name="SSD_controller5" value="1"></td>
                                <td><input type="checkbox" name="SSD_controller6" value="1"></td>
                            </tr>
                        </table>
                        <div class="SSD_schrijf specification_table">
                            <h5>Schrijfsnelheid</h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label" type="text" id="amount_ssd_schrijf" readonly></p>
                            <div class="specification_table_slider" id="ssd_writespeed"></div>
                            <input name="ssd_writespeed0" type="hidden" id="ssd_writespeed0" value="2" style="background: red">
                            <input name="ssd_writespeed1" type="hidden" id="ssd_writespeed1" value="5" style="background: yellow">
                        </div>
                        <div class="SSD_lees specification_table">
                            <h5>Leessnelheid</h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label" type="text" id="amount_ssd_lees" readonly></p>
                            <div class="specification_table_slider" id="ssd_readspeed"></div>
                            <input name="ssd_readspeed0" type="hidden" id="ssd_readspeed0" value="2" style="background: red">
                            <input name="ssd_readspeed1" type="hidden" id="ssd_readspeed1" value="5" style="background: yellow">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input class="myButton" type="submit" value="Onderdeel opslaan">
                    </div>
                {{ Form::close() }}
            @elseif($menuitem == "bluraydvd")
                {{ Form::open(array('action' => 'SessionController@determineSection')) }}
                    <div class="col-md-6 left_div">
                        <table class="branders_merk_table">
                            <tr><th colspan="3"><h5>Brander merk
                                <br><span class="annotation">(optioneel)</span>
                            </h5></th></tr>
                            <tr>
                                <td style="width:33.3%">Asus</td>
                                <td style="width:33.3%">Freecom</td>
                                <td style="width:33.3%">Apple</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="brander_merk1" value="1"></td>
                                <td><input type="checkbox" name="brander_merk2" value="1"></td>
                                <td><input type="checkbox" name="brander_merk3" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:33.3%">LG</td>
                                <td style="width:33.3%">Samsung</td>
                                <td style="width:33.3%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="brander_merk4" value="1"></td>
                                <td><input type="checkbox" name="brander_merk5" value="1"></td>
                                <td><input type="checkbox" name="brander_merk6" value="1"></td>
                            </tr>
                        </table>
                        <table class="brander_type_table">
                            <tr><th colspan="2"><h5>Driver type
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Externe drives zijn aan te sluiten via een USB of eSATA kabel op een laptop, netbook of PC. Interne drives worden geplaatst in een PC en intern voorzien van voeding- en datakabels.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">Intern</td>
                                <td style="width:50%">Extern</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="brander_type" value="1"></td>
                                <td><input type="radio" name="brander_type" value="2"></td>
                            </tr>
                        </table>
                        <div class="brander_cost specification_table">
                            <h5>Prijs</h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label" type="text" id="amount_brander" readonly></p>
                            <div class="specification_table_slider" id="slider-range25"></div>
                            <input name="Blu-RayDVD_price0" type="hidden" value="60" id="Blu-RayDVD_price0" style="background: red">
                            <input name="Blu-RayDVD_price1"  type="hidden" value="100" id="Blu-RayDVD_price1" style="background: yellow">
                        </div>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="brander_speelt_table">
                            <tr><th colspan="4"><h5>Speelt van disc</h5></th></tr>
                            <tr>
                                <td style="width:25%">Blu-ray</td>
                                <td style="width:25%">DVD</td>
                                <td style="width:25%">CD</td>
                                <td style="width:25%">Floppy</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="brander_speelt1" value="1"></td>
                                <td><input type="checkbox" name="brander_speelt2" value="1"></td>
                                <td><input type="checkbox" name="brander_speelt3" value="1"></td>
                                <td><input type="checkbox" name="brander_speelt4" value="1"></td>
                            </tr>
                        </table>
                        <table class="brander_besturing_table">
                            <tr><th colspan="2"><h5>Besturingsysteem</h5></th></tr>
                            <tr>
                                <td style="width:50%">Windows</td>
                                <td style="width:50%">Mac OS X</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="brander_besturing" value="1"></td>
                                <td><input type="radio" name="brander_besturing" value="2"></td>
                            </tr>
                        </table>
                        <table class="brander_ladetype_table">
                            <tr><th colspan="2"><h5>Type lade
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Het plaatsen van een datadrager in een optische drive is mogelijk op verschillende manieren. De schuiflade schuift naar buiten, zodat de datadrager hierop te plaatsen is. Bij Slotloading steek je de datadrager in de optische drive.')) }}
                            </h5></th></tr>
                            <tr>
                                <td style="width:50%">Lade</td>
                                <td style="width:50%">Slot-in</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="brander_ladetype" value="1"></td>
                                <td><input type="radio" name="brander_ladetype" value="2"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <input class="myButton" type="submit" value="Onderdeel opslaan">
                    </div>
                {{ Form::close() }}
            @endif
        </div>
    </div>
@stop
@section('sidebar')
    <div class="sidebar col-md-2">
        <ul id="item_list">
            @if($powersupply_check == "-")
                <li><img src="images/unchecked.png" class="list_state", id="powersupply_state"/> Voeding</li>
            @else
                <li><img src="images/checked.png" class="list_state", id="powersupply_state"/> Voeding</li>
            @endif
            @if($processorcooler_check == "-")
                <li><img src="images/unchecked.png" class="list_state", id="processorcooler_state"/> Processor koeler</li>
            @else
                <li><img src="images/checked.png" class="list_state", id="processorcooler_state"/> Processor koeler</li>
            @endif
            @if($internalharddrive_check  == "-")
                <li><img src="images/unchecked.png" class="list_state", id="internalharddrive_state"/> Harde Schijf</li>
            @else
                <li><img src="images/checked.png" class="list_state", id="internalharddrive_state"/> Harde Schijf</li>
            @endif
            @if($soundcard_check == "-")
                <li><img src="images/unchecked.png" class="list_state", id="soundcard_state"/> Geluidskaart</li>
            @else
                <li><img src="images/checked.png" class="list_state", id="soundcard_state"/> Geluidskaart</li>
            @endif
            @if($pci_check == "-")
                <li><img src="images/unchecked.png" class="list_state", id="pci_state"/> PCI express</li>
            @else
                <li><img src="images/checked.png" class="list_state", id="pci_state"/> PCI express</li>
            @endif
            @if($videocard_check == "-")
                <li><img src="images/unchecked.png" class="list_state", id="videocard_state"/> Videokaart</li>
            @else
                <li><img src="images/checked.png" class="list_state", id="videocard_state"/> Videokaart</li>
            @endif
            @if($processor_check == "-")
                <li><img src="images/unchecked.png" class="list_state", id="processor_state"/> Processor</li>
            @else
                <li><img src="images/checked.png" class="list_state", id="processor_state"/> Processor</li>
            @endif
            @if($internalmemory_check == "-")
                <li><img src="images/unchecked.png" class="list_state", id="internalmemory_state"/> Intern geheugen</li>
            @else
                <li><img src="images/checked.png" class="list_state", id="internalmemory_state"/> Intern geheugen</li>
            @endif
            @if($motherboard_check == "-")
                <li><img src="images/unchecked.png" class="list_state", id="motherboard_state"/> Moederbord</li>
            @else
                <li><img src="images/checked.png" class="list_state", id="motherboard_state"/> Moederbord</li>
            @endif
            @if($casing_check == "-")
                <li><img src="images/unchecked.png" class="list_state", id="casing_state"/> Behuizing</li>
            @else
                <li><img src="images/checked.png" class="list_state", id="casing_state"/> Behuizing</li>
            @endif
            @if($ssd_check == "-")
                <li><img src="images/unchecked.png" class="list_state", id="ssd_state"/> SSD</li>
            @else
                <li><img src="images/checked.png" class="list_state", id="ssd_state"/> SSD</li>
            @endif
            @if($bluraydvd_check == "-")
                <li><img src="images/unchecked.png" class="list_state", id="bluraydvd_state"/> Blu-ray & DVD</li>
            @else
                <li><img src="images/checked.png" class="list_state", id="bluraydvd_state"/> Blu-ray & DVD</li>
            @endif
        </ul>
        <a href="awaiting_response" class="myButtonCreer">Creëer profiel</a>
    </div>
@stop