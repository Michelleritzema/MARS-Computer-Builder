<?php
/*$host = "tcp://localhost";
$port = 6789;
$data = "String" . PHP_EOL;  //Adding PHP_EOL was the other part of the solution
$errstr = '';
$errno = '';

if ( ($fp = fsockopen($host, $port, $errno, $errstr, 3) ) === FALSE)
    echo "$errstr ($errno)";
else {
    print 'SUCCESS!<br />';
    fwrite($fp, $data);
    while (! feof($fp)) {
        echo fgets($fp, 4096);
    }
    fclose($fp);
    outToClient.writeBytes(capitalizedSentence);
    connectionSocket.close();
}*/
?>

@extends('layout.template')

@section('content')
    <div class="content col-md-12">
        <div class="waiting_message" style="margin-top:50px;">
            <h1>Even geduld<h1>
            <h3>Uw computer wordt samengesteld</h3>
            {{ HTML::image('images/loading.gif', 'Icompare load gif', array('class' => 'loading_animation', 'style' => 'width:20%')) }}
        </div>
    </div>
@stop