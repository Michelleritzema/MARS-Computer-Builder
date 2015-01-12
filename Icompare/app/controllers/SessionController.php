<?php
/**
 * Created by PhpStorm.
 * User: Michelle
 * Date: 11/01/2015
 */

class SessionController extends BaseController
{

    public function determineSection()
    {
        if (Session::has('menuitem')) {
            $menuitem = Session::get('menuitem');
            //echo $menuitem . "<br>";
            switch ($menuitem) {
                case "powersupply":
                    $this->savePowerSupply();
                    break;
                case "processorcooler":
                    $this->saveProcessorCooler();
                    break;
                case "internalharddrive":
                    $this->saveHardDiskDrive();
                    break;
                case "soundcard":
                    $this->saveSoundcard();
                    break;
                case "PCI":
                    $this->savePCI();
                    break;
                case "videocard":
                    $this->saveVideocard();
                    break;
                case "processor":
                    $this->saveProcessor();
                    break;
                case "internalmemory":
                    $this->saveInternalMemory();
                    break;
                case "motherboard":
                    $this->saveMotherboard();
                    break;
                case "casing":
                    $this->saveCasing();
                    break;
                case "ssd":
                    $this->saveSSD();
                    break;
                case "bluraydvd":
                    $this->saveBlurayDVD();
                    break;
                default :
                    break;
            }
            return View::make('index');
        }
    }

    public function savePowerSupply()
    {
        $temp = Input::get('voeding_cpup4');
        $voeding_cpup4 = isset($temp) ? Input::get('voeding_cpup4') : '0';
        $temp = Input::get('voeding_cpup8');
        $voeding_cpup8 = isset($temp) ? Input::get('voeding_cpup8') : '0';
        $temp = Input::get('voeding_cpup4p4');
        if (isset($temp)) {
            $voeding_cpup4p4 = Input::get('voeding_cpup4p4');
        } else {
            $voeding_cpup4p4 = '-';
        }
        $temp = Input::get('voeding_modulair');
        if (isset($temp)) {
            $voeding_modulair = Input::get('voeding_modulair');
        } else {
            $voeding_modulair = '-';
        }
        $temp = Input::get('voeding_certificering');
        if (isset($temp)) {
            $voeding_certificering = Input::get('voeding_certificering');
        } else {
            $voeding_certificering = '-';
        }
        $temp = Input::get('voeding_merk1');
        $voeding_merk1 = isset($temp) ? Input::get('voeding_merk1') : '0';
        $temp = Input::get('voeding_merk2');
        $voeding_merk2 = isset($temp) ? Input::get('voeding_merk2') : '0';
        $temp = Input::get('voeding_merk3');
        $voeding_merk3 = isset($temp) ? Input::get('voeding_merk3') : '0';
        $temp = Input::get('voeding_merk4');
        $voeding_merk4 = isset($temp) ? Input::get('voeding_merk4') : '0';
        $temp = Input::get('voeding_merk5');
        $voeding_merk5 = isset($temp) ? Input::get('voeding_merk5') : '0';
        $temp = Input::get('voeding_pci6');
        if (isset($temp)) {
            $voeding_pci6 = Input::get('voeding_pci6');
        } else {
            $voeding_pci6 = '-';
        }
        $temp = Input::get('voeding_pci6+2');
        if (isset($temp)) {
            $voeding_pci6_2 = Input::get('voeding_pci6+2');
        } else {
            $voeding_pci6_2 = '-';
        }

        Session::put('cpu_p4', $voeding_cpup4);
        Session::put('cpu_p8', $voeding_cpup8);
        Session::put('cpu_p4+p4', $voeding_cpup4p4);
        Session::put('powersupply_modular', $voeding_modulair);
        Session::put('powersupply_certificate', $voeding_certificering);
        Session::put('powersupply_brand1', $voeding_merk1);
        Session::put('powersupply_brand2', $voeding_merk2);
        Session::put('powersupply_brand3', $voeding_merk3);
        Session::put('powersupply_brand4', $voeding_merk4);
        Session::put('powersupply_brand5', $voeding_merk5);
        Session::put('pci_express_6pin', $voeding_pci6);
        Session::put('pci_express_6pin2pin', $voeding_pci6_2);

        //echo Session::get('powersupply_price_min');
        //echo Session::get('powersupply_price_max');
        //echo Session::get('powersupply_power_min');
        //echo Session::get('powersupply_power_max');
        //echo Session::get('s-ata_min');
        //echo Session::get('s-ata_max');

        Session::put('menuitem', 'processorcooler');
    }

    public function saveProcessorCooler()
    {
        $temp = Input::get('koeler_merk1');
        $processorcooler_brand1 = isset($temp) ? Input::get('koeler_merk1') : '0';
        $temp = Input::get('koeler_merk2');
        $processorcooler_brand2 = isset($temp) ? Input::get('koeler_merk2') : '0';
        $temp = Input::get('koeler_merk3');
        $processorcooler_brand3 = isset($temp) ? Input::get('koeler_merk3') : '0';
        $temp = Input::get('koeler_merk4');
        $processorcooler_brand4 = isset($temp) ? Input::get('koeler_merk4') : '0';
        $temp = Input::get('koeler_merk5');
        $processorcooler_brand5 = isset($temp) ? Input::get('koeler_merk5') : '0';
        $temp = Input::get('koeler_merk6');
        $processorcooler_brand6 = isset($temp) ? Input::get('koeler_merk6') : '0';
        $temp = Input::get('koeler_merk7');
        $processorcooler_brand7 = isset($temp) ? Input::get('koeler_merk7') : '0';

        $temp = Input::get('koeler_type');
        if (isset($temp)) {
            $processorcooler_method = Input::get('koeler_type');
        } else {
            $processorcooler_method = '-';
        }

        Session::put('processorcooler_brand1', $processorcooler_brand1);
        Session::put('processorcooler_brand2', $processorcooler_brand2);
        Session::put('processorcooler_brand3', $processorcooler_brand3);
        Session::put('processorcooler_brand4', $processorcooler_brand4);
        Session::put('processorcooler_brand5', $processorcooler_brand5);
        Session::put('processorcooler_brand6', $processorcooler_brand6);
        Session::put('processorcooler_brand7', $processorcooler_brand7);
        //Session::put('processorcooler_price_min', $processorcooler_price_min);
        //Session::put('processorcooler_price_max', $processorcooler_price_max);
        Session::put('processorcooler_method', $processorcooler_method);
        //Session::put('processorcooler_diameter', $processorcooler_diameter);
        //Session::put('processorcooler_rotation_min', $processorcooler_rotation_min);
        //Session::put('processorcooler_rotation_max', $processorcooler_rotation_max);

        Session::put('menuitem', 'internalharddrive');
    }

    public function saveHardDiskDrive()
    {
        $temp = Input::get('HDD_merk1');
        $hdd_brand1 = isset($temp) ? Input::get('HDD_merk1') : '0';
        $temp = Input::get('HDD_merk2');
        $hdd_brand2 = isset($temp) ? Input::get('HDD_merk2') : '0';
        $temp = Input::get('HDD_merk3');
        $hdd_brand3 = isset($temp) ? Input::get('HDD_merk3') : '0';
        $temp = Input::get('HDD_merk4');
        $hdd_brand4 = isset($temp) ? Input::get('HDD_merk4') : '0';
        $temp = Input::get('HDD_formaat');
        if (isset($temp)) {
            $hdd_format = Input::get('HDD_formaat');
        } else {
            $hdd_format = '-';
        }
        $temp = Input::get('HDD_opslag1');
        $hdd_storagecapacity1 = isset($temp) ? Input::get('HDD_opslag1') : '0';
        $temp = Input::get('HDD_opslag2');
        $hdd_storagecapacity2 = isset($temp) ? Input::get('HDD_opslag2') : '0';
        $temp = Input::get('HDD_opslag3');
        $hdd_storagecapacity3 = isset($temp) ? Input::get('HDD_opslag3') : '0';
        $temp = Input::get('HDD_opslag4');
        $hdd_storagecapacity4 = isset($temp) ? Input::get('HDD_opslag4') : '0';
        $temp = Input::get('HDD_opslag5');
        $hdd_storagecapacity5 = isset($temp) ? Input::get('HDD_opslag5') : '0';
        $temp = Input::get('HDD_opslag6');
        $hdd_storagecapacity6 = isset($temp) ? Input::get('HDD_opslag6') : '0';
        $temp = Input::get('HDD_opslag7');
        $hdd_storagecapacity7 = isset($temp) ? Input::get('HDD_opslag7') : '0';
        $temp = Input::get('HDD_opslag8');
        $hdd_storagecapacity8 = isset($temp) ? Input::get('HDD_opslag8') : '0';
        $temp = Input::get('HDD_aansluiting');
        if (isset($temp)) {
            $hdd_connection = Input::get('HDD_aansluiting');
        } else {
            $hdd_connection = '-';
        }
        $temp = Input::get('HDD_cache');
        if (isset($temp)) {
            $hdd_buffer = Input::get('HDD_cache');
        } else {
            $hdd_buffer = '-';
        }
        $temp = Input::get('HDD_snelheid');
        if (isset($temp)) {
            $hdd_speed = Input::get('HDD_snelheid');
        } else {
            $hdd_speed = '-';
        }

        Session::put('hdd_brand1', $hdd_brand1);
        Session::put('hdd_brand2', $hdd_brand2);
        Session::put('hdd_brand3', $hdd_brand3);
        Session::put('hdd_brand4', $hdd_brand4);
        Session::put('hdd_format', $hdd_format);
        Session::put('hdd_storagecapacity1', $hdd_storagecapacity1);
        Session::put('hdd_storagecapacity2', $hdd_storagecapacity2);
        Session::put('hdd_storagecapacity3', $hdd_storagecapacity3);
        Session::put('hdd_storagecapacity4', $hdd_storagecapacity4);
        Session::put('hdd_storagecapacity5', $hdd_storagecapacity5);
        Session::put('hdd_storagecapacity6', $hdd_storagecapacity6);
        Session::put('hdd_storagecapacity7', $hdd_storagecapacity7);
        Session::put('hdd_storagecapacity8', $hdd_storagecapacity8);
        Session::put('hdd_connection', $hdd_connection);
        Session::put('hdd_buffer', $hdd_buffer);
        Session::put('hdd_speed', $hdd_speed);

        Session::put('menuitem', 'soundcard');
    }

    public function saveSoundcard()
    {
        $temp = Input::get('geluid_merk1');
        $soundcard_brand1 = isset($temp) ? Input::get('geluid_merk1') : '0';
        $temp = Input::get('geluid_merk2');
        $soundcard_brand2 = isset($temp) ? Input::get('geluid_merk2') : '0';
        $temp = Input::get('geluid_sample');
        if (isset($temp)) {
            $soundcard_sample = Input::get('geluid_sample');
        } else {
            $soundcard_sample = '-';
        }
        $temp = Input::get('geluid_aiso');
        if (isset($temp)) {
            $soundcard_aiso = Input::get('geluid_aiso');
        } else {
            $soundcard_aiso = '-';
        }
        $temp = Input::get('geluid_optisch');
        if (isset($temp)) {
            $soundcard_port = Input::get('geluid_optisch');
        } else {
            $soundcard_port = '-';
        }
        $temp = Input::get('geluid_processor1');
        $soundcard_processor1 = isset($temp) ? Input::get('geluid_processor1') : '0';
        $temp = Input::get('geluid_processor2');
        $soundcard_processor2 = isset($temp) ? Input::get('geluid_processor2') : '0';
        $temp = Input::get('geluid_processor3');
        $soundcard_processor3 = isset($temp) ? Input::get('geluid_processor3') : '0';
        $temp = Input::get('geluid_processor4');
        $soundcard_processor4 = isset($temp) ? Input::get('geluid_processor4') : '0';
        $temp = Input::get('geluid_processor5');
        $soundcard_processor5 = isset($temp) ? Input::get('geluid_processor5') : '0';
        $temp = Input::get('geluid_processor6');
        $soundcard_processor6 = isset($temp) ? Input::get('geluid_processor6') : '0';
        $temp = Input::get('geluid_kanalen');
        if (isset($temp)) {
            $soundcard_channel = Input::get('geluid_kanalen');
        } else {
            $soundcard_channel = '-';
        }
        $temp = Input::get('geluid_hoofd');
        if (isset($temp)) {
            $soundcard_headphone = Input::get('geluid_hoofd');
        } else {
            $soundcard_headphone = '-';
        }
        $temp = Input::get('geluid_jack');
        if (isset($temp)) {
            $soundcard_jack = Input::get('geluid_jack');
        } else {
            $soundcard_jack = '-';
        }

        Session::put('soundcard_brand1', $soundcard_brand1);
        Session::put('soundcard_brand2', $soundcard_brand2);
        Session::put('soundcard_sample', $soundcard_sample);
        Session::put('soundcard_aiso', $soundcard_aiso);
        Session::put('soundcard_port', $soundcard_port);
        Session::put('soundcard_processor1', $soundcard_processor1);
        Session::put('soundcard_processor2', $soundcard_processor2);
        Session::put('soundcard_processor3', $soundcard_processor3);
        Session::put('soundcard_processor4', $soundcard_processor4);
        Session::put('soundcard_processor5', $soundcard_processor5);
        Session::put('soundcard_processor6', $soundcard_processor6);
        Session::put('soundcard_channel', $soundcard_channel);
        Session::put('soundcard_headphone', $soundcard_headphone);
        Session::put('soundcard_jack', $soundcard_jack);
        //Session::put('soundcard_price_min', $tmp);
        //Session::put('soundcard_price_max', $tmp);

        Session::put('menuitem', 'PCI');
    }

    public function savePCI()
    {
        $temp = Input::get('pci_usb');
        if (isset($temp)) {
            $pci_usb = Input::get('pci_usb');
        } else {
            $pci_usb = '-';
        }
        $temp = Input::get('pci_firewire');
        if (isset($temp)) {
            $pci_firewire = Input::get('pci_firewire');
        } else {
            $pci_firewire = '-';
        }
        $temp = Input::get('pci_sata');
        if (isset($temp)) {
            $pci_sata = Input::get('pci_sata');
        } else {
            $pci_sata = '-';
        }
        $temp = Input::get('pci_esata');
        if (isset($temp)) {
            $pci_esata = Input::get('pci_esata');
        } else {
            $pci_esata = '-';
        }

        Session::put('pci_usb', $pci_usb);
        Session::put('pci_firewire', $pci_firewire);
        Session::put('pci_sata', $pci_sata);
        Session::put('pci_esata', $pci_esata);
        //Session::put('pci_price_min', $pci_price_min);
        //Session::put('pci_price_max', $pci_price_max);

        Session::put('menuitem', 'videocard');
    }

    public function saveVideocard()
    {
        $temp = Input::get('GPU_producer1');
        $GPU_producer1 = isset($temp) ? Input::get('GPU_producer1') : '0';
        $temp = Input::get('GPU_producer2');
        $GPU_producer2 = isset($temp) ? Input::get('GPU_producer2') : '0';
        $temp = Input::get('GPU_type_AMD1');
        $GPU_type_AMD1 = isset($temp) ? Input::get('GPU_type_AMD1') : '0';
        $temp = Input::get('GPU_type_AMD2');
        $GPU_type_AMD2 = isset($temp) ? Input::get('GPU_type_AMD2') : '0';
        $temp = Input::get('GPU_type_AMD3');
        $GPU_type_AMD3 = isset($temp) ? Input::get('GPU_type_AMD3') : '0';
        $temp = Input::get('GPU_type_AMD4');
        $GPU_type_AMD4 = isset($temp) ? Input::get('GPU_type_AMD4') : '0';
        $temp = Input::get('GPU_type_AMD5');
        $GPU_type_AMD5 = isset($temp) ? Input::get('GPU_type_AMD5') : '0';
        $temp = Input::get('GPU_type_AMD6');
        $GPU_type_AMD6 = isset($temp) ? Input::get('GPU_type_AMD6') : '0';
        $temp = Input::get('GPU_type_AMD7');
        $GPU_type_AMD7 = isset($temp) ? Input::get('GPU_type_AMD7') : '0';
        $temp = Input::get('GPU_type_AMD8');
        $GPU_type_AMD8 = isset($temp) ? Input::get('GPU_type_AMD8') : '0';
        $temp = Input::get('GPU_type_AMD9');
        $GPU_type_AMD9 = isset($temp) ? Input::get('GPU_type_AMD9') : '0';
        $temp = Input::get('GPU_type_AMD10');
        $GPU_type_AMD10 = isset($temp) ? Input::get('GPU_type_AMD10') : '0';
        $temp = Input::get('GPU_type_NVIDIA1');
        $GPU_type_NVIDIA1 = isset($temp) ? Input::get('GPU_type_NVIDIA1') : '0';
        $temp = Input::get('GPU_type_NVIDIA2');
        $GPU_type_NVIDIA2 = isset($temp) ? Input::get('GPU_type_NVIDIA2') : '0';
        $temp = Input::get('GPU_type_NVIDIA3');
        $GPU_type_NVIDIA3 = isset($temp) ? Input::get('GPU_type_NVIDIA3') : '0';
        $temp = Input::get('GPU_type_NVIDIA4');
        $GPU_type_NVIDIA4 = isset($temp) ? Input::get('GPU_type_NVIDIA4') : '0';
        $temp = Input::get('GPU_type_NVIDIA15');
        $GPU_type_NVIDIA5 = isset($temp) ? Input::get('GPU_type_NVIDIA5') : '0';
        $temp = Input::get('GPU_type_NVIDIA6');
        $GPU_type_NVIDIA6 = isset($temp) ? Input::get('GPU_type_NVIDIA6') : '0';
        $temp = Input::get('GPU_type_NVIDIA7');
        $GPU_type_NVIDIA7 = isset($temp) ? Input::get('GPU_type_NVIDIA7') : '0';
        $temp = Input::get('GPU_type_NVIDIA8');
        $GPU_type_NVIDIA8 = isset($temp) ? Input::get('GPU_type_NVIDIA8') : '0';
        $temp = Input::get('GPU_type_NVIDIA9');
        $GPU_type_NVIDIA9 = isset($temp) ? Input::get('GPU_type_NVIDIA9') : '0';
        $temp = Input::get('GPU_type_NVIDIA10');
        $GPU_type_NVIDIA10 = isset($temp) ? Input::get('GPU_type_NVIDIA10') : '0';
        $temp = Input::get('GPU_brand1');
        $GPU_brand1 = isset($temp) ? Input::get('GPU_brand1') : '0';
        $temp = Input::get('GPU_brand2');
        $GPU_brand2 = isset($temp) ? Input::get('GPU_brand2') : '0';
        $temp = Input::get('GPU_brand3');
        $GPU_brand3 = isset($temp) ? Input::get('GPU_brand3') : '0';
        $temp = Input::get('GPU_brand4');
        $GPU_brand4 = isset($temp) ? Input::get('GPU_brand4') : '0';
        $temp = Input::get('GPU_brand5');
        $GPU_brand5 = isset($temp) ? Input::get('GPU_brand5') : '0';
        $temp = Input::get('GPU_brand6');
        $GPU_brand6 = isset($temp) ? Input::get('GPU_brand6') : '0';
        $temp = Input::get('GPU_geheugen_type');
        if (isset($temp)) {
            $GPU_geheugen_type = Input::get('GPU_geheugen_type');
        } else {
            $GPU_geheugen_type = '-';
        }
        $temp = Input::get('GPU_HDMI');
        if (isset($temp)) {
            $GPU_HDMI = Input::get('GPU_HDMI');
        } else {
            $GPU_HDMI = '-';
        }
        $temp = Input::get('GPU_VGA');
        if (isset($temp)) {
            $GPU_VGA = Input::get('GPU_VGA');
        } else {
            $GPU_VGA = '-';
        }
        $temp = Input::get('GPU_bandwidth_memory');
        if (isset($temp)) {
            $GPU_bandwidth_memory = Input::get('GPU_bandwidth_memory');
        } else {
            $GPU_bandwidth_memory = '-';
        }
        $temp = Input::get('GPU_DVII');
        if (isset($temp)) {
            $GPU_DVII = Input::get('GPU_DVII');
        } else {
            $GPU_DVII = '-';
        }
        $temp = Input::get('GPU_DVID');
        if (isset($temp)) {
            $GPU_DVID = Input::get('GPU_DVID');
        } else {
            $GPU_DVID = '-';
        }
        $temp = Input::get('GPU_cost');
        if (isset($temp)) {
            $GPU_cost = Input::get('GPU_cost');
        } else {
            $GPU_cost = '-';
        }
        $temp = Input::get('GPU_memory');
        if (isset($temp)) {
            $GPU_memory = Input::get('GPU_memory');
        } else {
            $GPU_memory = '-';
        }

        Session::put('GPU_producer1', $GPU_producer1);
        Session::put('GPU_producer2', $GPU_producer2);
        Session::put('GPU_type_AMD1', $GPU_type_AMD1);
        Session::put('GPU_type_AMD2', $GPU_type_AMD2);
        Session::put('GPU_type_AMD3', $GPU_type_AMD3);
        Session::put('GPU_type_AMD4', $GPU_type_AMD4);
        Session::put('GPU_type_AMD5', $GPU_type_AMD5);
        Session::put('GPU_type_AMD6', $GPU_type_AMD6);
        Session::put('GPU_type_AMD7', $GPU_type_AMD7);
        Session::put('GPU_type_AMD8', $GPU_type_AMD8);
        Session::put('GPU_type_AMD9', $GPU_type_AMD9);
        Session::put('GPU_type_AMD10', $GPU_type_AMD10);
        Session::put('GPU_type_NVIDIA1', $GPU_type_NVIDIA1);
        Session::put('GPU_type_NVIDIA2', $GPU_type_NVIDIA2);
        Session::put('GPU_type_NVIDIA3', $GPU_type_NVIDIA3);
        Session::put('GPU_type_NVIDIA4', $GPU_type_NVIDIA4);
        Session::put('GPU_type_NVIDIA5', $GPU_type_NVIDIA5);
        Session::put('GPU_type_NVIDIA6', $GPU_type_NVIDIA6);
        Session::put('GPU_type_NVIDIA7', $GPU_type_NVIDIA7);
        Session::put('GPU_type_NVIDIA8', $GPU_type_NVIDIA8);
        Session::put('GPU_type_NVIDIA9', $GPU_type_NVIDIA9);
        Session::put('GPU_type_NVIDIA10', $GPU_type_NVIDIA10);
        Session::put('GPU_brand1', $GPU_brand1);
        Session::put('GPU_brand2', $GPU_brand2);
        Session::put('GPU_brand3', $GPU_brand3);
        Session::put('GPU_brand4', $GPU_brand4);
        Session::put('GPU_brand5', $GPU_brand5);
        Session::put('GPU_brand6', $GPU_brand6);
        Session::put('GPU_geheugen_type', $GPU_geheugen_type);
        Session::put('GPU_HDMI', $GPU_HDMI);
        Session::put('GPU_VGA', $GPU_VGA);
        Session::put('GPU_bandwidth_memory', $GPU_bandwidth_memory);
        Session::put('GPU_DVII', $GPU_DVII);
        Session::put('GPU_DVID', $GPU_DVID);
        Session::put('GPU_cost', $GPU_cost);
        Session::put('GPU_memory', $GPU_memory);

        Session::put('menuitem', 'processor');
    }

    public function saveProcessor()
    {
        $temp = Input::get('processor_brand1');
        $processor_brand1 = isset($temp) ? Input::get('processor_brand1') : '0';
        $temp = Input::get('processor_brand2');
        $processor_brand2 = isset($temp) ? Input::get('processor_brand2') : '0';
        $temp = Input::get('processor_core1');
        $processor_core1 = isset($temp) ? Input::get('processor_core1') : '0';
        $temp = Input::get('processor_core2');
        $processor_core2 = isset($temp) ? Input::get('processor_core2') : '0';
        $temp = Input::get('processor_core3');
        $processor_core3 = isset($temp) ? Input::get('processor_core3') : '0';
        $temp = Input::get('processor_core4');
        $processor_core4 = isset($temp) ? Input::get('processor_core4') : '0';
        $temp = Input::get('processor_serie1');
        $processor_serie1 = isset($temp) ? Input::get('processor_serie1') : '0';
        $temp = Input::get('processor_serie2');
        $processor_serie2 = isset($temp) ? Input::get('processor_serie2') : '0';
        $temp = Input::get('processor_serie3');
        $processor_serie3 = isset($temp) ? Input::get('processor_serie3') : '0';
        $temp = Input::get('processor_serie4');
        $processor_serie4 = isset($temp) ? Input::get('processor_serie4') : '0';
        $temp = Input::get('processor_serie5');
        $processor_serie5 = isset($temp) ? Input::get('processor_serie5') : '0';
        $temp = Input::get('processor_serie6');
        $processor_serie6 = isset($temp) ? Input::get('processor_serie6') : '0';
        $temp = Input::get('processor_serie7');
        $processor_serie7 = isset($temp) ? Input::get('processor_serie7') : '0';
        $temp = Input::get('processor_serie8');
        $processor_serie8 = isset($temp) ? Input::get('processor_serie8') : '0';
        $temp = Input::get('processor_cost');
        if (isset($temp)) {
            $processor_cost = Input::get('processor_cost');
        } else {
            $processor_cost = '-';
        }
        $temp = Input::get('processor_speed');
        if (isset($temp)) {
            $processor_speed = Input::get('processor_speed');
        } else {
            $processor_speed = '-';
        }

        Session::put('processor_brand1', $processor_brand1);
        Session::put('processor_brand2', $processor_brand2);
        Session::put('processor_core1', $processor_core1);
        Session::put('processor_core2', $processor_core2);
        Session::put('processor_core3', $processor_core3);
        Session::put('processor_core4', $processor_core4);
        Session::put('processor_serie1', $processor_serie1);
        Session::put('processor_serie2', $processor_serie2);
        Session::put('processor_serie3', $processor_serie3);
        Session::put('processor_serie4', $processor_serie4);
        Session::put('processor_serie5', $processor_serie5);
        Session::put('processor_serie6', $processor_serie6);
        Session::put('processor_serie7', $processor_serie7);
        Session::put('processor_serie8', $processor_serie8);
        Session::put('processor_cost', $processor_cost);
        Session::put('processor_speed', $processor_speed);

        Session::put('menuitem', 'internalmemory');
    }

    public function saveInternalMemory()
    {
        $temp = Input::get('RAM_merk1');
        $RAM_merk1 = isset($temp) ? Input::get('RAM_merk1') : '0';
        $temp = Input::get('RAM_merk2');
        $RAM_merk2 = isset($temp) ? Input::get('RAM_merk2') : '0';
        $temp = Input::get('RAM_merk3');
        $RAM_merk3 = isset($temp) ? Input::get('RAM_merk3') : '0';
        $temp = Input::get('RAM_merk4');
        $RAM_merk4 = isset($temp) ? Input::get('RAM_merk4') : '0';
        $temp = Input::get('RAM_merk5');
        $RAM_merk5 = isset($temp) ? Input::get('RAM_merk5') : '0';
        $temp = Input::get('RAM_merk6');
        $RAM_merk6 = isset($temp) ? Input::get('RAM_merk6') : '0';
        $temp = Input::get('RAM_geheugen1');
        $RAM_geheugen1 = isset($temp) ? Input::get('RAM_geheugen1') : '0';
        $temp = Input::get('RAM_geheugen1');
        $RAM_geheugen2 = isset($temp) ? Input::get('RAM_geheugen2') : '0';
        $temp = Input::get('RAM_geheugen1');
        $RAM_geheugen3 = isset($temp) ? Input::get('RAM_geheugen3') : '0';
        $temp = Input::get('RAM_geheugen1');
        $RAM_geheugen4 = isset($temp) ? Input::get('RAM_geheugen4') : '0';
        $temp = Input::get('RAM_geheugen1');
        $RAM_geheugen5 = isset($temp) ? Input::get('RAM_geheugen5') : '0';
        $temp = Input::get('RAM_geheugen1');
        $RAM_geheugen6 = isset($temp) ? Input::get('RAM_geheugen6') : '0';
        $temp = Input::get('RAM_klok');
        if (isset($temp)) {
            $RAM_klok = Input::get('RAM_klok');
        } else {
            $RAM_klok = '-';
        }
        $temp = Input::get('RAM_type');
        if (isset($temp)) {
            $RAM_type = Input::get('RAM_type');
        } else {
            $RAM_type = '-';
        }
        $temp = Input::get('RAM_kanalen');
        if (isset($temp)) {
            $RAM_kanalen = Input::get('RAM_kanalen');
        } else {
            $RAM_kanalen = '-';
        }

        Session::put('RAM_merk1', $RAM_merk1);
        Session::put('RAM_merk2', $RAM_merk2);
        Session::put('RAM_merk3', $RAM_merk3);
        Session::put('RAM_merk4', $RAM_merk4);
        Session::put('RAM_merk5', $RAM_merk5);
        Session::put('RAM_merk6', $RAM_merk6);
        Session::put('RAM_geheugen1', $RAM_geheugen1);
        Session::put('RAM_geheugen2', $RAM_geheugen2);
        Session::put('RAM_geheugen3', $RAM_geheugen3);
        Session::put('RAM_geheugen4', $RAM_geheugen4);
        Session::put('RAM_geheugen5', $RAM_geheugen5);
        Session::put('RAM_geheugen6', $RAM_geheugen6);
        Session::put('RAM_klok', $RAM_klok);
        Session::put('RAM_type', $RAM_type);

        Session::put('menuitem', 'motherboard');
    }
}
