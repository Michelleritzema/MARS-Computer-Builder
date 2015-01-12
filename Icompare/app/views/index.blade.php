<?php
/**
 * Created by PhpStorm.
 * Made by: Anny & Randa & Michelle & Sander
 * Date: 12/12/2014
 */

session_start();
if (!Session::has('menuitem')) { Session::put('menuitem', 'powersupply'); }
if (!Session::has('cpu_p4')) { Session::put('cpu_p4', '0'); }
if (!Session::has('cpu_p8')) { Session::put('cpu_p8', '0'); }
if (!Session::has('cpu_p4+p4')) { Session::put('cpu_p4+p4', '-'); }
if (!Session::has('powersupply_modular')) { Session::put('powersupply_modular', '-'); }
if (!Session::has('powersupply_certificate')) { Session::put('powersupply_certificate', '-'); }
if (!Session::has('powersupply_brand1')) { Session::put('powersupply_brand1', '0'); }
if (!Session::has('powersupply_brand2')) { Session::put('powersupply_brand2', '0'); }
if (!Session::has('powersupply_brand3')) { Session::put('powersupply_brand3', '0'); }
if (!Session::has('powersupply_brand4')) { Session::put('powersupply_brand4', '0'); }
if (!Session::has('powersupply_brand5')) { Session::put('powersupply_brand5', '0'); }
if (!Session::has('pci_express_6pin')) { Session::put('pci_express_6pin', '-'); }
if (!Session::has('pci_express_6pin2pin')) { Session::put('pci_express_6pin2pin', '-'); }
if (!Session::has('powersupply_price_min')) { Session::put('powersupply_price_min', '-'); }
if (!Session::has('powersupply_price_max')) { Session::put('powersupply_price_max', '-'); }
if (!Session::has('powersupply_power_min')) { Session::put('powersupply_power_min', '-'); }
if (!Session::has('powersupply_power_max')) { Session::put('powersupply_power_max', '-'); }
if (!Session::has('s-ata_min')) { Session::put('s-ata_min', '-'); }
if (!Session::has('s-ata_max')) { Session::put('s-ata_max', '-'); }
if (!Session::has('processorcooler_brand1')) { Session::put('processorcooler_brand1', '0'); }
if (!Session::has('processorcooler_brand2')) { Session::put('processorcooler_brand2', '0'); }
if (!Session::has('processorcooler_brand3')) { Session::put('processorcooler_brand3', '0'); }
if (!Session::has('processorcooler_brand4')) { Session::put('processorcooler_brand4', '0'); }
if (!Session::has('processorcooler_brand5')) { Session::put('processorcooler_brand5', '0'); }
if (!Session::has('processorcooler_brand6')) { Session::put('processorcooler_brand6', '0'); }
if (!Session::has('processorcooler_brand7')) { Session::put('processorcooler_brand7', '0'); }
if (!Session::has('processorcooler_price_min')) { Session::put('processorcooler_price_min', '-'); }
if (!Session::has('processorcooler_price_max')) { Session::put('processorcooler_price_max', '-'); }
if (!Session::has('processorcooler_method')) { Session::put('processorcooler_method', '-'); }
if (!Session::has('processorcooler_diameter')) { Session::put('processorcooler_diameter', '-'); }
if (!Session::has('processorcooler_rotation_min')) { Session::put('processorcooler_rotation_min', '-'); }
if (!Session::has('processorcooler_rotation_max')) { Session::put('processorcooler_rotation_max', '-'); }
if (!Session::has('hdd_brand1')) { Session::put('hdd_brand1', '0'); }
if (!Session::has('hdd_brand2')) { Session::put('hdd_brand2', '0'); }
if (!Session::has('hdd_brand3')) { Session::put('hdd_brand3', '0'); }
if (!Session::has('hdd_brand4')) { Session::put('hdd_brand4', '0'); }
if (!Session::has('hdd_format')) { Session::put('hdd_format', '-'); }
if (!Session::has('hdd_storagecapacity1')) { Session::put('hdd_storagecapacity1', '0'); }
if (!Session::has('hdd_storagecapacity2')) { Session::put('hdd_storagecapacity2', '0'); }
if (!Session::has('hdd_storagecapacity3')) { Session::put('hdd_storagecapacity3', '0'); }
if (!Session::has('hdd_storagecapacity4')) { Session::put('hdd_storagecapacity4', '0'); }
if (!Session::has('hdd_storagecapacity5')) { Session::put('hdd_storagecapacity5', '0'); }
if (!Session::has('hdd_storagecapacity6')) { Session::put('hdd_storagecapacity6', '0'); }
if (!Session::has('hdd_storagecapacity7')) { Session::put('hdd_storagecapacity7', '0'); }
if (!Session::has('hdd_storagecapacity8')) { Session::put('hdd_storagecapacity8', '0'); }
if (!Session::has('hdd_connection')) { Session::put('hdd_connection', '-'); }
if (!Session::has('hdd_buffer')) { Session::put('hdd_buffer', '-'); }
if (!Session::has('hdd_speed')) { Session::put('hdd_speed', '-'); }
if (!Session::has('hdd_price_min')) { Session::put('hdd_price_min', '-'); }
if (!Session::has('hdd_price_max')) { Session::put('hdd_price_max', '-'); }
if (!Session::has('soundcard_brand1')) { Session::put('soundcard_brand1', '0'); }
if (!Session::has('soundcard_brand2')) { Session::put('soundcard_brand2', '0'); }
if (!Session::has('soundcard_sample')) { Session::put('soundcard_sample', '-'); }
if (!Session::has('soundcard_aiso')) { Session::put('soundcard_aiso', '-'); }
if (!Session::has('soundcard_port')) { Session::put('soundcard_port', '-'); }
if (!Session::has('soundcard_processor1')) { Session::put('soundcard_processor1', '0'); }
if (!Session::has('soundcard_processor2')) { Session::put('soundcard_processor2', '0'); }
if (!Session::has('soundcard_processor3')) { Session::put('soundcard_processor3', '0'); }
if (!Session::has('soundcard_processor4')) { Session::put('soundcard_processor4', '0'); }
if (!Session::has('soundcard_processor5')) { Session::put('soundcard_processor5', '0'); }
if (!Session::has('soundcard_processor6')) { Session::put('soundcard_processor6', '0'); }
if (!Session::has('soundcard_channel')) { Session::put('soundcard_channel', '-'); }
if (!Session::has('soundcard_headphone')) { Session::put('soundcard_headphone', '-'); }
if (!Session::has('soundcard_jack')) { Session::put('soundcard_jack', '-'); }
if (!Session::has('soundcard_price_min')) { Session::put('soundcard_price_min', '-'); }
if (!Session::has('soundcard_price_max')) { Session::put('soundcard_price_max', '-'); }
if (!Session::has('pci_usb')) { Session::put('pci_usb', '-'); }
if (!Session::has('pci_firewire')) { Session::put('pci_firewire', '-'); }
if (!Session::has('pci_sata')) { Session::put('pci_sata', '-'); }
if (!Session::has('pci_esata')) { Session::put('pci_esata', '-'); }
if (!Session::has('pci_price_min')) { Session::put('pci_price_min', '-'); }
if (!Session::has('pci_price_max')) { Session::put('pci_price_max', '-'); }

$menuitem = Session::get('menuitem');
$cpu_p4 = Session::get('cpu_p4');
//echo $menuitem . "<br>";

echo "<pre>";
echo "<h4>Sessie variabelen</h4>";
echo "Voeding: ";
echo Session::get('cpu_p4');
echo Session::get('cpu_p8');
echo Session::get('cpu_p4+p4');
echo Session::get('powersupply_modular');
echo Session::get('powersupply_certificate');
echo Session::get('powersupply_brand1');
echo Session::get('powersupply_brand2');
echo Session::get('powersupply_brand3');
echo Session::get('powersupply_brand4');
echo Session::get('powersupply_brand5');
echo Session::get('pci_express_6pin');
echo Session::get('pci_express_6pin2pin');
echo Session::get('powersupply_price_min');
echo Session::get('powersupply_price_max');
echo Session::get('powersupply_power_min');
echo Session::get('powersupply_power_max');
echo Session::get('s-ata_min');
echo Session::get('s-ata_max') . "<br>";
echo "Processor koeler: ";
echo Session::get('processorcooler_brand1');
echo Session::get('processorcooler_brand2');
echo Session::get('processorcooler_brand3');
echo Session::get('processorcooler_brand4');
echo Session::get('processorcooler_brand5');
echo Session::get('processorcooler_brand6');
echo Session::get('processorcooler_brand7');
echo Session::get('processorcooler_brand8');
echo Session::get('processorcooler_price_min');
echo Session::get('processorcooler_price_max');
echo Session::get('processorcooler_method');
echo Session::get('processorcooler_diameter');
echo Session::get('processorcooler_rotation_min');
echo Session::get('processorcooler_rotation_max') . "<br>";
echo "Harde schijf: ";
echo Session::get('hdd_brand1');
echo Session::get('hdd_brand2');
echo Session::get('hdd_brand3');
echo Session::get('hdd_brand4');
echo Session::get('hdd_format');
echo Session::get('hdd_storagecapacity1');
echo Session::get('hdd_storagecapacity2');
echo Session::get('hdd_storagecapacity3');
echo Session::get('hdd_storagecapacity4');
echo Session::get('hdd_storagecapacity5');
echo Session::get('hdd_storagecapacity6');
echo Session::get('hdd_storagecapacity7');
echo Session::get('hdd_storagecapacity8');
echo Session::get('hdd_connection');
echo Session::get('hdd_buffer');
echo Session::get('hdd_speed');
echo Session::get('hdd_price_min');
echo Session::get('hdd_price_max') . "<br>";
echo "Geluidskaart: ";
echo Session::get('soundcard_brand1');
echo Session::get('soundcard_brand2');
echo Session::get('soundcard_sample');
echo Session::get('soundcard_aiso');
echo Session::get('soundcard_port');
echo Session::get('soundcard_processor1');
echo Session::get('soundcard_processor2');
echo Session::get('soundcard_processor3');
echo Session::get('soundcard_processor4');
echo Session::get('soundcard_processor5');
echo Session::get('soundcard_processor6');
echo Session::get('soundcard_channel');
echo Session::get('soundcard_headphone');
echo Session::get('soundcard_jack');
echo Session::get('soundcard_price_min');
echo Session::get('soundcard_price_max') . "<br>";
echo "PCI express: ";
echo Session::get('pci_usb');
echo Session::get('pci_firewire');
echo Session::get('pci_sata');
echo Session::get('pci_esata');
echo Session::get('pci_price_min');
echo Session::get('pci_price_max');
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Icompare</title>
    {{ HTML::style('css/bootstrap.min.css'); }}
    {{ HTML::style('css/main.css'); }}
    {{ HTML::script('js/jquery-1.11.1.min.js'); }}
    {{ HTML::script('js/bootstrap.min.js'); }}
    {{ HTML::script('js/intro_accordion.js'); }}
    {{ HTML::script('js/slidersicompare.js'); }}
    {{ HTML::script('js/hidden_checkbox.js'); }}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>
<body>
<div class="container">
    <div class="banner">
        {{ HTML::image('images/banner_blue_shadow.png', 'Icompare banner', array('class' => 'banner_img')) }}
    </div>
    <div class="content col-md-10">
        <div class="intro_accordion">
            <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-1">Meer informatie over deze site
                    <span class="intro_arrow" href="#accordion-1"></span>
                </a>
                <div id="accordion-1" class="accordion-section-content">
                    <p>
                    <h4 style="font-weight: bold;">Welkom bij Icompare de nieuwste website voor het samen  stellen  van een pc<h4/>
                        <br/>
                        Wij van icompare  bieden de mogelijkheid om snel en zonder moeite je eigen
                        computers samen te stellen met een paar klikken heb je eigen custmized pc.
                        <br/>
                        <br/>
                        Kies bij elk component je gewenste eigenschappen
                        en stel een eigen profiel samen
                        druk op creeer profiel en krijg in  een oogopslag
                        te zien waar je  de onderdelen kunt kopen
                        <br/>
                        <br/>

                        wacht niet langer en stel snel je eigen pc samen
                        nu met icompare
                        <br/>
                        <br/>
                        <br/>
                        <p style="font-style: italic;"> *niet alle vinkjes hoeven aan gekruist te worden</p>
                   </p>
                </div>
            </div>
        </div>
        <div class="parts-buttons col-md-12">
            <a href="voeding">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/voeding.gif"></td></tr>
                    <tr class="link_row"><td class="link">Voeding</td></tr>
                </table>
            </a>
            <a href="processorkoeler">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/processorkoelers.gif"></td></tr>
                    <tr class="link_row"><td class="link">Processor<br>koeler</td></tr>
                </table>
            </a>
            <a href="internehardeschijf">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/internehardeschijven.gif"></td></tr>
                    <tr class="link_row"><td class="link">Harde schijf</td></tr>
                </table>
            </a>
            <a href="geluidskaart">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/geluidkaarten.gif"></td></tr>
                    <tr class="link_row"><td class="link">Geluidskaart</td></tr>
                </table>
            </a>
            <a href="PCI">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/PCI.gif"></td></tr>
                    <tr class="link_row"><td class="link">PCI express</td></tr>
                </table>
            </a>
            <a href="videokaart">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/videokaart.gif"></td></tr>
                    <tr class="link_row"><td class="link">Videokaart</td></tr>
                </table>
            </a>
        </div>
        <div class="parts-buttons col-md-12">
            <a href="processor">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/processor.gif"></td></tr>
                    <tr class="link_row"><td class="link">Processor</td></tr>
                </table>
            </a>
            <a href="internalmemory">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/internalmemory.gif"></td></tr>
                    <tr class="link_row"><td class="link">Intern<br>geheugen</td></tr>
                </table>
            </a>
            <a href="motherboard">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/motherboard.gif"></td></tr>
                    <tr class="link_row"><td class="link">Moederbord</td></tr>
                </table>
            </a>
            <a href="casing">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/casing.gif"></td></tr>
                    <tr class="link_row"><td class="link">Behuizing</td></tr>
                </table>
            </a>
            <a href="ssd">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/ssd.gif"></td></tr>
                    <tr class="link_row"><td class="link">SSD</td></tr>
                </table>
            </a>
            <a href="blu-raydvd">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/blu-rayDVD.gif"></td></tr>
                    <tr class="link_row"><td class="link">Blu-Ray<br>DVD</td></tr>
                </table>
            </a>
        </div>
        <div class="col-md-12 title">
            @if($menuitem == "motherboard")
                Moederbord
            @elseif($menuitem == "bluraydvd")
                Blu-Ray & DVD
            @elseif($menuitem == "ssd")
                SSD
            @elseif($menuitem == "soundcard")
                Geluidskaart
            @elseif($menuitem == "casing")
                Behuizing
            @elseif($menuitem == "powersupply")
                Voeding
            @elseif($menuitem == "PCI")
                PCI express {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                    'alt' => 'test', 'title'=> 'PCI Express kaarten zijn uitbreidingen die je snel en makkelijk kan inbouwen in een PC. Met een uitbreidingskaart creëer je extra interfaces om apparatuur op aan te sluiten of om een draadloze verbinding op te zetten. PCI express kaarten zijn er voor uitbreiding van het aantal poorten voor firewire, USB, SATA en voor netwerkverbindingen.')) }}
            @elseif($menuitem == "processorcooler")
                Processor koeler
            @elseif($menuitem == "internalharddrive")
                Interne harde schrijf
            @elseif($menuitem == "internalmemory")
                Intern geheugen
            @elseif($menuitem == "videocard")
                Videokaart
            @elseif($menuitem == "processor")
                Processor
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
                                <td><input type="checkbox" name="voeding_cpup4" value="1"></td>
                                <td><input type="checkbox" name="voeding_cpup8" value="1"></td>
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
                                <td><input type="radio" name="voeding_cpup4p4" value="1"></td>
                                <td><input type="radio" name="voeding_cpup4p4" value="2"></td>
                                <td><input type="radio" name="voeding_cpup4p4" value="3"></td>
                                <td><input type="radio" name="voeding_cpup4p4" value="4"></td>
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
                                <td><input type="radio" name="voeding_modulair" value="1"></td>
                                <td><input type="radio" name="voeding_modulair" value="2"></td>
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
                                <td><input type="radio" name="voeding_certificering" value="1"></td>
                                <td><input type="radio" name="voeding_certificering" value="2"></td>
                                <td><input type="radio" name="voeding_certificering" value="3"></td>
                            </tr>
                            <tr>
                                <td style="width:33.3%">80 PLUS Gold</td>
                                <td style="width:33.3%">Geen certificering</td>
                                <td style="width:33.3%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="voeding_certificering" value="4"></td>
                                <td><input type="radio" name="voeding_certificering" value="5"></td>
                                <td><input type="radio" name="voeding_certificering" value="6"></td>
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
                                <td><input type="checkbox" name="voeding_merk1" value="1"></td>
                                <td><input type="checkbox" name="voeding_merk2" value="1"></td>
                                <td><input type="checkbox" name="voeding_merk3" value="1"></td>
                                <td><input type="checkbox" name="voeding_merk4" value="1"></td>
                                <td><input type="checkbox" name="voeding_merk5" value="1"></td>
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
                                <td><input type="radio" name="voeding_pci6" value="1"></td>
                                <td><input type="radio" name="voeding_pci6" value="2"></td>
                                <td><input type="radio" name="voeding_pci6" value="3"></td>
                                <td><input type="radio" name="voeding_pci6" value="4"></td>
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
                                <td><input type="radio" name="voeding_pci6+2" value="1"></td>
                                <td><input type="radio" name="voeding_pci6+2" value="2"></td>
                                <td><input type="radio" name="voeding_pci6+2" value="3"></td>
                                <td><input type="radio" name="voeding_pci6+2" value="4"></td>
                                <td><input type="radio" name="voeding_pci6+2" value="5"></td>
                                <td><input type="radio" name="voeding_pci6+2" value="6"></td>
                            </tr>
                            <tr>
                                <td style="width:16.6%">6</td>
                                <td style="width:16.6%">7</td>
                                <td style="width:16.6%">8</td>
                                <td colspan="3" style="width:16.6%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="voeding_pci6+2" value="7"></td>
                                <td><input type="radio" name="voeding_pci6+2" value="8"></td>
                                <td><input type="radio" name="voeding_pci6+2" value="9"></td>
                                <td colspan="3"><input type="radio" name="voeding_pci6+2" value="10"></td>
                            </tr>
                        </table>
                        <div class="specification_table" id="voeding_cost">
                            <h5>Prijs<br><span class="annotation">(minimum - maximum)</span></h5>
                            <p><input class="slider_label" type="text" id="amount_voeding" readonly></p>
                            <div class="specification_table_slider" id="slider_powersupply_price"></div>
                        </div>
                        <div class="voeding_vermogen specification_table">
                            <h5>Vermogen (in Watt)<br><span class="annotation">(minimum - maximum)</span></h5>
                            <p><input class="slider_label" type="text" id="voeding_vermogen" readonly></p>
                            <div class="specification_table_slider" id="slider_powersupply_power"></div>
                        </div>
                        <div class="voeding_sata specification_table">
                            <h5>S-ATA aansluiting
                                {{ HTML::image('images/help.png', 'help', array('class' => 'help_icon',
                                'alt' => 'test', 'title'=> 'Een voedingsstekker voor een optische drive of harde schijf.')) }}
                                <br><span class="annotation">(minimum - maximum)</span>
                            </h5>
                              <p><input class="slider_label" type="text" id="voeding_sata" readonly></p>
                            <div class="specification_table_slider" id="slider_sata"></div>
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
                                <td><input type="checkbox" name="koeler_merk1" value="1"></td>
                                <td><input type="checkbox" name="koeler_merk2" value="1"></td>
                                <td><input type="checkbox" name="koeler_merk3" value="1"></td>
                                <td><input type="checkbox" name="koeler_merk4" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:25%">Crucial</td>
                                <td colspan="2" style="width:25%">Kingston</td>
                                <td style="width:25%">Scythe</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="koeler_merk5" value="1"></td>
                                <td colspan="2"><input type="checkbox" name="koeler_merk6" value="1"></td>
                                <td><input type="checkbox" name="koeler_merk7" value="1"></td>
                            </tr>
                        </table>
                        <div class="koeler_cost specification_table">
                            <h5>Prijs </h5><span class="annotation">(minimum - maximum)</span>
                            <p style="">
                                <input class="slider_label" type="text" id="amount_koeler" readonly>
                            </p>
                            <div class="specification_table_slider" id="slider_processorcooler_price"></div>
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
                                <td><input type="radio" name="koeler_type" value="1"></td>
                                <td><input type="radio" name="koeler_type" value="2"></td>
                            </tr>
                        </table>
                        <div class="koeler_diameterventilator specification_table">
                            <h5>Diameter ventilator</h5><span class="annotation">(in cm)</span>
                            <p><input class="slider_label" type="text" id="koeler_diameter" readonly></p>
                            <div class="specification_table_slider" id="slider_processorcooler_diameter"></div>
                        </div>
                        <div class="koeler_rotatiesnelheid specification_table">
                            <h5>Rotatiesnelheid </h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label" type="text" id="koeler_rotatie" readonly></p>
                            <div class="specification_table_slider" id="slider_processorcooler_rotation"></div>
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
                                <td><input type="checkbox" name="HDD_merk1" value="1"></td>
                                <td><input type="checkbox" name="HDD_merk2" value="1"></td>
                                <td><input type="checkbox" name="HDD_merk3" value="1"></td>
                                <td><input type="checkbox" name="HDD_merk4" value="1"></td>
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
                                <td><input type="radio" name="HDD_formaat" value="1"></td>
                                <td><input type="radio" name="HDD_formaat" value="2"></td>
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
                                <td><input type="checkbox" name="HDD_opslag1" value="1"></td>
                                <td><input type="checkbox" name="HDD_opslag2" value="1"></td>
                                <td><input type="checkbox" name="HDD_opslag3" value="1"></td>
                                <td><input type="checkbox" name="HDD_opslag4" value="1"></td>
                                <td><input type="checkbox" name="HDD_opslag5" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:20%">2 TB</td>
                                <td style="width:20%">3 TB</td>
                                <td style="width:20%">4 TB</td>
                                <td style="width:20%">5 TB</td>
                                <td style="width:20%">6 TB</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="HDD_opslag6" value="1"></td>
                                <td><input type="checkbox" name="HDD_opslag7" value="1"></td>
                                <td><input type="checkbox" name="HDD_opslag8" value="1"></td>
                                <td><input type="checkbox" name="HDD_opslag9" value="1"></td>
                                <td><input type="checkbox" name="HDD_opslag10" value="1"></td>
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
                                <td><input type="radio" name="HDD_aansluiting" value="1"></td>
                                <td><input type="radio" name="HDD_aansluiting" value="2"></td>
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
                                <td><input type="radio" name="HDD_cache" value="1"></td>
                                <td><input type="radio" name="HDD_cache" value="2"></td>
                                <td><input type="radio" name="HDD_cache" value="3"></td>
                            </tr>
                            <tr>
                                <td style="width:33.3%">64 MB</td>
                                <td style="width:33.3%">128 MB</td>
                                <td style="width:33.3%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="HDD_cache" value="4"></td>
                                <td><input type="radio" name="HDD_cache" value="5"></td>
                                <td><input type="radio" name="HDD_cache" value="6"></td>
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
                                <td><input type="radio" name="HDD_snelheid" value="1"></td>
                                <td><input type="radio" name="HDD_snelheid" value="2"></td>
                                <td><input type="radio" name="HDD_snelheid" value="3"></td>
                                <td><input type="radio" name="HDD_snelheid" value="4"></td>
                            </tr>
                            <tr>
                                <td style="width:25%">7200 rpm</td>
                                <td style="width:25%" colspan="2">Variabel</td>
                                <td style="width:25%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="HDD_snelheid" value="5"></td>
                                <td colspan="2"><input type="radio" name="HDD_snelheid" value="6"></td>
                                <td><input type="radio" name="HDD_snelheid" value="7"></td>
                            </tr>
                        </table>
                        <div class="specification_table" id="HDD_cost">
                            <h5>Prijs</h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label" type="text" id="amount_hdd" readonly></p>
                            <div class="specification_table_slider" id="slider_harddiskdrive_price"></div>
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
                                <td><input type="checkbox" name="geluid_merk1" value="1"></td>
                                <td><input type="checkbox" name="geluid_merk2" value="1"></td>
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
                                <td><input type="radio" name="geluid_sample" value="1"></td>
                                <td><input type="radio" name="geluid_sample" value="2"></td>
                                <td><input type="radio" name="geluid_sample" value="3"></td>
                                <td><input type="radio" name="geluid_sample" value="4"></td>
                                <td><input type="radio" name="geluid_sample" value="5"></td>
                                <td><input type="radio" name="geluid_sample" value="6"></td>
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
                                <td><input type="radio" name="geluid_sample" value="7"></td>
                                <td><input type="radio" name="geluid_sample" value="8"></td>
                                <td><input type="radio" name="geluid_sample" value="9"></td>
                                <td><input type="radio" name="geluid_sample" value="10"></td>
                                <td><input type="radio" name="geluid_sample" value="11"></td>
                                <td><input type="radio" name="geluid_sample" value="12"></td>
                            </tr>
                            <tr>
                                <td style="width:16.6%" colspan="6">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td colspan="6"><input type="radio" name="geluid_sample" value="13"></td>
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
                                <td><input type="radio" name="geluid_aiso" value="1"></td>
                                <td><input type="radio" name="geluid_aiso" value="2"></td>
                                <td><input type="radio" name="geluid_aiso" value="3"></td>
                                <td><input type="radio" name="geluid_aiso" value="4"></td>
                                <td><input type="radio" name="geluid_aiso" value="5"></td>
                                <td><input type="radio" name="geluid_aiso" value="6"></td>
                            </tr>
                            <tr>
                                <td style="width:16.6%" colspan="6">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td colspan="6"><input type="radio" name="geluid_aiso" value="7"></td>
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
                                <td><input id="GPU_producer1" type="checkbox" name="GPU_producer1" value="1"></td>
                                <td><input id="GPU_producer2" type="checkbox" name="GPU_producer2" value="1"></td>
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
                                <td><input type="radio" name="GPU_VGA1" value="1"></td>
                                <td><input type="radio" name="GPU_VGA2" value="2"></td>
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
                            <p><input class="slider_label" type="text" id="amount_GPU_prijs" readonly></p>
                            <div class="specification_table_slider" id="videocard_price"></div>
                        </div>
                        <div class="GPU_memory specification_table">
                            <h5>Gewenst videogeheugen</h5><span class="annotation">(minimum - maximum)</span>
                            <p><input class="slider_label" type="text" id="amount_GPU_geheugen" readonly></p>
                            <div class="specification_table_slider" id="videocard_memory"></div>
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
                            <tr>
                                <th colspan="2"><h5>Merk processor</h5></th>
                            </tr>
                            <tr>
                                <td style="width:50%">Intel</td>
                                <td style="width:50%">AMD</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="processor_brand1" value="1"></td>
                                <td><input type="checkbox" name="processor_brand2" value="2"></td>
                            </tr>
                        </table>
                        <table class="core_table">
                            <tr>
                                <th colspan="2"><h5>Aantal processorkernen</h5></th>
                            </tr>
                            <tr>
                                <td style="width:50%">Dual core</td>
                                <td style="width:50%">Quad core</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="processor_core1" value="1"></td>
                                <td><input type="checkbox" name="processor_core2" value="2"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">6-core</td>
                                <td style="width:50%">8-core</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="processor_core3" value="3"></td>
                                <td><input type="checkbox" name="processor_core4" value="4"></td>
                            </tr>
                        </table>
                        <div class="processor_cost specification_table">
                            <h5>Prijs </h5>
                            <span class="annotation">(minimum - maximum)</span>

                            <p style="%">
                                <input class="slider_label" type="text" id="amount" readonly
                                        >
                            </p>

                            <div class="specification_table_slider" id="slider-range2"></div>
                        </div>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="serie_table" cellspacing="1px">
                            <tr>
                                <th colspan="3"><h5>Processor serie</h5></th>
                            </tr>
                            <tr>
                                <td>A10</td>
                                <td>A6</td>
                                <td>A8</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="processor_serie" value="A10"></td>
                                <td><input type="checkbox" name="processor_serie" value="A6"></td>
                                <td><input type="checkbox" name="processor_serie" value="A8"></td>
                            </tr>
                            <tr>
                                <td>Core i3</td>
                                <td>Core i5</td>
                                <td>Core i7</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="processor_serie" value="Core i3"></td>
                                <td><input type="checkbox" name="processor_serie" value="Core i5"></td>
                                <td><input type="checkbox" name="processor_serie" value="Core i7"></td>
                            </tr>
                            <tr>
                                <td>FX</td>
                                <td>Pentium</td>
                                <td>Sempron</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="processor_serie" value="FX"></td>
                                <td><input type="checkbox" name="processor_serie" value="Pentium"></td>
                                <td><input type="checkbox" name="processor_serie" value="Sempron"></td>
                            </tr>
                        </table>
                        <div class="processor_speed">
                            <h5>Kloksnelheid </h5>
                            <span class="annotation">(minimum - maximum)</span>

                            <p>
                                <input class="slider_label" type="text" id="speed" readonly
                                        >
                            </p>

                            <div id="slider-range1"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input class="myButton" type="submit" value="Onderdeel opslaan">
                    </div>
                {{ Form::close() }}
            @elseif($menuitem == "internalmemory")
                {{ Form::open(array('action' => 'SessionController@determineSection')) }}
                    <div class="col-md-6 left_div">
                        <table class="RAM_geheugen_table">
                            <tr>
                                <th colspan="6"><h5>RAM-geheugen</h5></th>
                            </tr>
                            <tr>
                                <td>1 GB</td>
                                <td>2 GB</td>
                                <td>4 GB</td>
                                <td>8 GB</td>
                                <td>16 GB</td>
                                <td>32 GB</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="RAM-geheugen1" value="1"></td>
                                <td><input type="checkbox" name="RAM-geheugen2" value="2"></td>
                                <td><input type="checkbox" name="RAM-geheugen3" value="3"></td>
                                <td><input type="checkbox" name="RAM-geheugen4" value="4"></td>
                                <td><input type="checkbox" name="RAM-geheugen5" value="5"></td>
                                <td><input type="checkbox" name="RAM-geheugen6" value="6"></td>
                            </tr>
                        </table>
                        <table class="RAM_klok_table">
                            <tr>
                                <th colspan="4"><h5>Kloksnelheid geheugenmodule</h5></th>
                            </tr>
                            <tr>
                                <td>667 MHz</td>
                                <td>800 MHz</td>
                                <td>1333 MHz</td>
                                <td>1600 MHz</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="RAM-klok1" value="1"></td>
                                <td><input type="checkbox" name="RAM-klok2" value="2"></td>
                                <td><input type="checkbox" name="RAM-klok3" value="3"></td>
                                <td><input type="checkbox" name="RAM-klok4" value="4"></td>
                            </tr>
                        </table>
                        <table class="RAM_game_table" cellspacing="1px">
                            <tr>
                                <th colspan="4"><h5>Geheugen geschikt voor gaming</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>

                            </tr>
                            <tr>
                                <td><input type="radio" name="RAM_game1" value="1"></td>
                                <td><input type="radio" name="RAM_game2" value="1"></td>
                            </tr>
                        </table>
                        <div class="RAM_cost">
                            <h5>Prijs </h5>
                            <span class="annotation">(minimum - maximum)</span>

                            <p>

                                <input class="slider_label" type="text" id="amount_ram" readonly>
                            </p>

                            <div id="slider-range5"></div>
                        </div>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="RAM_geschikt_table" cellspacing="1px">
                            <tr>
                                <th colspan="4"><h5>Geheugen geschikt voor:</h5></th>
                            </tr>
                            <tr>
                                <td>Desktop</td>
                                <td>Laptop</td>
                                <td>NAS</td>
                                <td>Mac</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="RAM_geschikt1" value="1"></td>
                                <td><input type="checkbox" name="RAM_geschikt2" value="2"></td>
                                <td><input type="checkbox" name="RAM_geschikt3" value="3"></td>
                                <td><input type="checkbox" name="RAM_geschikt4" value="4"></td>
                            </tr>
                        </table>
                        <table class="RAM_type_table" cellspacing="1px">
                            <tr>
                                <th colspan="4"><h5>Geheugen type</h5></th>
                            </tr>
                            <tr>
                                <td>DDR2</td>
                                <td>DDR3</td>
                                <td>DIMM DDR3</td>
                                <td>DIMM DDR4</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="RAM_type1" value="1"></td>
                                <td><input type="radio" name="RAM_type2" value="1"></td>
                                <td><input type="radio" name="RAM_type3" value="1"></td>
                                <td><input type="radio" name="RAM_type4" value="1"></td>
                            </tr>
                        </table>
                        <table class="RAM_kanalen_table" cellspacing="1px">
                            <tr>
                                <th colspan="3"><h5>Aantal geheugenkanalen</h5></th>
                            </tr>
                            <tr>
                                <td>Single Channel</td>
                                <td>Dual Channel</td>
                                <td>Quad Channel</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="RAM_kanalen1" value="1"></td>
                                <td><input type="radio" name="RAM_kanalen2" value="1"></td>
                                <td><input type="radio" name="RAM_kanalen3" value="1"></td>
                            </tr>
                        </table>
                        <table class="RAM_Merk_table" cellspacing="1px">
                            <tr>
                                <th colspan="3"><h5>Merk RAM geheugen</h5></th>
                            </tr>
                            <tr>
                                <td>Corsair</td>
                                <td>Crucial</td>
                                <td>Kingston</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="RAM_merk1" value="1"></td>
                                <td><input type="checkbox" name="RAM_merk2" value="2"></td>
                                <td><input type="checkbox" name="RAM_merk3" value="3"></td>
                            </tr>
                            <tr>
                                <td>Qnap</td>
                                <td>Synology</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="RAM_merk4" value="4"></td>
                                <td><input type="checkbox" name="RAM_merk5" value="5"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <input class="myButton" type="submit" value="Onderdeel opslaan">
                    </div>
                {{ Form::close() }}
            @elseif($menuitem == "motherboard")
                {{ Form::open(array('action' => 'SessionController@determineSection')) }}
                    <div class="col-md-6 left_div">
                        <table class="Moederbord_merk_table">
                            <tr>
                                <th colspan="3"><h5>moederbord merk</h5></th>
                            </tr>
                            <tr>
                                <td>Asrock</td>
                                <td>Asus</td>
                                <td>MSI</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="moederbord_merk1" value="1"></td>
                                <td><input type="checkbox" name="moederbord_merk2" value="2"></td>
                                <td><input type="checkbox" name="moederbord_merk3" value="3"></td>
                            </tr>
                        </table>
                        <table class="Moederbord_formaat_table">
                            <tr>
                                <th colspan="3"><h5>Moederbord formaat</h5></th>
                            </tr>
                            <tr>
                                <td>ATX</td>
                                <td>E-ATX</td>
                                <td>Micro-ATX</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_merk4" value="1"></td>
                                <td><input type="radio" name="moederbord_merk5" value="1"></td>
                                <td><input type="radio" name="moederbord_merk6" value="1"></td>
                            </tr>
                            <tr>
                                <td>Mini-ITX</td>
                                <td>XL-ATX</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_merk4" value="1"></td>
                                <td><input type="radio" name="moederbord_merk5" value="1"></td>
                            </tr>
                        </table>
                        <table class="moederbord_wifi_table" cellspacing="1px">
                            <tr>
                                <th colspan="2"><h5>wifi</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_wifi1" value="1"></td>
                                <td><input type="radio" name="moederbord_wifi2" value="1"></td>
                            </tr>
                        </table>
                        <div class="moederbord_cost">
                            <h5>Prijs </h5>
                            <span class="annotation">(minimum - maximum)</span>


                            <p>

                                <input class="slider_label" type="text" id="amount_moederbord" readonly>
                            </p>

                            <div id="slider-range6"></div>
                        </div>
                        <div class="moederbord_usb">
                            <h5>aantal USB 3.0 poorten aanwezig</h5>

                            <p>
                                <label for="amount_usb">Aantal USB 3.0 poorten:</label>
                                <input class="slider_label" type="text" id="amount_usb" readonly>
                            </p>

                            <div id="slider-range7"></div>
                        </div>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="moederbord_geheugenslot_table" cellspacing="1px">
                            <tr>
                                <th colspan="3"><h5>aantal geheugenslots</h5></th>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>4</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="moederbord_geheugen1" value="1"></td>
                                <td><input type="checkbox" name="moederbord_geheugen2" value="2"></td>
                                <td><input type="checkbox" name="moederbord_geheugen3" value="3"></td>
                            </tr>
                        </table>
                        <table class="moederbord_HDMI_table" cellspacing="1px">
                            <tr>
                                <th colspan="2"><h5>HDMI</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_HDMI1" value="1"></td>
                                <td><input type="radio" name="moederbord_HDMI2" value="1"></td>
                            </tr>
                        </table>
                        <table class="moederbord_ethernet_table" cellspacing="1px">
                            <tr>
                                <th colspan="2"><h5>Ethernetpoorten</h5></th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_ethernet1" value="1"></td>
                                <td><input type="radio" name="moederbord_ethernet2" value="1"></td>
                            </tr>
                        </table>
                        <table class="moederbord_DVI_table" cellspacing="1px">
                            <tr>
                                <th colspan="2"><h5>DVI</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>

                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_DVI1" value="1"></td>
                                <td><input type="radio" name="moederbord_DVI2" value="1"></td>
                            </tr>
                        </table>
                        <table class="moederbord_VGA_table" cellspacing="1px">
                            <tr>
                                <th colspan="2"><h5>VGA-poort</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>

                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_VGA1" value="1"></td>
                                <td><input type="radio" name="moederbord_VGA2" value="1"></td>
                            </tr>
                        </table>
                        <table class="moederbord_displayport_table" cellspacing="1px">
                            <tr>
                                <th colspan="2"><h5>DisplayPort aanwezig</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>

                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_displayport1" value="1"></td>
                                <td><input type="radio" name="moederbord_displayport2" value="1"></td>
                            </tr>
                        </table>
                        <table class="moederbord_RAID_table" cellspacing="1px">
                            <tr>
                                <th colspan="4"><h5>RAID configuratie</h5></th>
                            </tr>
                            <tr>
                                <td>RAID-0</td>
                                <td>RAID-1</td>
                                <td>RAID-5</td>
                                <td>RAID-10</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="moederbord_raid1" value="1"></td>
                                <td><input type="checkbox" name="moederbord_raid2" value="2"></td>
                                <td><input type="checkbox" name="moederbord_raid3" value="3"></td>
                                <td><input type="checkbox" name="moederbord_raid4" value="4"></td>
                            </tr>
                        </table>
                        <table class="moederbord_audiokanalen_table" cellspacing="1px">
                            <tr>
                                <th colspan="2"><h5>Aantal audiokanalen</h5></th>
                            </tr>
                            <tr>
                                <td>5.1</td>
                                <td>7.1</td>

                            </tr>
                            <tr>
                                <td><input type="checkbox" name="moederbord_audiokanalen1" value="1"></td>
                                <td><input type="checkbox" name="moederbord_audiokanalen2" value="1"></td>
                            </tr>
                        </table>
                        <table class="moederbord_audioprocessor_table" cellspacing="1px">
                            <tr>
                                <th colspan="3"><h5>Audio processor</h5></th>
                            </tr>
                            <tr>
                                <td>Realtek ALC1150</td>
                                <td>SupremeFX</td>
                                <td>Realtek ALC892</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="moederbord_audiopro1" value="1"></td>
                                <td><input type="checkbox" name="moederbord_audiopro2" value="2"></td>
                                <td><input type="checkbox" name="moederbord_audiopro3" value="3"></td>
                            </tr>
                            <tr>
                                <td>ROG SupremeFX black</td>
                                <td>SupremeFX Impact</td>
                                <td>SupremeFX 2014</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="moederbord_audiopro4" value="4"></td>
                                <td><input type="checkbox" name="moederbord_audiopro5" value="5"></td>
                                <td><input type="checkbox" name="moederbord_audiopro6" value="6"></td>
                            </tr>
                        </table>
                        <table class="moederbord_geheugen_table" cellspacing="1px">
                            <tr>
                                <th colspan="3"><h5>Geheugen type</h5></th>
                            </tr>
                            <tr>
                                <td>DDR3</td>
                                <td>DIMM</td>
                                <td>DIMM DDR4</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="moederbord_geheugen1" value="1"></td>
                                <td><input type="checkbox" name="moederbord_geheugen2" value="2"></td>
                                <td><input type="checkbox" name="moederbord_geheugen3" value="3"></td>
                            </tr>
                        </table>
                        <table class="moederbord_msata_table" cellspacing="1px">
                            <tr>
                                <th colspan="2"><h5>mSATA-aansluiting aanwezig</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="moederbord_msata1" value="1"></td>
                                <td><input type="radio" name="moederbord_msata2" value="1"></td>
                            </tr>
                        </table>

                        <div class="moederbord_SATA300">
                            <h5>SATA 300</h5>

                            <p>
                                <label for="amount_sata300">Aantal SATA 300 aansluitingen:</label>
                                <input class="slider_label" type="text" id="amount_sata300" readonly>
                            </p>

                            <div id="slider-range8"></div>
                        </div>
                        <div class="moederbord_SATA600">
                            <h5>SATA 600</h5>

                            <p>
                                <label for="amount_sata600">Aantal SATA 600 aansluitingen:</label>
                                <input class="slider_label" type="text" id="amount_sata600" readonly>
                            </p>

                            <div id="slider-range9"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input class="myButton" type="submit" value="Onderdeel opslaan">
                    </div>
                {{ Form::close() }}
            @elseif($menuitem == "casing")
                {{ Form::open(array('action' => 'SessionController@determineSection')) }}
                    <div class="col-md-6 left_div">
                        <table class="behuizing_formaat_table">
                            <tr>
                                <th colspan="3"><h5>formaat moederbord</h5></th>
                            </tr>
                            <tr>
                                <td>ATX</td>
                                <td>DTX</td>
                                <td>E-ATX</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="behuizing_formaat1" value="ATX"></td>
                                <td><input type="checkbox" name="behuizing_formaat2" value="DTX"></td>
                                <td><input type="checkbox" name="behuizing_formaat3" value="E-ATX"></td>
                            </tr>
                            <tr>
                                <td>Micro-ATX</td>
                                <td>Mini-ITX</td>
                                <td>XL-ATX</td>
                            </tr>
                        </table>
                        <table class="behuizing_computer_table">
                            <tr>
                                <th colspan="3"><h5>computerbehuizing</h5></th>
                            </tr>
                            <tr>
                                <td>Cube</td>
                                <td>Full Tower</td>
                                <td>HTPC</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="behuizing_computer1" value="Cube"></td>
                                <td><input type="checkbox" name="behuizing_computer2" value="Full Tower"></td>
                                <td><input type="checkbox" name="behuizing_computer3" value="HTPC"></td>
                            </tr>
                            <tr>
                                <td>Miditower</td>
                                <td>Mini Tower</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="behuizing_computer4" value="Miditower"></td>
                                <td><input type="checkbox" name="behuizing_computer5" value="Mini tower"></td>
                            </tr>
                        </table>
                        <table class="behuizing_fan_table" cellspacing="1px">
                            <tr>
                                <th colspan="2"><h5>fan controller</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="behuizing_fan1" value="1"></td>
                                <td><input type="radio" name="behuizing_fan2" value="1"></td>
                            </tr>
                        </table>
                        <table class="behuizing_stof_table" cellspacing="1px">
                            <tr>
                                <th colspan="2"><h5>stoffilter</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="behuizing_stof1" value="1"></td>
                                <td><input type="radio" name="behuizing_stof2" value="1"></td>
                            </tr>
                        </table>
                        <table class="behuizing_water_table" cellspacing="1px">
                            <tr>
                                <th colspan="2"><h5>waterkoeling aanwezig</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="behuizing_water1" value="1"></td>
                                <td><input type="radio" name="behuizing_water2" value="1"></td>
                            </tr>
                        </table>
                        <div class="behuizing_prijs">
                            <h5>Prijs </h5>
                            <span class="annotation">(minimum - maximum)</span>

                            <p>

                                <input class="slider_label" type="text" id="amount_behuizing" readonly>
                            </p>

                            <div id="slider-range14"></div>
                        </div>
                        <div class="behuizing_uitbreiding">
                            <h5>Schrijfsnelheid</h5>

                            <p>
                                <label for="amount_behuizing_uitbreiding">Aantal uitbreidingssloten:</label>
                                <br/>
                                <input class="slider_label" type="text" id="amount_behuizing_uitbreiding" readonly>
                            </p>

                            <div id="slider-range18"></div>
                        </div>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="behuizing_merk_table" cellspacing="1px">
                            <tr>
                                <th colspan="5"><h5>behuizing merk</h5></th>
                            </tr>
                            <tr>
                                <td>Antec</td>
                                <td>CoolerMaster</td>
                                <td>Corsair</td>
                                <td>Fractal Design</td>
                                <td>SilverStone</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="behuizing_merk1" value="1"></td>
                                <td><input type="checkbox" name="behuizing_merk2" value="2"></td>
                                <td><input type="checkbox" name="behuizing_merk3" value="3"></td>
                                <td><input type="checkbox" name="behuising_merk4" value="4"></td>
                                <td><input type="checkbox" name="behuising_merk5" value="5"></td>
                            </tr>
                        </table>
                        <table class="behuizing_led_table" cellspacing="1px">
                            <tr>
                                <th colspan="2"><h5> LED display aanwezig</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="behuizing_led1" value="1"></td>
                                <td><input type="radio" name="behuizing_led2" value="1"></td>
                            </tr>
                        </table>
                        <table class="behuizing_Ruisreductie_table" cellspacing="1px">
                            <tr>
                                <th colspan="2"><h5>Ruisreductie aanwezig</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="behuizing_ruis1" value="1"></td>
                                <td><input type="radio" name="behuizing_ruis2" value="1"></td>
                            </tr>
                        </table>
                        <table class="behuizing_Geluid_table" cellspacing="1px">
                            <tr>
                                <th colspan="2"><h5>Geluidsdempende matten aanwezig</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="behuizing_geluid1" value="1"></td>
                                <td><input type="radio" name="behuizing_geluid2" value="1"></td>
                            </tr>
                        </table>
                        <table class="behuizing_paneel_table" cellspacing="1px">
                            <tr>
                                <th colspan="2"><h5>Paneeldeur aanwezig</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="behuizing_paneel1" value="1"></td>
                                <td><input type="radio" name="behuizing_paneel2" value="1"></td>
                            </tr>
                        </table>
                        <table class="behuizing_kleur_table" cellspacing="1px">
                            <tr>
                                <th colspan="4"><h5>kleur behuizing</h5></th>
                            </tr>
                            <tr>
                                <td>Grijs</td>
                                <td>Oranje</td>
                                <td>Wit</td>
                                <td>Zwart</td>
                                <td>Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="behuizing_kleur1" value="1"></td>
                                <td><input type="radio" name="behuizing_kleur2" value="1"></td>
                                <td><input type="radio" name="behuizing_kleur3" value="1"></td>
                                <td><input type="radio" name="behuizing_kleur4" value="1"></td>
                                <td><input type="radio" name="behuizing_kleur5" value="1"></td>
                            </tr>
                        </table>
                        <table class="behuizing_materiaal_table" cellspacing="1px">
                            <tr>
                                <th colspan="3"><h5>Materiaal behuizing</h5></th>
                            </tr>
                            <tr>
                                <td>Aluminium</td>
                                <td>Kunststof</td>
                                <td>Plastic</td>
                                <td>Polymeer</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="behuizing_materiaal1" value="1"></td>
                                <td><input type="radio" name="behuizing_materiaal2" value="1"></td>
                                <td><input type="radio" name="behuizing_materiaal3" value="1"></td>
                                <td><input type="radio" name="behuizing_materiaal4" value="1"></td>
                            </tr>
                            <tr>
                                <td>Rubber</td>
                                <td>Staal</td>
                                <td>Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="behuizing_materiaal5" value="1"></td>
                                <td><input type="radio" name="behuizing_materiaal6" value="1"></td>
                                <td><input type="radio" name="behuizing_materiaal7" value="1"></td>
                            </tr>
                        </table>
                        <table class="behuizing_usb2_table" cellspacing="1px">
                            <tr>
                                <th colspan="5"><h5>aantal USB 2.0 poorten aanwezig</h5></th>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="behuizing_usb21" value="1"></td>
                                <td><input type="checkbox" name="behuizing_usb22" value="2"></td>
                                <td><input type="checkbox" name="behuizing_usb23" value="3"></td>
                                <td><input type="checkbox" name="behuizing_usb24" value="4"></td>
                                <td><input type="checkbox" name="behuizing_usb25" value="5"></td>
                            </tr>
                        </table>
                        <table class="behuizing_usb3_table" cellspacing="1px">
                            <tr>
                                <th colspan="5"><h5>aantal USB 3.0 poorten aanwezig</h5></th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="behuizing_usb31" value="1"></td>
                                <td><input type="checkbox" name="behuizing_usb32" value="2"></td>
                            </tr>
                        </table>
                        <table class="behuizing_firewire_table" cellspacing="1px">
                            <tr>
                                <th colspan="5"><h5>firewire poorten</h5></th>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="behuizing_firewire1" value="1"></td>
                                <td><input type="radio" name="behuizing_firewire2" value="1"></td>
                            </tr>
                        </table>
                        <table class="behuizing_eSATA_table" cellspacing="1px">
                            <tr>
                                <th colspan="5"><h5>eSATA aansluitingen</h5></th>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="behuizing_esata1" value="1"></td>
                                <td><input type="radio" name="behuizing_esata2" value="1"></td>
                            </tr>
                        </table>
                        <div class="behuizing_3,5bay">
                            <h5>Schrijfsnelheid</h5>

                            <p>
                                <label for="amount_behuizing_3bay">3,5'' bays:</label>
                                <br/>
                                <input class="slider_label" type="text" id="amount_behuizing_3bay" readonly>
                            </p>

                            <div id="slider-range15"></div>
                        </div>
                        <div class="behuizing_2,5bay">
                            <h5>Schrijfsnelheid</h5>

                            <p>
                                <label for="amount_behuizing_2bay">2,5'' bays:</label>
                                <br/>
                                <input class="slider_label" type="text" id="amount_behuizing_2bay" readonly>
                            </p>

                            <div id="slider-range16"></div>
                        </div>
                        <div class="behuizing_5,25bay">
                            <h5>Schrijfsnelheid</h5>

                            <p>
                                <label for="amount_behuizing_5bay">5,25'' bays:</label>
                                <br/>
                                <input class="slider_label" type="text" id="amount_behuizing_5bay" readonly>
                            </p>

                            <div id="slider-range17"></div>
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
                            <tr>
                                <th colspan="5"><h5>Opslag capaciteit</h5></th>
                            </tr>
                            <tr>
                                <td>30 GB</td>
                                <td>60 GB</td>
                                <td>64 GB</td>
                                <td>80 GB</td>
                                <td>120 GB</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SDD_opslag1" value="1"></td>
                                <td><input type="checkbox" name="SDD_opslag2" value="2"></td>
                                <td><input type="checkbox" name="SDD_opslag3" value="3"></td>
                                <td><input type="checkbox" name="SDD_opslag4" value="4"></td>
                                <td><input type="checkbox" name="SDD_opslag5" value="5"></td>
                            </tr>
                            <tr>
                                <td>128 GB</td>
                                <td>180 GB</td>
                                <td>240 GB</td>
                                <td>250 GB</td>
                                <td>256 GB</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SDD_opslag6" value="6"></td>
                                <td><input type="checkbox" name="SDD_opslag7" value="7"></td>
                                <td><input type="checkbox" name="SDD_opslag8" value="8"></td>
                                <td><input type="checkbox" name="SDD_opslag9" value="9"></td>
                                <td><input type="checkbox" name="SDD_opslag10" value="10"></td>
                            </tr>
                            <tr>
                                <td>480 GB</td>
                                <td>500 GB</td>
                                <td>512 GB</td>
                                <td>960 GB</td>
                                <td>1 TB</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SDD_opslag11" value="11"></td>
                                <td><input type="checkbox" name="SDD_opslag12" value="12"></td>
                                <td><input type="checkbox" name="SDD_opslag13" value="13"></td>
                                <td><input type="checkbox" name="SDD_opslag14" value="14"></td>
                                <td><input type="checkbox" name="SDD_opslag15" value="15"></td>
                            </tr>
                        </table>
                        <table class="SDD_formaat_table">
                            <tr>
                                <th colspan="5" ></th>
                                    <h5>formaat</h5>
                            </tr>
                            <tr>
                                <td>2,5 inch</td>
                                <td>mSATA</td>
                                <td>M.2</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="SDD_formaat1" value="1"></td>
                                <td><input type="radio" name="SDD_formaat2" value="1"></td>
                                <td><input type="radio" name="SDD_formaat3" value="1"></td>
                            </tr>
                        </table>
                        <div class="SSD_cost">
                            <h5>Prijs </h5>
                            <span class="annotation">(minimum - maximum)</span>

                            <p>

                                <input class="slider_label" type="text" id="amount_ssd" readonly>
                            </p>

                            <div id="slider-range11"></div>
                        </div>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="SDD_merk_table" cellspacing="1px">
                            <tr>

                                    <h5>SSD merk</h5>
                            </tr>
                            <tr>
                                <td>AMD</td>
                                <td>Crucial</td>
                                <td>Intel</td>
                                <td>Kingston</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SSD_merk1" value="1"></td>
                                <td><input type="checkbox" name="SSD_merk2" value="2"></td>
                                <td><input type="checkbox" name="SSD_merk3" value="3"></td>
                                <td><input type="checkbox" name="SSD_merk4" value="4"></td>
                            </tr>
                            <tr>
                                <td>OCZ</td>
                                <td>Samsung</td>
                                <td>SanDisk</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SSD_merk5" value="5"></td>
                                <td><input type="checkbox" name="SSD_merk6" value="6"></td>
                                <td><input type="checkbox" name="SSD_merk7" value="7"></td>
                            </tr>
                        </table>
                        <table class="SSD_controller_table" cellspacing="1px">
                            <tr>

                                    <h5>SSD-controller</h5>

                            </tr>
                            <tr>
                                <td>Indilinx</td>
                                <td>Intel</td>
                                <td>Marvell</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SSD_controller1" value="1"></td>
                                <td><input type="checkbox" name="SSD_controller2" value="2"></td>
                                <td><input type="checkbox" name="SSD_controller3" value="3"></td>

                            </tr>
                            <tr>
                                <td>Samsung</td>
                                <td>SandForce</td>
                                <td>Phison</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SSD_controller1" value="4"></td>
                                <td><input type="checkbox" name="SSD_controller2" value="5"></td>
                                <td><input type="checkbox" name="SSD_controller4" value="6"></td>
                            </tr>
                        </table>
                        <table class="SSD_soort_table" cellspacing="1px">
                            <tr>
                               <h5>Soort geheugen</h5>
                            </tr>
                            <tr>
                                <td>Multi Level Cell (MLC)</td>
                                <td>Triple Level Cell (TLC)</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="SSD_soort1" value="1"></td>
                                <td><input type="radio" name="SSD_soort2" value="1"></td>
                            </tr>
                        </table>
                        <div class="SSD_schrijf">
                            <h5>Schrijfsnelheid</h5>
                            <span class="annotation">(minimum - maximum)</span>

                            <p>

                                <input class="slider_label" type="text" id="amount_ssd_schrijf" readonly>
                            </p>

                            <div id="slider-range12"></div>
                        </div>
                        <div class="SSD_lees">
                            <h5>Leessnelheid</h5>
                            <span class="annotation">(minimum - maximum)</span>

                            <p>

                                <input class="slider_label" type="text" id="amount_ssd_lees" readonly>
                            </p>

                            <div id="slider-range13"></div>
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
                            <tr>
                                <th colspan="3"><h5>Brander merk</h5></th>
                            </tr>
                            <tr>
                                <td>Asus</td>
                                <td>Freecom</td>
                                <td>Apple</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="brander_merk1" value="1"></td>
                                <td><input type="checkbox" name="brander_merk2" value="2"></td>
                                <td><input type="checkbox" name="brander_merk3" value="3"></td>
                            </tr>
                            <tr>
                                <td>LG</td>
                                <td>Samsung</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="brander_merk4" value="4"></td>
                                <td><input type="checkbox" name="brander_merk5" value="5"></td>
                            </tr>
                        </table>
                        <table class="brander_type_table">
                            <tr>
                                <th colspan="2"><h5>Driver type</h5></th>
                            </tr>
                            <tr>
                                <td>Intern</td>
                                <td>Extern</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="brander_type1" value="1"></td>
                                <td><input type="radio" name="brander_type2" value="1"></td>
                            </tr>
                        </table>
                        <div class="brander_cost">
                            <h5>Prijs </h5>
                            <span class="annotation">(minimum - maximum)</span>

                            <p>
                                <input class="slider_label" type="text" id="amount_brander" readonly ">
                            </p>

                            <div id="slider-range25"></div>
                        </div>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="brander_speelt_table">
                            <tr>
                                <th colspan="4"><h5>Speelt van disc</h5></th>
                            </tr>
                            <tr>
                                <td>Blu-ray</td>
                                <td>DVD</td>
                                <td>CD</td>
                                <td>Floppy</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="brander_speelt1" value="1"></td>
                                <td><input type="checkbox" name="brander_speelt2" value="2"></td>
                                <td><input type="checkbox" name="brander_speelt3" value="3"></td>
                                <td><input type="checkbox" name="brander_speelt4" value="4"></td>
                            </tr>
                        </table>
                        <table class="brander_besturing_table">
                            <tr>
                                <th colspan="2"><h5>Besturingsysteem</h5></th>
                            </tr>
                            <tr>
                                <td>Windows</td>
                                <td>Mac OS X</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="brander_besturing1" value="1"></td>
                                <td><input type="checkbox" name="brander_besturing2" value="2"></td>
                            </tr>
                        </table>
                        <table class="brander_ladetype_table">
                            <tr>
                                <th colspan="2"><h5>Type lade</h5></th>
                            </tr>
                            <tr>
                                <td>Lade</td>
                                <td>Slot-in</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="brander_ladetype1" value="1"></td>
                                <td><input type="radio" name="brander_ladetype2" value="1"></td>
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
    <div class="sidebar col-md-2">
        <input type="submit" value="Creëer profiel" id="create_profile">
    </div>
</div>
</body>
</html>