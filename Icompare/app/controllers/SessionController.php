<?php
/**
 * Created by PhpStorm.
 * User: Michelle
 * Date: 11/01/2015
 */

class SessionController extends BaseController {

    public function determineSection() {
        if(Session::has('menuitem')) {
            $menuitem = Session::get('menuitem');
            //echo $menuitem . "<br>";
            switch ($menuitem) {
                case "powersupply":
                    $this->savePowerSupply(); break;
                case "processorcooler":
                    $this->saveProcessorCooler(); break;
                case "internalharddrive":
                    $this->saveHardDiskDrive(); break;
                case "soundcard":
                    $this->saveSoundcard(); break;
                case "PCI":
                    $this->savePCI(); break;
                case "videocard":
                    $this->saveVideocard(); break;
                case "processor":
                    $this->saveProcessor(); break;
                case "internalmemory":
                    $this->saveInternalMemory(); break;
                case "motherboard":
                    $this->saveMotherboard(); break;
                case "casing":
                    $this->saveCasing(); break;
                case "ssd":
                    $this->saveSSD(); break;
                case "bluraydvd":
                    $this->saveBlurayDVD(); break;
                default :
                    break;
            }
        return View::make('index');
        }
    }

    public function savePowerSupply() {
        $temp = Input::get('voeding_cpup4');
        $voeding_cpup4 = isset($temp) ? Input::get('voeding_cpup4') : '0';
        $temp = Input::get('voeding_cpup8');
        $voeding_cpup8 = isset($temp) ? Input::get('voeding_cpup8') : '0';
        $temp = Input::get('voeding_cpup4p4');
        if(isset($temp)) { $voeding_cpup4p4 = Input::get('voeding_cpup4p4'); }
        else { $voeding_cpup4p4 = '-'; }
        $temp = Input::get('voeding_modulair');
        if(isset($temp)) { $voeding_modulair = Input::get('voeding_modulair'); }
        else { $voeding_modulair = '-'; }
        $temp = Input::get('voeding_certificering');
        if(isset($temp)) { $voeding_certificering = Input::get('voeding_certificering'); }
        else { $voeding_certificering = '-'; }
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
        if(isset($temp)) { $voeding_pci6 = Input::get('voeding_pci6'); }
        else { $voeding_pci6 = '-'; }
        $temp = Input::get('voeding_pci6+2');
        if(isset($temp)) { $voeding_pci6_2 = Input::get('voeding_pci6+2'); }
        else { $voeding_pci6_2 = '-'; }

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

    public function saveProcessorCooler() {
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
        if(isset($temp)) { $processorcooler_method = Input::get('koeler_type'); }
        else { $processorcooler_method = '-'; }

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

    public function saveHardDiskDrive() {
        $temp = Input::get('HDD_merk1');
        $hdd_brand1 = isset($temp) ? Input::get('HDD_merk1') : '0';
        $temp = Input::get('HDD_merk2');
        $hdd_brand2 = isset($temp) ? Input::get('HDD_merk2') : '0';
        $temp = Input::get('HDD_merk3');
        $hdd_brand3 = isset($temp) ? Input::get('HDD_merk3') : '0';
        $temp = Input::get('HDD_merk4');
        $hdd_brand4 = isset($temp) ? Input::get('HDD_merk4') : '0';
        $temp = Input::get('HDD_formaat');
        if(isset($temp)) { $hdd_format = Input::get('HDD_formaat'); }
        else { $hdd_format = '-'; }
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
        if(isset($temp)) { $hdd_connection = Input::get('HDD_aansluiting'); }
        else { $hdd_connection = '-'; }
        $temp = Input::get('HDD_cache');
        if(isset($temp)) { $hdd_buffer = Input::get('HDD_cache'); }
        else { $hdd_buffer = '-'; }
        $temp = Input::get('HDD_snelheid');
        if(isset($temp)) { $hdd_speed = Input::get('HDD_snelheid'); }
        else { $hdd_speed = '-'; }

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

    public function saveSoundcard() {
        $temp = Input::get('geluid_merk1');
        $soundcard_brand1 = isset($temp) ? Input::get('geluid_merk1') : '0';
        $temp = Input::get('geluid_merk2');
        $soundcard_brand2 = isset($temp) ? Input::get('geluid_merk2') : '0';
        $temp = Input::get('geluid_sample');
        if(isset($temp)) { $soundcard_sample = Input::get('geluid_sample'); }
        else { $soundcard_sample = '-'; }
        $temp = Input::get('geluid_aiso');
        if(isset($temp)) { $soundcard_aiso = Input::get('geluid_aiso'); }
        else { $soundcard_aiso = '-'; }
        $temp = Input::get('geluid_optisch');
        if(isset($temp)) { $soundcard_port = Input::get('geluid_optisch'); }
        else { $soundcard_port = '-'; }
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
        if(isset($temp)) { $soundcard_channel = Input::get('geluid_kanalen'); }
        else { $soundcard_channel = '-'; }
        $temp = Input::get('geluid_hoofd');
        if(isset($temp)) { $soundcard_headphone = Input::get('geluid_hoofd'); }
        else { $soundcard_headphone = '-'; }
        $temp = Input::get('geluid_jack');
        if(isset($temp)) { $soundcard_jack = Input::get('geluid_jack'); }
        else { $soundcard_jack = '-'; }

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

    public function savePCI() {
        $temp = Input::get('pci_usb');
        if(isset($temp)) { $pci_usb = Input::get('pci_usb'); }
        else { $pci_usb = '-'; }
        $temp = Input::get('pci_firewire');
        if(isset($temp)) { $pci_firewire = Input::get('pci_firewire'); }
        else { $pci_firewire = '-'; }
        $temp = Input::get('pci_sata');
        if(isset($temp)) { $pci_sata = Input::get('pci_sata'); }
        else { $pci_sata = '-'; }
        $temp = Input::get('pci_esata');
        if(isset($temp)) { $pci_esata = Input::get('pci_esata'); }
        else { $pci_esata = '-'; }

        Session::put('pci_usb', $pci_usb);
        Session::put('pci_firewire', $pci_firewire);
        Session::put('pci_sata', $pci_sata);
        Session::put('pci_esata', $pci_esata);
        //Session::put('pci_price_min', $pci_price_min);
        //Session::put('pci_price_max', $pci_price_max);

        Session::put('menuitem', 'videocard');
    }

    public function saveVideocard() {

        Session::put('menuitem', 'processor');
    }

    public function saveProcessor() {

        Session::put('menuitem', 'internalmemory');
    }

    public function saveInternalMemory() {

        Session::put('menuitem', 'motherboard');
    }

    public function saveMotherboard() {

        Session::put('menuitem', 'casing');
    }

    public function saveCasing() {

        Session::put('menuitem', 'ssd');
    }

    public function saveSSD() {

        Session::put('menuitem', 'bluraydvd');
    }

    public function saveBlurayDVD() {

    }
}
?>