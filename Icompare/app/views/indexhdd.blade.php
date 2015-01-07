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
    {{ HTML::script(slidslidersicompare.jsre.js); }}
    {{ HTML::script('js/slidercost.js'); }}
    {{ HTML::script('js/slidercosthdd.js'); }}
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
                    <table class="HDD_opslag_table">
                        <tr>
                            <th colspan="5"><h5>Opslag capaciteit</h5></th>
                        </tr>
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
                    <table class="HDD_formaat_table">
                        <tr>
                            <td colspan="2"><h5>formaat</h5></td>
                        </tr>
                        <tr>
                            <td>2,5 inch (Laptop)</td>
                            <td>3,5 inch (Desktop)</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="HDD_formaat1" value="2,5 inch"></td>
                            <td><input type="checkbox" name="HDD_formaat2" value="3,5 inch"></td>
                        </tr>
                    </table>
                    <div class="HDD_cost" >
                        <h5>Prijs (minimum - maximum)</h5>
                        <p>
                            <label for="amount_hdd" >prijs (Minimum - Maximum):</label>
                            <input type="text" id="amount_hdd" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range10"></div>
                    </div>
                </div>
                <div class="col-md-6 right_div">
                    <table class="HDD_snelheid_table" cellspacing="1px">
                        <tr>
                            <td colspan="4"><h5>HDD schrijfsnelheid</h5></td>
                        </tr>
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
                            <td>n.v.t.</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="HDD_snelheid5" value="7200"></td>
                            <td><input type="checkbox" name="HDD_snelheid6" value="variabel"></td>
                            <td><input type="checkbox" name="HDD_snelheid7" value="nvt"></td>
                        </tr>
                    </table>
                    <table class="HDD_merk_table" cellspacing="1px">
                        <tr>
                            <td colspan="4"><h5>Merk HDD</h5></td>
                        </tr>
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
                    <table class="HDD_cache_table" cellspacing="1px">
                        <tr>
                            <td colspan="3"><h5>Buffer / cache</h5></td>
                        </tr>
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
                            <td>n.v.t.</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="HDD_cache4" value="64 MB"></td>
                            <td><input type="checkbox" name="HDD_cache5" value="128 MB"></td>
                            <td><input type="checkbox" name="HDD_cache6" value="nvt"></td>
                        </tr>
                    </table>
                    <table class="HDD_aansluiting_table" cellspacing="1px">
                        <tr>
                            <td colspan="2"><h5>aansluiting HDD</h5></td>
                        </tr>
                        <tr>
                            <td>S-ATA(II)</td>
                            <td>S-ATA(III)</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="HDD_aansluiting1" value="s-ata(II)"></td>
                            <td><input type="checkbox" name="HDD_aansluiting2" value="s-ata(III)"></td>
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