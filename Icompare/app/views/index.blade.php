<?php
/**
 * Created by PhpStorm.
 * Made by: Anny & Randa & Michelle & Sander
 * Date: 12/12/2014
*/

session_start();
if(!Session::has('menuitem')) {
    Session::put('menuitem', 'powersupply');
}
$menuitem = Session::get('menuitem');
//echo $menuitem;
//var_dump($menuitem);
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
                        ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet
                        facilisis. Duis congue ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet,
                        aliquet pulvinar erat. Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi,
                        et placerat tellus tempor vitae.
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
                    <tr> <td class="link_image"><img src="images/motherboard.gif"></td></tr>
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
                PCI
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
                <form>
                    <div class="col-md-6 left_div">
                        <table class="voeding_cpup4_table" cellspacing="1px">
                            <tr>
                                <td colspan="2"><h5>CPU P4</h5></td>
                            </tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="voeding_cpup4" value="1"></td>
                                <td><input type="radio" name="voeding_cpup4" value="1"></td>
                            </tr>
                        </table>
                        <table class="voeding_cpup8_table" cellspacing="1px">
                            <tr>
                                <td colspan="2"><h5>CPU P8</h5></td>
                            </tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="voeding_cpup8" value="1"></td>
                                <td><input type="radio" name="voeding_cpup8" value="1"></td>
                            </tr>
                        </table>
                        <table class="voeding_FDD_table" cellspacing="1px">
                            <tr>
                                <td colspan="3"><h5>CPU P4+P4</h5></td>
                            </tr>
                            <tr>
                                <td style="width:33%">0</td>
                                <td style="width:33%">1</td>
                                <td style="width:33%">2</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="voeding_FDD" value="1"></td>
                                <td><input type="radio" name="voeding_FDD" value="1"></td>
                                <td><input type="radio" name="voeding_FDD" value="1"></td>
                            </tr>
                        </table>
                        <div class="specification_table" id="voeding_PCI">
                            <h5>PCI Express pin (minimum - maximum)</h5>
                            <p style="padding:0 44%">
                                <input type="text" id="voeding_pci" readonly style="border:0;color:#f6931f;font-weight:bold;">
                            </p>
                            <div class="specification_table_slider" id="slider-range21"></div>
                        </div>
                        <div class="voeding_sata specification_table">
                            <h5>S-ATA aansluitingen (minimum - maximum)</h5>
                            <p style="padding:0 44%">
                                <input type="text" id="voeding_sata" readonly style="border:0;color:#f6931f;font-weight:bold;">
                            </p>
                            <div class="specification_table_slider" id="slider-range22"></div>
                        </div>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="voeding_merk_table">
                            <tr><td colspan="5"><h5>Merk voeding</h5></td></tr>
                            <tr>
                                <td style="width:20%">Be quiet!</td>
                                <td style="width:20%">Cooler Master</td>
                                <td style="width:20%">Corsair</td>
                                <td style="width:20%">Seasonic</td>
                                <td style="width:20%">XFX</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="voeding_merk1" value="1"></td>
                                <td><input type="checkbox" name="voeding_merk2" value="2"></td>
                                <td><input type="checkbox" name="voeding_merk3" value="3"></td>
                                <td><input type="checkbox" name="voeding_merk4" value="4"></td>
                                <td><input type="checkbox" name="voeding_merk5" value="5"></td>
                            </tr>
                        </table>
                        <table class="voeding_certificering_table">
                            <tr><td colspan="5"><h5>Certificering</h5></td></tr>
                            <tr>
                                <td style="width:20%">Geen</td>
                                <td style="width:20%">80 PLUS</td>
                                <td style="width:20%">80 PLUS Bronze</td>
                                <td style="width:20%">80 PLUS Silver</td>
                                <td style="width:20%">80 PLUS Gold</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="voeding_certificering" value="1"></td>
                                <td><input type="radio" name="voeding_certificering" value="2"></td>
                                <td><input type="radio" name="voeding_certificering" value="3"></td>
                                <td><input type="radio" name="voeding_certificering" value="4"></td>
                                <td><input type="radio" name="voeding_certificering" value="5"></td>
                            </tr>
                        </table>
                        <table class="voeding_modulair_table">
                            <tr><td colspan="2"><h5>Modulair</h5></td></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="voeding_modulair" value="1"></td>
                                <td><input type="radio" name="voeding_modulair" value="1"></td>
                            </tr>
                        </table>
                        <div class="specification_table" id="voeding_cost">
                            <h5>Prijs (minimum - maximum)</h5>
                            <p style="padding:0 41%">
                                <input type="text" id="amount_voeding" readonly style="border:0;color:#f6931f;font-weight:bold;">
                            </p>
                            <div class="specification_table_slider" id="slider-range19"></div>
                        </div>
                        <div class="voeding_vermogen specification_table">
                            <h5>Vermogen (minimum - maximum)</h5>
                            <p style="padding:0 35%">
                                <input type="text" id="voeding_vermogen" readonly style="border:0;color:#f6931f;font-weight:bold;">
                            </p>
                            <div class="specification_table_slider" id="slider-range20"></div>
                        </div>
                    </div>
                </form>
                <div class="col-md-12">
                    <input type="submit" value="Onderdeel opslaan" id="submit_proces">
                </div>
            @elseif($menuitem == "processorcooler")
                <form>
                    <div class="col-md-6 left_div">
                        <table class="koeler_merk_table">
                            <tr><td colspan="4"><h5>Merk koeler</h5></td></tr>
                            <tr>
                                <td style="width:25%">Be quiet!</td>
                                <td style="width:25%">Cooler Master</td>
                                <td style="width:25%">Corsair</td>
                                <td style="width:25%">Artic</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="koeler_merk1" value="1"></td>
                                <td><input type="checkbox" name="koeler_merk2" value="2"></td>
                                <td><input type="checkbox" name="koeler_merk3" value="3"></td>
                                <td><input type="checkbox" name="koeler_merk4" value="4"></td>
                            </tr>
                            <tr>
                                <td style="width:25%">Crucial</td>
                                <td style="width:25%">Kingston</td>
                                <td style="width:25%">Scythe</td>
                                <td style="width:25%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="koeler_merk5" value="5"></td>
                                <td><input type="checkbox" name="koeler_merk6" value="6"></td>
                                <td><input type="checkbox" name="koeler_merk7" value="7"></td>
                                <td><input type="checkbox" name="koeler_merk8" value="8"></td>
                            </tr>
                        </table>
                        <div class="koeler_diameterventilator specification_table">
                            <h5>Diameter ventilator (in cm)</h5>
                            <p style="padding:0 48%">
                                <input type="text" id="koeler_diameter" readonly style="border:0;color:#f6931f;font-weight:bold;">
                            </p>
                            <div class="specification_table_slider" id="slider-range27"></div>
                        </div>
                        <div class="koeler_rotatiesnelheid specification_table">
                            <h5>Rotatiesnelheid (minimum - maximum)</h5>
                            <p style="padding:0 42%">
                                <input type="text" id="koeler_rotatie" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </p>
                            <div class="specification_table_slider" id="slider-range28"></div>
                        </div>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="koeler_methode_table">
                            <tr><td colspan="2"><h5>Koel methode</h5></td></tr>
                            <tr>
                                <td style="width:50%">Lucht</td>
                                <td style="width:50%">Water</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="koeler_type" value="1"></td>
                                <td><input type="radio" name="koeler_type" value="1"></td>
                            </tr>
                        </table>
                        <div class="koeler_cost specification_table">
                            <h5>Prijs (minimum - maximum)</h5>
                            <p style="padding:0 42%">
                                <input type="text" id="amount_koeler" readonly style="border:0;color:#f6931f;font-weight:bold;">
                            </p>
                            <div class="specification_table_slider" id="slider-range26"></div>
                        </div>
                    </div>
                </form>
                <div class="col-md-12">
                    <input type="submit" value="Onderdeel opslaan" id="submit_proces">
                </div>
            @elseif($menuitem == "tmp")
                <form>
                    <div class="col-md-6 left_div">
                    </div>
                    <div class="col-md-6 right_div">
                    </div>
                </form>
                <div class="col-md-12">
                    <input type="submit" value="Onderdeel opslaan" id="submit_proces">
                </div>
            @elseif($menuitem == "soundcard")
                <form>
                    <div class="col-md-6 left_div">
                        <table class="geluid_optisch_table">
                            <tr><td colspan="2"><h5>Optische ingang</h5></td></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="geluid_optisch" value="1"></td>
                                <td><input type="radio" name="geluid_optisch" value="1"></td>
                            </tr>
                        </table>
                        <table class="geluid_sample_table">
                            <tr><td colspan="6"><h5>Sample frequentie</h5></td></tr>
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
                                <td><input type="radio" name="geluid_sample" value="1"></td>
                                <td><input type="radio" name="geluid_sample" value="1"></td>
                                <td><input type="radio" name="geluid_sample" value="1"></td>
                                <td><input type="radio" name="geluid_sample" value="1"></td>
                                <td><input type="radio" name="geluid_sample" value="1"></td>
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
                                <td><input type="radio" name="geluid_sample" value="1"></td>
                                <td><input type="radio" name="geluid_sample" value="1"></td>
                                <td><input type="radio" name="geluid_sample" value="1"></td>
                                <td><input type="radio" name="geluid_sample" value="1"></td>
                                <td><input type="radio" name="geluid_sample" value="1"></td>
                                <td><input type="radio" name="geluid_sample" value="1"></td>
                            </tr>
                        </table>
                        <table class="geluid_aiso_table">
                            <tr><td colspan="6"><h5>AISO Sample frequentie</h5></td></tr>
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
                                <td><input type="radio" name="geluid_aiso" value="1"></td>
                                <td><input type="radio" name="geluid_aiso" value="1"></td>
                                <td><input type="radio" name="geluid_aiso" value="1"></td>
                                <td><input type="radio" name="geluid_aiso" value="1"></td>
                                <td><input type="radio" name="geluid_aiso" value="1"></td>
                            </tr>
                        </table>
                        <table class="geluid_processor_table">
                            <tr><td colspan="3"><h5>Audio processor</h5></td></tr>
                            <tr>
                                <td style="width:33.3%">Asus AV100</td>
                                <td style="width:33.3%">Asus UA100</td>
                                <td style="width:33.3%">C-Media CMI8786</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="geluid_processor1" value="1"></td>
                                <td><input type="checkbox" name="geluid_processor2" value="2"></td>
                                <td><input type="checkbox" name="geluid_processor3" value="3"></td>
                            </tr>
                            <tr>
                                <td style="width:33.3%">C-Media CMI8888DHT</td>
                                <td style="width:33.3%">Sound Core3D</td>
                                <td style="width:33.3%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="geluid_processor4" value="4"></td>
                                <td><input type="checkbox" name="geluid_processor5" value="5"></td>
                                <td><input type="checkbox" name="geluid_processor6" value="6"></td>
                        </table>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="geluid_merk_table">
                            <tr><td colspan="3"><h5>Geluidskaart merk</h5></td></tr>
                            <tr>
                                <td style="width:33.3%">Asus</td>
                                <td style="width:33.3%">Creative</td>
                                <td style="width:33.3%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="geluid_merk" value="1"></td>
                                <td><input type="radio" name="geluid_merk" value="1"></td>
                                <td><input type="radio" name="geluid_merk" value="1"></td>
                            </tr>
                        </table>
                        <table class="geluid_kanalen_table">
                            <tr><td colspan="2"><h5>Speaker kanalen</h5></td></tr>
                            <tr>
                                <td style="width:50%">5.1 Surround</td>
                                <td style="width:50%">7.1 Surround</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="geluid_kanalen" value="1"></td>
                                <td><input type="radio" name="geluid_kanalen" value="1"></td>
                            </tr>
                        </table>
                        <div class="geluid_cost specification_table">
                            <h5>Prijs (minimum - maximum)</h5>
                            <p style="padding:0 42%">
                                <input type="text" id="amount_geluid" readonly style="border:0;color:#f6931f;font-weight:bold;">
                            </p>
                            <div class="specification_table_slider" id="slider-range24"></div>
                        </div>
                        <table class="geluid_minijack_table">
                            <tr><td colspan="2"><h5>3,5 mm mini-jack</h5></td></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="geluid_jacket" value="1"></td>
                                <td><input type="radio" name="geluid_jacket" value="1"></td>
                            </tr>
                        </table>
                        <table class="geluid_hoofdtelefoonaansluiting_table">
                            <tr><td colspan="2"><h5>Hoofdtelefoon aansluiting</h5></td></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="geluid_hoofd" value="1"></td>
                                <td><input type="radio" name="geluid_hoofd" value="1"></td>
                            </tr>
                        </table>
                    </div>
                </form>
                <div class="col-md-12">
                    <input type="submit" value="Onderdeel opslaan" id="submit_proces">
                </div>
            @elseif($menuitem == "PCI")
                <form>
                    <div class="col-md-6 left_div">
                        <table class="pci_usb_table">
                            <tr><td colspan="2"><h5>USB-poort</h5></td></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="pci_usb" value="1"></td>
                                <td><input type="radio" name="pci_usb" value="1"></td>
                            </tr>
                        </table>
                        <table class="pci_firewire_table">
                            <tr><td colspan="2"><h5>FireWire</h5></td></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="pci_firewire" value="1"></td>
                                <td><input type="radio" name="pci_firewire" value="1"></td>
                            </tr>
                        </table>
                        <div class="pci_cost specification_table">
                            <h5>Prijs (minimum - maximum)</h5>
                            <p style="padding:0 42%">
                                <input type="text" id="amount_pci" readonly style="border:0;color:#f6931f;font-weight:bold;">
                            </p>
                            <div class="specification_table_slider" id="slider-range23"></div>
                        </div>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="pci_esata_table">
                            <tr><td colspan="2"><h5>e-SATA aansluiting aanwezig</h5></td></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="pci_esata" value="1"></td>
                                <td><input type="radio" name="pci_esata" value="1"></td>
                            </tr>
                        </table>
                        <table class="pci_sata_table">
                            <tr><td colspan="2"><h5>SATA aansluiting aanwezig</h5></td></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="pci_sata" value="1"></td>
                                <td><input type="radio" name="pci_sata" value="1"></td>
                            </tr>
                        </table>
                    </div>
                </form>
                <div class="col-md-12">
                    <input type="submit" value="Onderdeel opslaan" id="submit_proces">
                </div>
            @elseif($menuitem == "videocard")
                <form>
                    <div class="col-md-6 left_div">
                        <table class="GPU_producer_table">
                            <tr><td colspan="2"><h5>Fabrikant videokaart</h5></td></tr>
                            <tr>
                                <td style="width:50%">NVIDIA</td>
                                <td style="width:50%">AMD</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_producer1" value="1"></td>
                                <td><input type="checkbox" name="GPU_producer2" value="2"></td>
                            </tr>
                        </table>
                        <table class="GPU_type_AMD_table">
                            <tr><td colspan="2"><h5>AMD videokaart</h5></td></tr>
                            <tr>
                                <td style="width:50%">AMD Radeon R9 270X</td>
                                <td style="width:50%">AMD Radeon R9 270</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_AMD1" value="1"></td>
                                <td><input type="checkbox" name="GPU_type_AMD2" value="2"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">AMD Radeon R7 240</td>
                                <td style="width:50%">AMD Radeon HD 6450</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_AMD3" value="3"></td>
                                <td><input type="checkbox" name="GPU_type_AMD4" value="4"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">AMD Radeon R9 280</td>
                                <td style="width:50%">AMD Radeon R9 280X</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_AMD5" value="5"></td>
                                <td><input type="checkbox" name="GPU_type_AMD6" value="6"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">AMD Radeon R9 290</td>
                                <td style="width:50%">AMD Radeon R9 290X</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_AMD7" value="7"></td>
                                <td><input type="checkbox" name="GPU_type_AMD8" value="8"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">AMD Radeon R7 250</td>
                                <td style="width:50%">AMD Radeon HD 3450 AGP</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_AMD9" value="9"></td>
                                <td><input type="checkbox" name="GPU_type_AMD10" value="10"></td>
                            </tr>
                        </table>
                        <table class="GPU_type_NVIDIA_table">
                            <tr><td colspan="2"><h5>NVIDIA videokaart</h5></td></tr>
                            <tr>
                                <td style="width:50%">NVIDIA FX5500</td>
                                <td style="width:50%">NVIDIA GeForce GTX 780</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA1" value="1"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA2" value="2"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">NVIDIA GeForce GTX 980</td>
                                <td style="width:50%">NVIDIA GeForce GTX 970</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA3" value="3"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA4" value="4"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">NVIDIA GeForce GT 730</td>
                                <td style="width:50%">NVIDIA GeForce GTX 660</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA5" value="5"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA6" value="6"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">NVIDIA GeForce GTX 750</td>
                                <td style="width:50%">NVIDIA GeForce GTX 760</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA7" value="7"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA8" value="8"></td>
                            </tr>
                            <tr>
                                <td style="width:50%">NVIDIA GeForce GT 740</td>
                                <td style="width:50%">NVIDIA GeForce GTX 770</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA9" value="9"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA10" value="10"></td>
                            </tr>
                        </table>
                        <table class="GPU_brand_table">
                            <tr><td colspan="3"><h5>Merk videokaart</h5></td></tr>
                            <tr>
                                <td style="width:33.3%">Asus</td>
                                <td style="width:33.3%">Club 3D</td>
                                <td style="width:33.3%">Gigabyte</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_brand1" value="1"></td>
                                <td><input type="checkbox" name="GPU_brand2" value="2"></td>
                                <td><input type="checkbox" name="GPU_brand3" value="3"></td>
                            </tr>
                            <tr>
                                <td style="width:33.3%">Sapphire</td>
                                <td style="width:33.3%">MSI</td>
                                <td style="width:33.3%">Geen voorkeur</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_brand4" value="4"></td>
                                <td><input type="checkbox" name="GPU_brand5" value="5"></td>
                                <td><input type="checkbox" name="GPU_brand6" value="6"></td>
                            </tr>
                        </table>
                        <table class="GPU_geheugen_type_table">
                            <tr><td colspan="3"><h5>Type geheugen</h5></td></tr>
                            <tr>
                                <td style="width:33.3%">DDR2</td>
                                <td style="width:33.3%">DDR3</td>
                                <td style="width:33.3%">GDDR5</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="GPU_geheugen_type" value="1"></td>
                                <td><input type="radio" name="GPU_geheugen_type" value="1"></td>
                                <td><input type="radio" name="GPU_geheugen_type" value="1"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6 right_div">
                        <table class="GPU_memory_table">
                            <tr><td colspan="3"><h5>Brandbreedte geheugenbus</h5></td></tr>
                            <tr>
                                <td style="width:33.3%">64</td>
                                <td style="width:33.3%">128</td>
                                <td style="width:33.3%">192</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="GPU_bandwidth_memory" value="1"></td>
                                <td><input type="radio" name="GPU_bandwidth_memory" value="1"></td>
                                <td><input type="radio" name="GPU_bandwidth_memory" value="1"></td>
                            </tr>
                            <tr>
                                <td style="width:33.3%">256</td>
                                <td style="width:33.3%">384</td>
                                <td style="width:33.3%">512</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="GPU_bandwidth_memory" value="1"></td>
                                <td><input type="radio" name="GPU_bandwidth_memory" value="1"></td>
                                <td><input type="radio" name="GPU_bandwidth_memory" value="1"></td>
                            </tr>
                        </table>
                        <table>
                            <tr><td colspan="2"><h5>Aantal DVI-I aansluitingen</h5></td></tr>
                            <tr>
                                <td style="width:50%">0</td>
                                <td style="width:50%">1</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="GPU_DVI-I" value="1"></td>
                                <td><input type="radio" name="GPU_DVI-I" value="1"></td>
                            </tr>
                        </table>
                        <table>
                            <tr><td colspan="3"><h5>Aantal DVI-D aansluitingen</h5></td></tr>
                            <tr>
                                <td style="width:33.3%">0</td>
                                <td style="width:33.3%">1</td>
                                <td style="width:33.3%">2</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="GPU_DVI-D" value="1"></td>
                                <td><input type="radio" name="GPU_DVI-D" value="1"></td>
                                <td><input type="radio" name="GPU_DVI-D" value="1"></td>
                            </tr>
                        </table>
                        <table>
                            <tr><td colspan="2"><h5>HDMI aansluitingen</h5></td></tr>
                            <tr>
                                <td style="width:50%">1</td>
                                <td style="width:50%">2</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="GPU_HDMI" value="1"></td>
                                <td><input type="radio" name="GPU_HDMI" value="1"></td>
                            </tr>
                        </table>
                        <table>
                            <tr><td colspan="2"><h5>VGA-poort</h5></td></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="GPU_VGA1" value="1"></td>
                                <td><input type="radio" name="GPU_VGA2" value="1"></td>
                            </tr>
                        </table>
                        <div class="GPU_cost specification_table">
                            <h5>Prijs (minimum - maximum)</h5>
                            <p style="padding:0 42%">
                                <input type="text" id="amount_GPU_prijs" readonly style="border:0;color:#f6931f;font-weight:bold;">
                            </p>
                            <div class="specification_table_slider" id="slider-range3"></div>
                        </div>
                        <div class="GPU_memory specification_table">
                            <h5>Gewenst videogeheugen (minimum - maximum)</h5>
                            <p style="padding:0 36%">
                                <input type="text" id="amount_GPU_geheugen" readonly style="border:0;color:#f6931f;font-weight:bold;">
                            </p>
                            <div class="specification_table_slider" id="slider-range4"></div>
                        </div>
                    </div>
                </form>
                <div class="col-md-12">
                    <input type="submit" value="Onderdeel opslaan" id="submit_proces">
                </div>
            @elseif($menuitem == "processor")
                <form>
                    <div class="col-md-6 left_div">
                        <table class="brand_table">
                            <tr><td colspan="2"><h5>Merk processor</h5></td></tr>
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
                            <tr><td colspan="2"><h5>Aantal processorkernen</h5></td></tr>
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
                            <h5>Prijs (minimum - maximum)</h5>
                            <p style="padding:0 41%">
                                <input type="text" id="amount" readonly style="border:0;color:#f6931f;font-weight:bold;">
                            </p>
                            <div class="specification_table_slider" id="slider-range2"></div>
                        </div>
                    </div>
                    <div class="col-md-6 right_div">
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

                    </div>
                </form>
                <div class="col-md-12">
                    <input type="submit" value="Onderdeel opslaan" id="submit_proces">
                </div>
            @elseif($menuitem == "tmp")
                <form>
                    <div class="col-md-6 left_div">
                    </div>
                    <div class="col-md-6 right_div">
                    </div>
                </form>
                <div class="col-md-12">
                    <input type="submit" value="Onderdeel opslaan" id="submit_proces">
                </div>
            @endif
        </div>
    </div>
    <div class="sidebar col-md-2">
        <input type="submit" value="Creëer profiel" id="create_profile">
    </div>
</div>
</body>
</html>
