<?php
/**
 * Created by PhpStorm.
 * Made by: Anny & Randa & Michelle & Sander
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
                    <table class="koeler_merk_table">
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
                    <table class="koeler_type_table">
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
                </div>
                <div class="col-md-6 right_div">
                    <div class="koeler_diameter">
                        <h5> Diameter ventilator (minimum - maximum)</h5>
                        <p>
                            <input type="text" id="koeler_diameter" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range27"></div>
                    </div>
                    <div class="koeler_rotatie">
                        <h5>Rotatiesnelheid (minimum - maximum)</h5>
                        <p>
                            <input type="text" id="koeler_rotatie" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range28"></div>
                    </div>
                </div>
            <input type="submit" value="Submit" id="submit_proces">
        </form>
            </div>
        </div>
</body>
</html>