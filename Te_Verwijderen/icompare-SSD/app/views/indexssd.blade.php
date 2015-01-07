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
    {{ HTML::script('js/slider.js'); }}
    {{ HTML::script('js/slidercost.js'); }}
    {{ HTML::script('js/slidercosthdd.js'); }}
    {{ HTML::script('js/slidercostsdd.js'); }}
    {{ HTML::script('js/sliderschrijfsdd.js'); }}
    {{ HTML::script('js/sliderleesssd.js'); }}
    {{ HTML::script('js/slidercostram.js'); }}

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
                </div>
                <div class="col-md-6 right_div">
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
                </div>
            <input type="submit" value="Submit" id="submit_proces">
        </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>