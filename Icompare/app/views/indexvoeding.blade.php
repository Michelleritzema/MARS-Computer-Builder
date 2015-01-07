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
    {{ HTML::script('js/slidersicompare.js'); }}

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

        <div class = 'container'  >
            <table  >

                <tr >
                    <td class="link">  <a href="" ><img src="images/voeding.png"><br>Voedingen</a></td>
                    <td class="link">  <a href=""><img src="images/processorkoelers.png" ><br>Processorkoelers</a> </td>
                    <td class="link">  <a href=""><img src="images/interne harde schijven.png"> <br>interne harde schijven</a> </td>
                    <td class="link">  <a href=""><img src="images/geluidkaarten.png" ><br>Geluidkarten</a></td>
                    <td class="link">  <a href=""><img src="images/PCI express kaarten.png"> <br>PCI express kaarten</a></td>
                    <td class="link">  <a href=""><img src="http://ic.tweakimg.net/ext/i/thumbmini/2000546307.png"> <br>Videokaarten</a></td>
                </tr>

                <tr>
                    <td class="link">  <a href=""><img src="http://ic.tweakimg.net/ext/i/thumbmini/1370620570.gif"> <br>Processors</a></td>
                    <td class="link">  <a href=""><img src="http://ic.tweakimg.net/ext/i/thumbmini/1355740573.jpeg"><br>Interne geheugen</a></td>
                    <td class="link">  <a href=""><img src="http://ic.tweakimg.net/ext/i/thumbmini/1405348485.jpeg"> <br>Moederborden</a></td>
                    <td class="link">  <a href=""><img src="http://ic.tweakimg.net/ext/i/thumbmini/1364981347.jpeg"> <br>Behuizingen</a></td>
                    <td class="link">  <a href=""><img src="http://ic.tweakimg.net/ext/i/thumbmini/1374111403.jpeg"> <br>Solid state drives</a></td>
                    <td class="link">  <a href=""><img src="images/blu-rayDVD branders.png"> <br>blu-ray/DVD branders</a></td>
                </tr>


            </table>

        </div>
        <form>
            <div class="selection">
                <div class="col-md-6 left_div">
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
                    <div class="voeding_cost" >
                        <h5>Prijs (minimum - maximum)</h5>
                        <p>
                            <input type="text" id="amount_voeding" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range19"></div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 right_div">
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
                            <input type="text" id="voeding_vermogen" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range20"></div>
                    </div>
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
                            <input type="text" id="voeding_sata" readonly style="border:0; color:#f6931f; font-weight:bold;">
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
                </div>
            <input type="submit" value="Submit" id="submit_proces">
        </form>
            </div>
        </div>
</body>
</html>