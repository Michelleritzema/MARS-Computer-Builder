<?php
/**
 * Created by PhpStorm.
 * Made by: Anny & Randa & Michelle & Sander
 * Date: 12/12/2014
 * Time: 22:15
 */
session_start();
if (!Session::has('menuitem')) {
    Session::put('menuitem', 'powersupply');
}
$menuitem = Session::get('menuitem');
//echo $menuitem;
//var_dump($menuitem);
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
<div class="container">
    <div class="banner">
        {{ HTML::image('images/banner_blue_shadow.png', 'Icompare banner', array('class' => 'banner_img')) }}
    </div>
    <div class="content col-md-10">
        <div class="intro_accordion">
            <div class="accordion-section">
                <a class="accordion-section-title" href="#accordion-1">Meer informatie over deze site
                    <span class="intro_arrow" href="#accordion-1"></span>
                    <!--{{ HTML::image('images/arrow_down.png', 'intro arrow', array('id' => 'intro_arrow_span')) }}-->
                </a>
                <div id="accordion-1" class="accordion-section-content">
                    <p>
                        Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi,
                        rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis. Duis congue
                        ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet, aliquet pulvinar erat.
                        Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi, et placerat tellus tempor vitae.
                    </p>
                </div>
            </div>
        </div>
        <div class="parts-buttons col-md-12">
            <a href="voeding">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/voeding.gif"></td></tr>
                    <tr class="link_row"><td class="link">Voeding</td></tr>
                </table>
            </a>
            <a href="processorkoeler">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/processorkoelers.gif"></td></tr>
                    <tr class="link_row"><td class="link">Processor<br>koeler</td></tr>
                </table>
            </a>
            <a href="internehardeschijf">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/internehardeschijven.gif"></td></tr>
                    <tr class="link_row"><td class="link">Harde schijf</td></tr>
                </table>
            </a>
            <a href="geluidskaart">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/geluidkaarten.gif"></td></tr>
                    <tr class="link_row"><td class="link">Geluidskaart</td></tr>
                </table>
            </a>
            <a href="PCI">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/PCI.gif"></td></tr>
                    <tr class="link_row"><td class="link">PCI express</td></tr>
                </table>
            </a>
            <a href="videokaart">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/videokaart.gif"></td></tr>
                    <tr class="link_row"><td class="link">Videokaart</td></tr>
                </table>
            </a>
        </div>
        <div class="parts-buttons col-md-12">
            <a href="processor">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/processor.gif"></td></tr>
                    <tr class="link_row"><td class="link">Processor</td></tr>
                </table>
            </a>
            <a href="internalmemory">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/internalmemory.gif"></td></tr>
                    <tr class="link_row"><td class="link">Intern<br>geheugen</td></tr>
                </table>
            </a>
            <a href="motherboard">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/motherboard.gif"></td></tr>
                    <tr class="link_row"><td class="link">Moederbord</td></tr>
                </table>
            </a>
            <a href="casing">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/casing.gif"></td></tr>
                    <tr class="link_row"><td class="link">Behuizing</td></tr>
                </table>
            </a>
            <a href="ssd">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/ssd.gif"></td></tr>
                    <tr class="link_row"><td class="link">SSD</td></tr>
                </table>
            </a>
            <a href="blu-raydvd">
                <table class="col-xs-2">
                    <tr><td class="link_image"><img src="images/blu-rayDVD.gif"></td></tr>
                    <tr class="link_row"><td class="link">Blu-Ray<br>DVD</td></tr>
                </table>
            </a>
        </div>
        <div class="col-md-12 title">Processor</div>
        <div class="col-md-12 specification">
            <form>
                <div class="col-md-6 left_div">
                    @if($menuitem == "processorcooler")
                        <table class="spec_table" id="cooler_brand_table">
                            <tr><th colspan="4"><h5>Merk processorkoeler</h5></th></tr>
                            <tr><td>Be quiet!</td><td>Cooler Master</td><td>Corsair</td><td>Artic</td></tr>
                            <tr>
                                <td><input type="checkbox" name="koeler_merk1" value="Be Quiet!"></td>
                                <td><input type="checkbox" name="koeler_merk2" value="Cooler Master"></td>
                                <td><input type="checkbox" name="koeler_merk3" value="Corsair"></td>
                                <td><input type="checkbox" name="koeler_merk4" value="Artic"></td>
                            </tr>
                            <tr><td>Crucial</td><td>Kingston</td><td>Scythe</td></tr>
                            <tr>
                                <td><input type="checkbox" name="koeler_merk5" value="Crucial"></td>
                                <td><input type="checkbox" name="koeler_merk6" value="Kingston"></td>
                                <td><input type="checkbox" name="koeler_merk7" value="Scythe"></td>
                            </tr>
                        </table>
                        <table class="spec_table" id="cooler_type_table">
                            <tr><td colspan="2"><h5>Certificering</h5></td></tr>
                            <tr><td>Lucht</td><td>Water</td></tr>
                            <tr>
                                <td><input type="checkbox" name="voeding_type1" value="Lucht"></td>
                                <td><input type="checkbox" name="voeding_type2" value="Water"></td>
                            </tr>
                        </table>
                        <table class="spec_table" id="cooler_cost_table">
                            <tr><td colspan="2"><h5>Prijs (minimum - maximum)</h5></td></tr>
                            <tr>
                                <td>
                                    <input type="text" id="amount_koeler" readonly style="border:0;color:#f6931f;font-weight:bold;">
                                    <div id="slider-range22"></div>
                                </td>
                            </tr>
                            <tr>

                            </tr>
                        </table>
                    @elseif($menuitem == "internalharddrive")
                        <table class="spec_table" id="HDD_storage_table">
                            <th colspan="5"><h5>Opslag capaciteit</h5></th>
                            <tr><td>160 GB</td><td>320 GB</td><td>500 GB</td><td>750 GB</td><td>1 TB</td></tr>
                            <tr>
                                <td><input type="checkbox" name="HDD_opslag1" value="160 GB"></td>
                                <td><input type="checkbox" name="HDD_opslag2" value="320 GB"></td>
                                <td><input type="checkbox" name="HDD_opslag3" value="500 GB"></td>
                                <td><input type="checkbox" name="HDD_opslag4" value="750 GB"></td>
                                <td><input type="checkbox" name="HDD_opslag5" value="1 TB"></td>
                            </tr>
                            <tr><td>2 TB</td><td>3 TB</td><td>4 TB</td><td>5 TB</td><td>6 TB</td></tr>
                            <tr>
                                <td><input type="checkbox" name="HDD_opslag6" value="2 TB"></td>
                                <td><input type="checkbox" name="HDD_opslag7" value="3 TB"></td>
                                <td><input type="checkbox" name="HDD_opslag8" value="4 TB"></td>
                                <td><input type="checkbox" name="HDD_opslag9" value="5 TB"></td>
                                <td><input type="checkbox" name="HDD_opslag10" value="6 TB"></td>
                            </tr>
                        </table>
                        <table class="spec_table" id="HDD_format_table">
                            <th colspan="2"><h5>Formaat</h5></th>
                            <tr><td>2,5 inch (Laptop)</td><td>3,5 inch (Desktop)</td></tr>
                            <tr>
                                <td><input type="checkbox" name="HDD_formaat1" value="2,5 inch"></td>
                                <td><input type="checkbox" name="HDD_formaat2" value="3,5 inch"></td>
                            </tr>
                        </table>
                        <table class="spec_table" id="HDD_brand_table" cellspacing="1px">
                            <th colspan="4"><h5>Merk HDD</h5></th>
                            <tr><td>LaCie</td><td>Seagate</td><td>Toshiba</td><td>Western Digital</td></tr>
                            <tr>
                                <td><input type="checkbox" name="HDD_merk1" value="LaCie"></td>
                                <td><input type="checkbox" name="HDD_merk2" value="Seagate"></td>
                                <td><input type="checkbox" name="HDD_merk3" value="Toshiba"></td>
                                <td><input type="checkbox" name="HDD_merk4" value="Western Digital"></td>
                            </tr>
                        </table>
                        <table class="spec_table" id="HDD_cost_table">
                            <th><h5>Prijs (minimum - maximum)</h5></th>
                            <tr>
                                <td><input type="text" id="amount_hdd" readonly style=""></td>
                            </tr>
                        </table>
                        <div id="slider-range10"></div>
                    @elseif($menuitem == "videocard")
                        <table class="GPU_producer_table">
                            <tr><td colspan="2"><h5>Fabrikant videokaart</h5></td></tr>
                            <tr><td>NVIDIA</td><td>AMD</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_producer1" value="NVIDIA"></td>
                                <td><input type="checkbox" name="GPU_producer2" value="AMD"></td>
                            </tr>
                        </table>
                        <table class="GPU_brand_table">
                            <tr><td colspan="3"><h5>Merk videokaart</h5></td></tr>
                            <tr><td>Asus</td><td>Club 3D</td><td>Gigabyte</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_brand1" value="Asus"></td>
                                <td><input type="checkbox" name="GPU_brand2" value="Club_3D"></td>
                                <td><input type="checkbox" name="GPU_brand3" value="Gigabyte"></td>
                            </tr>
                            <tr><td>Sapphire</td><td>MSI</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_brand4" value="Sapphire"></td>
                                <td><input type="checkbox" name="GPU_brand5" value="MSI"></td>
                            </tr>
                        </table>
                        <table class="GPU_geheugen_type_table">
                            <tr><td colspan="3"><h5 >Type geheugen</h5></td></tr>
                            <tr><td>DDR2</td><td>DDR3</td><td>GDDR5</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_geheugen_type1" value="DDR2"></td>
                                <td><input type="checkbox" name="GPU_geheugen_type2" value="DDR3"></td>
                                <td><input type="checkbox" name="GPU_geheugen_type3" value="GDDR5"></td>
                            </tr>
                        </table>
                        <table class="GPU_memory_table">
                            <tr><td colspan="3"><h5>Brandbreedte geheugenbus</h5></td></tr>
                            <tr><td>64</td><td>128</td><td>192</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_bandwidth_memory1" value="64"></td>
                                <td><input type="checkbox" name="GPU_bandwidth_memory2" value="128"></td>
                                <td><input type="checkbox" name="GPU_bandwidth_memory3" value="192"></td>
                            </tr>
                            <tr><td>256</td><td>384</td><td>512</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_bandwidth_memory4" value="254"></td>
                                <td><input type="checkbox" name="GPU_bandwidth_memory5" value="384"></td>
                                <td><input type="checkbox" name="GPU_bandwidth_memory6" value="512"></td>
                            </tr>
                        </table>
                        <table class="GPU_type_AMD_table" cellspacing="1px">
                            <tr><td colspan="3"><h5>AMD videokaart</h5></td></tr>
                            <tr><td>AMD Radeon R9 270X</td><td>AMD Radeon R9 270</td><td>AMD Radeon R7 240</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_AMD1" value="AMD_Radeon_R9_270X"></td>
                                <td><input type="checkbox" name="GPU_type_AMD2" value="AMD_Radeon_R9_270"></td>
                                <td><input type="checkbox" name="GPU_type_AMD3" value="AMD_Radeon_R7_240"></td>
                            </tr>
                            <tr><td>AMD Radeon HD 6450</td><td>AMD Radeon R9 280</td><td>AMD Radeon R9 280X</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_AMD4" value="AMD_Radeon_HD_6450"></td>
                                <td><input type="checkbox" name="GPU_type_AMD5" value="AMD_Radeon_R9_280"></td>
                                <td><input type="checkbox" name="GPU_type_AMD6" value="AMD_Radeon_R9_280X"></td>
                            </tr>
                            <tr><td>AMD Radeon R9 290</td><td>AMD Radeon R9 290X</td><td>AMD Radeon R7 250</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_AMD7" value="AMD_Radeon_R9_290"></td>
                                <td><input type="checkbox" name="GPU_type_AMD8" value="AMD_Radeon_R9_290X"></td>
                                <td><input type="checkbox" name="GPU_type_AMD9" value="AMD_Radeon_R7_250"></td>
                            </tr>
                            <tr><td>AMD Radeon HD 3450 AGP</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_AMD10" value="AMD_Radeon_HD_3450_AGP"></td>
                            </tr>
                        </table>
                    @endif
                </div>
                <div class="col-md-6 right_div">
                    @if($menuitem == "internalharddrive")
                        <table class="spec_table" id="HDD_snelheid_table">
                            <th colspan="4"><h5>HDD schrijfsnelheid</h5></th>
                            <tr><td>5400 rpm</td><td>5700 rpm</td><td>5900 rpm</td><td>5940 rpm</td></tr>
                            <tr>
                                <td><input type="checkbox" name="HDD_snelheid1" value="5400"></td>
                                <td><input type="checkbox" name="HDD_snelheid2" value="5700"></td>
                                <td><input type="checkbox" name="HDD_snelheid3" value="5900"></td>
                                <td><input type="checkbox" name="HDD_snelheid4" value="5940"></td>
                            </tr>
                            <tr><td>7200 rpm</td><td>Variabel</td><td>N.v.t.</td><td></td></tr>
                            <tr>
                                <td><input type="checkbox" name="HDD_snelheid5" value="7200"></td>
                                <td><input type="checkbox" name="HDD_snelheid6" value="variabel"></td>
                                <td><input type="checkbox" name="HDD_snelheid7" value="nvt"></td>
                                <td></td>
                            </tr>
                        </table>
                        <table class="spec_table" id="HDD_cache_table">
                            <th colspan="3"><h5>Buffer / cache</h5></th>
                            <tr><td>8 MB</td><td>16 MB</td><td>32 MB</td></tr>
                            <tr>
                                <td><input type="checkbox" name="HDD_cache1" value="8 MB"></td>
                                <td><input type="checkbox" name="HDD_cache2" value="16MB"></td>
                                <td><input type="checkbox" name="HDD_cache3" value="32 MB"></td>
                            </tr>
                            <tr><td>64 MB</td><td>128 MB</td><td>N.v.t.</td></tr>
                            <tr>
                                <td><input type="checkbox" name="HDD_cache4" value="64 MB"></td>
                                <td><input type="checkbox" name="HDD_cache5" value="128 MB"></td>
                                <td><input type="checkbox" name="HDD_cache6" value="nvt"></td>
                            </tr>
                        </table>
                        <table class="spec_table" id="HDD_aansluiting_table">
                            <th colspan="2"><h5>Aansluiting HDD</h5></th>
                            <tr><td>S-ATA(II)</td><td>S-ATA(III)</td></tr>
                            <tr>
                                <td><input type="checkbox" name="HDD_aansluiting1" value="s-ata(II)"></td>
                                <td><input type="checkbox" name="HDD_aansluiting2" value="s-ata(III)"></td>
                            </tr>
                        </table>
                    @elseif($menuitem == "videocard")
                        <table class="GPU_type_NVIDIA_table" cellspacing="1px">
                            <tr><td colspan="3"><h5>NVIDIA videokaart</h5></td></tr>
                            <tr><td>NVIDIA FX5500</td><td>NVIDIA GeForce GTX 780</td><td>NVIDIA GeForce GTX 980</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA1" value="NVIDIA_FX5500"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA2" value="NVIDIA_GeForce_GTX_780"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA3" value="NVIDIA_GeForce_GTX_980"></td>
                            </tr>
                            <tr><td>NVIDIA GeForce GTX 970</td><td>NVIDIA GeForce GT 730</td><td>NVIDIA GeForce GTX 660</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA4" value="NVIDIA_GeForce_GTX_970"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA5" value="NVIDIA_GeForce_GT_730"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA6" value="NVIDIA_GeForce_GTX_660"></td>
                            </tr>
                            <tr><td>NVIDIA GeForce GTX 750</td><td>NVIDIA GeForce GTX 760</td><td>NVIDIA GeForce GTX 770</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA7" value="NVIDIA_GeForce_GTX_750"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA8" value="NVIDIA_GeForce_GTX_760"></td>
                                <td><input type="checkbox" name="GPU_type_NVIDIA9" value="NVIDIA_GeForce_GTX_770"></td>
                            </tr>
                            <tr><td>NVIDIA GeForce GT 740</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_type_NVIDIA10" value="NVIDIA_GeForce_GTX_740"></td>
                            </tr>
                        </table>
                        <table>
                            <tr><td colspan="2"><h5>Aantal DVI-I aansluitingen</h5></td></tr>
                            <tr><td>0</td><td>1</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_DVI-I1" value="0"></td>
                                <td><input type="checkbox" name="GPU_DVI-I2" value="0"></td>
                            </tr>
                        </table>
                        <table>
                            <tr><td colspan="2"><h5>Aantal DVI-I aansluitingen</h5></td></tr>
                            <tr><td>0</td><td>1</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_DVI-I1" value="0"></td>
                                <td><input type="checkbox" name="GPU_DVI-I2" value="0"></td>
                            </tr>
                        </table>
                        <table>
                            <tr><td colspan="3"><h5>Aantal DVI-D aansluitingen</h5></td></tr>
                            <tr><td>0</td><td>1</td><td>2</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_DVI-D1" value="0"></td>
                                <td><input type="checkbox" name="GPU_DVI-D2" value="1"></td>
                                <td><input type="checkbox" name="GPU_DVI-D3" value="2"></td>
                            </tr>
                        </table>
                        <table>
                            <tr><td colspan="2"><h5>HDMI aansluitingen</h5> </td></tr>
                            <tr><td>1</td><td>2</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_HDMI1" value="1"></td>
                                <td><input type="checkbox" name="GPU_HDMI2" value="2"></td>
                            </tr>
                        </table>
                        <table>
                            <tr><td colspan="2"><h5>VGA-poort</h5></td></tr>
                            <tr><td>Nee</td><td>Ja</td></tr>
                            <tr>
                                <td><input type="checkbox" name="GPU_VGA1" value="Nee"></td>
                                <td><input type="checkbox" name="GPU_VGA2" value="Ja"></td>
                            </tr>
                        </table>
                        <div class="GPU_cost" style="line-height:100%">
                            <h5>Prijs van videokaart</h5>
                            <p>
                                <label for="amount" >prijs (Minimum - Maximum):</label>
                                <input type="text" id="amount_GPU_prijs" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </p>
                            <div id="slider-range3"></div>
                        </div>
                        <div class="GPU_memory">
                            <h5>Gewenst videogeheugen</h5>
                            <p>
                                <label for="amount_GPU_geheugen">videogeheugen (Minimum - Maximum):</label>
                                <input type="text" id="amount_GPU_geheugen" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </p>
                            <div id="slider-range4"></div>
                        </div>
                    @elseif($menuitem == "processor")
                        <table class="serie_table" cellspacing="1px">
                            <tr><td colspan="3"><h5>Processor serie</h5></td></tr>
                            <tr><td>A10</td><td>A6</td><td>A8</td></tr>
                            <tr>
                                <td><input type="checkbox" name="processor_serie1" value="A10"></td>
                                <td><input type="checkbox" name="processor_serie2" value="A6"></td>
                                <td><input type="checkbox" name="processor_serie3" value="A8"></td>
                            </tr>
                            <tr><td>Core i3</td><td>Core i5</td><td>Core i7</td></tr>
                            <tr>
                                <td><input type="checkbox" name="processor_serie4" value="Core i3"></td>
                                <td><input type="checkbox" name="processor_serie5" value="Core i5"></td>
                                <td><input type="checkbox" name="processor_serie6" value="Core i7"></td>
                            </tr>
                            <tr><td>FX</td><td>Pentium</td><td>Sempron</td></tr>
                            <tr>
                                <td><input type="checkbox" name="processor_serie7" value="FX"></td>
                                <td><input type="checkbox" name="processor_serie8" value="Pentium"></td>
                                <td><input type="checkbox" name="processor_serie9" value="Sempron"></td>
                            </tr>
                        </table>
                        <div class="processor_speed">
                            <h5>Kloksnelheid (minimum - maximum)</h5>
                            <p>
                                <input type="text" id="speed" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </p>
                            <div id="slider-range1"></div>
                        </div>
                    @endif
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <input type="submit" value="Submit" id="submit_proces">
        </div>
    </div>
    <div class="sidebar col-md-2">
        <input type="submit" value="Creëer profiel" id="create_profile">
    </div>
</div>
</body>
</html>