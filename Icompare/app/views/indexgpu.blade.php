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
    {{ HTML::script('js/slidercostgpu.js'); }}
    {{ HTML::script('js/slidervVideoMemory.js'); }}

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
                             <td colspan="2"><h5>Fabrikant videokaart</h5></td>
                         </tr>
                         <tr>
                             <td>NVIDIA</td>
                             <td>AMD</td>
                         </tr>
                         <tr>
                             <td><input type="checkbox" name="GPU_producer1" value="NVIDIA"></td>
                             <td><input type="checkbox" name="GPU_producer2" value="AMD"></td>
                         </tr>
                     </table>
                 </div>
                    <div class="GPU_brand">
                        <table class="GPU_brand_table">
                            <tr>
                                <td colspan="3"><h5>Merk videokaart</h5></td>
                            </tr>
                            <tr>
                                <td>Asus</td>
                                <td>Club 3D</td>
                                <td>Gigabyte</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_brand1" value="Asus"></td>
                                <td><input type="checkbox" name="GPU_brand2" value="Club_3D"></td>
                                <td><input type="checkbox" name="GPU_brand3" value="Gigabyte"></td>
                            </tr>
                            <tr>
                                <td>Sapphire</td>
                                <td>MSI</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_brand4" value="Sapphire"></td>
                                <td><input type="checkbox" name="GPU_brand5" value="MSI"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="GPU_geheugen_type">
                        <table class="GPU_geheugen_type_table">
                            <tr>
                                <td colspan="3"><h5 >Type geheugen</h5></td>
                            </tr>
                            <tr>
                                <td>DDR2</td>
                                <td>DDR3</td>
                                <td>GDDR5</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_geheugen_type1" value="DDR2"></td>
                                <td><input type="checkbox" name="GPU_geheugen_type2" value="DDR3"></td>
                                <td><input type="checkbox" name="GPU_geheugen_type3" value="GDDR5"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="GPU_bandwidth_memory">
                        <table class="GPU_memory_table">
                            <tr>
                                <td colspan="3"><h5>Brandbreedte geheugenbus</h5></td>
                            </tr>
                            <tr>
                                <td>64</td>
                                <td>128</td>
                                <td>192</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_bandwidth_memory1" value="64"></td>
                                <td><input type="checkbox" name="GPU_bandwidth_memory2" value="128"></td>
                                <td><input type="checkbox" name="GPU_bandwidth_memory3" value="192"></td>
                            </tr>
                            <tr>
                                <td>256</td>
                                <td>384</td>
                                <td>512</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_bandwidth_memory4" value="254"></td>
                                <td><input type="checkbox" name="GPU_bandwidth_memory5" value="384"></td>
                                <td><input type="checkbox" name="GPU_bandwidth_memory6" value="512"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="GPU_type_AMD" style="line-height:100%">
                        <table class="GPU_type_AMD_table" cellspacing="1px">
                            <tr>
                                <td colspan="3"><h5>AMD videokaart</h5></td>
                             </tr>
                             <tr>
                                 <td>AMD Radeon R9 270X</td>
                                 <td>AMD Radeon R9 270</td>
                                 <td>AMD Radeon R7 240</td>
                             </tr>
                             <tr>
                                <td><input type="checkbox" name="GPU_type_AMD1" value="AMD_Radeon_R9_270X"></td>
                                <td><input type="checkbox" name="GPU_type_AMD2" value="AMD_Radeon_R9_270"></td>
                                <td><input type="checkbox" name="GPU_type_AMD3" value="AMD_Radeon_R7_240"></td>
                            </tr>
                            <tr>
                                <td>AMD Radeon HD 6450</td>
                                <td>AMD Radeon R9 280</td>
                                <td>AMD Radeon R9 280X</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_AMD4" value="AMD_Radeon_HD_6450"></td>
                                <td><input type="checkbox" name="GPU_type_AMD5" value="AMD_Radeon_R9_280"></td>
                                <td><input type="checkbox" name="GPU_type_AMD6" value="AMD_Radeon_R9_280X"></td>
                            </tr>
                            <tr>
                                <td>AMD Radeon R9 290</td>
                                <td>AMD Radeon R9 290X</td>
                                <td>AMD Radeon R7 250</td>
                            </tr>
                             <tr>
                                 <td><input type="checkbox" name="GPU_type_AMD7" value="AMD_Radeon_R9_290"></td>
                                 <td><input type="checkbox" name="GPU_type_AMD8" value="AMD_Radeon_R9_290X"></td>
                                 <td><input type="checkbox" name="GPU_type_AMD9" value="AMD_Radeon_R7_250"></td>
                             </tr>
                             <tr>
                                 <td>AMD Radeon HD 3450 AGP</td>
                             </tr>
                             <tr>
                                 <td><input type="checkbox" name="GPU_type_AMD10" value="AMD_Radeon_HD_3450_AGP"></td>
                             </tr>
                        </table>
                    </div>
                    <div class="GPU_type_NVIDIA" style="line-height:100%">
                        <table class="GPU_type_NVIDIA_table" cellspacing="1px">
                            <tr>
                                <td colspan="3"><h5>NVIDIA videokaart</h5></td>
                            </tr>
                            <tr>
                                <td>NVIDIA FX5500</td>
                                <td>NVIDIA GeForce GTX 780</td>
                                <td>NVIDIA GeForce GTX 980</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA1" value="NVIDIA_FX5500"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA2" value="NVIDIA_GeForce_GTX_780"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA3" value="NVIDIA_GeForce_GTX_980"></td>
                            </tr>
                            <tr>
                                <td>NVIDIA GeForce GTX 970</td>
                                <td>NVIDIA GeForce GT 730</td>
                                <td>NVIDIA GeForce GTX 660</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA4" value="NVIDIA_GeForce_GTX_970"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA5" value="NVIDIA_GeForce_GT_730"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA6" value="NVIDIA_GeForce_GTX_660"></td>
                            </tr>
                            <tr>
                                <td>NVIDIA GeForce GTX 750</td>
                                <td>NVIDIA GeForce GTX 760</td>
                                <td>NVIDIA GeForce GTX 770</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA7" value="NVIDIA_GeForce_GTX_750"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA8" value="NVIDIA_GeForce_GTX_760"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA9" value="NVIDIA_GeForce_GTX_770"></td>
                            </tr>
                            <tr>
                                <td>NVIDIA GeForce GT 740</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA10" value="NVIDIA_GeForce_GTX_740"></td>
                            </tr>
                            </table>
                    </div>
                    <div class="GPU_DVI-I">
                        <table>
                            <tr>
                                <td colspan="2"><h5>Aantal DVI-I aansluitingen</h5> </td>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_DVI-I1" value="0"></td>
                                <td><input type="checkbox" name="GPU_DVI-I2" value="0"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="GPU_DVI-I">
                        <table>
                            <tr>
                                <td colspan="2"><h5>Aantal DVI-I aansluitingen</h5></td>
                            <tr>
                                <td>0</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_DVI-I1" value="0"></td>
                                <td><input type="checkbox" name="GPU_DVI-I2" value="0"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="GPU_DVI-D">
                        <table>
                            <tr>
                                <td colspan="3"><h5>Aantal DVI-D aansluitingen</h5> </td>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>1</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_DVI-D1" value="0"></td>
                                <td><input type="checkbox" name="GPU_DVI-D2" value="1"></td>
                                <td><input type="checkbox" name="GPU_DVI-D3" value="2"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="GPU_HDMI">
                        <table>
                            <tr>
                                <td colspan="2"><h5>HDMI aansluitingen</h5> </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_HDMI1" value="1"></td>
                                <td><input type="checkbox" name="GPU_HDMI2" value="2"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="GPU_VGA">
                        <table>
                            <tr>
                                <td colspan="2"><h5>VGA-poort</h5> </td>
                            </tr>
                            <tr>
                                <td>Nee</td>
                                <td>Ja</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_VGA1" value="Nee"></td>
                                <td><input type="checkbox" name="GPU_VGA2" value="Ja"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="GPU_cost" style="line-height:100%" >
                        <h5>Prijs van  videokaart</h5>
                        <p>
                            <label for="amount" >prijs (Minimum - Maximum):</label>
                            <input type="text" id="amount_GPU_prijs" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range3"></div>
                    </div>
                    <div class="GPU_memory">
                        <h5>Gewenst videogeheugen</h5>
                        <p>
                            <label for="amount_GPU_geheugen" >videogeheugen (Minimum - Maximum):</label>
                            <input type="text" id="amount_GPU_geheugen" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range4"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>