<?php
/**
 * Created by PhpStorm.
 * Made by: Sander & Anny & Randa & Michelle
 * Date: 12/12/2014
 * Time: 22:15
 */
session_start();
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
    {{ HTML::script(slidersicompare.jsmpare.js'); }}
    {{ HTML::script('js/slidercost.js'); }}
    {{ HTML::script('js/slidercostmoederbord.js'); }}
    {{ HTML::script('js/sliderusb.js'); }}
    {{ HTML::script('js/slidersata300.js'); }}
    {{ HTML::script('js/slidersata600.js'); }}

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>
<body>
<div class='container'>
    <div class='banner'>
        {{ HTML::image('images/banner_blue_shadow.png', 'Icompare banner', array('class' => 'banner_img')) }}
    </div>
    <div class= 'sidebar'>
        <div class='sidebarlinks'>
            <div class='menu_button'>
                <a href="#">Button 1</a>
            </div>
            <div class='menu_button'>
                <a href="#">Button 2</a>
            </div>
            <div class='menu_button'>
                <a href="#">Button 3</a>
            </div>
        </div>
    </div>
    <div class='content'>
        <div class="intro_accordion">
            <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-1">Meer informatie over deze site
                    <span class="intro_arrow" href="#accordion-1"></span>
                    <!--{{ HTML::image('images/arrow_down.png', 'intro arrow', array('id' => 'intro_arrow_span')) }}-->
                </a>
                <div id="accordion-1" class="accordion-section-content">
                    <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi,
                        rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis. Duis congue
                        ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet, aliquet pulvinar erat.
                        Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi, et placerat tellus tempor vitae.</p>
                </div>
            </div>
        </div>
        <form>
            <div class="selection">
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
                </div>
                <div class="col-md-6 right_div">
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
                </div>
            <input type="submit" value="Submit" id="submit_proces">
                </div>
        </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>