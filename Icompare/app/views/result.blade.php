<?php
session_start();

if (!Session::has('menuitem')) { Session::put('menuitem', 'powersupply'); }
Session::put('resultpage', 'yes');
$menuitem = Session::get('menuitem');
echo $menuitem;

$string = file_get_contents("result/temp.json");

$i=0;
$super_array = array();
foreach(preg_split("/((\r?\n)|(\r\n?))/", $string) as $line){
    preg_match('/[^{]*name[^,]*/', $line, $output_array);
    $name = filter_data($output_array);
    preg_match('/[^",]*date[^,]*/', $line, $output_array);
    $date = filter_data($output_array);
    preg_match('/[^",]*link[^,]*/', $line, $output_array);
    $link = filter_data($output_array);
    preg_match('/[^",]*category[^,]*/', $line, $output_array);
    $category = filter_data($output_array);
    preg_match('/(.\d\d\.\d\d)/', $line, $output_array);
    $price = filter_data($output_array);
    preg_match('/[^\"]*img[^,]*/', $line, $output_array);
    $img = filter_data($output_array);
    $values = array("name" => $name,"date" => $date,"link" => $link);
    $super_array[$i] = $values;
    $i++;
}
//echo "<pre>";
//var_dump($super_array);
//echo "</pre>";


function filter_data($output_array) {
    $replace = array(
            "\"" => "",
            "name:" => "",
            "],img:" => "",
            "date:" => "",
            "link:" => "",
            "link:" => "",
            "artikelnummer:" => "",
            "merk:" => ""
    );
    foreach($replace as $k => $v)
    {
        $content = str_replace($k, $v, $output_array[0]);
        $output_array[0] = $content;
    }
    return $output_array[0];
}

?>

@extends('layout.template')

@section('content')
    <div class="content col-md-12">
        @include('include.menu_result')
        <div class="content col-md-6">
            @if($menuitem = "powersupply")
                <p>{{ $super_array[0]['name']}}</p>
            @endif
            @if($menuitem = "processorcooler")
                <p>{{ $super_array[1]['name']}}</p>
            @endif
            <p></p>
            <p></p>
            <p></p>
        </div>
        <!--<div class="content col-md-6">
            test2
        </div>-->
    </div>
@stop