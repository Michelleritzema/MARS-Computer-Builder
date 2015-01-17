<?php

$string_to_java_server = "";
$session_variable_names = array("cpu_p4", "cpu_p8", "cpu_p4+p4", "powersupply_modular", "powersupply_certificate",
    "powersupply_brand1", "powersupply_brand2", "powersupply_brand3", "powersupply_brand4", "powersupply_brand5",
    "pci_express_6pin", "pci_express_6pin2pin", "powersupply_price_min", "powersupply_price_max", "powersupply_power_min",
    "powersupply_power_max", "s-ata_min", "s-ata_max", "processorcooler_brand1", "processorcooler_brand2",
    "processorcooler_brand3", "processorcooler_brand4", "processorcooler_brand5", "processorcooler_brand6",
    "processorcooler_brand7", "processorcooler_brand8", "processorcooler_price_min", "processorcooler_price_max",
    "processorcooler_method", "processorcooler_diameter", "processorcooler_rotation_min", "processorcooler_rotation_max",
    "hdd_brand1", "hdd_brand2", "hdd_brand3", "hdd_brand4", "hdd_format", "hdd_storagecapacity1", "hdd_storagecapacity2",
    "hdd_storagecapacity3", "hdd_storagecapacity4", "hdd_storagecapacity5", "hdd_storagecapacity6", "hdd_storagecapacity7",
    "hdd_storagecapacity8", "hdd_storagecapacity9", "hdd_storagecapacity10", "hdd_connection", "hdd_buffer", "hdd_speed",
    "hdd_price_min", "hdd_price_max", "soundcard_brand1", "soundcard_brand2", "soundcard_sample", "soundcard_aiso",
    "soundcard_port", "soundcard_processor1", "soundcard_processor2", "soundcard_processor3", "soundcard_processor4",
    "soundcard_processor5", "soundcard_processor6", "soundcard_channel", "soundcard_headphone", "soundcard_jack",
    "soundcard_price_min", "soundcard_price_max", "pci_usb", "pci_firewire", "pci_sata", "pci_esata", "pci_price_min",
    "pci_price_max", "GPU_producer1", "GPU_producer2", "GPU_type_AMD1", "GPU_type_AMD2", "GPU_type_AMD3", "GPU_type_AMD4",
    "GPU_type_AMD5", "GPU_type_AMD6", "GPU_type_AMD7", "GPU_type_AMD8", "GPU_type_AMD9", "GPU_type_AMD10", "GPU_type_NVIDIA1",
    "GPU_type_NVIDIA2", "GPU_type_NVIDIA3", "GPU_type_NVIDIA4", "GPU_type_NVIDIA5", "GPU_type_NVIDIA6", "GPU_type_NVIDIA7",
    "GPU_type_NVIDIA8", "GPU_type_NVIDIA9", "GPU_type_NVIDIA10", "GPU_brand1", "GPU_brand2", "GPU_brand3", "GPU_brand4",
    "GPU_brand5", "GPU_brand6", "GPU_geheugen_type", "GPU_HDMI", "GPU_VGA", "GPU_bandwidth_memory", "GPU_DVII", "GPU_DVID",
    "GPU_price_min", "GPU_price_max", "GPU_memory_min", "GPU_memory_max", "processor_brand1", "processor_brand2",
    "processor_brand2", "processor_core1", "processor_core2", "processor_core3", "processor_core4", "processor_cost_min",
    "processor_cost_max", "processor_serie1", "processor_serie2", "processor_serie3", "processor_serie4", "processor_serie5",
    "processor_serie6", "processor_serie7", "processor_serie8", "processor_serie9", "processor_speed_min", "processor_speed_max",
    "RAM_merk1", "RAM_merk2", "RAM_merk3", "RAM_merk4", "RAM_merk5", "RAM_merk6", "RAM_geheugen1", "RAM_geheugen2", "RAM_geheugen3",
    "RAM_geheugen4", "RAM_geheugen5", "RAM_geheugen6", "RAM_klok", "RAM_game", "RAM_geschikt1", "RAM_geschikt2", "RAM_geschikt3",
    "RAM_geschikt4", "RAM_type", "RAM_kanalen", "RAM_price_min", "RAM_price_max", "moederbord_merk1", "moederbord_merk2",
    "moederbord_merk3", "moederbord_format", "moederbord_wifi", "moederbord_geheugen", "moederbord_HDMI", "moederbord_VGA",
    "moederbord_displayport", "moederbord_price_min", "moederbord_price_max", "moederbord_usb", "moederbord_ethernet", "moederbord_DVI",
    "moederbord_raid1", "moederbord_raid2", "moederbord_raid3", "moederbord_raid4", "moederbord_raid5", "moederbord_raid6",
    "moederbord_audiokanalen", "moederbord_type", "moederbord_msata", "moederbord_SATA300", "moederbord_SATA600", "behuizing_merk1",
    "behuizing_merk2", "behuizing_merk3", "behuizing_merk4", "behuizing_merk5", "behuizing_merk6", "behuizing_computer", "behuizing_fan",
    "behuizing_stof", "behuizing_water", "behuizing_led", "behuizing_ruis", "behuizing_geluid", "behuizing_paneel",
    "behuizing_price_min", "behuizing_price_max", "behuizing_uitbreiding_min", "behuizing_uitbreiding_max", "behuizing_kleur",
    "behuizing_materiaal", "behuizing_usb2_1", "behuizing_usb2_2", "behuizing_usb2_3", "behuizing_usb3_1", "behuizing_usb3_2",
    "behuizing_usb3_3", "behuizing_firewire", "behuizing_esata", "behuizing_2_5bay_min", "behuizing_2_5bay_max", "behuizing_3_5bay_min",
    "behuizing_3_5bay_max", "behuizing_5_25bay_min", "behuizing_5_25bay_max", "SDD_opslag1", "SDD_opslag2", "SDD_opslag3", "SDD_opslag4",
    "SDD_opslag5", "SDD_opslag6", "SDD_opslag7", "SDD_opslag8", "SDD_opslag9", "SDD_opslag10", "SDD_opslag11", "SDD_opslag12",
    "SDD_opslag13", "SDD_opslag14", "SDD_opslag15", "SDD_formaat", "SSD_soort", "SSD_price_min", "SSD_price_max", "SSD_merk1",
    "SSD_merk2", "SSD_merk3", "SSD_merk4", "SSD_merk5", "SSD_merk6", "SSD_merk7", "SSD_merk8", "SSD_controller1", "SSD_controller2",
    "SSD_controller3", "SSD_controller4", "SSD_controller5", "SSD_controller6", "SSD_schrijf_min", "SSD_schrijf_max",
    "SSD_lees_min", "SSD_lees_max", "brander_merk1", "brander_merk2", "brander_merk3", "brander_merk4", "brander_merk5", "brander_merk6",
    "brander_type", "brander_price_min", "brander_price_max", "brander_speelt1", "brander_speelt2", "brander_speelt3",
    "brander_speelt4", "brander_besturing", "brander_ladetype");

foreach($session_variable_names as $variable_name) {
    $value = Session::get($variable_name);
    $string_to_java_server .= $value;
}

$PORT = 6789; //the port on which we are connecting to the "remote" machine
$HOST = "localhost"; //the ip of the remote machine (in this case it's the same machine)

$sock = socket_create(AF_INET, SOCK_STREAM, 0) //Creating a TCP socket
or die("error: could not create socket\n");

$succ = socket_connect($sock, $HOST, $PORT) //Connecting to to server using that socket
or die("error: could not connect to host\n");

$text = $string_to_java_server; //the text we want to send to the server

socket_write($sock, $text . "\n", strlen($text) + 1) //Writing the text to the socket
or die("error: failed to write to socket\n");

$reply = socket_read($sock, 10000, PHP_NORMAL_READ) //Reading the reply from socket
or die("error: failed to read from socket\n");

//var_dump($string_to_java_server);
?>

@extends('layout.template')

@section('content')
    <div class="content col-md-12">
        <div class="waiting_message" style="margin-top:50px;">
            <h1>Even geduld<h1>
            <h3>Uw ideale computer wordt samengesteld</h3>
            {{ HTML::image('images/loading.gif', 'Icompare load gif', array('class' => 'loading_animation', 'style' => 'width:20%')) }}
        </div>
        <div style="width:90%;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;text-align:center;display:inline-block">{{ $reply }}</div>
    </div>
@stop