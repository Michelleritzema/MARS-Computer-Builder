<?php
session_start();

if (!Session::has('menuitem')) { Session::put('menuitem', 'powersupply'); }
Session::put('resultpage', 'yes');
$menuitem = Session::get('menuitem');

$string = file_get_contents("result/temp.json");

$i=0;
$super_array = array();
foreach(preg_split("/((\r?\n)|(\r\n?))/", $string) as $line){
    preg_match('/[^{]*name[^,]*/', $line, $output_array);
    $name = filter_data($output_array);
    preg_match('/[^",]*link[^,]*/', $line, $output_array);
    $link = filter_data($output_array);
    preg_match('/[^"]*,category[^,]*/', $line, $output_array);
    $category = filter_data($output_array);
    preg_match('/(.\d\d\.\d\d)/', $line, $output_array);
    $price = filter_data($output_array);
    preg_match('/[^\"\]]*,img[^,]*/', $line, $output_array);
    $img = filter_data($output_array);
    preg_match('/[^\"\],]*manufacture_code[^,]*/', $line, $output_array);
    $manufacture_code = filter_data($output_array);

    if($category != "Behuizingen") {
        preg_match('/[^\"\]]*,garantie:"[^,]*/', $line, $output_array);
        $warranty = filter_data($output_array);
        preg_match('/[^\"\],]*merk[^,]*/', $line, $output_array);
        $brand = filter_data($output_array);
    } else {
        $warranty = "";
        $brand = "";
    }

    $price_split = explode(".", $price);
    $price_first = $price_split[0];
    $price_second = $price_split[1];

    if($category == "Internehardeschijven(HDD)") { $category = "Interne harde schijf";}
    else if($category == "SolidStateDrives(SSD)") { $category = "SSD"; }
    else if($category == "PCIExpresskaarten") { $category = "PCI express kaart"; }
    else if($category == "Branders(DVD/Blu-Ray)") { $category = "DVD & Blu-Ray"; }
    else if($category == "Moederborden") { $category = "Moederbord"; }
    else if($category == "Processoren") { $category = "Processor"; }
    else if($category == "Interngeheugen(RAM)") { $category = "Intern geheugen (RAM)"; }
    else if($category == "Videokaarten") { $category = "Videokaart"; }
    else if($category == "Behuizingen") { $category = "Behuizing"; }
    else if($category == "Processorkoelers") { $category = "Processor koeler"; }
    else if($category == "Geluidskaarten") { $category = "Geluidskaart"; }
    else if($category == "Voedingen") { $category = "Voeding"; }

    $values = array("name" => $name, "category" => $category, "link" => $link, "img" => $img,
        "price_first" => $price_first, "price_second" => $price_second, "brand" => $brand,
        "manufacture_code" => $manufacture_code, "warranty" => $warranty);

    $super_array[$i] = $values;
    $i++;
}
/*echo "<pre>";
var_dump($super_array[0]);
echo "</pre>";*/


function filter_data($output_array) {
    $replace = array(
            "\"" => "",
            "name:" => "",
            ",img:" => "",
            "link:" => "",
            ",category:" => "",
            "artikelnummer:" => "",
            "merk:" => "",
            ",garantie:" => "",
            "manufacture_code:" => ""
    );
    foreach($replace as $k => $v)
    {
        $content = str_replace($k, $v, $output_array[0]);
        $output_array[0] = $content;
    }
    return $output_array[0];
}

switch($menuitem) {
    case "powersupply":
        $result_name = $super_array[11]['name'];
        $result_category = $super_array[11]['category'];
        $result_link = $super_array[11]['link'];
        $result_img = $super_array[11]['img'];
        $result_price_first = $super_array[11]['price_first'];
        $result_price_second = $super_array[11]['price_second'];
        break;
    case "processorcooler":
        $result_name = $super_array[9]['name'];
        $result_category = $super_array[9]['category'];
        $result_link = $super_array[9]['link'];
        $result_img = $super_array[9]['img'];
        $result_price_first = $super_array[9]['price_first'];
        $result_price_second = $super_array[9]['price_second'];
        break;
    case "internalharddrive":
        $result_name = $super_array[0]['name'];
        $result_category = $super_array[0]['category'];
        $result_link = $super_array[0]['link'];
        $result_img = $super_array[0]['img'];
        $result_price_first = $super_array[0]['price_first'];
        $result_price_second = $super_array[0]['price_second'];
        break;
    case "soundcard":
        $result_name = $super_array[10]['name'];
        $result_category = $super_array[10]['category'];
        $result_link = $super_array[10]['link'];
        $result_img = $super_array[10]['img'];
        $result_price_first = $super_array[10]['price_first'];
        $result_price_second = $super_array[10]['price_second'];
        break;
    case "PCI":
        $result_name = $super_array[2]['name'];
        $result_category = $super_array[2]['category'];
        $result_link = $super_array[2]['link'];
        $result_img = $super_array[2]['img'];
        $result_price_first = $super_array[2]['price_first'];
        $result_price_second = $super_array[2]['price_second'];
        break;
    case "videocard":
        $result_name = $super_array[7]['name'];
        $result_category = $super_array[7]['category'];
        $result_link = $super_array[7]['link'];
        $result_img = $super_array[7]['img'];
        $result_price_first = $super_array[7]['price_first'];
        $result_price_second = $super_array[7]['price_second'];
        break;
    case "processor":
        $result_name = $super_array[5]['name'];
        $result_category = $super_array[5]['category'];
        $result_link = $super_array[5]['link'];
        $result_img = $super_array[5]['img'];
        $result_price_first = $super_array[5]['price_first'];
        $result_price_second = $super_array[5]['price_second'];
        break;
    case "internalmemory":
        $result_name = $super_array[6]['name'];
        $result_category = $super_array[6]['category'];
        $result_link = $super_array[6]['link'];
        $result_img = $super_array[6]['img'];
        $result_price_first = $super_array[6]['price_first'];
        $result_price_second = $super_array[6]['price_second'];
        break;
    case "motherboard":
        $result_name = $super_array[4]['name'];
        $result_category = $super_array[4]['category'];
        $result_link = $super_array[4]['link'];
        $result_img = $super_array[4]['img'];
        $result_price_first = $super_array[4]['price_first'];
        $result_price_second = $super_array[4]['price_second'];
        break;
    case "casing":
        $result_name = $super_array[8]['name'];
        $result_category = $super_array[8]['category'];
        $result_link = $super_array[8]['link'];
        $result_img = $super_array[8]['img'];
        $result_price_first = $super_array[8]['price_first'];
        $result_price_second = $super_array[8]['price_second'];
        break;
    case "ssd":
        $result_name = $super_array[1]['name'];
        $result_category = $super_array[1]['category'];
        $result_link = $super_array[1]['link'];
        $result_img = $super_array[1]['img'];
        $result_price_first = $super_array[1]['price_first'];
        $result_price_second = $super_array[1]['price_second'];
        break;
    case "bluraydvd":
        $result_name = $super_array[3]['name'];
        $result_category = $super_array[3]['category'];
        $result_link = $super_array[3]['link'];
        $result_img = $super_array[3]['img'];
        $result_price_first = $super_array[3]['price_first'];
        $result_price_second = $super_array[3]['price_second'];
        break;
}
?>

@extends('layout.template')

@section('content')
    <div class="content col-md-12">
        @include('include.menu_result')
        <h3 style="margin-top:60px">{{ $result_category }}</h3>
        <div class="content col-md-6" style="padding:2%">
            <table class="result_details">
                <tr><th style="font-size:14pt">Product details</th></tr>
                <tr>
                    <td class="detail_title">Naam product:</td>
                    <td class="detail_desc">{{ $result_name }}</td>
                </tr>
                @if($menuitem != "casing")
                    <tr>
                        <td class="detail_title">Fabrikantcode:</td>
                        <td class="detail_desc">{{ $manufacture_code }}</td>
                    </tr>
                    <tr>
                        <td class="detail_title">Merk:</td>
                        <td class="detail_desc">{{ $brand }}</td>
                    </tr>
                    <tr>
                        <td class="detail_title">Garantie:</td>
                        <td class="detail_desc">{{ $warranty }}</td>
                    </tr>
                @endif
                <tr>
                    <td class="detail_title">Link product:</td>
                    <td class="detail_desc">
                        <a href='{{ $result_link }}' target="_blank"><img style="height:80%" src="images/computerstore.png" /></a>
                    </td>
                </tr>
                <tr>
                    <td class="detail_title">Huidige prijs:</td>
                    <td class="detail_desc">
                        <span style="color:#323232;font-size:26pt">{{$result_price_first}}.</span><span
                            style="color:#00A1FF;font-size:18pt">{{$result_price_second}}</span>
                    </td>
                </tr>
            </table><br>
            @if($menuitem == "powersupply")
                <table class="result_details">
                    <tr>
                        <td class="detail_title">test</td>
                    </tr>
                </table>
            @endif
            <table style="margin-bottom:25px;width:50%">
                <tr><th colspan="2" style="font-size:14pt">Overzicht prijsverandering</th></tr>
                <tr><td class="detail_desc">20-01-2014</td><td class="detail_desc">&euro; 45.00</td></tr>
                <tr><td class="detail_desc">21-01-2014</td><td class="detail_desc">&euro; 34.00</td></tr>
                <tr><td class="detail_desc">22-01-2014</td><td class="detail_desc">&euro; 34.00</td></tr>
                <tr><td class="detail_desc">23-01-2014</td><td class="detail_desc">&euro; 34.00</td></tr>
            </table>
        </div>
        <div class="content col-md-6" style="padding:2%">
            <a href="{{ $result_link }}" target="_blank">
                <img class="result_img" src="{{ $result_img }}"/>
            </a>
        </div>
    </div>
@stop