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
                    <h5> Welk merk processor wilt u?</h5>
                    <input type="checkbox" name="processor_brand" value="Intel">Intel
                     <br>
                     <input type="checkbox" name="processor_brand" value="AMD">AMD
                 </div>
                 <div class="processor_serie">
                     <h5> Welke processor serie wilt u?</h5>
                     <input type="checkbox" name="processor_serie" value="A10">A10
                     <input type="checkbox" name="processor_serie" value="A6">A6
                     <input type="checkbox" name="processor_serie" value="A8">A8
                     <input type="checkbox" name="processor_serie" value="Core i3">Core i3
                     <br>
                     <input type="checkbox" name="processor_serie" value="Core i5">Core i5
                     <input type="checkbox" name="processor_serie" value="Core i7">Core i7
                     <input type="checkbox" name="processor_serie" value="FX">FX
                     <input type="checkbox" name="processor_serie" value="Pentium">Pentium
                     <br>
                     <input type="checkbox" name="processor_serie" value="Sempron">Sempron
                 </div>
                 <div class="processor_core">
                     <h5> Hoeveel processorkernen wilt u?</h5>
                     <input type="checkbox" name="processor_core" value="Dual core">Dual core
                     <input type="checkbox" name="processor_core" value="Quad core">Quad core
                     <br>
                     <input type="checkbox" name="processor_core" value="6-core">6-core
                     <input type="checkbox" name="processor_core" value="8-core">8-core
                 </div>
                 <div class="processor_cost">
                     <h5> Hoeveel wilt u uitgeven aan de processor?</h5>
                     <input type="checkbox" name="processor_cost" value="0-100">€0 - €100
                     <input type="checkbox" name="processor_cost" value="100-140">€100 - €140
                     <input type="checkbox" name="processor_cost" value="140-250">€140 - €250
                     <br>
                     <input type="checkbox" name="processor_cost" value="250-400">€250 - €400
                     <input type="checkbox" name="processor_cost" value="400+">€400 en meer
                 </div>
                 <div class="processor_speed">
                     <h5> wat is uw gewenste kloksnelheid?</h5>
                     <p>
                         <label for="amount">Price range:</label>
                         <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                     </p>
                    <div id="slider-range"></div>


                 </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>