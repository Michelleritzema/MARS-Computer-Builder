<?php
/**
 * Created by PhpStorm.
 * User: Michelle
 * Date: 20/01/2015
 * Time: 10:58
 */
$string = file_get_contents("result/current_products.json");
//echo $string;

foreach(preg_split("/((\r?\n)|(\r\n?))/", $string) as $line){
    preg_match('/[^{]*name[^,]*/', $line, $output_array);
    $name = filter_data($output_array);
    echo $name;
    echo "<br>";
    preg_match('/[^",]*date[^,]*/', $line, $output_array);
    $date = filter_data($output_array);
    echo $date;
    echo "<br>";
    preg_match('/[^",]*link[^,]*/', $line, $output_array);
    $link = filter_data($output_array);
    echo "<a href='" . $link . "'/>klik voor link</a>";
    echo "<br>";
    preg_match('/[^"]*,category[^,]*/', $line, $output_array);
    $category = filter_data($output_array);
    echo $category;
    echo "<br>";
    preg_match('/(.\d\d\.\d\d)/', $line, $output_array);
    $price = filter_data($output_array);
    echo $price;
    echo "<br>";
    preg_match('/[^\"\]]*,img[^,]*/', $line, $output_array);
    $img = filter_data($output_array);
    echo "<img src='" . $img . "' style='width:60px'/>";
    echo "<br><br>";
}

function filter_data($output_array) {
    $replace = array(
        "\"" => "",
        "name:" => "",
        ",img:" => "",
        "date:" => "",
        "link:" => "",
        ",category:" => "",
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