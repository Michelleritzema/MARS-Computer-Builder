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
                                <td><input type="radio" name="voeding_cpup4" value="0"></td>
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
                                <td><input type="radio" name="voeding_cpup8" value="0"></td>
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
                                <td><input type="radio" name="voeding_FDD" value="0"></td>
                                <td><input type="radio" name="voeding_FDD" value="1"></td>
                                <td><input type="radio" name="voeding_FDD" value="2"></td>
                            </tr>
                        </table>
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
                        <div class="specification_table" id="voeding_cost">
                            <h5>Prijs (minimum - maximum)</h5>
                            <p style="padding:0 41%">
                                <input type="text" id="amount_voeding" readonly style="border:0;color:#f6931f;font-weight:bold;">
                            </p>
                            <div class="specification_table_slider" id="slider-range19"></div>
                        </div>
                        <table class="voeding_modulair_table">
                            <tr><td colspan="2"><h5>Modulair</h5></td></tr>
                            <tr>
                                <td style="width:50%">Ja</td>
                                <td style="width:50%">Nee</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="voeding_modulair" value="1"></td>
                                <td><input type="radio" name="voeding_modulair" value="0"></td>
                            </tr>
                        </table>
                        <div class="voeding_vermogen specification_table">
                            <h5>Vermogen (minimum - maximum)</h5>
                            <p style="padding:0 35%">
                                <input type="text" id="voeding_vermogen" readonly style="border:0;color:#f6931f;font-weight:bold;">
                            </p>
                            <div class="specification_table_slider" id="slider-range20"></div>
                        </div>
                    </div>
                </form>
            @elseif($menuitem == "processorcooler")
                <form>
                    <div class="col-md-6 left_div">

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


                        <table class="spec_table" id="koeler_merk">
                            <tr><td colspan="4"><h5>Merk koeler</h5></td></tr>
                            <tr>
                                <td style="width:25%">Be quiet!</td>
                                <td style="width:25%">Cooler Master</td>
                                <td style="width:25%">Corsair</td>
                                <td style="width:25%">Artic</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="koeler_merk1" value="Be Quiet!"></td>
                                <td><input type="checkbox" name="koeler_merk2" value="Cooler Master"></td>
                                <td><input type="checkbox" name="koeler_merk3" value="Corsair"></td>
                                <td><input type="checkbox" name="koeler_merk4" value="Artic"></td>
                            </tr>
                            <tr>
                                <td style="width:25%">Crucial</td>
                                <td style="width:50%">Kingston</td>
                                <td style="width:25%">Scythe</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="koeler_merk5" value="Crucial"></td>
                                <td><input type="checkbox" name="koeler_merk6" value="Kingston"></td>
                                <td><input type="checkbox" name="koeler_merk7" value="Scythe"></td>
                            </tr>
                        </table>
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
                        <div class="koeler_cost" >
                            <h5>Prijs (minimum - maximum)</h5>
                            <p>
                                <input type="text" id="amount_koeler" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </p>
                            <div id="slider-range26"></div>
                        </div>
                    </div>
                </form>
            @elseif($menuitem == "tmp")
                <form>
                    <div class="col-md-6 left_div">
                    </div>
                    <div class="col-md-6 right_div">
                    </div>
                </form>
            @endif
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
