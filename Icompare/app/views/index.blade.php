<?php
/**
 * Created by PhpStorm.
 * Made by: Anny & Randa & Michelle & Sander
 * Date: 12/12/2014
 * Time: 22:15
 */
session_start();
if (!Session::has('menuitem')) {
    Session::put('menuitem', 'powersupply');
}
$menuitem = Session::get('menuitem');
//echo $menuitem;
//var_dump($menuitem);
?>

<!DOCTYPE html>
<html lang="nl">
<html>
<head>
    <meta charset="UTF-8">
    <title>Icompare</title>
    {{ HTML::style('css/bootstrap.min.css'); }}
    {{ HTML::style('css/main.css'); }}
    {{ HTML::script('js/jquery-1.11.1.min.js'); }}
    {{ HTML::script('js/bootstrap.min.js'); }}
    {{ HTML::script('js/intro_accordion.js'); }}
    {{ HTML::script('js/slidersicompare.js'); }}
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
                    <!--{{ HTML::image('images/arrow_down.png', 'intro arrow', array('id' => 'intro_arrow_span')) }}-->
                </a>

                <div id="accordion-1" class="accordion-section-content">
                    <p>
                        Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod
                        ultrices.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent
                        nulla mi,
                        rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis. Duis
                        congue
                        ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet, aliquet pulvinar erat.
                        Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi, et placerat tellus tempor
                        vitae.
                    </p>
                </div>
            </div>
        </div>
        <div class="parts-buttons col-md-12">
            <a href="voeding">
                <table class="col-xs-2">
                    <tr>
                        <td class="link_image"><img src="images/voeding.gif"></td>
                    </tr>
                    <tr class="link_row">
                        <td class="link">Voeding</td>
                    </tr>
                </table>
            </a>
            <a href="processorkoeler">
                <table class="col-xs-2">
                    <tr>
                        <td class="link_image"><img src="images/processorkoelers.gif"></td>
                    </tr>
                    <tr class="link_row">
                        <td class="link">Processor<br>koeler</td>
                    </tr>
                </table>
            </a>
            <a href="internehardeschijf">
                <table class="col-xs-2">
                    <tr>
                        <td class="link_image"><img src="images/internehardeschijven.gif"></td>
                    </tr>
                    <tr class="link_row">
                        <td class="link">Harde schijf</td>
                    </tr>
                </table>
            </a>
            <a href="geluidskaart">
                <table class="col-xs-2">
                    <tr>
                        <td class="link_image"><img src="images/geluidkaarten.gif"></td>
                    </tr>
                    <tr class="link_row">
                        <td class="link">Geluidskaart</td>
                    </tr>
                </table>
            </a>
            <a href="PCI">
                <table class="col-xs-2">
                    <tr>
                        <td class="link_image"><img src="images/PCI.gif"></td>
                    </tr>
                    <tr class="link_row">
                        <td class="link">PCI express</td>
                    </tr>
                </table>
            </a>
            <a href="videokaart">
                <table class="col-xs-2">
                    <tr>
                        <td class="link_image"><img src="images/videokaart.gif"></td>
                    </tr>
                    <tr class="link_row">
                        <td class="link">Videokaart</td>
                    </tr>
                </table>
            </a>
        </div>
        <div class="parts-buttons col-md-12">
            <a href="processor">
                <table class="col-xs-2">
                    <tr>
                        <td class="link_image"><img src="images/processor.gif"></td>
                    </tr>
                    <tr class="link_row">
                        <td class="link">Processor</td>
                    </tr>
                </table>
            </a>
            <a href="internalmemory">
                <table class="col-xs-2">
                    <tr>
                        <td class="link_image"><img src="images/internalmemory.gif"></td>
                    </tr>
                    <tr class="link_row">
                        <td class="link">Intern<br>geheugen</td>
                    </tr>
                </table>
            </a>
            <a href="motherboard">
                <table class="col-xs-2">
                    <tr>
                        <td class="link_image"><img src="images/motherboard.gif"></td>
                    </tr>
                    <tr class="link_row">
                        <td class="link">Moederbord</td>
                    </tr>
                </table>
            </a>
            <a href="casing">
                <table class="col-xs-2">
                    <tr>
                        <td class="link_image"><img src="images/casing.gif"></td>
                    </tr>
                    <tr class="link_row">
                        <td class="link">Behuizing</td>
                    </tr>
                </table>
            </a>
            <a href="ssd">
                <table class="col-xs-2">
                    <tr>
                        <td class="link_image"><img src="images/ssd.gif"></td>
                    </tr>
                    <tr class="link_row">
                        <td class="link">SSD</td>
                    </tr>
                </table>
            </a>
            <a href="blu-raydvd">
                <table class="col-xs-2">
                    <tr>
                        <td class="link_image"><img src="images/blu-rayDVD.gif"></td>
                    </tr>
                    <tr class="link_row">
                        <td class="link">Blu-Ray<br>DVD</td>
                    </tr>
                </table>
            </a>
        </div>
        <div class="col-md-12 title">Processor</div>
        <form>
            <div class="col-md-12 specification">
                <div class="col-md-6 left_div">
                    @if($menuitem == "motherboard")
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
                            <td><input type="checkbox" name="moederbord_merk1" value="Asrock"></td>
                            <td><input type="checkbox" name="moederbord_merk2" value="Asus"></td>
                            <td><input type="checkbox" name="moederbord_merk3" value="MSI"></td>
                        </tr>
                    </table>
                    <table class="Moederbord_formaat_table">
                        <tr>
                            <td colspan="3"><h5>Moederbord formaat</h5></td>
                        </tr>
                        <tr>
                            <td>ATX</td>
                            <td>E-ATX</td>
                            <td>Micro-ATX</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="moederbord_merk4" value="ATX"></td>
                            <td><input type="checkbox" name="moederbord_merk5" value="E-ATX"></td>
                            <td><input type="checkbox" name="moederbord_merk6" value="Micro-ATX"></td>
                        </tr>
                        <tr>
                            <td>Mini-ITX</td>
                            <td>XL-ATX</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="moederbord_merk4" value="Mini-ITX"></td>
                            <td><input type="checkbox" name="moederbord_merk5" value="XL-ATX"></td>
                        </tr>
                    </table>
                    <div class="moederbord_cost" >
                        <h5>Prijs (minimum - maximum)</h5>
                        <p>
                            <label for="amount_moederbord" >prijs (Minimum - Maximum):</label>
                            <input type="text" id="amount_moederbord" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range6"></div>
                    </div>
                    <table class="moederbord_geheugenslot_table" cellspacing="1px">
                        <tr>
                            <td colspan="3"><h5>aantal geheugenslots</h5></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>4</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="moederbord_geheugen1" value="2"></td>
                            <td><input type="checkbox" name="moederbord_geheugen2" value="4"></td>
                            <td><input type="checkbox" name="moederbord_geheugen3" value="8"></td>
                        </tr>
                    </table>
                    <table class="moederbord_wifi_table" cellspacing="1px">
                        <tr>
                            <td colspan="2"><h5>wifi</h5></td>
                        </tr>
                        <tr>
                            <td>Ja</td>
                            <td>Nee</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="moederbord_wifi1" value="Ja"></td>
                            <td><input type="checkbox" name="moederbord_wifi2" value="Nee"></td>
                        </tr>
                    </table>
                    <table class="moederbord_HDMI_table" cellspacing="1px">
                        <tr>
                            <td colspan="2"><h5>HDMI</h5></td>
                        </tr>
                        <tr>
                            <td>Ja</td>
                            <td>Nee</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="moederbord_HDMI1" value="Ja"></td>
                            <td><input type="checkbox" name="moederbord_HDMI2" value="Nee"></td>
                        </tr>
                    </table>
                    <table class="moederbord_ethernet_table" cellspacing="1px">
                        <tr>
                            <td colspan="2"><h5>Ethernetpoorten</h5></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="moederbord_ethernet1" value="1"></td>
                            <td><input type="checkbox" name="moederbord_ethernet2" value="2"></td>
                        </tr>
                    </table>
                    <table class="moederbord_DVI_table" cellspacing="1px">
                        <tr>
                            <td colspan="2"><h5>DVI</h5></td>
                        </tr>
                        <tr>
                            <td>Ja</td>
                            <td>Nee</td>

                        </tr>
                        <tr>
                            <td><input type="checkbox" name="moederbord_DVI1" value="Ja"></td>
                            <td><input type="checkbox" name="moederbord_DVI2" value="Nee"></td>
                        </tr>
                    </table>
                    <table class="moederbord_VGA_table" cellspacing="1px">
                        <tr>
                            <td colspan="2"><h5>VGA-poort</h5></td>
                        </tr>
                        <tr>
                            <td>Ja</td>
                            <td>Nee</td>

                        </tr>
                        <tr>
                            <td><input type="checkbox" name="moederbord_VGA1" value="Ja"></td>
                            <td><input type="checkbox" name="moederbord_VGA2" value="Nee"></td>
                        </tr>
                    </table>
                    @elseif($menuitem == "bluraydvd")
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
                                <td><input type="checkbox" name="brander_merk1" value="Asus"></td>
                                <td><input type="checkbox" name="brander_merk2" value="Freecom"></td>
                                <td><input type="checkbox" name="brander_merk3" value="Apple"></td>
                            </tr>
                            <tr>
                                <td>LG</td>
                                <td>Samsung</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="brander_merk4" value="LG"></td>
                                <td><input type="checkbox" name="brander_merk5" value="Samsung"></td>
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
                                <td><input type="checkbox" name="brander_type1" value="Intern"></td>
                                <td><input type="checkbox" name="brander_type2" value="Extern"></td>
                            </tr>
                        </table>
                        <div class="brander_cost" >
                            <h5>Prijs (minimum - maximum)</h5>
                            <p>
                                <input type="text" id="amount_brander" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </p>
                            <div id="slider-range25"></div>
                        </div>

                    @elseif($menuitem == "ssd")
                        <table class="SDD_merk_table" cellspacing="1px">
                            <tr>
                                <td colspan="4"><h5>SSD merk</h5></td>
                            </tr>
                            <tr>
                                <td>AMD</td>
                                <td>Crucial</td>
                                <td>Intel</td>
                                <td>Kingston</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SSD_merk1" value="AMD"></td>
                                <td><input type="checkbox" name="SSD_merk2" value="Crucial"></td>
                                <td><input type="checkbox" name="SSD_merk3" value="Intel"></td>
                                <td><input type="checkbox" name="SSD_merk4" value="Kingston"></td>
                            </tr>
                            <tr>
                                <td>OCZ</td>
                                <td>Samsung</td>
                                <td>SanDisk</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SSD_merk5" value="OCZ"></td>
                                <td><input type="checkbox" name="SSD_merk6" value="Samsung"></td>
                                <td><input type="checkbox" name="SSD_merk7" value="SanDisk"></td>
                            </tr>
                        </table>
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
                                <td><input type="checkbox" name="SDD_opslag1" value="30 GB"></td>
                                <td><input type="checkbox" name="SDD_opslag2" value="60 GB"></td>
                                <td><input type="checkbox" name="SDD_opslag3" value="64 GB"></td>
                                <td><input type="checkbox" name="SDD_opslag4" value="80 GB"></td>
                                <td><input type="checkbox" name="SDD_opslag5" value="120 GB"></td>
                            </tr>
                            <tr>
                                <td>128 GB</td>
                                <td>180 GB</td>
                                <td>240 GB</td>
                                <td>250 GB</td>
                                <td>256 GB</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SDD_opslag6" value="128 GB"></td>
                                <td><input type="checkbox" name="SDD_opslag7" value="180 GB"></td>
                                <td><input type="checkbox" name="SDD_opslag8" value="240 GB"></td>
                                <td><input type="checkbox" name="SDD_opslag9" value="250 GB"></td>
                                <td><input type="checkbox" name="SDD_opslag10" value="256 GB"></td>
                            </tr>
                            <tr>
                                <td>480 GB</td>
                                <td>500 GB</td>
                                <td>512 GB</td>
                                <td>960 GB</td>
                                <td>1 TB</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SDD_opslag11" value="480 GB"></td>
                                <td><input type="checkbox" name="SDD_opslag12" value="500 GB"></td>
                                <td><input type="checkbox" name="SDD_opslag13" value="512 GB"></td>
                                <td><input type="checkbox" name="SDD_opslag14" value="960 GB"></td>
                                <td><input type="checkbox" name="SDD_opslag15" value="1 TB"></td>
                            </tr>
                        </table>
                        <table class="SDD_formaat_table">
                            <tr>
                                <td colspan="3"><h5>formaat</h5></td>
                            </tr>
                            <tr>
                                <td>2,5 inch</td>
                                <td>mSATA</td>
                                <td>M.2</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="SDD_formaat1" value="2,5 inch"></td>
                                <td><input type="checkbox" name="SDD_formaat2" value="mSATA"></td>
                                <td><input type="checkbox" name="SDD_formaat3" value="M.2"></td>
                            </tr>
                        </table>
                        <div class="SSD_cost" >
                            <h5>Prijs (minimum - maximum)</h5>
                            <p>
                                <label for="amount_ssd" >prijs (Minimum - Maximum):</label>
                                <input type="text" id="amount_ssd" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </p>
                            <div id="slider-range11"></div>
                        </div>

                    @elseif($menuitem == "soundcard")
                        <table class="geluid_optisch_table">
                            <tr>
                                <th colspan="2"><h5>Optische ingang</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="geluid_optisch1" value="Ja"></td>
                                <td><input type="checkbox" name="geluid_optisch2" value="Nee"></td>
                            </tr>
                        </table>
                        <table class="geluid_sample_table">
                            <tr>
                                <th colspan="6"><h5>Sample frequentie</h5></th>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>11,025</td>
                                <td>16</td>
                                <td>22,05</td>
                                <td>24</td>
                                <td>32</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="geluid_sample1" value="8"></td>
                                <td><input type="checkbox" name="geluid_sample2" value="11,025"></td>
                                <td><input type="checkbox" name="geluid_sample3" value="16"></td>
                                <td><input type="checkbox" name="geluid_sample4" value="22,05"></td>
                                <td><input type="checkbox" name="geluid_sample5" value="24"></td>
                                <td><input type="checkbox" name="geluid_sample6" value="32"></td>
                            </tr>
                            <tr>
                                <td>44,1</td>
                                <td>48</td>
                                <td>88,2</td>
                                <td>96</td>
                                <td>176,4</td>
                                <td>192</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="geluid_sample1" value="44,1"></td>
                                <td><input type="checkbox" name="geluid_sample2" value="48"></td>
                                <td><input type="checkbox" name="geluid_sample3" value="88,2"></td>
                                <td><input type="checkbox" name="geluid_sample4" value="96"></td>
                                <td><input type="checkbox" name="geluid_sample5" value="176,4"></td>
                                <td><input type="checkbox" name="geluid_sample6" value="192"></td>
                            </tr>
                        </table>
                        <table class="geluid_aiso_table">
                            <tr>
                                <th colspan="6"><h5>AISO Sample frequentie</h5></th>
                            </tr>
                            <tr>
                                <td>44,1</td>
                                <td>48</td>
                                <td>88,2</td>
                                <td>96</td>
                                <td>176,4</td>
                                <td>192</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="geluid_asio1" value="44,1"></td>
                                <td><input type="checkbox" name="geluid_asio2" value="48"></td>
                                <td><input type="checkbox" name="geluid_asio3" value="88,2"></td>
                                <td><input type="checkbox" name="geluid_asio4" value="96"></td>
                                <td><input type="checkbox" name="geluid_asio5" value="176,4"></td>
                                <td><input type="checkbox" name="geluid_asio6" value="192"></td>
                            </tr>
                        </table>
                        <table class="geluid_processor_table">
                            <tr>
                                <th colspan="3"><h5>Audio processor</h5></th>
                            </tr>
                            <tr>
                                <td>Asus AV100</td>
                                <td>Asus UA100</td>
                                <td>C-Media CMI8786</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="geluid_processor1" value="Asus AV100"></td>
                                <td><input type="checkbox" name="geluid_processor2" value="Asus UA100"></td>
                                <td><input type="checkbox" name="geluid_processor3" value="C-Media CMI8786"></td>
                            </tr>
                            <tr>
                                <td>C-Media CMI8888DHT</td>
                                <td>Sound Core3D</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="geluid_processor4" value="C-Media CMI8888DHT"></td>
                                <td><input type="checkbox" name="geluid_processor5" value="Sound Core3D"></td>
                        </table>

                    @elseif($menuitem == "casing")
                        <table class="behuizing_merk_table" cellspacing="1px">
                            <tr>
                                <td colspan="5"><h5>behuizing merk</h5></td>
                            </tr>
                            <tr>
                                <td>Antec</td>
                                <td>CoolerMaster</td>
                                <td>Corsair</td>
                                <td>Fractal Design</td>
                                <td>SilverStone</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="behuizing_merk1" value="Antec"></td>
                                <td><input type="checkbox" name="behuizing_merk2" value="CoolerMaster"></td>
                                <td><input type="checkbox" name="behuizing_merk3" value="Corsair"></td>
                                <td><input type="checkbox" name="behuising_merk4" value="Fractal Design"></td>
                                <td><input type="checkbox" name="behuising_merk5" value="SilverStone"></td>
                            </tr>
                        </table>
                        <table class="behuizing_led_table" cellspacing="1px">
                            <tr>
                                <td colspan="2"><h5> LED display aanwezig</h5></td>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="behuizing_led1" value="Ja"></td>
                                <td><input type="checkbox" name="behuizing_led2" value="Nee"></td>
                            </tr>
                        </table>
                        <table class="behuizing_Ruisreductie_table" cellspacing="1px">
                            <tr>
                                <td colspan="2"><h5>Ruisreductie aanwezig</h5></td>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="behuizing_ruis1" value="Ja"></td>
                                <td><input type="checkbox" name="behuizing_ruis2" value="Nee"></td>
                            </tr>
                        </table>
                        <table class="behuizing_Geluid_table" cellspacing="1px">
                            <tr>
                                <td colspan="2"><h5>Geluidsdempende matten aanwezig</h5></td>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="behuizing_geluid1" value="Ja"></td>
                                <td><input type="checkbox" name="behuizing_geluid2" value="Nee"></td>
                            </tr>
                        </table>
                        <table class="behuizing_fan_table" cellspacing="1px">
                            <tr>
                                <td colspan="2"><h5>fan controller</h5></td>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="behuizing_fan1" value="Ja"></td>
                                <td><input type="checkbox" name="behuizing_fan2" value="Nee"></td>
                            </tr>
                        </table>
                        <table class="behuizing_stof_table" cellspacing="1px">
                            <tr>
                                <td colspan="2"><h5>stoffilter</h5></td>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="behuizing_stof1" value="Ja"></td>
                                <td><input type="checkbox" name="behuizing_stof2" value="Nee"></td>
                            </tr>
                        </table>
                        <table class="behuizing_water_table" cellspacing="1px">
                            <tr>
                                <td colspan="2"><h5>waterkoeling aanwezig</h5></td>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="behuizing_water1" value="Ja"></td>
                                <td><input type="checkbox" name="behuizing_water2" value="Nee"></td>
                            </tr>
                        </table>
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
                                <td colspan="3"><h5>computerbehuizing</h5></td>
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
                        <div class="behuizing_prijs" >
                            <h5>Prijs (minimum - maximum)</h5>
                            <p>
                                <label for="amount_behuizing" >prijs (Minimum - Maximum):</label>
                                <input type="text" id="amount_behuizing" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </p>
                            <div id="slider-range14"></div>
                        </div>
                    @elseif($menuitem == "powersupply")
                        <table class="voeding_cpup4_table" cellspacing="1px">
                            <tr>
                                <td colspan="2"><h5>CPU P4</h5></td>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="voeding_cpup41" value="Ja"></td>
                                <td><input type="checkbox" name="voeding_cpup42" value="Nee"></td>
                            </tr>
                        </table>
                        <table class="voeding_cpup8_table" cellspacing="1px">
                            <tr>
                                <td colspan="2"><h5>CPU P4</h5></td>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="voeding_cpup81" value="Ja"></td>
                                <td><input type="checkbox" name="voeding_cpup82" value="Nee"></td>
                            </tr>
                        </table>
                        <table class="voeding_cpup4p4_table" cellspacing="1px">
                            <tr>
                                <td colspan="2"><h5>CPU P4+P4</h5></td>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>1</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="voeding_cpup4p41" value="0"></td>
                                <td><input type="checkbox" name="voeding_cpup4p42" value="1"></td>
                                <td><input type="checkbox" name="voeding_cpup4p43" value="2"></td>
                            </tr>
                        </table>
                        <div class="voeding_PCI">
                            <h5>PCI Express pin (minimum - maximum)</h5>

                            <p>
                                <input type="text" id="voeding_pci" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </p>

                            <div id="slider-range21"></div>
                        </div>
                        <div class="voeding_sata">
                            <h5>S-ATA aansluitingen (minimum - maximum)</h5>

                            <p>
                                <input type="text" id="voeding_sata" readonly
                                       style="border:0; color:#f6931f; font-weight:bold;">
                            </p>

                            <div id="slider-range22"></div>
                        </div>
                        <table class="voeding_FDD_table" cellspacing="1px">
                            <tr>
                                <td colspan="3"><h5>CPU P4+P4</h5></td>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>1</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="voeding_FDD1" value="0"></td>
                                <td><input type="checkbox" name="voeding_FDD2" value="1"></td>
                                <td><input type="checkbox" name="voeding_FDD3" value="2"></td>
                            </tr>
                        </table>

                    @elseif($menuitem == "PCI")
                        <div class="pci_cost">
                            <h5>Prijs (minimum - maximum)</h5>

                            <p>
                                <input type="text" id="amount_pci" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </p>

                            <div id="slider-range23"></div>
                        </div>
                        <table class="pci_esata_table">
                            <tr>
                                <th colspan="2"><h5>e-SATA aansluiting aanwezig</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="pci_esata1" value="Ja"></td>
                                <td><input type="checkbox" name="pci_esata2" value="Nee"></td>
                            </tr>
                        </table>
                        <table class="pci_sata_table">
                            <tr>
                                <th colspan="2"><h5>SATA aansluiting aanwezig</h5></th>
                            </tr>
                            <tr>
                                <td>Ja</td>
                                <td>Nee</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="pci_sata1" value="Ja"></td>
                                <td><input type="checkbox" name="pci_sata2" value="Nee"></td>
                            </tr>
                        </table>
                    @elseif($menuitem == "processorcooler")
                        <table class="spec_table" id="koeler_merk">
                            <tr>
                                <th colspan="4"><h5>Merk koeler</h5></th>
                            </tr>
                            <tr>
                                <td>Be quiet!</td>
                                <td>Cooler Master</td>
                                <td>Corsair</td>
                                <td>Artic</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="koeler_merk1" value="Be Quiet!"></td>
                                <td><input type="checkbox" name="koeler_merk2" value="Cooler Master"></td>
                                <td><input type="checkbox" name="koeler_merk3" value="Corsair"></td>
                                <td><input type="checkbox" name="koeler_merk4" value="Artic"></td>
                            </tr>
                            <tr>
                                <td>Crucial</td>
                                <td>Kingston</td>
                                <td>Scythe</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="koeler_merk5" value="Crucial"></td>
                                <td><input type="checkbox" name="koeler_merk6" value="Kingston"></td>
                                <td><input type="checkbox" name="koeler_merk7" value="Scythe"></td>
                            </tr>
                        </table>
                    </div>
                        <div class="col-md-6 right_div">
                        <table class="spec_table" id="koeler_methode">
                            <tr>
                                <td colspan="2"><h5>koel methode</h5></td>
                            </tr>
                            <tr>
                                <td>Lucht</td>
                                <td>Water</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="koeler_type1" value="Lucht"></td>
                                <td><input type="checkbox" name="koeler_type2" value="Water"></td>
                            </tr>
                        </table>
                            </div>
                        <div id="koeler_cost" class="spec_table">
                            <h5>Prijs (minimum - maximum)</h5>

                            <p>
                                <input type="text" id="amount_koeler" readonly
                                       style="border:0; color:#f6931f; font-weight:bold;">
                            </p>

                            <div id="slider-range26"></div>
                        </div>

                        <div id="koeler_diameterventilator" class="spec_table">
                            <h5> Diameter ventilator (minimum - maximum)</h5>

                            <p>
                                <input type="text" id="koeler_diameter" readonly
                                       style="border:0; color:#f6931f; font-weight:bold;">
                            </p>

                            <div id="slider-range27"></div>
                        </div>
                        <div id="koeler_rotatiesnelheid" class="spec_table">
                            <h5>Rotatiesnelheid (minimum - maximum)</h5>

                            <p>
                                <input type="text" id="koeler_rotatie" readonly
                                       style="border:0; color:#f6931f; font-weight:bold;">
                            </p>

                            <div id="slider-range28"></div>
                        </div>
                @elseif($menuitem == "internalharddrive")
                    <table class="spec_table" id="HDD_storage_table">
                        <th colspan="5"><h5>Opslag capaciteit</h5></th>
                        <tr>
                            <td>160 GB</td>
                            <td>320 GB</td>
                            <td>500 GB</td>
                            <td>750 GB</td>
                            <td>1 TB</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="HDD_opslag1" value="160 GB"></td>
                            <td><input type="checkbox" name="HDD_opslag2" value="320 GB"></td>
                            <td><input type="checkbox" name="HDD_opslag3" value="500 GB"></td>
                            <td><input type="checkbox" name="HDD_opslag4" value="750 GB"></td>
                            <td><input type="checkbox" name="HDD_opslag5" value="1 TB"></td>
                        </tr>
                        <tr>
                            <td>2 TB</td>
                            <td>3 TB</td>
                            <td>4 TB</td>
                            <td>5 TB</td>
                            <td>6 TB</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="HDD_opslag6" value="2 TB"></td>
                            <td><input type="checkbox" name="HDD_opslag7" value="3 TB"></td>
                            <td><input type="checkbox" name="HDD_opslag8" value="4 TB"></td>
                            <td><input type="checkbox" name="HDD_opslag9" value="5 TB"></td>
                            <td><input type="checkbox" name="HDD_opslag10" value="6 TB"></td>
                        </tr>
                    </table>
                    <table class="spec_table" id="HDD_format_table">
                        <th colspan="2"><h5>Formaat</h5></th>
                        <tr>
                            <td>2,5 inch (Laptop)</td>
                            <td>3,5 inch (Desktop)</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="HDD_formaat1" value="2,5 inch"></td>
                            <td><input type="checkbox" name="HDD_formaat2" value="3,5 inch"></td>
                        </tr>
                    </table>
                    <table class="spec_table" id="HDD_brand_table" cellspacing="1px">
                        <th colspan="4"><h5>Merk HDD</h5></th>
                        <tr>
                            <td>LaCie</td>
                            <td>Seagate</td>
                            <td>Toshiba</td>
                            <td>Western Digital</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="HDD_merk1" value="LaCie"></td>
                            <td><input type="checkbox" name="HDD_merk2" value="Seagate"></td>
                            <td><input type="checkbox" name="HDD_merk3" value="Toshiba"></td>
                            <td><input type="checkbox" name="HDD_merk4" value="Western Digital"></td>
                        </tr>
                    </table>
                    <table class="spec_table" id="HDD_cost_table">
                        <th><h5>Prijs (minimum - maximum)</h5></th>
                        <tr>
                            <td><input type="text" id="amount_hdd" readonly style=""></td>
                        </tr>
                    </table>
                    <div id="slider-range10"></div>

                   @elseif($menuitem == "internalmemory")
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
                                <td><input type="checkbox" name="RAM-geheugen1" value="1 GB"></td>
                                <td><input type="checkbox" name="RAM-geheugen2" value="2 GB"></td>
                                <td><input type="checkbox" name="RAM-geheugen3" value="4 GB"></td>
                                <td><input type="checkbox" name="RAM-geheugen4" value="8 GB"></td>
                                <td><input type="checkbox" name="RAM-geheugen5" value="16 GB"></td>
                                <td><input type="checkbox" name="RAM-geheugen6" value="32 GB"></td>
                            </tr>
                        </table>
                        <table class="RAM_klok_table">
                            <tr>
                                <td colspan="4"><h5>Kloksnelheid geheugenmodule</h5></td>
                            </tr>
                            <tr>
                                <td>667 MHz</td>
                                <td>800 MHz</td>
                                <td>1333 MHz</td>
                                <td>1600 MHz</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="RAM-klok1" value="667 MHz"></td>
                                <td><input type="checkbox" name="RAM-klok2" value="800 MHz"></td>
                                <td><input type="checkbox" name="RAM-klok3" value="1333 MHz"></td>
                                <td><input type="checkbox" name="RAM-klok4" value="1600 MHz"></td>
                            </tr>
                        </table>
                        <div class="RAM_cost" >
                            <h5>Prijs (minimum - maximum)</h5>
                            <p>
                                <label for="amount_ram" >prijs (Minimum - Maximum):</label>
                                <input type="text" id="amount_ram" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </p>
                            <div id="slider-range5"></div>
                        </div>
                    <table class="RAM_Merk_table" cellspacing="1px">
                        <tr>
                            <td colspan="3"><h5>Merk RAM geheugen</h5></td>
                        </tr>
                        <tr>
                            <td>Corsair</td>
                            <td>Crucial</td>
                            <td>Kingston</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="RAM_merk1" value="Corsair"></td>
                            <td><input type="checkbox" name="RAM_merk2" value="Crucial"></td>
                            <td><input type="checkbox" name="RAM_merk3" value="Kingston"></td>
                        </tr>
                        <tr>
                            <td>Qnap</td>
                            <td>Synology</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="RAM_merk4" value="Qnap"></td>
                            <td><input type="checkbox" name="RAM_merk5" value="Synology"></td>
                        </tr>
                    </table>

                @elseif($menuitem == "videocard")
                    <table class="GPU_producer_table">
                        <tr>
                            <td colspan="2"><h5>Fabrikant videokaart</h5></td>
                        </tr>
                        <tr>
                            <td>NVIDIA</td>
                            <td>AMD</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_producer1" value="NVIDIA"></td>
                            <td><input type="checkbox" name="GPU_producer2" value="AMD"></td>
                        </tr>
                    </table>
                    <table class="GPU_brand_table">
                        <tr>
                            <td colspan="3"><h5>Merk videokaart</h5></td>
                        </tr>
                        <tr>
                            <td>Asus</td>
                            <td>Club 3D</td>
                            <td>Gigabyte</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_brand1" value="Asus"></td>
                            <td><input type="checkbox" name="GPU_brand2" value="Club_3D"></td>
                            <td><input type="checkbox" name="GPU_brand3" value="Gigabyte"></td>
                        </tr>
                        <tr>
                            <td>Sapphire</td>
                            <td>MSI</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_brand4" value="Sapphire"></td>
                            <td><input type="checkbox" name="GPU_brand5" value="MSI"></td>
                        </tr>
                    </table>
                    <table class="GPU_geheugen_type_table">
                        <tr>
                            <td colspan="3"><h5>Type geheugen</h5></td>
                        </tr>
                        <tr>
                            <td>DDR2</td>
                            <td>DDR3</td>
                            <td>GDDR5</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_geheugen_type1" value="DDR2"></td>
                            <td><input type="checkbox" name="GPU_geheugen_type2" value="DDR3"></td>
                            <td><input type="checkbox" name="GPU_geheugen_type3" value="GDDR5"></td>
                        </tr>
                    </table>
                    <table class="GPU_memory_table">
                        <tr>
                            <td colspan="3"><h5>Brandbreedte geheugenbus</h5></td>
                        </tr>
                        <tr>
                            <td>64</td>
                            <td>128</td>
                            <td>192</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_bandwidth_memory1" value="64"></td>
                            <td><input type="checkbox" name="GPU_bandwidth_memory2" value="128"></td>
                            <td><input type="checkbox" name="GPU_bandwidth_memory3" value="192"></td>
                        </tr>
                        <tr>
                            <td>256</td>
                            <td>384</td>
                            <td>512</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_bandwidth_memory4" value="254"></td>
                            <td><input type="checkbox" name="GPU_bandwidth_memory5" value="384"></td>
                            <td><input type="checkbox" name="GPU_bandwidth_memory6" value="512"></td>
                        </tr>
                    </table>
                    <table class="GPU_type_AMD_table" cellspacing="1px">
                        <tr>
                            <td colspan="3"><h5>AMD videokaart</h5></td>
                        </tr>
                        <tr>
                            <td>AMD Radeon R9 270X</td>
                            <td>AMD Radeon R9 270</td>
                            <td>AMD Radeon R7 240</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_type_AMD1" value="AMD_Radeon_R9_270X"></td>
                            <td><input type="checkbox" name="GPU_type_AMD2" value="AMD_Radeon_R9_270"></td>
                            <td><input type="checkbox" name="GPU_type_AMD3" value="AMD_Radeon_R7_240"></td>
                        </tr>
                        <tr>
                            <td>AMD Radeon HD 6450</td>
                            <td>AMD Radeon R9 280</td>
                            <td>AMD Radeon R9 280X</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_type_AMD4" value="AMD_Radeon_HD_6450"></td>
                            <td><input type="checkbox" name="GPU_type_AMD5" value="AMD_Radeon_R9_280"></td>
                            <td><input type="checkbox" name="GPU_type_AMD6" value="AMD_Radeon_R9_280X"></td>
                        </tr>
                        <tr>
                            <td>AMD Radeon R9 290</td>
                            <td>AMD Radeon R9 290X</td>
                            <td>AMD Radeon R7 250</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_type_AMD7" value="AMD_Radeon_R9_290"></td>
                            <td><input type="checkbox" name="GPU_type_AMD8" value="AMD_Radeon_R9_290X"></td>
                            <td><input type="checkbox" name="GPU_type_AMD9" value="AMD_Radeon_R7_250"></td>
                        </tr>
                        <tr>
                            <td>AMD Radeon HD 3450 AGP</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_type_AMD10" value="AMD_Radeon_HD_3450_AGP"></td>
                        </tr>
                    </table>
                @elseif($menuitem == "processor")
                    <table class="brand_table">
                        <tr>
                            <th colspan="2"><h5>Merk processor</h5></th>
                        </tr>
                        <tr>
                            <td>Intel</td>
                            <td>AMD</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="processor_brand1" value="Intel"></td>
                            <td><input type="checkbox" name="processor_brand2" value="AMD"></td>
                        </tr>
                    </table>
                    <table class="core_table">
                        <tr>
                            <td colspan="2"><h5>Aantal processorkernen</h5></td>
                        </tr>
                        <tr>
                            <td>Dual core</td>
                            <td>Quad core</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="processor_core" value="Dual core"></td>
                            <td><input type="checkbox" name="processor_core" value="Quad core"></td>
                        </tr>
                        <tr>
                            <td>6-core</td>
                            <td>6-core</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="processor_core" value="6-core"></td>
                            <td><input type="checkbox" name="processor_core" value="6-core"></td>
                        </tr>
                    </table>
                @endif
            </div>
            <div class="col-md-6 right_div">
                @if($menuitem == "internalmemory")
                <table class="RAM_geschikt_table" cellspacing="1px">
                    <tr>
                        <td colspan="4"><h5>Geheugen geschikt voor:</h5></td>
                    </tr>
                    <tr>
                        <td>Desktop</td>
                        <td>Laptop</td>
                        <td>NAS</td>
                        <td>Mac</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="RAM_geschikt1" value="Desktop"></td>
                        <td><input type="checkbox" name="RAM_geschikt2" value="Laptop"></td>
                        <td><input type="checkbox" name="RAM_geschikt3" value="NAS"></td>
                        <td><input type="checkbox" name="RAM_geschikt4" value="Mac"></td>
                    </tr>
                </table>
                <table class="RAM_type_table" cellspacing="1px">
                    <tr>
                        <td colspan="4"><h5>Geheugen type</h5></td>
                    </tr>
                    <tr>
                        <td>DDR2</td>
                        <td>DDR3</td>
                        <td>DIMM DDR3</td>
                        <td>DIMM DDR4</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="RAM_type1" value="DDR2"></td>
                        <td><input type="checkbox" name="RAM_type2" value="DDR3"></td>
                        <td><input type="checkbox" name="RAM_type3" value="DIMM DDR3"></td>
                        <td><input type="checkbox" name="RAM_type4" value="DIMM DDR4"></td>
                    </tr>
                </table>
                <table class="RAM_kanalen_table" cellspacing="1px">
                    <tr>
                        <td colspan="3"><h5>Aantal geheugenkanalen</h5></td>
                    </tr>
                    <tr>
                        <td>Single Channel</td>
                        <td>Dual Channel</td>
                        <td>Quad Channel</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="RAM_kanalen1" value="Single Channel"></td>
                        <td><input type="checkbox" name="RAM_kanalen2" value="Dual Channel"></td>
                        <td><input type="checkbox" name="RAM_kanalen3" value="Quad Channel"></td>
                    </tr>
                </table>
                <table class="RAM_game_table" cellspacing="1px">
                    <tr>
                        <td colspan="4"><h5>Geheugen geschikt voor gaming</h5></td>
                    </tr>
                    <tr>
                        <td>Ja</td>
                        <td>Nee</td>

                    </tr>
                    <tr>
                        <td><input type="checkbox" name="RAM_game1" value="Ja"></td>
                        <td><input type="checkbox" name="RAM_game2" value="Nee"></td>
                    </tr>
                </table>
                @elseif($menuitem == "ssd")

                    <table class="SSD_controller_table" cellspacing="1px">
                        <tr>
                            <td colspan="3"><h5>SSD-controller</h5></td>
                        </tr>
                        <tr>
                            <td>Indilinx</td>
                            <td>Intel</td>
                            <td>Marvell</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="SSD_controller1" value="Indilinx"></td>
                            <td><input type="checkbox" name="SSD_controller2" value="Intel"></td>
                            <td><input type="checkbox" name="SSD_controller3" value="Marvell"></td>

                        </tr>
                        <tr>
                            <td>Samsung</td>
                            <td>SandForce</td>
                            <td>Phison</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="SSD_controller1" value="Samsung"></td>
                            <td><input type="checkbox" name="SSD_controller2" value="SandForce"></td>
                            <td><input type="checkbox" name="SSD_controller4" value="Phison"></td>
                        </tr>
                    </table>
                    <table class="SSD_soort_table" cellspacing="1px">
                        <tr>
                            <td colspan="2"><h5>Soort geheugen</h5></td>
                        </tr>
                        <tr>
                            <td>Multi Level Cell (MLC)</td>
                            <td>Triple Level Cell (TLC)</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="SSD_soort1" value="MLC"></td>
                            <td><input type="checkbox" name="SSD_soort2" value="TLC"></td>
                        </tr>
                    </table>
                    <div class="SSD_schrijf" >
                        <h5>Schrijfsnelheid</h5>
                        <p>
                            <label for="amount_ssd_schrijf" >schrijfsnelheid (Minimum - Maximum):</label>
                            <input type="text" id="amount_ssd_schrijf" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range12"></div>
                    </div>
                    <div class="SSD_lees" >
                        <h5>Leessnelheid</h5>
                        <p>
                            <label for="amount_ssd_lees" >leessnelheid (Minimum - Maximum):</label>
                            <input type="text" id="amount_ssd_lees" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range13"></div>
                    </div>

                    @elseif($menuitem == "motherboard")
                    <table class="moederbord_displayport_table" cellspacing="1px">
                        <tr>
                            <td colspan="2"><h5>DisplayPort aanwezig</h5></td>
                        </tr>
                        <tr>
                            <td>Ja</td>
                            <td>Nee</td>

                        </tr>
                        <tr>
                            <td><input type="checkbox" name="moederbord_displayport1" value="Ja"></td>
                            <td><input type="checkbox" name="moederbord_displayport2" value="Nee"></td>
                        </tr>
                    </table>
                    <table class="moederbord_RAID_table" cellspacing="1px">
                        <tr>
                            <td colspan="4"><h5>RAID configuratie</h5></td>
                        </tr>
                        <tr>
                            <td>RAID-0</td>
                            <td>RAID-1</td>
                            <td>RAID-5</td>
                            <td>RAID-10</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="moederbord_raid1" value="RAID-0"></td>
                            <td><input type="checkbox" name="moederbord_raid2" value="RAID-1"></td>
                            <td><input type="checkbox" name="moederbord_raid3" value="RAID-5"></td>
                            <td><input type="checkbox" name="moederbord_raid4" value="RAID-10"></td>
                        </tr>
                    </table>
                    <table class="moederbord_audiokanalen_table" cellspacing="1px">
                        <tr>
                            <td colspan="2"><h5>Aantal audiokanalen</h5></td>
                        </tr>
                        <tr>
                            <td>5.1</td>
                            <td>7.1</td>

                        </tr>
                        <tr>
                            <td><input type="checkbox" name="moederbord_audiokanalen1" value="5.1"></td>
                            <td><input type="checkbox" name="moederbord_audiokanalen2" value="7.1"></td>
                        </tr>
                    </table>
                    <table class="moederbord_audioprocessor_table" cellspacing="1px">
                        <tr>
                            <td colspan="3"><h5>Audio processor</h5></td>
                        </tr>
                        <tr>
                            <td>Realtek ALC1150</td>
                            <td>SupremeFX</td>
                            <td>Realtek ALC892</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="moederbord_audiopro1" value="Realtek ALC1150"></td>
                            <td><input type="checkbox" name="moederbord_audiopro2" value="SupremeFX"></td>
                            <td><input type="checkbox" name="moederbord_audiopro3" value="Realtek ALC892"></td>
                        </tr>
                        <tr>
                            <td>ROG SupremeFX black</td>
                            <td>SupremeFX Impact</td>
                            <td>SupremeFX 2014</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="moederbord_audiopro4" value="ROG SupremeFX black"></td>
                            <td><input type="checkbox" name="moederbord_audiopro5" value="SupremeFX Impact"></td>
                            <td><input type="checkbox" name="moederbord_audiopro6" value="SupremeFX 2014"></td>
                        </tr>
                    </table>
                    <table class="moederbord_geheugen_table" cellspacing="1px">
                        <tr>
                            <td colspan="3"><h5>Geheugen type</h5></td>
                        </tr>
                        <tr>
                            <td>DDR3</td>
                            <td>DIMM</td>
                            <td>DIMM DDR4</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="moederbord_geheugen1" value="DDR3"></td>
                            <td><input type="checkbox" name="moederbord_geheugen2" value="DIMM"></td>
                            <td><input type="checkbox" name="moederbord_geheugen3" value="DIMM DDR4"></td>
                        </tr>
                    </table>
                    <table class="moederbord_msata_table" cellspacing="1px">
                        <tr>
                            <td colspan="2"><h5>mSATA-aansluiting aanwezig</h5></td>
                        </tr>
                        <tr>
                            <td>Ja</td>
                            <td>Nee</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="moederbord_msata1" value="Ja"></td>
                            <td><input type="checkbox" name="moederbord_msata2" value="Nee"></td>
                        </tr>
                    </table>
                    <div class="moederbord_usb" >
                        <h5>aantal USB 3.0 poorten aanwezig</h5>
                        <p>
                            <label for="amount_usb" >Aantal USB 3.0 poorten:</label>
                            <input type="text" id="amount_usb" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range7"></div>
                    </div>
                    <div class="moederbord_SATA300" >
                        <h5>SATA 300</h5>
                        <p>
                            <label for="amount_sata300" >Aantal SATA 300 aansluitingen:</label>
                            <input type="text" id="amount_sata300" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range8"></div>
                    </div>
                    <div class="moederbord_SATA600" >
                        <h5>SATA 600</h5>
                        <p>
                            <label for="amount_sata600" >Aantal SATA 600 aansluitingen:</label>
                            <input type="text" id="amount_sata600" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range9"></div>
                    </div>

                @elseif($menuitem == "bluraydvd")
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
                            <td><input type="checkbox" name="brander_speelt1" value="blu-ray"></td>
                            <td><input type="checkbox" name="brander_speelt2" value="DVD"></td>
                            <td><input type="checkbox" name="brander_speelt3" value="CD"></td>
                            <td><input type="checkbox" name="brander_speelt4" value="Floppy"></td>
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
                            <td><input type="checkbox" name="brander_besturing1" value="Windows"></td>
                            <td><input type="checkbox" name="brander_besturing2" value="Mac OS X"></td>
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
                            <td><input type="checkbox" name="brander_ladetype1" value="Lade"></td>
                            <td><input type="checkbox" name="brander_ladetype2" value="Slot-in"></td>
                        </tr>
                    </table>

                @elseif($menuitem == "videocard")
                    <table class="GPU_type_NVIDIA_table" cellspacing="1px">
                        <tr><td colspan="3"><h5>NVIDIA videokaart</h5></td></tr>
                        <tr><td>NVIDIA FX5500</td><td>NVIDIA GeForce GTX 780</td><td>NVIDIA GeForce GTX 980</td></tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_type_NVIDIA1" value="NVIDIA_FX5500"></td>
                            <td><input type="checkbox" name="GPU_type_NVIDIA2" value="NVIDIA_GeForce_GTX_780"></td>
                            <td><input type="checkbox" name="GPU_type_NVIDIA3" value="NVIDIA_GeForce_GTX_980"></td>
                        </tr>
                        <tr><td>NVIDIA GeForce GTX 970</td><td>NVIDIA GeForce GT 730</td><td>NVIDIA GeForce GTX 660</td></tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_type_NVIDIA4" value="NVIDIA_GeForce_GTX_970"></td>
                            <td><input type="checkbox" name="GPU_type_NVIDIA5" value="NVIDIA_GeForce_GT_730"></td>
                            <td><input type="checkbox" name="GPU_type_NVIDIA6" value="NVIDIA_GeForce_GTX_660"></td>
                        </tr>
                        <tr><td>NVIDIA GeForce GTX 750</td><td>NVIDIA GeForce GTX 760</td><td>NVIDIA GeForce GTX 770</td></tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_type_NVIDIA7" value="NVIDIA_GeForce_GTX_750"></td>
                            <td><input type="checkbox" name="GPU_type_NVIDIA8" value="NVIDIA_GeForce_GTX_760"></td>
                            <td><input type="checkbox" name="GPU_type_NVIDIA9" value="NVIDIA_GeForce_GTX_770"></td>
                        </tr>
                        <tr><td>NVIDIA GeForce GT 740</td></tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_type_NVIDIA10" value="NVIDIA_GeForce_GTX_740"></td>
                        </tr>
                    </table>
                    <table>
                        <tr><td colspan="2"><h5>Aantal DVI-I aansluitingen</h5></td></tr>
                        <tr><td>0</td><td>1</td></tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_DVI-I1" value="0"></td>
                            <td><input type="checkbox" name="GPU_DVI-I2" value="0"></td>
                        </tr>
                    </table>
                    <table>
                        <tr><td colspan="2"><h5>Aantal DVI-I aansluitingen</h5></td></tr>
                        <tr><td>0</td><td>1</td></tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_DVI-I1" value="0"></td>
                            <td><input type="checkbox" name="GPU_DVI-I2" value="0"></td>
                        </tr>
                    </table>
                    <table>
                        <tr><td colspan="3"><h5>Aantal DVI-D aansluitingen</h5></td></tr>
                        <tr><td>0</td><td>1</td><td>2</td></tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_DVI-D1" value="0"></td>
                            <td><input type="checkbox" name="GPU_DVI-D2" value="1"></td>
                            <td><input type="checkbox" name="GPU_DVI-D3" value="2"></td>
                        </tr>
                    </table>
                    <table>
                        <tr><td colspan="2"><h5>HDMI aansluitingen</h5> </td></tr>
                        <tr><td>1</td><td>2</td></tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_HDMI1" value="1"></td>
                            <td><input type="checkbox" name="GPU_HDMI2" value="2"></td>
                        </tr>
                    </table>
                    <table>
                        <tr><td colspan="2"><h5>VGA-poort</h5></td></tr>
                        <tr><td>Nee</td><td>Ja</td></tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_VGA1" value="Nee"></td>
                            <td><input type="checkbox" name="GPU_VGA2" value="Ja"></td>
                        </tr>
                    </table>
                    <div class="GPU_cost" style="line-height:100%">
                        <h5>Prijs van videokaart</h5>
                        <p>
                            <label for="amount" >prijs (Minimum - Maximum):</label>
                            <input type="text" id="amount_GPU_prijs" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range3"></div>
                    </div>
                    <div class="GPU_memory">
                        <h5>Gewenst videogeheugen</h5>
                        <p>
                            <label for="amount_GPU_geheugen">videogeheugen (Minimum - Maximum):</label>
                            <input type="text" id="amount_GPU_geheugen" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range4"></div>
                    </div>
                @elseif($menuitem == "casing")
                    <table class="behuizing_paneel_table" cellspacing="1px">
                        <tr>
                            <td colspan="2"><h5>Paneeldeur aanwezig</h5></td>
                        </tr>
                        <tr>
                            <td>Ja</td>
                            <td>Nee</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="behuizing_paneel1" value="Ja"></td>
                            <td><input type="checkbox" name="behuizing_paneel2" value="Nee"></td>
                        </tr>
                    </table>
                    <table class="behuizing_kleur_table" cellspacing="1px">
                        <tr>
                            <td colspan="4"><h5>kleur behuizing</h5></td>
                        </tr>
                        <tr>
                            <td>Grijs</td>
                            <td>Oranje</td>
                            <td>Wit</td>
                            <td>Zwart</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="behuizing_kleur1" value="Grijs"></td>
                            <td><input type="checkbox" name="behuizing_kleur2" value="Oranje"></td>
                            <td><input type="checkbox" name="behuizing_kleur3" value="Wit"></td>
                            <td><input type="checkbox" name="behuizing_kleur4" value="Zwart"></td>
                        </tr>
                    </table>
                    <table class="behuizing_materiaal_table" cellspacing="1px">
                        <tr>
                            <td colspan="3"><h5>Materiaal behuizing</h5></td>
                        </tr>
                        <tr>
                            <td>Aluminium</td>
                            <td>Kunststof</td>
                            <td>Plastic</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="behuizing_materiaal1" value="Aluminium"></td>
                            <td><input type="checkbox" name="behuizing_materiaal2" value="Kunststof"></td>
                            <td><input type="checkbox" name="behuizing_materiaal3" value="Plastic"></td>
                        </tr>
                        <tr>
                            <td>Polymeer</td>
                            <td>Rubber</td>
                            <td>Staal</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="behuizing_materiaal4" value="Polymeer"></td>
                            <td><input type="checkbox" name="behuizing_materiaal5" value="Rubber"></td>
                            <td><input type="checkbox" name="behuizing_materiaal6" value="Staal"></td>
                        </tr>
                    </table>
                    <table class="behuizing_usb2_table" cellspacing="1px">
                        <tr>
                            <td colspan="5"><h5>aantal USB 2.0 poorten aanwezig</h5></td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="behuizing_usb21" value="0"></td>
                            <td><input type="checkbox" name="behuizing_usb22" value="1"></td>
                            <td><input type="checkbox" name="behuizing_usb23" value="2"></td>
                            <td><input type="checkbox" name="behuizing_usb24" value="3"></td>
                            <td><input type="checkbox" name="behuizing_usb25" value="4"></td>
                        </tr>
                    </table>
                    <table class="behuizing_usb3_table" cellspacing="1px">
                        <tr>
                            <td colspan="5"><h5>aantal USB 3.0 poorten aanwezig</h5></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="behuizing_usb31"value="1"></td>
                            <td><input type="checkbox" name="behuizing_usb32" value="2"></td>
                        </tr>
                    </table>
                    <table class="behuizing_firewire_table" cellspacing="1px">
                        <tr>
                            <td colspan="5"><h5>firewire poorten</h5></td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="behuizing_firewire1" value="0"></td>
                            <td><input type="checkbox" name="behuizing_firewire2" value="1"></td>
                        </tr>
                    </table>
                    <table class="behuizing_eSATA_table" cellspacing="1px">
                        <tr>
                            <td colspan="5"><h5>eSATA aansluitingen</h5></td>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="behuizing_esata1" value="0"></td>
                            <td><input type="checkbox" name="behuizing_esata2" value="1"></td>
                        </tr>
                    </table>
                    <div class="behuizing_3,5bay" >
                        <h5>Schrijfsnelheid</h5>
                        <p>
                            <label for="amount_behuizing_3bay" >3,5'' bays:</label>
                            <input type="text" id="amount_behuizing_3bay" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range15"></div>
                    </div>
                    <div class="behuizing_2,5bay" >
                        <h5>Schrijfsnelheid</h5>
                        <p>
                            <label for="amount_behuizing_2bay" >2,5'' bays:</label>
                            <input type="text" id="amount_behuizing_2bay" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range16"></div>
                    </div>
                    <div class="behuizing_5,25bay" >
                        <h5>Schrijfsnelheid</h5>
                        <p>
                            <label for="amount_behuizing_5bay" >5,25'' bays:</label>
                            <input type="text" id="amount_behuizing_5bay" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range17"></div>
                    </div>
                    <div class="behuizing_uitbreiding" >
                        <h5>Schrijfsnelheid</h5>
                        <p>
                            <label for="amount_behuizing_uitbreiding" >Aantal uitbreidingssloten:</label>
                            <input type="text" id="amount_behuizing_uitbreiding" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range18"></div>
                    </div>

                @elseif($menuitem == "internalharddrive")
                    <table class="spec_table" id="HDD_snelheid_table">
                        <th colspan="4"><h5>HDD schrijfsnelheid</h5></th>
                        <tr>
                            <td>5400 rpm</td>
                            <td>5700 rpm</td>
                            <td>5900 rpm</td>
                            <td>5940 rpm</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="HDD_snelheid1" value="5400"></td>
                            <td><input type="checkbox" name="HDD_snelheid2" value="5700"></td>
                            <td><input type="checkbox" name="HDD_snelheid3" value="5900"></td>
                            <td><input type="checkbox" name="HDD_snelheid4" value="5940"></td>
                        </tr>
                        <tr>
                            <td>7200 rpm</td>
                            <td>Variabel</td>
                            <td>N.v.t.</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="HDD_snelheid5" value="7200"></td>
                            <td><input type="checkbox" name="HDD_snelheid6" value="variabel"></td>
                            <td><input type="checkbox" name="HDD_snelheid7" value="nvt"></td>
                            <td></td>
                        </tr>
                    </table>
                    <table class="spec_table" id="HDD_cache_table">
                        <th colspan="3"><h5>Buffer / cache</h5></th>
                        <tr>
                            <td>8 MB</td>
                            <td>16 MB</td>
                            <td>32 MB</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="HDD_cache1" value="8 MB"></td>
                            <td><input type="checkbox" name="HDD_cache2" value="16MB"></td>
                            <td><input type="checkbox" name="HDD_cache3" value="32 MB"></td>
                        </tr>
                        <tr>
                            <td>64 MB</td>
                            <td>128 MB</td>
                            <td>N.v.t.</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="HDD_cache4" value="64 MB"></td>
                            <td><input type="checkbox" name="HDD_cache5" value="128 MB"></td>
                            <td><input type="checkbox" name="HDD_cache6" value="nvt"></td>
                        </tr>
                    </table>
                    <table class="spec_table" id="HDD_aansluiting_table">
                        <th colspan="2"><h5>Aansluiting HDD</h5></th>
                        <tr>
                            <td>S-ATA(II)</td>
                            <td>S-ATA(III)</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="HDD_aansluiting1" value="s-ata(II)"></td>
                            <td><input type="checkbox" name="HDD_aansluiting2" value="s-ata(III)"></td>
                        </tr>
                    </table>

                @elseif($menuitem == "processor")
                    <div class="processor_cost">
                        <h5>Prijs (minimum - maximum)</h5>

                        <p>
                            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>

                        <div id="slider-range2"></div>
                    </div>
                <table class="serie_table" cellspacing="1px">
                    <tr>
                        <td colspan="3"><h5>Processor serie</h5></td>
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
                    <h5>Kloksnelheid (minimum - maximum)</h5>

                    <p>
                        <input type="text" id="speed" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    </p>

                    <div id="slider-range1"></div>
                </div>

                @elseif($menuitem == "powersupply")
                    <table class="voeding_merk_table">
                        <tr>
                            <th colspan="5"><h5>Merk voeding</h5></th>
                        </tr>
                        <tr>
                            <td>Be quiet!</td>
                            <td>Cooler Master</td>
                            <td>Corsair</td>
                            <td>Seasonic</td>
                            <td>XFX</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="voeding_merk1" value="Be Quiet!"></td>
                            <td><input type="checkbox" name="voeding_merk2" value="Cooler Master"></td>
                            <td><input type="checkbox" name="voeding_merk3" value="Corsair"></td>
                            <td><input type="checkbox" name="voeding_merk4" value="Seasonic"></td>
                            <td><input type="checkbox" name="voeding_merk51" value="XFX"></td>
                        </tr>
                    </table>
                    <table class="voeding_certificering_table">
                        <tr>
                            <td colspan="5"><h5>certificering</h5></td>
                        </tr>
                        <tr>
                            <td>Geen</td>
                            <td>80 PLUS</td>
                            <td>80 PLUS Bronze</td>
                            <td>80 PLUS Silver</td>
                            <td>80 PLUS Gold</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="voeding_certificering1" value="Geen"></td>
                            <td><input type="checkbox" name="voeding_certificering2" value="80 PLUS"></td>
                            <td><input type="checkbox" name="voeding_certificering3" value="80 PLUS Bronze"></td>
                            <td><input type="checkbox" name="voeding_certificering4" value="80 PLUS Silver"></td>
                            <td><input type="checkbox" name="voeding_certificering5" value="80 PLUS Gold"></td>
                        </tr>
                    </table>
                    <div class="voeding_cost">
                        <h5>Prijs (minimum - maximum)</h5>

                        <p>
                            <input type="text" id="amount_voeding" readonly
                                   style="border:0; color:#f6931f; font-weight:bold;">
                        </p>

                        <div id="slider-range19"></div>
                    </div>
                <table class="voeding_modulair_table" cellspacing="1px">
                    <tr>
                        <td colspan="2"><h5>Modulair</h5></td>
                    </tr>
                    <tr>
                        <td>Ja</td>
                        <td>Nee</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="voeding_modulair1" value="Ja"></td>
                        <td><input type="checkbox" name="voeding_modulair2" value="Nee"></td>
                    </tr>
                </table>
                <div class="voeding_vermogen">
                    <h5>Vermogen (minimum - maximum)</h5>

                    <p>
                        <input type="text" id="voeding_vermogen" readonly
                               style="border:0; color:#f6931f; font-weight:bold;">
                    </p>

                    <div id="slider-range20"></div>
                </div>

                @elseif($menuitem == "soundcard")
                    <table class="geluid_merk_table">
                        <tr>
                            <th colspan="2"><h5>Geluidskaart merk</h5></th>
                        </tr>
                        <tr>
                            <td>Asus</td>
                            <td>Creative</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="geluid_merk1" value="Asus"></td>
                            <td><input type="checkbox" name="geluid_merk2" value="Creative"></td>
                        </tr>
                    </table>
                    <table class="geluid_kanalen_table">
                        <tr>
                            <th colspan="2"><h5>Speaker kanalen</h5></th>
                        </tr>
                        <tr>
                            <td>5.1 Surround</td>
                            <td>7.1 Surround</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="geluid_kanalen1" value="5.1 Surround"></td>
                            <td><input type="checkbox" name="geluid_kanalen2" value="7.1 Surround"></td>
                        </tr>
                    </table>
                    <div class="geluid_cost">
                        <h5>Prijs (minimum - maximum)</h5>

                        <p>
                            <input type="text" id="amount_geluid" readonly
                                   style="border:0; color:#f6931f; font-weight:bold;">
                        </p>

                        <div id="slider-range24"></div>
                    </div>

                    <table class="geluid_minijack_table">
                        <tr>
                            <th colspan="2"><h5>3,5mm mini-jack</h5></th>
                        </tr>
                        <tr>
                            <td>Ja</td>
                            <td>Nee</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="geluid_jacket1" value="Ja"></td>
                            <td><input type="checkbox" name="geluid_jacket2" value="Nee"></td>
                        </tr>
                    </table>
                    <table class="geluid_hoofdtelefoonaansluiting_table">
                        <tr>
                            <th colspan="2"><h5>Hoogfdtelefoon aansluiting</h5></th>
                        </tr>
                        <tr>
                            <td>Ja</td>
                            <td>Nee</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="geluid_hoofd1" value="Ja"></td>
                            <td><input type="checkbox" name="geluid_hoofd2" value="Nee"></td>
                        </tr>
                    </table>

                @elseif($menuitem == "PCI")
                <table class="pci_usb_table">
                    <tr>
                        <th colspan="2"><h5>USB-poort</h5></th>
                    </tr>
                    <tr>
                        <td>Ja</td>
                        <td>Nee</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="pci_usb1" value="Ja"></td>
                        <td><input type="checkbox" name="pci_usb2" value="Nee"></td>
                    </tr>
                </table>
                <table class="pci_firewire_table">
                    <tr>
                        <th colspan="2"><h5>FireWire</h5></th>
                    </tr>
                    <tr>
                        <td>Ja</td>
                        <td>Nee</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="pci_firewire1" value="Ja"></td>
                        <td><input type="checkbox" name="pci_firewire2" value="Nee"></td>
                    </tr>
                </table>

                    @endif
            </div>
        </form>
    </div>
    <div class="col-md-12">
        <input type="submit" value="Submit" id="submit_proces">
    </div>
</div>
<div class="sidebar col-md-2">
    <input type="submit" value="Creëer profiel" id="create_profile">
</div>
</div>
</body>
</html>