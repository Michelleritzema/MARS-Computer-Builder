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
                </div>
                <div class="col-md-6 right_div">
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
                </div>
            <input type="submit" value="Submit" id="submit_proces">
        </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>