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
                    <div class="pci_cost" >
                        <h5>Prijs (minimum - maximum)</h5>
                        <p>
                            <input type="text" id="amount_pci" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range23"></div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 right_div">
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
                </div>
            <input type="submit" value="Submit" id="submit_proces">
        </form>
            </div>
        </div>
</body>
</html>