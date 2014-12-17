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
        <div class="selection">
            <div class="processor">
                <form>
                 <div class="processor_brand">
                     <table class="brand_table">
                         <tr>
                             <td colspan="2"><h5> Welk merk processor wilt u?</h5></td>
                         </tr>
                         <tr>
                             <td>Intel</td>
                             <td>AMD</td>
                         </tr>
                         <tr>
                             <td><input type="checkbox" name="processor_brand" value="Intel"></td>
                             <td><input type="checkbox" name="processor_brand" value="AMD"></td>
                         </tr>
                     </table>
                 </div>
                 <div class="processor_serie" style="line-height:100%">
                     <table class="serie_table" cellspacing="1px">
                         <tr>
                             <td colspan="3"><h5> Welke processor serie wilt u?</h5></td>
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
                 </div>
                 <div class="processor_core">
                     <table class="core_table">
                         <tr>
                             <td colspan="2"><h5> Hoeveel processorkernen wilt u?</h5></td>
                         </tr>
                         <tr>
                             <td>Dual core</td>
                             <td>Quad core</td>
                         </tr>
                         <tr>
                             <td><input type="checkbox" name="processor_core" value="Dual core"></td>
                             <td><input type="checkbox" name="processor_core" value="Quad core"></td>
                         </tr>
                        <tr>
                            <td>6-core</td>
                            <td>6-core</td>
                        </tr>
                         <tr>
                             <td><input type="checkbox" name="processor_core" value="6-core"></td>
                             <td><input type="checkbox" name="processor_core" value="6-core"></td>
                         </tr>
                     </table>
                 </div>
                <div class="processor_speed">
                     <h5> wat is uw gewenste kloksnelheid?</h5>
                     <p>
                         <label for="speed">Kloksnelheid:</label>
                         <input type="text" id="speed" readonly style="border:0; color:#f6931f; font-weight:bold;">
                     </p>
                    <div id="slider-range1"></div>
                 </div>

                    <div class="processor_cost" >
                        <h5> wat is de gewenste prijs?</h5>
                        <p>
                            <label for="amount" >prijs:</label>
                            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range2"></div>
                    </div>
                    <input type="submit" value="Submit" id="submit_proces">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>