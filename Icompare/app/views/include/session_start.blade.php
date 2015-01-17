<?php
session_start();

if (!Session::has('menuitem')) { Session::put('menuitem', 'powersupply'); }
if (!Session::has('powersupply_check')) { Session::put('powersupply_check', '-'); }
if (!Session::has('processorcooler_check')) { Session::put('processorcooler_check', '-'); }
if (!Session::has('internalharddrive_check')) { Session::put('internalharddrive_check', '-'); }
if (!Session::has('soundcard_check')) { Session::put('soundcard_check', '-'); }
if (!Session::has('pci_check')) { Session::put('pci_check', '-'); }
if (!Session::has('videocard_check')) { Session::put('videocard_check', '-'); }
if (!Session::has('processor_check')) { Session::put('processor_check', '-'); }
if (!Session::has('internalmemory_check')) { Session::put('internalmemory_check', '-'); }
if (!Session::has('motherboard_check')) { Session::put('motherboard_check', '-'); }
if (!Session::has('casing_check')) { Session::put('casing_check', '-'); }
if (!Session::has('ssd_check')) { Session::put('ssd_check', '-'); }
if (!Session::has('bluraydvd_check')) { Session::put('bluraydvd_check', '-'); }

if (!Session::has('cpu_p4')) { Session::put('cpu_p4', '0'); }
if (!Session::has('cpu_p8')) { Session::put('cpu_p8', '0'); }
if (!Session::has('cpu_p4+p4')) { Session::put('cpu_p4+p4', '-'); }
if (!Session::has('powersupply_modular')) { Session::put('powersupply_modular', '-'); }
if (!Session::has('powersupply_certificate')) { Session::put('powersupply_certificate', '-'); }
if (!Session::has('powersupply_brand1')) { Session::put('powersupply_brand1', '0'); }
if (!Session::has('powersupply_brand2')) { Session::put('powersupply_brand2', '0'); }
if (!Session::has('powersupply_brand3')) { Session::put('powersupply_brand3', '0'); }
if (!Session::has('powersupply_brand4')) { Session::put('powersupply_brand4', '0'); }
if (!Session::has('powersupply_brand5')) { Session::put('powersupply_brand5', '0'); }
if (!Session::has('pci_express_6pin')) { Session::put('pci_express_6pin', '-'); }
if (!Session::has('pci_express_6pin2pin')) { Session::put('pci_express_6pin2pin', '-'); }
if (!Session::has('powersupply_price_min')) { Session::put('powersupply_price_min', '-'); }
if (!Session::has('powersupply_price_max')) { Session::put('powersupply_price_max', '-'); }
if (!Session::has('powersupply_power_min')) { Session::put('powersupply_power_min', '-'); }
if (!Session::has('powersupply_power_max')) { Session::put('powersupply_power_max', '-'); }
if (!Session::has('s-ata_min')) { Session::put('s-ata_min', '-'); }
if (!Session::has('s-ata_max')) { Session::put('s-ata_max', '-'); }
if (!Session::has('processorcooler_brand1')) { Session::put('processorcooler_brand1', '0'); }
if (!Session::has('processorcooler_brand2')) { Session::put('processorcooler_brand2', '0'); }
if (!Session::has('processorcooler_brand3')) { Session::put('processorcooler_brand3', '0'); }
if (!Session::has('processorcooler_brand4')) { Session::put('processorcooler_brand4', '0'); }
if (!Session::has('processorcooler_brand5')) { Session::put('processorcooler_brand5', '0'); }
if (!Session::has('processorcooler_brand6')) { Session::put('processorcooler_brand6', '0'); }
if (!Session::has('processorcooler_brand7')) { Session::put('processorcooler_brand7', '0'); }
if (!Session::has('processorcooler_price_min')) { Session::put('processorcooler_price_min', '-'); }
if (!Session::has('processorcooler_price_max')) { Session::put('processorcooler_price_max', '-'); }
if (!Session::has('processorcooler_method')) { Session::put('processorcooler_method', '-'); }
if (!Session::has('processorcooler_diameter')) { Session::put('processorcooler_diameter', '-'); }
if (!Session::has('processorcooler_rotation_min')) { Session::put('processorcooler_rotation_min', '-'); }
if (!Session::has('processorcooler_rotation_max')) { Session::put('processorcooler_rotation_max', '-'); }
if (!Session::has('hdd_brand1')) { Session::put('hdd_brand1', '0'); }
if (!Session::has('hdd_brand2')) { Session::put('hdd_brand2', '0'); }
if (!Session::has('hdd_brand3')) { Session::put('hdd_brand3', '0'); }
if (!Session::has('hdd_brand4')) { Session::put('hdd_brand4', '0'); }
if (!Session::has('hdd_format')) { Session::put('hdd_format', '-'); }
if (!Session::has('hdd_storagecapacity1')) { Session::put('hdd_storagecapacity1', '0'); }
if (!Session::has('hdd_storagecapacity2')) { Session::put('hdd_storagecapacity2', '0'); }
if (!Session::has('hdd_storagecapacity3')) { Session::put('hdd_storagecapacity3', '0'); }
if (!Session::has('hdd_storagecapacity4')) { Session::put('hdd_storagecapacity4', '0'); }
if (!Session::has('hdd_storagecapacity5')) { Session::put('hdd_storagecapacity5', '0'); }
if (!Session::has('hdd_storagecapacity6')) { Session::put('hdd_storagecapacity6', '0'); }
if (!Session::has('hdd_storagecapacity7')) { Session::put('hdd_storagecapacity7', '0'); }
if (!Session::has('hdd_storagecapacity8')) { Session::put('hdd_storagecapacity8', '0'); }
if (!Session::has('hdd_storagecapacity9')) { Session::put('hdd_storagecapacity9', '0'); }
if (!Session::has('hdd_storagecapacity10')) { Session::put('hdd_storagecapacity10', '0'); }
if (!Session::has('hdd_connection')) { Session::put('hdd_connection', '-'); }
if (!Session::has('hdd_buffer')) { Session::put('hdd_buffer', '-'); }
if (!Session::has('hdd_speed')) { Session::put('hdd_speed', '-'); }
if (!Session::has('hdd_price_min')) { Session::put('hdd_price_min', '-'); }
if (!Session::has('hdd_price_max')) { Session::put('hdd_price_max', '-'); }
if (!Session::has('soundcard_brand1')) { Session::put('soundcard_brand1', '0'); }
if (!Session::has('soundcard_brand2')) { Session::put('soundcard_brand2', '0'); }
if (!Session::has('soundcard_sample')) { Session::put('soundcard_sample', '-'); }
if (!Session::has('soundcard_aiso')) { Session::put('soundcard_aiso', '-'); }
if (!Session::has('soundcard_port')) { Session::put('soundcard_port', '-'); }
if (!Session::has('soundcard_processor1')) { Session::put('soundcard_processor1', '0'); }
if (!Session::has('soundcard_processor2')) { Session::put('soundcard_processor2', '0'); }
if (!Session::has('soundcard_processor3')) { Session::put('soundcard_processor3', '0'); }
if (!Session::has('soundcard_processor4')) { Session::put('soundcard_processor4', '0'); }
if (!Session::has('soundcard_processor5')) { Session::put('soundcard_processor5', '0'); }
if (!Session::has('soundcard_processor6')) { Session::put('soundcard_processor6', '0'); }
if (!Session::has('soundcard_channel')) { Session::put('soundcard_channel', '-'); }
if (!Session::has('soundcard_headphone')) { Session::put('soundcard_headphone', '-'); }
if (!Session::has('soundcard_jack')) { Session::put('soundcard_jack', '-'); }
if (!Session::has('soundcard_price_min')) { Session::put('soundcard_price_min', '-'); }
if (!Session::has('soundcard_price_max')) { Session::put('soundcard_price_max', '-'); }
if (!Session::has('pci_usb')) { Session::put('pci_usb', '-'); }
if (!Session::has('pci_firewire')) { Session::put('pci_firewire', '-'); }
if (!Session::has('pci_sata')) { Session::put('pci_sata', '-'); }
if (!Session::has('pci_esata')) { Session::put('pci_esata', '-'); }
if (!Session::has('pci_price_min')) { Session::put('pci_price_min', '-'); }
if (!Session::has('pci_price_max')) { Session::put('pci_price_max', '-'); }
if (!Session::has('GPU_producer1'))  { Session::put('GPU_producer1','0'); }
if (!Session::has('GPU_producer2'))  { Session::put('GPU_producer2','0'); }
if (!Session::has('GPU_type_AMD1'))  { Session::put('GPU_type_AMD1','0'); }
if (!Session::has('GPU_type_AMD2'))  { Session::put('GPU_type_AMD2','0'); }
if (!Session::has('GPU_type_AMD3'))  { Session::put('GPU_type_AMD3','0'); }
if (!Session::has('GPU_type_AMD4'))  { Session::put('GPU_type_AMD4','0'); }
if (!Session::has('GPU_type_AMD5'))  { Session::put('GPU_type_AMD5','0'); }
if (!Session::has('GPU_type_AMD6'))  { Session::put('GPU_type_AMD6','0'); }
if (!Session::has('GPU_type_AMD7'))  { Session::put('GPU_type_AMD7','0'); }
if (!Session::has('GPU_type_AMD8'))  { Session::put('GPU_type_AMD8','0'); }
if (!Session::has('GPU_type_AMD9'))  { Session::put('GPU_type_AMD9','0'); }
if (!Session::has('GPU_type_AMD10'))  { Session::put('GPU_type_AMD10','0'); }
if (!Session::has('GPU_type_NVIDIA1'))  { Session::put('GPU_type_NVIDIA1','0'); }
if (!Session::has('GPU_type_NVIDIA2'))  { Session::put('GPU_type_NVIDIA2','0'); }
if (!Session::has('GPU_type_NVIDIA3'))  { Session::put('GPU_type_NVIDIA3','0'); }
if (!Session::has('GPU_type_NVIDIA4'))  { Session::put('GPU_type_NVIDIA4','0'); }
if (!Session::has('GPU_type_NVIDIA5'))  { Session::put('GPU_type_NVIDIA5','0'); }
if (!Session::has('GPU_type_NVIDIA6'))  { Session::put('GPU_type_NVIDIA6','0'); }
if (!Session::has('GPU_type_NVIDIA7'))  { Session::put('GPU_type_NVIDIA7','0'); }
if (!Session::has('GPU_type_NVIDIA8'))  { Session::put('GPU_type_NVIDIA8','0'); }
if (!Session::has('GPU_type_NVIDIA9'))  { Session::put('GPU_type_NVIDIA9','0'); }
if (!Session::has('GPU_type_NVIDIA10'))  { Session::put('GPU_type_NVIDIA10','0'); }
if (!Session::has('GPU_brand1'))  { Session::put('GPU_brand1','0'); }
if (!Session::has('GPU_brand2'))  { Session::put('GPU_brand2','0'); }
if (!Session::has('GPU_brand3'))  { Session::put('GPU_brand3','0'); }
if (!Session::has('GPU_brand4'))  { Session::put('GPU_brand4','0'); }
if (!Session::has('GPU_brand5'))  { Session::put('GPU_brand5','0'); }
if (!Session::has('GPU_brand6'))  { Session::put('GPU_brand6','0'); }
if (!Session::has('GPU_geheugen_type'))  { Session::put('GPU_geheugen_type','-'); }
if (!Session::has('GPU_HDMI'))  { Session::put('GPU_HDMI','-'); }
if (!Session::has('GPU_VGA'))  { Session::put('GPU_VGA','-'); }
if (!Session::has('GPU_bandwidth_memory'))  { Session::put('GPU_bandwidth_memory','-'); }
if (!Session::has('GPU_DVII'))  { Session::put('GPU_DVII','-'); }
if (!Session::has('GPU_DVID'))  { Session::put('GPU_DVID','-'); }
if (!Session::has('GPU_cost'))  { Session::put('GPU_cost','-'); }
if (!Session::has('GPU_memory'))  { Session::put('GPU_memory',''); }
if (!Session::has('processor_brand1'))  { Session::put('processor_brand1','0'); }
if (!Session::has('processor_brand2'))  { Session::put('processor_brand2','0'); }
if (!Session::has('processor_core1'))  { Session::put('processor_core1','0'); }
if (!Session::has('processor_core2'))  { Session::put('processor_core2','0'); }
if (!Session::has('processor_core3'))  { Session::put('processor_core3','0'); }
if (!Session::has('processor_core4'))  { Session::put('processor_core4','0'); }
if (!Session::has('processor_cost_min'))  { Session::put('processor_cost_min','-'); }
if (!Session::has('processor_cost_max'))  { Session::put('processor_cost_max','-'); }
if (!Session::has('processor_serie1'))  { Session::put('processor_serie1','0'); }
if (!Session::has('processor_serie2'))  { Session::put('processor_serie2','0'); }
if (!Session::has('processor_serie3'))  { Session::put('processor_serie3','0'); }
if (!Session::has('processor_serie4'))  { Session::put('processor_serie4','0'); }
if (!Session::has('processor_serie5'))  { Session::put('processor_serie5','0'); }
if (!Session::has('processor_serie6'))  { Session::put('processor_serie6','0'); }
if (!Session::has('processor_serie7'))  { Session::put('processor_serie7','0'); }
if (!Session::has('processor_serie8'))  { Session::put('processor_serie8','0'); }
if (!Session::has('processor_serie9'))  { Session::put('processor_serie9','0'); }
if (!Session::has('processor_speed_min'))  { Session::put('processor_speed_min','-'); }
if (!Session::has('processor_speed_max'))  { Session::put('processor_speed_max','-'); }
if (!Session::has('RAM_merk1'))  { Session::put('RAM_merk1','0'); }
if (!Session::has('RAM_merk2'))  { Session::put('RAM_merk2','0'); }
if (!Session::has('RAM_merk3'))  { Session::put('RAM_merk3','0'); }
if (!Session::has('RAM_merk4'))  { Session::put('RAM_merk4','0'); }
if (!Session::has('RAM_merk5'))  { Session::put('RAM_merk5','0'); }
if (!Session::has('RAM_merk6'))  { Session::put('RAM_merk6','0'); }
if (!Session::has('RAM_geheugen1'))  { Session::put('RAM_geheugen1','0'); }
if (!Session::has('RAM_geheugen2'))  { Session::put('RAM_geheugen2','0'); }
if (!Session::has('RAM_geheugen3'))  { Session::put('RAM_geheugen3','0'); }
if (!Session::has('RAM_geheugen4'))  { Session::put('RAM_geheugen4','0'); }
if (!Session::has('RAM_geheugen5'))  { Session::put('RAM_geheugen5','0'); }
if (!Session::has('RAM_geheugen6'))  { Session::put('RAM_geheugen6','0'); }
if (!Session::has('RAM_klok'))  { Session::put('RAM_klok','-'); }
if (!Session::has('RAM_game'))  { Session::put('RAM_game','-'); }
if (!Session::has('RAM_geschikt1'))  { Session::put('RAM_geschikt1','0'); }
if (!Session::has('RAM_geschikt2'))  { Session::put('RAM_geschikt2','0'); }
if (!Session::has('RAM_geschikt3'))  { Session::put('RAM_geschikt3','0'); }
if (!Session::has('RAM_geschikt4'))  { Session::put('RAM_geschikt4','0'); }
if (!Session::has('RAM_type'))  { Session::put('RAM_type','-'); }
if (!Session::has('RAM_kanalen'))  { Session::put('RAM_kanalen','-'); }
if (!Session::has('RAM_price_min'))  { Session::put('RAM_price_min','-'); }
if (!Session::has('RAM_price_max'))  { Session::put('RAM_price_max','-'); }
if (!Session::has('moederbord_merk1'))  { Session::put('moederbord_merk1','0'); }
if (!Session::has('moederbord_merk2'))  { Session::put('moederbord_merk2','0'); }
if (!Session::has('moederbord_merk3'))  { Session::put('moederbord_merk3','0'); }
if (!Session::has('moederbord_format'))  { Session::put('moederbord_format','-'); }
if (!Session::has('moederbord_wifi'))  { Session::put('moederbord_wifi','-'); }
if (!Session::has('moederbord_geheugen'))  { Session::put('moederbord_geheugen','-'); }
if (!Session::has('moederbord_HDMI'))  { Session::put('moederbord_HDMI','-'); }
if (!Session::has('moederbord_VGA'))  { Session::put('moederbord_VGA','-'); }
if (!Session::has('moederbord_displayport'))  { Session::put('moederbord_displayport','-'); }
if (!Session::has('moederbord_price_min'))  { Session::put('moederbord_price_min','-'); }
if (!Session::has('moederbord_price_max'))  { Session::put('moederbord_price_max','-'); }
if (!Session::has('moederbord_usb'))  { Session::put('moederbord_usb','-'); }
if (!Session::has('moederbord_ethernet'))  { Session::put('moederbord_ethernet','-'); }
if (!Session::has('moederbord_DVI'))  { Session::put('moederbord_DVI','-'); }
if (!Session::has('moederbord_raid1'))  { Session::put('moederbord_raid1','0'); }
if (!Session::has('moederbord_raid2'))  { Session::put('moederbord_raid2','0'); }
if (!Session::has('moederbord_raid3'))  { Session::put('moederbord_raid3','0'); }
if (!Session::has('moederbord_raid4'))  { Session::put('moederbord_raid4','0'); }
if (!Session::has('moederbord_raid5'))  { Session::put('moederbord_raid5','0'); }
if (!Session::has('moederbord_raid6'))  { Session::put('moederbord_raid6','0'); }
if (!Session::has('moederbord_audiokanalen'))  { Session::put('moederbord_audiokanalen','-'); }
if (!Session::has('moederbord_type'))  { Session::put('moederbord_type','-'); }
if (!Session::has('moederbord_msata'))  { Session::put('moederbord_msata','-'); }
if (!Session::has('moederbord_SATA300'))  { Session::put('moederbord_SATA300','-'); }
if (!Session::has('moederbord_SATA600'))  { Session::put('moederbord_SATA600','-'); }
if (!Session::has('behuizing_merk1'))  { Session::put('behuizing_merk1','0'); }
if (!Session::has('behuizing_merk2'))  { Session::put('behuizing_merk2','0'); }
if (!Session::has('behuizing_merk3'))  { Session::put('behuizing_merk3','0'); }
if (!Session::has('behuizing_merk4'))  { Session::put('behuizing_merk4','0'); }
if (!Session::has('behuizing_merk5'))  { Session::put('behuizing_merk5','0'); }
if (!Session::has('behuizing_merk6'))  { Session::put('behuizing_merk6','0'); }
if (!Session::has('behuizing_computer'))  { Session::put('behuizing_computer','-'); }
if (!Session::has('behuizing_fan'))  { Session::put('behuizing_fan','-'); }
if (!Session::has('behuizing_stof'))  { Session::put('behuizing_stof','-'); }
if (!Session::has('behuizing_water'))  { Session::put('behuizing_water','-'); }
if (!Session::has('behuizing_led'))  { Session::put('behuizing_led','-'); }
if (!Session::has('behuizing_ruis'))  { Session::put('behuizing_ruis','-'); }
if (!Session::has('behuizing_geluid'))  { Session::put('behuizing_geluid','-'); }
if (!Session::has('behuizing_paneel'))  { Session::put('behuizing_paneel','-'); }
if (!Session::has('behuizing_price_min'))  { Session::put('behuizing_price_min','-'); }
if (!Session::has('behuizing_price_max'))  { Session::put('behuizing_price_max','-'); }
if (!Session::has('behuizing_uitbreiding_min'))  { Session::put('behuizing_uitbreiding_min','-'); }
if (!Session::has('behuizing_uitbreiding_max'))  { Session::put('behuizing_uitbreiding_max','-'); }
if (!Session::has('behuizing_kleur'))  { Session::put('behuizing_kleur','-'); }
if (!Session::has('behuizing_materiaal'))  { Session::put('behuizing_materiaal','-'); }
if (!Session::has('behuizing_usb2_1'))  { Session::put('behuizing_usb2_1','0'); }
if (!Session::has('behuizing_usb2_2'))  { Session::put('behuizing_usb2_2','0'); }
if (!Session::has('behuizing_usb2_3'))  { Session::put('behuizing_usb2_3','0'); }
if (!Session::has('behuizing_usb3_1'))  { Session::put('behuizing_usb3_1','0'); }
if (!Session::has('behuizing_usb3_2'))  { Session::put('behuizing_usb3_2','0'); }
if (!Session::has('behuizing_usb3_3'))  { Session::put('behuizing_usb3_3','0'); }
if (!Session::has('behuizing_firewire'))  { Session::put('behuizing_firewire','-'); }
if (!Session::has('behuizing_esata'))  { Session::put('behuizing_esata','-'); }
if (!Session::has('behuizing_2,5bay'))  { Session::put('behuizing_2,5bay','-'); }
if (!Session::has('behuizing_3,5bay'))  { Session::put('behuizing_3,5bay','-'); }
if (!Session::has('behuizing_5,25bay'))  { Session::put('behuizing_5,25bay','-'); }
if (!Session::has('SDD_opslag1'))  { Session::put('SDD_opslag1','0'); }
if (!Session::has('SDD_opslag2'))  { Session::put('SDD_opslag2','0'); }
if (!Session::has('SDD_opslag3'))  { Session::put('SDD_opslag3','0'); }
if (!Session::has('SDD_opslag4'))  { Session::put('SDD_opslag4','0'); }
if (!Session::has('SDD_opslag5'))  { Session::put('SDD_opslag5','0'); }
if (!Session::has('SDD_opslag6'))  { Session::put('SDD_opslag6','0'); }
if (!Session::has('SDD_opslag7'))  { Session::put('SDD_opslag7','0'); }
if (!Session::has('SDD_opslag8'))  { Session::put('SDD_opslag8','0'); }
if (!Session::has('SDD_opslag9'))  { Session::put('SDD_opslag9','0'); }
if (!Session::has('SDD_opslag10'))  { Session::put('SDD_opslag10','0'); }
if (!Session::has('SDD_opslag11'))  { Session::put('SDD_opslag11','0'); }
if (!Session::has('SDD_opslag12'))  { Session::put('SDD_opslag12','0'); }
if (!Session::has('SDD_opslag13'))  { Session::put('SDD_opslag13','0'); }
if (!Session::has('SDD_opslag14'))  { Session::put('SDD_opslag14','0'); }
if (!Session::has('SDD_opslag15'))  { Session::put('SDD_opslag15','0'); }
if (!Session::has('SDD_formaat'))  { Session::put('SDD_formaat','-'); }
if (!Session::has('SSD_soort'))  { Session::put('SSD_soort','-'); }
if (!Session::has('SSD_price_min'))  { Session::put('SSD_price_min','-'); }
if (!Session::has('SSD_price_max'))  { Session::put('SSD_price_max','-'); }
if (!Session::has('SSD_merk1'))  { Session::put('SSD_merk1','0'); }
if (!Session::has('SSD_merk2'))  { Session::put('SSD_merk2','0'); }
if (!Session::has('SSD_merk3'))  { Session::put('SSD_merk3','0'); }
if (!Session::has('SSD_merk4'))  { Session::put('SSD_merk4','0'); }
if (!Session::has('SSD_merk5'))  { Session::put('SSD_merk5','0'); }
if (!Session::has('SSD_merk6'))  { Session::put('SSD_merk6','0'); }
if (!Session::has('SSD_merk7'))  { Session::put('SSD_merk7','0'); }
if (!Session::has('SSD_merk8'))  { Session::put('SSD_merk8','0'); }
if (!Session::has('SSD_controller1'))  { Session::put('SSD_controller1','0'); }
if (!Session::has('SSD_controller2'))  { Session::put('SSD_controller2','0'); }
if (!Session::has('SSD_controller3'))  { Session::put('SSD_controller3','0'); }
if (!Session::has('SSD_controller4'))  { Session::put('SSD_controller4','0'); }
if (!Session::has('SSD_controller5'))  { Session::put('SSD_controller5','0'); }
if (!Session::has('SSD_controller6'))  { Session::put('SSD_controller6','0'); }
if (!Session::has('SSD_schrijf_min'))  { Session::put('SSD_schrijf_min','-'); }
if (!Session::has('SSD_schrijf_max'))  { Session::put('SSD_schrijf_max','-'); }
if (!Session::has('SSD_lees_min'))  { Session::put('SSD_lees_min','-'); }
if (!Session::has('SSD_lees_max'))  { Session::put('SSD_lees_max','-'); }
if (!Session::has('brander_merk1'))  { Session::put('brander_merk1','0'); }
if (!Session::has('brander_merk2'))  { Session::put('brander_merk2','0'); }
if (!Session::has('brander_merk3'))  { Session::put('brander_merk3','0'); }
if (!Session::has('brander_merk4'))  { Session::put('brander_merk4','0'); }
if (!Session::has('brander_merk5'))  { Session::put('brander_merk5','0'); }
if (!Session::has('brander_merk6'))  { Session::put('brander_merk6','0'); }
if (!Session::has('brander_type'))  { Session::put('brander_type','-'); }
if (!Session::has('brander_price_min'))  { Session::put('brander_price_min','-'); }
if (!Session::has('brander_price_max'))  { Session::put('brander_price_max','-'); }
if (!Session::has('brander_speelt1'))  { Session::put('brander_speelt1','0'); }
if (!Session::has('brander_speelt2'))  { Session::put('brander_speelt2','0'); }
if (!Session::has('brander_speelt3'))  { Session::put('brander_speelt3','0'); }
if (!Session::has('brander_speelt4'))  { Session::put('brander_speelt4','0'); }
if (!Session::has('brander_besturing'))  { Session::put('brander_besturing','-'); }
if (!Session::has('brander_ladetype'))  { Session::put('brander_ladetype','-'); }

echo "<pre>";
echo "<h4>Sessie variabelen</h4>";
echo "Voeding: ";
echo Session::get('cpu_p4');echo Session::get('cpu_p8');echo Session::get('cpu_p4+p4');echo Session::get('powersupply_modular');echo Session::get('powersupply_certificate');echo Session::get('powersupply_brand1');echo Session::get('powersupply_brand2');echo Session::get('powersupply_brand3');echo Session::get('powersupply_brand4');echo Session::get('powersupply_brand5');
echo Session::get('pci_express_6pin');echo Session::get('pci_express_6pin2pin');echo Session::get('powersupply_price_min');echo Session::get('powersupply_price_max');echo Session::get('powersupply_power_min');echo Session::get('powersupply_power_max');echo Session::get('s-ata_min');echo Session::get('s-ata_max') . "<br>";
echo "Processor koeler: ";
echo Session::get('processorcooler_brand1');echo Session::get('processorcooler_brand2');echo Session::get('processorcooler_brand3');echo Session::get('processorcooler_brand4');echo Session::get('processorcooler_brand5');echo Session::get('processorcooler_brand6');echo Session::get('processorcooler_brand7');echo Session::get('processorcooler_brand8');
echo Session::get('processorcooler_price_min');echo Session::get('processorcooler_price_max');echo Session::get('processorcooler_method');echo Session::get('processorcooler_diameter');echo Session::get('processorcooler_rotation_min');echo Session::get('processorcooler_rotation_max') . "<br>";
echo "Harde schijf: ";
echo Session::get('hdd_brand1');echo Session::get('hdd_brand2');echo Session::get('hdd_brand3');echo Session::get('hdd_brand4');echo Session::get('hdd_format');echo Session::get('hdd_storagecapacity1');echo Session::get('hdd_storagecapacity2');echo Session::get('hdd_storagecapacity3');echo Session::get('hdd_storagecapacity4');
echo Session::get('hdd_storagecapacity5');echo Session::get('hdd_storagecapacity6');echo Session::get('hdd_storagecapacity7');echo Session::get('hdd_storagecapacity8');echo Session::get('hdd_storagecapacity9');echo Session::get('hdd_storagecapacity10');echo Session::get('hdd_connection');echo Session::get('hdd_buffer');
echo Session::get('hdd_speed');echo Session::get('hdd_price_min');echo Session::get('hdd_price_max') . "<br>";
echo "Geluidskaart: ";
echo Session::get('soundcard_brand1');echo Session::get('soundcard_brand2');echo Session::get('soundcard_sample');echo Session::get('soundcard_aiso');echo Session::get('soundcard_port');echo Session::get('soundcard_processor1');echo Session::get('soundcard_processor2');echo Session::get('soundcard_processor3');echo Session::get('soundcard_processor4');
echo Session::get('soundcard_processor5');echo Session::get('soundcard_processor6');echo Session::get('soundcard_channel');echo Session::get('soundcard_headphone');echo Session::get('soundcard_jack');echo Session::get('soundcard_price_min');echo Session::get('soundcard_price_max') . "<br>";
echo "PCI express: ";
echo Session::get('pci_usb');echo Session::get('pci_firewire');echo Session::get('pci_sata');echo Session::get('pci_esata');echo Session::get('pci_price_min');echo Session::get('pci_price_max') . "<br>";
echo "Videokaart: ";
echo Session::get('GPU_producer1');echo Session::get('GPU_producer2');echo Session::get('GPU_type_AMD1');echo Session::get('GPU_type_AMD2');echo Session::get('GPU_type_AMD3');echo Session::get('GPU_type_AMD4');echo Session::get('GPU_type_AMD5');echo Session::get('GPU_type_AMD6');echo Session::get('GPU_type_AMD7');echo Session::get('GPU_type_AMD8');
echo Session::get('GPU_type_AMD9');echo Session::get('GPU_type_AMD10');echo Session::get('GPU_type_NVIDIA1');echo Session::get('GPU_type_NVIDIA2');echo Session::get('GPU_type_NVIDIA3');echo Session::get('GPU_type_NVIDIA4');echo Session::get('GPU_type_NVIDIA5');echo Session::get('GPU_type_NVIDIA6');echo Session::get('GPU_type_NVIDIA7');echo Session::get('GPU_type_NVIDIA8');
echo Session::get('GPU_type_NVIDIA9');echo Session::get('GPU_type_NVIDIA10');echo Session::get('GPU_brand1');echo Session::get('GPU_brand2');echo Session::get('GPU_brand3');echo Session::get('GPU_brand4');echo Session::get('GPU_brand5');echo Session::get('GPU_brand6');echo Session::get('GPU_geheugen_type');echo Session::get('GPU_HDMI');
echo Session::get('GPU_VGA');echo Session::get('GPU_bandwidth_memory');echo Session::get('GPU_DVII');echo Session::get('GPU_DVID');echo Session::get('GPU_cost');echo Session::get('GPU_memory') . "<br>";
echo "Processor: ";
echo Session::get('processor_brand1');echo Session::get('processor_brand2');echo Session::get('processor_core1');echo Session::get('processor_core2');echo Session::get('processor_core3');echo Session::get('processor_core4');echo Session::get('processor_cost_min');echo Session::get('processor_cost_max');echo Session::get('processor_serie1');echo Session::get('processor_serie2');
echo Session::get('processor_serie3');echo Session::get('processor_serie4');echo Session::get('processor_serie5');echo Session::get('processor_serie6');echo Session::get('processor_serie7');echo Session::get('processor_serie8');echo Session::get('processor_serie9');echo Session::get('processor_speed_min');echo Session::get('processor_speed_max') . "<br>";
echo "Intern geheugen: ";
echo Session::get('RAM_merk1');echo Session::get('RAM_merk2');echo Session::get('RAM_merk3');echo Session::get('RAM_merk4');echo Session::get('RAM_merk5');echo Session::get('RAM_merk6');echo Session::get('RAM_geheugen1');echo Session::get('RAM_geheugen2');echo Session::get('RAM_geheugen3');echo Session::get('RAM_geheugen4');
echo Session::get('RAM_geheugen5');echo Session::get('RAM_geheugen6');echo Session::get('RAM_klok');echo Session::get('RAM_game');echo Session::get('RAM_geschikt1');echo Session::get('RAM_geschikt2');echo Session::get('RAM_geschikt3');echo Session::get('RAM_geschikt4');echo Session::get('RAM_type');echo Session::get('RAM_kanalen');
echo Session::get('RAM_price_min');echo Session::get('RAM_price_max') . "<br>";
echo "Moederbord: ";
echo Session::get('moederbord_merk1');echo Session::get('moederbord_merk2');echo Session::get('moederbord_merk3');echo Session::get('moederbord_format');echo Session::get('moederbord_wifi');echo Session::get('moederbord_geheugen');echo Session::get('moederbord_HDMI');echo Session::get('moederbord_VGA');echo Session::get('moederbord_displayport');echo Session::get('moederbord_price_min');
echo Session::get('moederbord_price_max');echo Session::get('moederbord_usb');echo Session::get('moederbord_ethernet');echo Session::get('moederbord_DVI');echo Session::get('moederbord_raid1');echo Session::get('moederbord_raid2');echo Session::get('moederbord_raid3');echo Session::get('moederbord_raid4');echo Session::get('moederbord_raid5');echo Session::get('moederbord_raid6');
echo Session::get('moederbord_audiokanalen');echo Session::get('moederbord_type');echo Session::get('moederbord_msata');echo Session::get('moederbord_SATA300');echo Session::get('moederbord_SATA600') . "<br>";
echo "Behuizing: ";
echo Session::get('behuizing_merk1');echo Session::get('behuizing_merk2');echo Session::get('behuizing_merk3');echo Session::get('behuizing_merk4');echo Session::get('behuizing_merk5');echo Session::get('behuizing_merk6');echo Session::get('behuizing_computer');echo Session::get('behuizing_fan');echo Session::get('behuizing_stof');echo Session::get('behuizing_water');
echo Session::get('behuizing_led');echo Session::get('behuizing_ruis');echo Session::get('behuizing_geluid');echo Session::get('behuizing_paneel');echo Session::get('behuizing_price_min');echo Session::get('behuizing_price_max');echo Session::get('behuizing_uitbreiding_min');echo Session::get('behuizing_uitbreiding_max');echo Session::get('behuizing_kleur');
echo Session::get('behuizing_materiaal');echo Session::get('behuizing_usb2_1');echo Session::get('behuizing_usb2_2');echo Session::get('behuizing_usb2_3');echo Session::get('behuizing_usb3_1');echo Session::get('behuizing_usb3_2');echo Session::get('behuizing_usb3_3');echo Session::get('behuizing_firewire');echo Session::get('behuizing_esata');echo Session::get('behuizing_2_5bay_min');
echo Session::get('behuizing_2_5bay_max');echo Session::get('behuizing_3_5bay_min');echo Session::get('behuizing_3_5bay_max');echo Session::get('behuizing_5_25bay_min');echo Session::get('behuizing_5_25bay_max') . "<br>";
echo "SSD: ";
echo Session::get('SDD_opslag1');echo Session::get('SDD_opslag2');echo Session::get('SDD_opslag3');echo Session::get('SDD_opslag4');echo Session::get('SDD_opslag5');echo Session::get('SDD_opslag6');echo Session::get('SDD_opslag7');echo Session::get('SDD_opslag8');echo Session::get('SDD_opslag9');echo Session::get('SDD_opslag10');
echo Session::get('SDD_opslag11');echo Session::get('SDD_opslag12');echo Session::get('SDD_opslag13');echo Session::get('SDD_opslag14');echo Session::get('SDD_opslag15');echo Session::get('SDD_formaat');echo Session::get('SSD_soort');echo Session::get('SSD_price_min');echo Session::get('SSD_price_max');echo Session::get('SSD_merk1');
echo Session::get('SSD_merk2');echo Session::get('SSD_merk3');echo Session::get('SSD_merk4');echo Session::get('SSD_merk5');echo Session::get('SSD_merk6');echo Session::get('SSD_merk7');echo Session::get('SSD_merk8');echo Session::get('SSD_controller1');echo Session::get('SSD_controller2');echo Session::get('SSD_controller3');
echo Session::get('SSD_controller4');echo Session::get('SSD_controller5');echo Session::get('SSD_controller6');echo Session::get('SSD_schrijf_min');echo Session::get('SSD_schrijf_max');echo Session::get('SSD_lees_min');echo Session::get('SSD_lees_max') . "<br>";
echo "Blu-ray & DVD: ";
echo Session::get('brander_merk1');echo Session::get('brander_merk2');echo Session::get('brander_merk3');echo Session::get('brander_merk4');echo Session::get('brander_merk5');echo Session::get('brander_merk6');echo Session::get('brander_type');echo Session::get('brander_price_min');echo Session::get('brander_price_max');echo Session::get('brander_speelt1');
echo Session::get('brander_speelt2');echo Session::get('brander_speelt3');echo Session::get('brander_speelt4');echo Session::get('brander_besturing');echo Session::get('brander_ladetype');
echo "</pre>";
?>