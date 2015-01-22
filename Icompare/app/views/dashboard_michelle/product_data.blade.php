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
    //echo $string;
    //echo "line = " . $line;
    //echo "<br><br>";
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
    preg_match('/[^",]*category[^,]*/', $line, $output_array);
    $category = filter_data($output_array);
    echo $category;
    echo "<br>";
//    preg_match('/[^",]*artikelnummer[^,]*/', $line, $output_array);
//    $articlenumber = filter_data($output_array);
//    echo $articlenumber;
//    echo "<br>";
//    preg_match('/[^",]*merk[^,]*/', $line, $output_array);
//    $brand = filter_data($output_array);
//    echo $brand;
//    echo "<br>";
    preg_match('/(.\d\d\.\d\d)/', $line, $output_array);
    $price = filter_data($output_array);
    echo $price;
    echo "<br>";
    preg_match('/[^\"]*img[^,]*/', $line, $output_array);
    $img = filter_data($output_array);
    echo "<img src='" . $img . "' style='width:60px'/>";
    echo "<br><br>";
}


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
    //echo $output_array[0];
    //echo "<br><br>";
    return $output_array[0];
}


//$new = utf8_encode($string);
//$json_string = html_entity_decode($new);
//$json = str_replace('&quot;', '"', $json_string);
//$json_a = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $json), true);
//var_dump($json_a);

//echo $string;
//$json_string = html_entity_decode($string);
//$new = utf8_encode($json_string);
//$jsonData = trim($new);
//$json = str_replace('&quot;', '"', $jsonData);
//$json_a = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $json), true );
//$json_a=json_decode($new,true);
//var_dump($json_a);
//$json = json_decode();
//echo $json;
//
//echo $json_a;

/*$jsonIterator = new RecursiveIteratorIterator(
        new RecursiveArrayIterator(json_decode($string, TRUE)),
        RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
    if(is_array($val)) {
        echo "$key:\n";
    } else {
        echo "$key => $val\n";
    }
}*/

?>