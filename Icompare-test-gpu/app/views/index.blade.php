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
            <div class="GPU">
                <form>
                 <div class="GPU_producer">
                     <table class="GPU_producer_table">
                         <tr>
                             <td colspan="2"><h5>Van welke fabrikant wilt u de videokaart?</h5></td>
                         </tr>
                         <tr>
                             <td>NVIDIA</td>
                             <td>AMD</td>
                         </tr>
                         <tr>
                             <td><input type="checkbox" name="GPU_producer" value="NVIDIA"></td>
                             <td><input type="checkbox" name="GPU_producer" value="AMD"></td>
                         </tr>
                     </table>
                 </div>
                    <div class="GPU_brand">
                        <table class="GPU_brand_table">
                            <tr>
                                <td colspan="3"><h5>Welk merk videokaart wilt u?</h5></td>
                            </tr>
                            <tr>
                                <td>Asus</td>
                                <td>Club 3D</td>
                                <td>Gigabyte</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_brand" value="Asus"></td>
                                <td><input type="checkbox" name="GPU_brand" value="Club_3D"></td>
                                <td><input type="checkbox" name="GPU_brand" value="Gigabyte"></td>
                            </tr>
                            <tr>
                                <td>Sapphire</td>
                                <td>MSI</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_brand" value="Sapphire"></td>
                                <td><input type="checkbox" name="GPU_brand" value="MSI"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="GPU_geheugen_type">
                        <table class="GPU_geheugen_type_table">
                            <tr>
                                <td colspan="3"><h5 >Wat voor type geheugen <br> wilt u voor uw videokaart?</h5></td>
                            </tr>
                            <tr>
                                <td>DDR2</td>
                                <td>DDR3</td>
                                <td>GDDR5</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_geheugen_type" value="DDR2"></td>
                                <td><input type="checkbox" name="GPU_geheugen_type" value="DDR3"></td>
                                <td><input type="checkbox" name="GPU_geheugen_type" value="GDDR5"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="GPU_bandwidth_memory">
                        <table class="GPU_memory_table">
                            <tr>
                                <td colspan="3"><h5>Wat is uw gewenste brandbreedte voor de geheugenbus?</h5></td>
                            </tr>
                            <tr>
                                <td>64</td>
                                <td>128</td>
                                <td>192</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_bandwidth_memory" value="64"></td>
                                <td><input type="checkbox" name="GPU_bandwidth_memory" value="128"></td>
                                <td><input type="checkbox" name="GPU_bandwidth_memory" value="192"></td>
                            </tr>
                            <tr>
                                <td>256</td>
                                <td>384</td>
                                <td>512</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_bandwidth_memory" value="254"></td>
                                <td><input type="checkbox" name="GPU_bandwidth_memory" value="384"></td>
                                <td><input type="checkbox" name="GPU_bandwidth_memory" value="512"></td>
                            </tr>
                        </table>
                    </div>
                 <div class="GPU_type_AMD" style="line-height:100%">
                     <table class="GPU_type_AMD_table" cellspacing="1px">
                         <tr>
                             <td colspan="3"><h5>Welke AMD videokaart wilt u?</h5></td>
                         </tr>
                         <tr>
                             <td>AMD Radeon R9 270X</td>
                             <td>AMD Radeon R9 270</td>
                             <td>AMD Radeon R7 240</td>
                         </tr>
                         <tr>
                             <td><input type="checkbox" name="GPU_type_AMD" value="AMD_Radeon_R9_270X"></td>
                             <td><input type="checkbox" name="GPU_type_AMD" value="AMD_Radeon_R9_270"></td>
                             <td><input type="checkbox" name="GPU_type_AMD" value="AMD_Radeon_R7_240"></td>
                         </tr>
                        <tr>
                            <td>AMD Radeon HD 6450</td>
                            <td>AMD Radeon R9 280</td>
                            <td>AMD Radeon R9 280X</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="GPU_type_AMD" value="AMD_Radeon_HD_6450"></td>
                            <td><input type="checkbox" name="GPU_type_AMD" value="AMD_Radeon_R9_280"></td>
                            <td><input type="checkbox" name="GPU_type_AMD" value="AMD_Radeon_R9_280X"></td>
                        </tr>
                        <tr>
                            <td>AMD Radeon R9 290</td>
                            <td>AMD Radeon R9 290X</td>
                            <td>AMD Radeon R7 250</td>
                        </tr>
                         <tr>
                             <td><input type="checkbox" name="GPU_type_AMD" value="AMD_Radeon_R9_290"></td>
                             <td><input type="checkbox" name="GPU_type_AMD" value="AMD_Radeon_R9_290X"></td>
                             <td><input type="checkbox" name="GPU_type_AMD" value="AMD_Radeon_R7_250"></td>
                         </tr>
                         <tr>
                             <td>AMD Radeon HD 3450 AGP</td>
                         </tr>
                         <tr>
                             <td><input type="checkbox" name="GPU_type_AMD" value="AMD_Radeon_HD_3450_AGP"></td>
                         </tr>
                     </table>
                 </div>
                    <div class="GPU_type_NVIDIA" style="line-height:100%">
                        <table class="GPU_type_NVIDIA_table" cellspacing="1px">
                            <tr>
                                <td colspan="3"><h5>Welke NVIDIA videokaart wilt u?</h5></td>
                            </tr>
                            <tr>
                                <td>NVIDIA FX5500</td>
                                <td>NVIDIA GeForce GTX 780</td>
                                <td>NVIDIA GeForce GTX 980</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA" value="NVIDIA_FX5500"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA" value="NVIDIA_GeForce_GTX_780"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA" value="NVIDIA_GeForce_GTX_980"></td>
                            </tr>
                            <tr>
                                <td>NVIDIA GeForce GTX 970</td>
                                <td>NVIDIA GeForce GT 730</td>
                                <td>NVIDIA GeForce GTX 660</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA" value="NVIDIA_GeForce_GTX_970"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA" value="NVIDIA_GeForce_GT_730"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA" value="NVIDIA_GeForce_GTX_660"></td>
                            </tr>
                            <tr>
                                <td>NVIDIA GeForce GTX 750</td>
                                <td>NVIDIA GeForce GTX 760</td>
                                <td>NVIDIA GeForce GTX 770</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA" value="NVIDIA_GeForce_GTX_750"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA" value="NVIDIA_GeForce_GTX_760"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA" value="NVIDIA_GeForce_GTX_770"></td>
                            </tr>
                            <tr>
                                <td>NVIDIA GeForce GT 740</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA" value="NVIDIA_GeForce_GTX_740"></td>
                            </tr>
                        </table>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>