<?php
/**
 * Created by PhpStorm.
 * Made by: Anny & Randa & Michelle
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
    {{ HTML::script('js/slidercosthdd.js'); }}
    {{ HTML::script('js/slidercostsdd.js'); }}
    {{ HTML::script('js/sliderschrijfsdd.js'); }}
    {{ HTML::script('js/sliderleesssd.js'); }}
    {{ HTML::script('js/slidercostram.js'); }}
    {{ HTML::script('js/slidercostbehuizing.js'); }}
    {{ HTML::script('js/slider3bays.js'); }}
    {{ HTML::script('js/slider2bays.js'); }}
    {{ HTML::script('js/slider5bays.js'); }}
    {{ HTML::script('js/slideruitbreidingsloten.js'); }}

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
                </div>
                <div class="col-md-6 right_div">
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