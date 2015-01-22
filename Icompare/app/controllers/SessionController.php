<?php
/**
 * Dit onderdeel is geschreven door:
 * Michelle & Sander
 *
 * Michelle - methode determineSection()
 *          - Gedeelte opslaan checkboxes
 *          - Gedeelte opslaan radio boxes
 *          - Opslaan sliders
 *          - Check voor verplichte onderdelen
 *          - Het zetten van de check variabele voor een vinkje
 * Sander:  - Gedeelte opslaan checkboxes
 *          - Gedeelte opslaan radio boxes

 * Document is voor het laatst, op 17-01-2015, nagekeken door:
 * Michelle
 */

class SessionController extends BaseController {

    // Deze functie bepaalt welke methode uitgevoerd moet worden aan de hand van de sessievariabele $menuitem.
    // Wanneer de methode vervolgens volledig doorlopen is, wordt de index pagina weer geladen.
    public function determineSection() {
        if(Session::has('menuitem')) {
            $menuitem = Session::get('menuitem');
            switch ($menuitem) {
                case "powersupply":         $this->savePowerSupply(); break;
                case "processorcooler":     $this->saveProcessorCooler(); break;
                case "internalharddrive":   $this->saveHardDiskDrive(); break;
                case "soundcard":           $this->saveSoundcard(); break;
                case "PCI":                 $this->savePCI(); break;
                case "videocard":           $this->saveVideocard(); break;
                case "processor":           $this->saveProcessor(); break;
                case "internalmemory":      $this->saveInternalMemory(); break;
                case "motherboard":         $this->saveMotherboard(); break;
                case "casing":              $this->saveCasing(); break;
                case "ssd":                 $this->saveSSD(); break;
                case "bluraydvd":           $this->saveBlurayDVD(); break;
                default :                   break;
            }
            return View::make('index');
        }
    }

    public function savePowerSupply() {
        // De variabele temp wordt gebruikt, aangezien de isset() een error geeft wanneer de Input::get rechtstreeks
        // wordt ingevuld.
        // Deze methode slaat alle waardes van de categorie "voeding" op. Hierbij wordt bij de verplichte onderdelen
        // gecontroleerd of deze ingevuld zijn. Wanneer dit het geval is, wordt de check variabele veranderd en is
        // op de site een groen vinkje te zien bij dit onderdeel.

        $temp = Input::get('voeding_cpup4');
        $voeding_cpup4 = isset($temp) ? Input::get('voeding_cpup4') : '0';
        $temp = Input::get('voeding_cpup8');
        $voeding_cpup8 = isset($temp) ? Input::get('voeding_cpup8') : '0';
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

        $temp = Input::get('voeding_cpup4p4');
        if (isset($temp)) { $voeding_cpup4p4 = Input::get('voeding_cpup4p4'); }
        else { $voeding_cpup4p4 = '-'; }
        $temp = Input::get('voeding_modulair');
        if (isset($temp)) { $voeding_modulair = Input::get('voeding_modulair'); }
        else { $voeding_modulair = '-'; }
        $temp = Input::get('voeding_certificering');
        if (isset($temp)) { $voeding_certificering = Input::get('voeding_certificering'); }
        else { $voeding_certificering = '-'; }
        $temp = Input::get('voeding_pci6');
        if (isset($temp)) { $voeding_pci6 = Input::get('voeding_pci6'); }
        else { $voeding_pci6 = '-'; }
        $temp = Input::get('voeding_pci6+2');
        if (isset($temp)) { $voeding_pci6_2 = Input::get('voeding_pci6+2'); }
        else { $voeding_pci6_2 = '-'; }

        $temp = Input::get('voeding_cost0');
        switch($temp) {
            case "0":       Session::put('powersupply_price_min', '1'); break;
            case "40":      Session::put('powersupply_price_min', '2'); break;
            case "80":      Session::put('powersupply_price_min', '3'); break;
            case "120":     Session::put('powersupply_price_min', '4'); break;
            case "160":     Session::put('powersupply_price_min', '5'); break;
            case "200":     Session::put('powersupply_price_min', '6'); break;
            case "240":     Session::put('powersupply_price_min', '7'); break;
            case "280":     Session::put('powersupply_price_min', '8'); break;
            case "320":     Session::put('powersupply_price_min', '9'); break;
            case "360":     Session::put('powersupply_price_min', 'a'); break;
            case "400":     Session::put('powersupply_price_min', 'b'); break;
            default:        Session::put('voeding_cost0', '1'); break;
        }
        $temp = Input::get('voeding_cost1');
        switch($temp) {
            case "0":       Session::put('powersupply_price_max', '1'); break;
            case "40":      Session::put('powersupply_price_max', '2'); break;
            case "80":      Session::put('powersupply_price_max', '3'); break;
            case "120":     Session::put('powersupply_price_max', '4'); break;
            case "160":     Session::put('powersupply_price_max', '5'); break;
            case "200":     Session::put('powersupply_price_max', '6'); break;
            case "240":     Session::put('powersupply_price_max', '7'); break;
            case "280":     Session::put('powersupply_price_max', '8'); break;
            case "320":     Session::put('powersupply_price_max', '9'); break;
            case "360":     Session::put('powersupply_price_max', 'a'); break;
            case "400":     Session::put('powersupply_price_max', 'b'); break;
            default:        Session::put('voeding_cost0', 'b'); break;
        }
        $temp = Input::get('Powersupply_power0');
        switch($temp) {
            case "400":     Session::put('powersupply_power_min', '1'); break;
            case "450":     Session::put('powersupply_power_min', '2'); break;
            case "500":     Session::put('powersupply_power_min', '3'); break;
            case "550":     Session::put('powersupply_power_min', '4'); break;
            case "600":     Session::put('powersupply_power_min', '5'); break;
            case "650":     Session::put('powersupply_power_min', '6'); break;
            case "700":     Session::put('powersupply_power_min', '7'); break;
            case "750":     Session::put('powersupply_power_min', '8'); break;
            case "800":     Session::put('powersupply_power_min', '9'); break;
            case "850":     Session::put('powersupply_power_min', 'a'); break;
            case "900":     Session::put('powersupply_power_min', 'b'); break;
            case "950":     Session::put('powersupply_power_min', 'c'); break;
            case "1000":    Session::put('powersupply_power_min', 'd'); break;
            default:        Session::put('powersupply_power_min', '1'); break;
        }
        $temp = Input::get('Powersupply_power1');
        switch($temp) {
            case "400":     Session::put('powersupply_power_max', '1'); break;
            case "450":     Session::put('powersupply_power_max', '2'); break;
            case "500":     Session::put('powersupply_power_max', '3'); break;
            case "550":     Session::put('powersupply_power_max', '4'); break;
            case "600":     Session::put('powersupply_power_max', '5'); break;
            case "650":     Session::put('powersupply_power_max', '6'); break;
            case "700":     Session::put('powersupply_power_max', '7'); break;
            case "750":     Session::put('powersupply_power_max', '8'); break;
            case "800":     Session::put('powersupply_power_max', '9'); break;
            case "850":     Session::put('powersupply_power_max', 'a'); break;
            case "900":     Session::put('powersupply_power_max', 'b'); break;
            case "950":     Session::put('powersupply_power_max', 'c'); break;
            case "1000":    Session::put('powersupply_power_max', 'd'); break;
            default:        Session::put('powersupply_power_max', 'd'); break;
        }
        //$temp = Input::get('Sata-connection0');
        Session::put('s-ata_min', '0');
        Session::put('s-ata_max', '0');
        /*switch($temp) {
            case "0":       Session::put('s-ata_min', '1'); break;
            case "1":       Session::put('s-ata_min', '2'); break;
            case "2":       Session::put('s-ata_min', '3'); break;
            case "3":       Session::put('s-ata_min', '4'); break;
            case "4":       Session::put('s-ata_min', '5'); break;
            case "5":       Session::put('s-ata_min', '6'); break;
            case "6":       Session::put('s-ata_min', '7'); break;
            case "7":       Session::put('s-ata_min', '8'); break;
            case "8":       Session::put('s-ata_min', '9'); break;
            case "9":       Session::put('s-ata_min', 'a'); break;
            case "10":      Session::put('s-ata_min', 'b'); break;
            case "11":      Session::put('s-ata_min', 'c'); break;
            case "12":      Session::put('s-ata_min', 'd'); break;
            default:        Session::put('s-ata_min', '1'); break;
        }*/
        //$temp = Input::get('Sata-connection1');
        /*switch($temp) {
            case "0":       Session::put('s-ata_max', '1'); break;
            case "1":       Session::put('s-ata_max', '2'); break;
            case "2":       Session::put('s-ata_max', '3'); break;
            case "3":       Session::put('s-ata_max', '4'); break;
            case "4":       Session::put('s-ata_max', '5'); break;
            case "5":       Session::put('s-ata_max', '6'); break;
            case "6":       Session::put('s-ata_max', '7'); break;
            case "7":       Session::put('s-ata_max', '8'); break;
            case "8":       Session::put('s-ata_max', '9'); break;
            case "9":       Session::put('s-ata_max', 'a'); break;
            case "10":      Session::put('s-ata_max', 'b'); break;
            case "11":      Session::put('s-ata_max', 'c'); break;
            case "12":      Session::put('s-ata_max', 'd'); break;
            default:        Session::put('s-ata_max', 'd'); break;
        }*/

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

        if($voeding_cpup4p4 != '-' && $voeding_modulair != '-' && $voeding_certificering != '-' && $voeding_pci6 != '-' && $voeding_pci6_2 != '-') {
            if((int)$voeding_cpup4 + (int)$voeding_cpup8 != 0) {
                Session::put('powersupply_check', 'yes');
            } else {
                Session::put('powersupply_check', '-');
            }
        } else {
            Session::put('powersupply_check', '-');
        }
        Session::put('menuitem', 'processorcooler');
    }

    public function saveProcessorCooler()
    {
        // Deze methode slaat alle waardes van de categorie "processor koeler" op. Hierbij wordt bij de verplichte onderdelen
        // gecontroleerd of deze ingevuld zijn. Wanneer dit het geval is, wordt de check variabele veranderd en is
        // op de site een groen vinkje te zien bij dit onderdeel.

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
        if (isset($temp)) { $processorcooler_method = Input::get('koeler_type'); }
        else { $processorcooler_method = '-'; }

        $temp = Input::get('ProcessorCoolerP0');
        switch($temp) {
            case "0":       Session::put('processorcooler_price_min', '1'); break;
            case "20":      Session::put('processorcooler_price_min', '2'); break;
            case "40":      Session::put('processorcooler_price_min', '3'); break;
            case "60":      Session::put('processorcooler_price_min', '4'); break;
            case "80":      Session::put('processorcooler_price_min', '5'); break;
            case "100":     Session::put('processorcooler_price_min', '6'); break;
            case "120":     Session::put('processorcooler_price_min', '7'); break;
            default:        Session::put('processorcooler_price_min', '1'); break;
        }
        $temp = Input::get('ProcessorCoolerP1');
        switch($temp) {
            case "0":       Session::put('processorcooler_price_max', '1'); break;
            case "20":      Session::put('processorcooler_price_max', '2'); break;
            case "40":      Session::put('processorcooler_price_max', '3'); break;
            case "60":      Session::put('processorcooler_price_max', '4'); break;
            case "80":      Session::put('processorcooler_price_max', '5'); break;
            case "100":     Session::put('processorcooler_price_max', '6'); break;
            case "120":     Session::put('processorcooler_price_max', '7'); break;
            default:        Session::put('processorcooler_price_max', '7'); break;
        }
        Session::put('processorcooler_diameter', '0');
        Session::put('processorcooler_rotation_min', '0');
        Session::put('processorcooler_rotation_max', '0');

        //$temp = Input::get('ProcessorCoolerVentilatorDm0');
        /*switch($temp) {
            case "6":       Session::put('processorcooler_diameter', '1'); break;
            case "7":       Session::put('processorcooler_diameter', '2'); break;
            case "8":       Session::put('processorcooler_diameter', '3'); break;
            case "9":       Session::put('processorcooler_diameter', '4'); break;
            case "10":      Session::put('processorcooler_diameter', '5'); break;
            case "11":      Session::put('processorcooler_diameter', '6'); break;
            case "12":      Session::put('processorcooler_diameter', '7'); break;
            case "13":      Session::put('processorcooler_diameter', '8'); break;
            case "14":      Session::put('processorcooler_diameter', '9'); break;
            default:        Session::put('processorcooler_diameter', '5'); break;
        }*/
        //$temp = Input::get('ProcessorCoolerRSpeed0');
        /*switch($temp) {
            case "800":     Session::put('processorcooler_rotation_min', '1'); break;
            case "1000":    Session::put('processorcooler_rotation_min', '2'); break;
            case "1200":    Session::put('processorcooler_rotation_min', '3'); break;
            case "1400":    Session::put('processorcooler_rotation_min', '4'); break;
            case "1600":    Session::put('processorcooler_rotation_min', '5'); break;
            case "1800":    Session::put('processorcooler_rotation_min', '6'); break;
            case "2000":    Session::put('processorcooler_rotation_min', '7'); break;
            case "2200":    Session::put('processorcooler_rotation_min', '8'); break;
            case "2400":    Session::put('processorcooler_rotation_min', '9'); break;
            case "2600":    Session::put('processorcooler_rotation_min', 'a'); break;
            case "2800":    Session::put('processorcooler_rotation_min', 'b'); break;
            case "3000":    Session::put('processorcooler_rotation_min', 'c'); break;
            case "3200":    Session::put('processorcooler_rotation_min', 'd'); break;
            case "3400":    Session::put('processorcooler_rotation_min', 'e'); break;
            default:        Session::put('processorcooler_rotation_min', '1'); break;
        }*/
        //$temp = Input::get('ProcessorCoolerRSpeed1');
        /*switch($temp) {
            case "800":     Session::put('processorcooler_rotation_max', '1'); break;
            case "1000":    Session::put('processorcooler_rotation_max', '2'); break;
            case "1200":    Session::put('processorcooler_rotation_max', '3'); break;
            case "1400":    Session::put('processorcooler_rotation_max', '4'); break;
            case "1600":    Session::put('processorcooler_rotation_max', '5'); break;
            case "1800":    Session::put('processorcooler_rotation_max', '6'); break;
            case "2000":    Session::put('processorcooler_rotation_max', '7'); break;
            case "2200":    Session::put('processorcooler_rotation_max', '8'); break;
            case "2400":    Session::put('processorcooler_rotation_max', '9'); break;
            case "2600":    Session::put('processorcooler_rotation_max', 'a'); break;
            case "2800":    Session::put('processorcooler_rotation_max', 'b'); break;
            case "3000":    Session::put('processorcooler_rotation_max', 'c'); break;
            case "3200":    Session::put('processorcooler_rotation_max', 'd'); break;
            case "3400":    Session::put('processorcooler_rotation_max', 'e'); break;
            default:        Session::put('processorcooler_rotation_max', 'e'); break;
        }*/

        Session::put('processorcooler_brand1', $processorcooler_brand1);
        Session::put('processorcooler_brand2', $processorcooler_brand2);
        Session::put('processorcooler_brand3', $processorcooler_brand3);
        Session::put('processorcooler_brand4', $processorcooler_brand4);
        Session::put('processorcooler_brand5', $processorcooler_brand5);
        Session::put('processorcooler_brand6', $processorcooler_brand6);
        Session::put('processorcooler_brand7', $processorcooler_brand7);
        Session::put('processorcooler_method', $processorcooler_method);

        if($processorcooler_method != '-') {
            Session::put('processorcooler_check', 'yes');
        } else {
            Session::put('processorcooler_check', '-');
        }
        Session::put('menuitem', 'internalharddrive');
    }

    public function saveHardDiskDrive()
    {
        // Deze methode slaat alle waardes van de categorie "harde schijf" op. Hierbij wordt bij de verplichte onderdelen
        // gecontroleerd of deze ingevuld zijn. Wanneer dit het geval is, wordt de check variabele veranderd en is
        // op de site een groen vinkje te zien bij dit onderdeel.

        $temp = Input::get('HDD_merk1');
        $hdd_brand1 = isset($temp) ? Input::get('HDD_merk1') : '0';
        $temp = Input::get('HDD_merk2');
        $hdd_brand2 = isset($temp) ? Input::get('HDD_merk2') : '0';
        $temp = Input::get('HDD_merk3');
        $hdd_brand3 = isset($temp) ? Input::get('HDD_merk3') : '0';
        $temp = Input::get('HDD_merk4');
        $hdd_brand4 = isset($temp) ? Input::get('HDD_merk4') : '0';
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
        $temp = Input::get('HDD_opslag9');
        $hdd_storagecapacity9 = isset($temp) ? Input::get('HDD_opslag9') : '0';
        $temp = Input::get('HDD_opslag10');
        $hdd_storagecapacity10 = isset($temp) ? Input::get('HDD_opslag10') : '0';

        $temp = Input::get('HDD_formaat');
        if (isset($temp)) { $hdd_format = Input::get('HDD_formaat'); }
        else { $hdd_format = '-'; }
        $temp = Input::get('HDD_aansluiting');
        if (isset($temp)) { $hdd_connection = Input::get('HDD_aansluiting'); }
        else { $hdd_connection = '-'; }
        $temp = Input::get('HDD_cache');
        if (isset($temp)) { $hdd_buffer = Input::get('HDD_cache'); }
        else { $hdd_buffer = '-'; }
        $temp = Input::get('HDD_snelheid');
        if (isset($temp)) { $hdd_speed = Input::get('HDD_snelheid'); }
        else { $hdd_speed = '-'; }

        $temp = Input::get('harddiskdrive_price0');
        switch($temp) {
            case "0":       Session::put('hdd_price_min', '1'); break;
            case "50":      Session::put('hdd_price_min', '2'); break;
            case "100":     Session::put('hdd_price_min', '3'); break;
            case "150":     Session::put('hdd_price_min', '4'); break;
            case "200":     Session::put('hdd_price_min', '5'); break;
            case "250":     Session::put('hdd_price_min', '6'); break;
            case "300":     Session::put('hdd_price_min', '7'); break;
            case "350":     Session::put('hdd_price_min', '8'); break;
            case "400":     Session::put('hdd_price_min', '9'); break;
            default:        Session::put('hdd_price_min', '1'); break;
        }
        $temp = Input::get('harddiskdrive_price1');
        switch($temp) {
            case "0":       Session::put('hdd_price_max', '1'); break;
            case "50":      Session::put('hdd_price_max', '2'); break;
            case "100":     Session::put('hdd_price_max', '3'); break;
            case "150":     Session::put('hdd_price_max', '4'); break;
            case "200":     Session::put('hdd_price_max', '5'); break;
            case "250":     Session::put('hdd_price_max', '6'); break;
            case "300":     Session::put('hdd_price_max', '7'); break;
            case "350":     Session::put('hdd_price_max', '8'); break;
            case "400":     Session::put('hdd_price_max', '9'); break;
            default:        Session::put('hdd_price_max', '9'); break;
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
        Session::put('hdd_storagecapacity9', $hdd_storagecapacity9);
        Session::put('hdd_storagecapacity10', $hdd_storagecapacity10);
        Session::put('hdd_connection', $hdd_connection);
        Session::put('hdd_buffer', $hdd_buffer);
        Session::put('hdd_speed', $hdd_speed);

        if($hdd_format != '-' && $hdd_connection != '-' && $hdd_buffer != '-' && $hdd_speed != '-') {
            if(((int)$hdd_storagecapacity1 + (int)$hdd_storagecapacity2 + (int)$hdd_storagecapacity3 +
                (int)$hdd_storagecapacity4 + (int)$hdd_storagecapacity5 + (int)$hdd_storagecapacity6 +
                (int)$hdd_storagecapacity7 + (int)$hdd_storagecapacity8 + (int)$hdd_storagecapacity9 +
                (int)$hdd_storagecapacity10 != 0)) {
                Session::put('internalharddrive_check', 'yes');
            } else {
                Session::put('internalharddrive_check', '-');
            }
        } else {
            Session::put('internalharddrive_check', '-');
        }
        Session::put('menuitem', 'soundcard');
    }

    public function saveSoundcard()
    {
        // Deze methode slaat alle waardes van de categorie "geluidskaart" op. Hierbij wordt bij de verplichte onderdelen
        // gecontroleerd of deze ingevuld zijn. Wanneer dit het geval is, wordt de check variabele veranderd en is
        // op de site een groen vinkje te zien bij dit onderdeel.

        $temp = Input::get('geluid_merk1');
        $soundcard_brand1 = isset($temp) ? Input::get('geluid_merk1') : '0';
        $temp = Input::get('geluid_merk2');
        $soundcard_brand2 = isset($temp) ? Input::get('geluid_merk2') : '0';
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

        $temp = Input::get('geluid_sample');
        if (isset($temp)) { $soundcard_sample = Input::get('geluid_sample'); }
        else { $soundcard_sample = '-'; }
        $temp = Input::get('geluid_aiso');
        if (isset($temp)) { $soundcard_aiso = Input::get('geluid_aiso'); }
        else { $soundcard_aiso = '0'; }                                         //Veranderd vanwege Computerstore
        $temp = Input::get('geluid_optisch');
        if (isset($temp)) { $soundcard_port = Input::get('geluid_optisch'); }
        else { $soundcard_port = '-'; }
        $temp = Input::get('geluid_kanalen');
        if (isset($temp)) { $soundcard_channel = Input::get('geluid_kanalen'); }
        else { $soundcard_channel = '-'; }
        $temp = Input::get('geluid_hoofd');
        if (isset($temp)) { $soundcard_headphone = Input::get('geluid_hoofd'); }
        else { $soundcard_headphone = '-'; }
        $temp = Input::get('geluid_jack');
        if (isset($temp)) { $soundcard_jack = Input::get('geluid_jack'); }
        else { $soundcard_jack = '0'; }                                         //Veranderd vanwege Computerstore

        $temp = Input::get('soundcard_price0');
        switch($temp) {
            case "0":       Session::put('soundcard_price_min', '1'); break;
            case "20":      Session::put('soundcard_price_min', '2'); break;
            case "40":      Session::put('soundcard_price_min', '3'); break;
            case "60":      Session::put('soundcard_price_min', '4'); break;
            case "80":      Session::put('soundcard_price_min', '5'); break;
            case "100":     Session::put('soundcard_price_min', '6'); break;
            case "120":     Session::put('soundcard_price_min', '7'); break;
            case "140":     Session::put('soundcard_price_min', '8'); break;
            case "160":     Session::put('soundcard_price_min', '9'); break;
            case "180":     Session::put('soundcard_price_min', 'a'); break;
            case "200":     Session::put('soundcard_price_min', 'b'); break;
            default:        Session::put('soundcard_price_min', '1'); break;
        }
        $temp = Input::get('soundcard_price1');
        switch($temp) {
            case "0":       Session::put('soundcard_price_max', '1'); break;
            case "20":      Session::put('soundcard_price_max', '2'); break;
            case "40":      Session::put('soundcard_price_max', '3'); break;
            case "60":      Session::put('soundcard_price_max', '4'); break;
            case "80":      Session::put('soundcard_price_max', '5'); break;
            case "100":     Session::put('soundcard_price_max', '6'); break;
            case "120":     Session::put('soundcard_price_max', '7'); break;
            case "140":     Session::put('soundcard_price_max', '8'); break;
            case "160":     Session::put('soundcard_price_max', '9'); break;
            case "180":     Session::put('soundcard_price_max', 'a'); break;
            case "200":     Session::put('soundcard_price_max', 'b'); break;
            default:        Session::put('soundcard_price_max', 'b'); break;
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

        if($soundcard_sample != '-' && $soundcard_aiso != '-' && $soundcard_port != '-' && $soundcard_channel != '-' && $soundcard_headphone != '-' && $soundcard_jack != '-') {
            if((int)$soundcard_processor1 + (int)$soundcard_processor2 + (int)$soundcard_processor3 +
                (int)$soundcard_processor4 + (int)$soundcard_processor5 + (int)$soundcard_processor6 != 0) {
                Session::put('soundcard_check', 'yes');
            }
            else {
                Session::put('soundcard_check', '-');
            }
        } else {
            Session::put('soundcard_check', '-');
        }
        Session::put('menuitem', 'PCI');
    }

    public function savePCI()
    {
        // Deze methode slaat alle waardes van de categorie "pci" op. Hierbij wordt bij de verplichte onderdelen
        // gecontroleerd of deze ingevuld zijn. Wanneer dit het geval is, wordt de check variabele veranderd en is
        // op de site een groen vinkje te zien bij dit onderdeel.

        $temp = Input::get('pci_usb');
        if (isset($temp)) { $pci_usb = Input::get('pci_usb'); }
        else { $pci_usb = '-'; }
        $temp = Input::get('pci_firewire');
        if (isset($temp)) { $pci_firewire = Input::get('pci_firewire'); }
        else { $pci_firewire = '-'; }
        $temp = Input::get('pci_sata');
        if (isset($temp)) { $pci_sata = Input::get('pci_sata'); }
        else { $pci_sata = '-'; }
        $temp = Input::get('pci_esata');
        if (isset($temp)) { $pci_esata = Input::get('pci_esata'); }
        else { $pci_esata = '-'; }

        $temp = Input::get('pci_price0');
        switch($temp) {
            case "0":       Session::put('pci_price_min', '1'); break;
            case "20":      Session::put('pci_price_min', '2'); break;
            case "40":      Session::put('pci_price_min', '3'); break;
            case "60":      Session::put('pci_price_min', '4'); break;
            case "80":      Session::put('pci_price_min', '5'); break;
            default:        Session::put('pci_price_min', '1'); break;
        }
        $temp = Input::get('pci_price1');
        switch($temp) {
            case "0":       Session::put('pci_price_max', '1'); break;
            case "20":      Session::put('pci_price_max', '2'); break;
            case "40":      Session::put('pci_price_max', '3'); break;
            case "60":      Session::put('pci_price_max', '4'); break;
            case "80":      Session::put('pci_price_max', '5'); break;
            default:        Session::put('pci_price_max', '5'); break;
        }

        Session::put('pci_usb', $pci_usb);
        Session::put('pci_firewire', $pci_firewire);
        Session::put('pci_sata', $pci_sata);
        Session::put('pci_esata', $pci_esata);

        if($pci_usb != '-' && $pci_firewire != '-' && $pci_sata != '-' && $pci_esata != '-') {
            Session::put('pci_check', 'yes');
        } else {
            Session::put('pci_check', '-');
        }
        Session::put('menuitem', 'videocard');
    }

    public function saveVideocard()
    {
        // Deze methode slaat alle waardes van de categorie "videokaart" op. Hierbij wordt bij de verplichte onderdelen
        // gecontroleerd of deze ingevuld zijn. Wanneer dit het geval is, wordt de check variabele veranderd en is
        // op de site een groen vinkje te zien bij dit onderdeel.

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
        $temp = Input::get('GPU_type_NVIDIA5');
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
        if (isset($temp)) { $GPU_geheugen_type = Input::get('GPU_geheugen_type'); }
        else { $GPU_geheugen_type = '-'; }
        $temp = Input::get('GPU_HDMI');
        if (isset($temp)) { $GPU_HDMI = Input::get('GPU_HDMI'); }
        else { $GPU_HDMI = '-'; }
        $temp = Input::get('GPU_VGA');
        if (isset($temp)) { $GPU_VGA = Input::get('GPU_VGA'); }
        else { $GPU_VGA = '-'; }
        $temp = Input::get('GPU_bandwidth_memory');
        if (isset($temp)) { $GPU_bandwidth_memory = Input::get('GPU_bandwidth_memory'); }
        else { $GPU_bandwidth_memory = '-'; }
        $temp = Input::get('GPU_DVI-I');
        if (isset($temp)) { $GPU_DVII = Input::get('GPU_DVI-I'); }
        else { $GPU_DVII = '-'; }
        $temp = Input::get('GPU_DVI-D');
        if (isset($temp)) { $GPU_DVID = Input::get('GPU_DVI-D'); }
        else { $GPU_DVID = '-'; }

        $temp = Input::get('videocard_price0');
        switch($temp) {
            case "0":       Session::put('GPU_price_min', '1'); break;
            case "100":     Session::put('GPU_price_min', '2'); break;
            case "200":     Session::put('GPU_price_min', '3'); break;
            case "300":     Session::put('GPU_price_min', '4'); break;
            case "400":     Session::put('GPU_price_min', '5'); break;
            case "500":     Session::put('GPU_price_min', '6'); break;
            case "600":     Session::put('GPU_price_min', '7'); break;
            default:        Session::put('GPU_price_min', '1'); break;
        }
        $temp = Input::get('videocard_price1');
        switch($temp) {
            case "0":       Session::put('GPU_price_max', '1'); break;
            case "100":     Session::put('GPU_price_max', '2'); break;
            case "200":     Session::put('GPU_price_max', '3'); break;
            case "300":     Session::put('GPU_price_max', '4'); break;
            case "400":     Session::put('GPU_price_max', '5'); break;
            case "500":     Session::put('GPU_price_max', '6'); break;
            case "600":     Session::put('GPU_price_max', '7'); break;
            default:        Session::put('GPU_price_max', '7'); break;
        }
        $temp = Input::get('videocard_memoryMb0');
        switch($temp) {
            case "500":     Session::put('GPU_memory_min', '1'); break;
            case "1013":    Session::put('GPU_memory_min', '2'); break;
            case "1526":    Session::put('GPU_memory_min', '3'); break;
            case "2039":    Session::put('GPU_memory_min', '4'); break;
            case "2552":    Session::put('GPU_memory_min', '5'); break;
            case "3065":    Session::put('GPU_memory_min', '6'); break;
            case "3578":    Session::put('GPU_memory_min', '7'); break;
            case "4091":    Session::put('GPU_memory_min', '8'); break;
            case "4604":    Session::put('GPU_memory_min', '9'); break;
            case "5117":    Session::put('GPU_memory_min', 'a'); break;
            case "5630":    Session::put('GPU_memory_min', 'b'); break;
            case "6143":    Session::put('GPU_memory_min', 'c'); break;
            case "6656":    Session::put('GPU_memory_min', 'd'); break;
            case "7169":    Session::put('GPU_memory_min', 'e'); break;
            case "7682":    Session::put('GPU_memory_min', 'f'); break;
            case "8195":    Session::put('GPU_memory_min', 'g'); break;
            default:        Session::put('GPU_memory_min', '1'); break;
        }
        $temp = Input::get('videocard_memoryMb1');
        switch($temp) {
            case "500":     Session::put('GPU_memory_max', '1'); break;
            case "1013":    Session::put('GPU_memory_max', '2'); break;
            case "1526":    Session::put('GPU_memory_max', '3'); break;
            case "2039":    Session::put('GPU_memory_max', '4'); break;
            case "2552":    Session::put('GPU_memory_max', '5'); break;
            case "3065":    Session::put('GPU_memory_max', '6'); break;
            case "3578":    Session::put('GPU_memory_max', '7'); break;
            case "4091":    Session::put('GPU_memory_max', '8'); break;
            case "4604":    Session::put('GPU_memory_max', '9'); break;
            case "5117":    Session::put('GPU_memory_max', 'a'); break;
            case "5630":    Session::put('GPU_memory_max', 'b'); break;
            case "6143":    Session::put('GPU_memory_max', 'c'); break;
            case "6656":    Session::put('GPU_memory_max', 'd'); break;
            case "7169":    Session::put('GPU_memory_max', 'e'); break;
            case "7682":    Session::put('GPU_memory_max', 'f'); break;
            case "8195":    Session::put('GPU_memory_max', 'g'); break;
            default:        Session::put('GPU_memory_max', 'g'); break;
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

        if($GPU_geheugen_type != '-' && $GPU_HDMI != '-' && $GPU_VGA != '-' && $GPU_bandwidth_memory != '-' && $GPU_DVII != '-' && $GPU_DVID != '-') {
            Session::put('videocard_check', 'yes');
        } else {
            Session::put('videocard_check', '-');
        }
        Session::put('menuitem', 'processor');
    }

    public function saveProcessor()
    {
        // Deze methode slaat alle waardes van de categorie "processor" op. Hierbij wordt bij de verplichte onderdelen
        // gecontroleerd of deze ingevuld zijn. Wanneer dit het geval is, wordt de check variabele veranderd en is
        // op de site een groen vinkje te zien bij dit onderdeel.

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
        $temp = Input::get('processor_serie9');
        $processor_serie9 = isset($temp) ? Input::get('processor_serie9') : '0';

        $temp = Input::get('processor_price0');
        switch($temp) {
            case "0":       Session::put('processor_cost_min', '1'); break;
            case "100":     Session::put('processor_cost_min', '2'); break;
            case "200":     Session::put('processor_cost_min', '3'); break;
            case "300":     Session::put('processor_cost_min', '4'); break;
            case "400":     Session::put('processor_cost_min', '5'); break;
            case "500":     Session::put('processor_cost_min', '6'); break;
            case "600":     Session::put('processor_cost_min', '7'); break;
            case "700":     Session::put('processor_cost_min', '8'); break;
            case "800":     Session::put('processor_cost_min', '9'); break;
            case "900":     Session::put('processor_cost_min', 'a'); break;
            case "1000":    Session::put('processor_cost_min', 'b'); break;
            default:        Session::put('processor_cost_min', '1'); break;
        }
        $temp = Input::get('processor_price10');
        switch($temp) {
            case "0":       Session::put('processor_cost_max', '1'); break;
            case "100":     Session::put('processor_cost_max', '2'); break;
            case "200":     Session::put('processor_cost_max', '3'); break;
            case "300":     Session::put('processor_cost_max', '4'); break;
            case "400":     Session::put('processor_cost_max', '5'); break;
            case "500":     Session::put('processor_cost_max', '6'); break;
            case "600":     Session::put('processor_cost_max', '7'); break;
            case "700":     Session::put('processor_cost_max', '8'); break;
            case "800":     Session::put('processor_cost_max', '9'); break;
            case "900":     Session::put('processor_cost_max', 'a'); break;
            case "1000":    Session::put('processor_cost_max', 'b'); break;
            default:        Session::put('processor_cost_max', 'b'); break;
        }
        $temp = Input::get('processor_clocking0');
        switch($temp) {
            case "2900":    Session::put('processor_speed_min', '1'); break;
            case "3050":    Session::put('processor_speed_min', '2'); break;
            case "3200":    Session::put('processor_speed_min', '3'); break;
            case "3350":    Session::put('processor_speed_min', '4'); break;
            case "3500":    Session::put('processor_speed_min', '5'); break;
            case "3650":    Session::put('processor_speed_min', '6'); break;
            case "3800":    Session::put('processor_speed_min', '7'); break;
            case "3950":    Session::put('processor_speed_min', '8'); break;
            case "4100":    Session::put('processor_speed_min', '9'); break;
            case "4250":    Session::put('processor_speed_min', 'a'); break;
            case "4400":    Session::put('processor_speed_min', 'b'); break;
            case "4550":    Session::put('processor_speed_min', 'c'); break;
            case "4700":    Session::put('processor_speed_min', 'd'); break;
            default:        Session::put('processor_speed_min', '1'); break;
        }
        $temp = Input::get('processor_clocking1');
        switch($temp) {
            case "2900":    Session::put('processor_speed_max', '1'); break;
            case "3050":    Session::put('processor_speed_max', '2'); break;
            case "3200":    Session::put('processor_speed_max', '3'); break;
            case "3350":    Session::put('processor_speed_max', '4'); break;
            case "3500":    Session::put('processor_speed_max', '5'); break;
            case "3650":    Session::put('processor_speed_max', '6'); break;
            case "3800":    Session::put('processor_speed_max', '7'); break;
            case "3950":    Session::put('processor_speed_max', '8'); break;
            case "4100":    Session::put('processor_speed_max', '9'); break;
            case "4250":    Session::put('processor_speed_max', 'a'); break;
            case "4400":    Session::put('processor_speed_max', 'b'); break;
            case "4550":    Session::put('processor_speed_max', 'c'); break;
            case "4700":    Session::put('processor_speed_max', 'd'); break;
            default:        Session::put('processor_speed_max', 'd'); break;
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
        Session::put('processor_serie9', $processor_serie9);

        if(((int)$processor_core1 + (int)$processor_core2 + (int)$processor_core3 + (int)$processor_core4 != 0) &&
            ((int)$processor_serie1 + (int)$processor_serie2 + (int)$processor_serie3 + (int)$processor_serie4 +
            (int)$processor_serie5 + (int)$processor_serie6 + (int)$processor_serie7 + (int)$processor_serie8 +
            (int)$processor_serie9 != 0)) {
            Session::put('processor_check', 'yes');
        } else {
            Session::put('processor_check', '-');
        }
        Session::put('menuitem', 'internalmemory');
    }

    public function saveInternalMemory()
    {
        // Deze methode slaat alle waardes van de categorie "intern geheugen" op. Hierbij wordt bij de verplichte onderdelen
        // gecontroleerd of deze ingevuld zijn. Wanneer dit het geval is, wordt de check variabele veranderd en is
        // op de site een groen vinkje te zien bij dit onderdeel.

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
        $temp = Input::get('RAM_geheugen2');
        $RAM_geheugen2 = isset($temp) ? Input::get('RAM_geheugen2') : '0';
        $temp = Input::get('RAM_geheugen3');
        $RAM_geheugen3 = isset($temp) ? Input::get('RAM_geheugen3') : '0';
        $temp = Input::get('RAM_geheugen4');
        $RAM_geheugen4 = isset($temp) ? Input::get('RAM_geheugen4') : '0';
        $temp = Input::get('RAM_geheugen5');
        $RAM_geheugen5 = isset($temp) ? Input::get('RAM_geheugen5') : '0';
        $temp = Input::get('RAM_geheugen6');
        $RAM_geheugen6 = isset($temp) ? Input::get('RAM_geheugen6') : '0';
        $temp = Input::get('RAM_geschikt1');
        $RAM_geschikt1 = isset($temp) ? Input::get('RAM_geschikt1') : '0';
        $temp = Input::get('RAM_geschikt2');
        $RAM_geschikt2 = isset($temp) ? Input::get('RAM_geschikt2') : '0';
        $temp = Input::get('RAM_geschikt3');
        $RAM_geschikt3 = isset($temp) ? Input::get('RAM_geschikt3') : '0';
        $temp = Input::get('RAM_geschikt4');
        $RAM_geschikt4 = isset($temp) ? Input::get('RAM_geschikt4') : '0';

        $temp = Input::get('RAM_klok');
        if (isset($temp)) { $RAM_klok = Input::get('RAM_klok'); }
        else { $RAM_klok = '-'; }
        $temp = Input::get('RAM_game');
        if (isset($temp)) { $RAM_game = Input::get('RAM_game'); }
        else { $RAM_game = '-'; }
        $temp = Input::get('RAM_type');
        if (isset($temp)) { $RAM_type = Input::get('RAM_type'); }
        else { $RAM_type = '-'; }
        $temp = Input::get('RAM_kanalen');
        if (isset($temp)) { $RAM_kanalen = Input::get('RAM_kanalen'); }
        else { $RAM_kanalen = '-'; }

        $temp = Input::get('ram_price0');
        switch($temp) {
            case "0":       Session::put('RAM_price_min', '1'); break;
            case "50":      Session::put('RAM_price_min', '2'); break;
            case "100":     Session::put('RAM_price_min', '3'); break;
            case "150":     Session::put('RAM_price_min', '4'); break;
            case "200":     Session::put('RAM_price_min', '5'); break;
            case "250":     Session::put('RAM_price_min', '6'); break;
            case "300":     Session::put('RAM_price_min', '7'); break;
            case "350":     Session::put('RAM_price_min', '8'); break;
            case "400":     Session::put('RAM_price_min', '9'); break;
            case "450":     Session::put('RAM_price_min', 'a'); break;
            case "500":     Session::put('RAM_price_min', 'b'); break;
            default:        Session::put('RAM_price_min', '1'); break;
        }
        $temp = Input::get('ram_price1');
        switch($temp) {
            case "0":       Session::put('RAM_price_max', '1'); break;
            case "50":      Session::put('RAM_price_max', '2'); break;
            case "100":     Session::put('RAM_price_max', '3'); break;
            case "150":     Session::put('RAM_price_max', '4'); break;
            case "200":     Session::put('RAM_price_max', '5'); break;
            case "250":     Session::put('RAM_price_max', '6'); break;
            case "300":     Session::put('RAM_price_max', '7'); break;
            case "350":     Session::put('RAM_price_max', '8'); break;
            case "400":     Session::put('RAM_price_max', '9'); break;
            case "450":     Session::put('RAM_price_max', 'a'); break;
            case "500":     Session::put('RAM_price_max', 'b'); break;
            default:        Session::put('RAM_price_max', 'b'); break;
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
        Session::put('RAM_game', $RAM_game);
        Session::put('RAM_geschikt1', $RAM_geschikt1);
        Session::put('RAM_geschikt2', $RAM_geschikt2);
        Session::put('RAM_geschikt3', $RAM_geschikt3);
        Session::put('RAM_geschikt4', $RAM_geschikt4);
        Session::put('RAM_type', $RAM_type);
        Session::put('RAM_kanalen', $RAM_kanalen);

        if($RAM_klok != '-' && $RAM_game != '-' && $RAM_type != '-' && $RAM_kanalen != '-') {
            if(((int)$RAM_geheugen1 + (int)$RAM_geheugen2 + (int)$RAM_geheugen3 + (int)$RAM_geheugen4 +
                (int)$RAM_geheugen5 + (int)$RAM_geheugen6 != 0) && ((int)$RAM_geschikt1 + (int)$RAM_geschikt2 +
                    (int)$RAM_geschikt3 + (int)$RAM_geschikt4 != 0)) {
                Session::put('internalmemory_check', 'yes');
            } else {
                Session::put('internalmemory_check', '-');
            }
        } else {
            Session::put('internalmemory_check', '-');
        }
        Session::put('menuitem', 'motherboard');
    }

    public function saveMotherboard() {
        // Deze methode slaat alle waardes van de categorie "moederbord" op. Hierbij wordt bij de verplichte onderdelen
        // gecontroleerd of deze ingevuld zijn. Wanneer dit het geval is, wordt de check variabele veranderd en is
        // op de site een groen vinkje te zien bij dit onderdeel.

        $temp = Input::get('moederbord_merk1');
        $moederbord_merk1 = isset($temp) ? Input::get('moederbord_merk1') : '0';
        $temp = Input::get('moederbord_merk2');
        $moederbord_merk2 = isset($temp) ? Input::get('moederbord_merk2') : '0';
        $temp = Input::get('moederbord_merk3');
        $moederbord_merk3 = isset($temp) ? Input::get('moederbord_merk3') : '0';
        $temp = Input::get('moederbord_raid1');
        $moederbord_raid1 = isset($temp) ? Input::get('moederbord_raid1') : '0';
        $temp = Input::get('moederbord_raid2');
        $moederbord_raid2 = isset($temp) ? Input::get('moederbord_raid2') : '0';
        $temp = Input::get('moederbord_raid3');
        $moederbord_raid3 = isset($temp) ? Input::get('moederbord_raid3') : '0';
        $temp = Input::get('moederbord_raid4');
        $moederbord_raid4 = isset($temp) ? Input::get('moederbord_raid4') : '0';
        $temp = Input::get('moederbord_raid5');
        $moederbord_raid5 = isset($temp) ? Input::get('moederbord_raid5') : '0';
        $temp = Input::get('moederbord_raid6');
        $moederbord_raid6 = isset($temp) ? Input::get('moederbord_raid6') : '0';

        $temp = Input::get('moederbord_format');
        if (isset($temp)) { $moederbord_format = Input::get('moederbord_format'); }
        else { $moederbord_format = '-'; }
        $temp = Input::get('moederbord_wifi');
        if (isset($temp)) { $moederbord_wifi = Input::get('moederbord_wifi'); }
        else { $moederbord_wifi = '-'; }
        $temp = Input::get('moederbord_geheugen');
        if (isset($temp)) { $moederbord_geheugen = Input::get('moederbord_geheugen'); }
        else { $moederbord_geheugen = '-'; }
        $temp = Input::get('moederbord_HDMI');
        if (isset($temp)) { $moederbord_HDMI = Input::get('moederbord_HDMI'); }
        else { $moederbord_HDMI = '-'; }
        $temp = Input::get('moederbord_VGA');
        if (isset($temp)) { $moederbord_VGA = Input::get('moederbord_VGA'); }
        else { $moederbord_VGA = '-'; }
        $temp = Input::get('moederbord_displayport');
        if (isset($temp)) { $moederbord_displayport = Input::get('moederbord_displayport'); }
        else { $moederbord_displayport = '-'; }
        $temp = Input::get('moederbord_ethernet');
        if (isset($temp)) { $moederbord_ethernet = Input::get('moederbord_ethernet'); }
        else { $moederbord_ethernet = '-'; }
        $temp = Input::get('moederbord_DVI');
        if (isset($temp)) { $moederbord_DVI = Input::get('moederbord_DVI'); }
        else { $moederbord_DVI = '-'; }
        $temp = Input::get('moederbord_audiokanalen');
        if (isset($temp)) { $moederbord_audiokanalen = Input::get('moederbord_audiokanalen'); }
        else { $moederbord_audiokanalen = '-'; }
        $temp = Input::get('moederbord_type');
        if (isset($temp)) { $moederbord_type = Input::get('moederbord_type'); }
        else { $moederbord_type = '-'; }
        $temp = Input::get('moederbord_msata');
        if (isset($temp)) { $moederbord_msata = Input::get('moederbord_msata'); }
        else { $moederbord_msata = '-'; }

        $temp = Input::get('motherboard_price0');
        switch($temp) {
            case "0":       Session::put('moederbord_price_min', '1'); break;
            case "50":      Session::put('moederbord_price_min', '2'); break;
            case "100":     Session::put('moederbord_price_min', '3'); break;
            case "150":     Session::put('moederbord_price_min', '4'); break;
            case "200":     Session::put('moederbord_price_min', '5'); break;
            case "250":     Session::put('moederbord_price_min', '6'); break;
            case "300":     Session::put('moederbord_price_min', '7'); break;
            case "350":     Session::put('moederbord_price_min', '8'); break;
            case "400":     Session::put('moederbord_price_min', '9'); break;
            case "450":     Session::put('moederbord_price_min', 'a'); break;
            case "500":     Session::put('moederbord_price_min', 'b'); break;
            default:        Session::put('moederbord_price_min', '1'); break;
        }
        $temp = Input::get('motherboard_price1');
        switch($temp) {
            case "0":       Session::put('moederbord_price_max', '1'); break;
            case "50":      Session::put('moederbord_price_max', '2'); break;
            case "100":     Session::put('moederbord_price_max', '3'); break;
            case "150":     Session::put('moederbord_price_max', '4'); break;
            case "200":     Session::put('moederbord_price_max', '5'); break;
            case "250":     Session::put('moederbord_price_max', '6'); break;
            case "300":     Session::put('moederbord_price_max', '7'); break;
            case "350":     Session::put('moederbord_price_max', '8'); break;
            case "400":     Session::put('moederbord_price_max', '9'); break;
            case "450":     Session::put('moederbord_price_max', 'a'); break;
            case "500":     Session::put('moederbord_price_max', 'b'); break;
            default:        Session::put('moederbord_price_max', 'b'); break;
        }
        $temp = Input::get('Usb_port0');
        switch($temp) {
            case "0":       Session::put('moederbord_usb', '1'); break;
            case "1":       Session::put('moederbord_usb', '2'); break;
            case "2":       Session::put('moederbord_usb', '3'); break;
            case "3":       Session::put('moederbord_usb', '4'); break;
            case "4":       Session::put('moederbord_usb', '5'); break;
            case "5":       Session::put('moederbord_usb', '6'); break;
            case "6":       Session::put('moederbord_usb', '7'); break;
            case "7":       Session::put('moederbord_usb', '8'); break;
            case "8":       Session::put('moederbord_usb', '9'); break;
            case "9":       Session::put('moederbord_usb', 'a'); break;
            case "10":      Session::put('moederbord_usb', 'b'); break;
            case "11":      Session::put('moederbord_usb', 'c'); break;
            case "12":      Session::put('moederbord_usb', 'd'); break;
            case "13":      Session::put('moederbord_usb', 'e'); break;
            case "14":      Session::put('moederbord_usb', 'f'); break;
            default:        Session::put('moederbord_usb', '5'); break;
        }
        $temp = Input::get('motherboard_sata300connection0');
        switch($temp) {
            case "0":       Session::put('moederbord_SATA300', '1'); break;
            case "1":       Session::put('moederbord_SATA300', '2'); break;
            case "2":       Session::put('moederbord_SATA300', '3'); break;
            case "3":       Session::put('moederbord_SATA300', '4'); break;
            case "4":       Session::put('moederbord_SATA300', '5'); break;
            case "5":       Session::put('moederbord_SATA300', '6'); break;
            case "6":       Session::put('moederbord_SATA300', '7'); break;
            default:        Session::put('moederbord_SATA300', '3'); break;
        }
        $temp = Input::get('motherboard_sata600connection0');
        switch($temp) {
            case "0":       Session::put('moederbord_SATA600', '1'); break;
            case "1":       Session::put('moederbord_SATA600', '2'); break;
            case "2":       Session::put('moederbord_SATA600', '3'); break;
            case "3":       Session::put('moederbord_SATA600', '4'); break;
            case "4":       Session::put('moederbord_SATA600', '5'); break;
            case "5":       Session::put('moederbord_SATA600', '6'); break;
            case "6":       Session::put('moederbord_SATA600', '7'); break;
            case "7":       Session::put('moederbord_SATA600', '8'); break;
            case "8":       Session::put('moederbord_SATA600', '9'); break;
            case "9":       Session::put('moederbord_SATA600', 'a'); break;
            case "10":      Session::put('moederbord_SATA600', 'b'); break;
            default:        Session::put('moederbord_SATA600', '3'); break;
        }

        Session::put('moederbord_merk1', $moederbord_merk1 );
        Session::put('moederbord_merk2', $moederbord_merk2 );
        Session::put('moederbord_merk3', $moederbord_merk3 );
        Session::put('moederbord_format', $moederbord_format );
        Session::put('moederbord_wifi', $moederbord_wifi );
        Session::put('moederbord_geheugen', $moederbord_geheugen );
        Session::put('moederbord_HDMI', $moederbord_HDMI );
        Session::put('moederbord_VGA', $moederbord_VGA );
        Session::put('moederbord_displayport', $moederbord_displayport );
        Session::put('moederbord_ethernet', $moederbord_ethernet );
        Session::put('moederbord_DVI', $moederbord_DVI );
        Session::put('moederbord_raid1', $moederbord_raid1 );
        Session::put('moederbord_raid2', $moederbord_raid2 );
        Session::put('moederbord_raid3', $moederbord_raid3 );
        Session::put('moederbord_raid4', $moederbord_raid4 );
        Session::put('moederbord_raid5', $moederbord_raid5 );
        Session::put('moederbord_raid6', $moederbord_raid6 );
        Session::put('moederbord_audiokanalen', $moederbord_audiokanalen );
        Session::put('moederbord_type', $moederbord_type );
        Session::put('moederbord_msata', $moederbord_msata );

        if($moederbord_format != '-' && $moederbord_wifi != '-' && $moederbord_geheugen != '-' && $moederbord_HDMI != '-'
            && $moederbord_VGA != '-' && $moederbord_displayport != '-' && $moederbord_ethernet != '-' && $moederbord_DVI != '-'
            && $moederbord_audiokanalen != '-' && $moederbord_type != '-' && $moederbord_msata != '-') {
            if(((int)$moederbord_raid1 + (int)$moederbord_raid2 + (int)$moederbord_raid3 + (int)$moederbord_raid4 +
                (int)$moederbord_raid5 + (int)$moederbord_raid6 != 0)) {
                Session::put('motherboard_check', 'yes');
            } else {
                Session::put('motherboard_check', '-');
            }
        } else {
            Session::put('motherboard_check', '-');
        }
        Session::put('menuitem', 'casing');
    }

    function saveCasing(){
        // Deze methode slaat alle waardes van de categorie "behuizing" op. Hierbij wordt bij de verplichte onderdelen
        // gecontroleerd of deze ingevuld zijn. Wanneer dit het geval is, wordt de check variabele veranderd en is
        // op de site een groen vinkje te zien bij dit onderdeel.

        $temp = Input::get('behuizing_merk1');
        $behuizing_merk1 = isset($temp) ? Input::get('behuizing_merk1') : '0';
        $temp = Input::get('behuizing_merk2');
        $behuizing_merk2 = isset($temp) ? Input::get('behuizing_merk2') : '0';
        $temp = Input::get('behuizing_merk3');
        $behuizing_merk3 = isset($temp) ? Input::get('behuizing_merk3') : '0';
        $temp = Input::get('behuizing_merk4');
        $behuizing_merk4 = isset($temp) ? Input::get('behuizing_merk4') : '0';
        $temp = Input::get('behuizing_merk5');
        $behuizing_merk5 = isset($temp) ? Input::get('behuizing_merk5') : '0';
        $temp = Input::get('behuizing_merk6');
        $behuizing_merk6 = isset($temp) ? Input::get('behuizing_merk6') : '0';
        $temp = Input::get('behuizing_usb2_1');
        $behuizing_usb2_1 = isset($temp) ? Input::get('behuizing_usb2_1') : '0';
        $temp = Input::get('behuizing_usb2_2');
        $behuizing_usb2_2 = isset($temp) ? Input::get('behuizing_usb2_2') : '0';
        $temp = Input::get('behuizing_usb2_3');
        $behuizing_usb2_3 = isset($temp) ? Input::get('behuizing_usb2_3') : '0';
        $temp = Input::get('behuizing_usb3_1');
        $behuizing_usb3_1 = isset($temp) ? Input::get('behuizing_usb3_1') : '0';
        $temp = Input::get('behuizing_usb3_2');
        $behuizing_usb3_2 = isset($temp) ? Input::get('behuizing_usb3_2') : '0';
        $temp = Input::get('behuizing_usb3_3');
        $behuizing_usb3_3 = isset($temp) ? Input::get('behuizing_usb3_3') : '0';

        $temp = Input::get('behuizing_computer');
        if (isset($temp)) { $behuizing_computer = Input::get('behuizing_computer'); }
        else { $behuizing_computer = '-'; }
        $temp = Input::get('behuizing_fan');
        if (isset($temp)) { $behuizing_fan = Input::get('behuizing_fan'); }
        else { $behuizing_fan = '-'; }
        $temp = Input::get('behuizing_stof');
        if (isset($temp)) { $behuizing_stof = Input::get('behuizing_stof'); }
        else { $behuizing_stof = '-'; }
        $temp = Input::get('behuizing_water');
        if (isset($temp)) { $behuizing_water = Input::get('behuizing_water'); }
        else { $behuizing_water = '0'; }                                            // Veranderd vanwege Computerstore
        $temp = Input::get('behuizing_led');
        if (isset($temp)) { $behuizing_led = Input::get('behuizing_led'); }
        else { $behuizing_led = '0'; }                                              // Veranderd vanwege Computerstore
        $temp = Input::get('behuizing_ruis');
        if (isset($temp)) { $behuizing_ruis = Input::get('behuizing_ruis'); }
        else { $behuizing_ruis = '-'; }
        $temp = Input::get('behuizing_geluid');
        if (isset($temp)) { $behuizing_geluid = Input::get('behuizing_geluid'); }
        else { $behuizing_geluid = '-'; }
        $temp = Input::get('behuizing_paneel');
        if (isset($temp)) { $behuizing_paneel = Input::get('behuizing_paneel'); }
        else { $behuizing_paneel = '-'; }
        $temp = Input::get('behuizing_kleur');
        if (isset($temp)) { $behuizing_kleur = Input::get('behuizing_kleur'); }
        else { $behuizing_kleur = '-'; }
        $temp = Input::get('behuizing_materiaal');
        if (isset($temp)) { $behuizing_materiaal = Input::get('behuizing_materiaal'); }
        else { $behuizing_materiaal = '-'; }
        $temp = Input::get('behuizing_firewire');
        if (isset($temp)) { $behuizing_firewire = Input::get('behuizing_firewire'); }
        else { $behuizing_firewire = '-'; }
        $temp = Input::get('behuizing_esata');
        if (isset($temp)) { $behuizing_esata = Input::get('behuizing_esata'); }
        else { $behuizing_esata = '-'; }

        $temp = Input::get('casing_Price0');
        switch($temp) {
            case "30":      Session::put('behuizing_price_min', '1'); break;
            case "50":      Session::put('behuizing_price_min', '2'); break;
            case "70":      Session::put('behuizing_price_min', '3'); break;
            case "90":      Session::put('behuizing_price_min', '4'); break;
            case "110":     Session::put('behuizing_price_min', '5'); break;
            case "130":     Session::put('behuizing_price_min', '6'); break;
            case "150":     Session::put('behuizing_price_min', '7'); break;
            default:        Session::put('behuizing_price_min', '1'); break;
        }
        $temp = Input::get('casing_Price1');
        switch($temp) {
            case "30":      Session::put('behuizing_price_max', '1'); break;
            case "50":      Session::put('behuizing_price_max', '2'); break;
            case "70":      Session::put('behuizing_price_max', '3'); break;
            case "90":      Session::put('behuizing_price_max', '4'); break;
            case "110":     Session::put('behuizing_price_max', '5'); break;
            case "130":     Session::put('behuizing_price_max', '6'); break;
            case "150":     Session::put('behuizing_price_max', '7'); break;
            default:        Session::put('behuizing_price_max', '7'); break;
        }
        $temp = Input::get('casing_expansion_0');
        switch($temp) {
            case "2":       Session::put('behuizing_uitbreiding_min', '1'); break;
            case "3":       Session::put('behuizing_uitbreiding_min', '2'); break;
            case "4":       Session::put('behuizing_uitbreiding_min', '3'); break;
            case "5":       Session::put('behuizing_uitbreiding_min', '4'); break;
            case "6":       Session::put('behuizing_uitbreiding_min', '5'); break;
            case "7":       Session::put('behuizing_uitbreiding_min', '6'); break;
            case "8":       Session::put('behuizing_uitbreiding_min', '7'); break;
            case "9":       Session::put('behuizing_uitbreiding_min', '8'); break;
            case "10":      Session::put('behuizing_uitbreiding_min', '9'); break;
            case "11":      Session::put('behuizing_uitbreiding_min', 'a'); break;
            default:        Session::put('behuizing_uitbreiding_min', '1'); break;
        }
        $temp = Input::get('casing_expansion_1');
        switch($temp) {
            case "2":       Session::put('behuizing_uitbreiding_max', '1'); break;
            case "3":       Session::put('behuizing_uitbreiding_max', '2'); break;
            case "4":       Session::put('behuizing_uitbreiding_max', '3'); break;
            case "5":       Session::put('behuizing_uitbreiding_max', '4'); break;
            case "6":       Session::put('behuizing_uitbreiding_max', '5'); break;
            case "7":       Session::put('behuizing_uitbreiding_max', '6'); break;
            case "8":       Session::put('behuizing_uitbreiding_max', '7'); break;
            case "9":       Session::put('behuizing_uitbreiding_max', '8'); break;
            case "10":      Session::put('behuizing_uitbreiding_max', '9'); break;
            case "11":      Session::put('behuizing_uitbreiding_max', 'a'); break;
            default:        Session::put('behuizing_uitbreiding_max', 'a'); break;
        }
        $temp = Input::get('casing_HDD/SSD_0');
        switch($temp) {
            case "0":       Session::put('behuizing_2_5bay_min', '1'); break;
            case "1":       Session::put('behuizing_2_5bay_min', '2'); break;
            case "2":       Session::put('behuizing_2_5bay_min', '3'); break;
            case "3":       Session::put('behuizing_2_5bay_min', '4'); break;
            case "4":       Session::put('behuizing_2_5bay_min', '5'); break;
            case "5":       Session::put('behuizing_2_5bay_min', '6'); break;
            case "6":       Session::put('behuizing_2_5bay_min', '7'); break;
            case "7":       Session::put('behuizing_2_5bay_min', '8'); break;
            case "8":       Session::put('behuizing_2_5bay_min', '9'); break;
            case "9":       Session::put('behuizing_2_5bay_min', 'a'); break;
            case "10":      Session::put('behuizing_2_5bay_min', 'b'); break;
            case "11":      Session::put('behuizing_2_5bay_min', 'c'); break;
            case "12":      Session::put('behuizing_2_5bay_min', 'd'); break;
            case "13":      Session::put('behuizing_2_5bay_min', 'e'); break;
            case "14":      Session::put('behuizing_2_5bay_min', 'f'); break;
            case "15":      Session::put('behuizing_2_5bay_min', 'g'); break;
            case "16":      Session::put('behuizing_2_5bay_min', 'h'); break;
            case "17":      Session::put('behuizing_2_5bay_min', 'i'); break;
            case "18":      Session::put('behuizing_2_5bay_min', 'j'); break;
            default:        Session::put('behuizing_2_5bay_min', '1'); break;
        }
        $temp = Input::get('casing_HDD/SSD_1');
        switch($temp) {
            case "0":       Session::put('behuizing_2_5bay_max', '1'); break;
            case "1":       Session::put('behuizing_2_5bay_max', '2'); break;
            case "2":       Session::put('behuizing_2_5bay_max', '3'); break;
            case "3":       Session::put('behuizing_2_5bay_max', '4'); break;
            case "4":       Session::put('behuizing_2_5bay_max', '5'); break;
            case "5":       Session::put('behuizing_2_5bay_max', '6'); break;
            case "6":       Session::put('behuizing_2_5bay_max', '7'); break;
            case "7":       Session::put('behuizing_2_5bay_max', '8'); break;
            case "8":       Session::put('behuizing_2_5bay_max', '9'); break;
            case "9":       Session::put('behuizing_2_5bay_max', 'a'); break;
            case "10":      Session::put('behuizing_2_5bay_max', 'b'); break;
            case "11":      Session::put('behuizing_2_5bay_max', 'c'); break;
            case "12":      Session::put('behuizing_2_5bay_max', 'd'); break;
            case "13":      Session::put('behuizing_2_5bay_max', 'e'); break;
            case "14":      Session::put('behuizing_2_5bay_max', 'f'); break;
            case "15":      Session::put('behuizing_2_5bay_max', 'g'); break;
            case "16":      Session::put('behuizing_2_5bay_max', 'h'); break;
            case "17":      Session::put('behuizing_2_5bay_max', 'i'); break;
            case "18":      Session::put('behuizing_2_5bay_max', 'j'); break;
            default:        Session::put('behuizing_2_5bay_max', 'j'); break;
        }
        $temp = Input::get('casing_HDD_0');
        switch($temp) {
            case "2":       Session::put('behuizing_3_5bay_min', '1'); break;
            case "3":       Session::put('behuizing_3_5bay_min', '2'); break;
            case "4":       Session::put('behuizing_3_5bay_min', '3'); break;
            case "5":       Session::put('behuizing_3_5bay_min', '4'); break;
            case "6":       Session::put('behuizing_3_5bay_min', '5'); break;
            case "7":       Session::put('behuizing_3_5bay_min', '6'); break;
            case "8":       Session::put('behuizing_3_5bay_min', '7'); break;
            case "9":       Session::put('behuizing_3_5bay_min', '8'); break;
            case "10":      Session::put('behuizing_3_5bay_min', '9'); break;
            case "11":      Session::put('behuizing_3_5bay_min', 'a'); break;
            case "12":      Session::put('behuizing_3_5bay_min', 'b'); break;
            case "13":      Session::put('behuizing_3_5bay_min', 'c'); break;
            default:        Session::put('behuizing_3_5bay_min', '1'); break;
        }
        $temp = Input::get('casing_HDD_1');
        switch($temp) {
            case "2":       Session::put('behuizing_3_5bay_max', '1'); break;
            case "3":       Session::put('behuizing_3_5bay_max', '2'); break;
            case "4":       Session::put('behuizing_3_5bay_max', '3'); break;
            case "5":       Session::put('behuizing_3_5bay_max', '4'); break;
            case "6":       Session::put('behuizing_3_5bay_max', '5'); break;
            case "7":       Session::put('behuizing_3_5bay_max', '6'); break;
            case "8":       Session::put('behuizing_3_5bay_max', '7'); break;
            case "9":       Session::put('behuizing_3_5bay_max', '8'); break;
            case "10":      Session::put('behuizing_3_5bay_max', '9'); break;
            case "11":      Session::put('behuizing_3_5bay_max', 'a'); break;
            case "12":      Session::put('behuizing_3_5bay_max', 'b'); break;
            case "13":      Session::put('behuizing_3_5bay_max', 'c'); break;
            default:        Session::put('behuizing_3_5bay_max', 'c'); break;
        }
        $temp = Input::get('casing_Bayss0');
        switch($temp) {
            case "0":       Session::put('behuizing_5_25bay_min', '1'); break;
            case "1":       Session::put('behuizing_5_25bay_min', '2'); break;
            case "2":       Session::put('behuizing_5_25bay_min', '3'); break;
            case "3":       Session::put('behuizing_5_25bay_min', '4'); break;
            case "4":       Session::put('behuizing_5_25bay_min', '5'); break;
            case "5":       Session::put('behuizing_5_25bay_min', '6'); break;
            case "6":       Session::put('behuizing_5_25bay_min', '7'); break;
            case "7":       Session::put('behuizing_5_25bay_min', '8'); break;
            case "8":       Session::put('behuizing_5_25bay_min', '9'); break;
            case "9":       Session::put('behuizing_5_25bay_min', 'a'); break;
            default:        Session::put('behuizing_5_25bay_min', '1'); break;
        }
        $temp = Input::get('casing_Bayss1');
        switch($temp) {
            case "0":       Session::put('behuizing_5_25bay_max', '1'); break;
            case "1":       Session::put('behuizing_5_25bay_max', '2'); break;
            case "2":       Session::put('behuizing_5_25bay_max', '3'); break;
            case "3":       Session::put('behuizing_5_25bay_max', '4'); break;
            case "4":       Session::put('behuizing_5_25bay_max', '5'); break;
            case "5":       Session::put('behuizing_5_25bay_max', '6'); break;
            case "6":       Session::put('behuizing_5_25bay_max', '7'); break;
            case "7":       Session::put('behuizing_5_25bay_max', '8'); break;
            case "8":       Session::put('behuizing_5_25bay_max', '9'); break;
            case "9":       Session::put('behuizing_5_25bay_max', 'a'); break;
            default:        Session::put('behuizing_5_25bay_max', 'a'); break;
        }

        Session::put('behuizing_merk1', $behuizing_merk1  );
        Session::put('behuizing_merk2', $behuizing_merk2  );
        Session::put('behuizing_merk3', $behuizing_merk3  );
        Session::put('behuizing_merk4', $behuizing_merk4  );
        Session::put('behuizing_merk5', $behuizing_merk5  );
        Session::put('behuizing_merk6', $behuizing_merk6  );
        Session::put('behuizing_computer', $behuizing_computer  );
        Session::put('behuizing_fan', $behuizing_fan  );
        Session::put('behuizing_stof', $behuizing_stof  );
        Session::put('behuizing_water', $behuizing_water );
        Session::put('behuizing_led', $behuizing_led  );
        Session::put('behuizing_ruis', $behuizing_ruis  );
        Session::put('behuizing_geluid', $behuizing_geluid  );
        Session::put('behuizing_paneel', $behuizing_paneel  );
        Session::put('behuizing_kleur', $behuizing_kleur  );
        Session::put('behuizing_materiaal', $behuizing_materiaal  );
        Session::put('behuizing_usb2_1', $behuizing_usb2_1  );
        Session::put('behuizing_usb2_2', $behuizing_usb2_2  );
        Session::put('behuizing_usb2_3', $behuizing_usb2_3  );
        Session::put('behuizing_usb3_1', $behuizing_usb3_1  );
        Session::put('behuizing_usb3_2', $behuizing_usb3_2  );
        Session::put('behuizing_usb3_3', $behuizing_usb3_3  );
        Session::put('behuizing_firewire', $behuizing_firewire  );
        Session::put('behuizing_esata', $behuizing_esata  );

        if($behuizing_computer != '-' && $behuizing_fan != '-' && $behuizing_stof != '-' && $behuizing_water != '-'
            && $behuizing_led != '-' && $behuizing_ruis != '-' && $behuizing_geluid != '-' && $behuizing_paneel != '-'
            && $behuizing_kleur != '-' && $behuizing_materiaal != '-' && $behuizing_firewire != '-' && $behuizing_esata != '-') {
            if(((int)$behuizing_usb2_1 + (int)$behuizing_usb2_2 + (int)$behuizing_usb2_3 != 0) &&
                ((int)$behuizing_usb3_1 + (int)$behuizing_usb3_2 + (int)$behuizing_usb3_3 != 0)) {
                Session::put('casing_check', 'yes');
            } else {
                Session::put('casing_check', '-');
            }
        } else {
            Session::put('casing_check', '-');
        }
        Session::put('menuitem', 'ssd');
    }

    public function saveSSD() {
        // Deze methode slaat alle waardes van de categorie "ssd" op. Hierbij wordt bij de verplichte onderdelen
        // gecontroleerd of deze ingevuld zijn. Wanneer dit het geval is, wordt de check variabele veranderd en is
        // op de site een groen vinkje te zien bij dit onderdeel.

        $temp = Input::get('SDD_opslag1');
        $SDD_opslag1 = isset($temp) ? Input::get('SDD_opslag1') : '0';
        $temp = Input::get('SDD_opslag2');
        $SDD_opslag2 = isset($temp) ? Input::get('SDD_opslag2') : '0';
        $temp = Input::get('SDD_opslag3');
        $SDD_opslag3 = isset($temp) ? Input::get('SDD_opslag3') : '0';
        $temp = Input::get('SDD_opslag4');
        $SDD_opslag4 = isset($temp) ? Input::get('SDD_opslag4') : '0';
        $temp = Input::get('SDD_opslag5');
        $SDD_opslag5 = isset($temp) ? Input::get('SDD_opslag5') : '0';
        $temp = Input::get('SDD_opslag6');
        $SDD_opslag6 = isset($temp) ? Input::get('SDD_opslag6') : '0';
        $temp = Input::get('SDD_opslag7');
        $SDD_opslag7 = isset($temp) ? Input::get('SDD_opslag7') : '0';
        $temp = Input::get('SDD_opslag8');
        $SDD_opslag8 = isset($temp) ? Input::get('SDD_opslag8') : '0';
        $temp = Input::get('SDD_opslag9');
        $SDD_opslag9 = isset($temp) ? Input::get('SDD_opslag9') : '0';
        $temp = Input::get('SDD_opslag10');
        $SDD_opslag10 = isset($temp) ? Input::get('SDD_opslag10') : '0';
        $temp = Input::get('SDD_opslag11');
        $SDD_opslag11 = isset($temp) ? Input::get('SDD_opslag11') : '0';
        $temp = Input::get('SDD_opslag12');
        $SDD_opslag12 = isset($temp) ? Input::get('SDD_opslag12') : '0';
        $temp = Input::get('SDD_opslag13');
        $SDD_opslag13 = isset($temp) ? Input::get('SDD_opslag13') : '0';
        $temp = Input::get('SDD_opslag14');
        $SDD_opslag14 = isset($temp) ? Input::get('SDD_opslag14') : '0';
        $temp = Input::get('SDD_opslag15');
        $SDD_opslag15 = isset($temp) ? Input::get('SDD_opslag15') : '0';
        $temp = Input::get('SSD_merk1');
        $SSD_merk1 = isset($temp) ? Input::get('SSD_merk1') : '0';
        $temp = Input::get('SSD_merk2');
        $SSD_merk2 = isset($temp) ? Input::get('SSD_merk2') : '0';
        $temp = Input::get('SSD_merk3');
        $SSD_merk3 = isset($temp) ? Input::get('SSD_merk3') : '0';
        $temp = Input::get('SSD_merk4');
        $SSD_merk4 = isset($temp) ? Input::get('SSD_merk4') : '0';
        $temp = Input::get('SSD_merk5');
        $SSD_merk5 = isset($temp) ? Input::get('SSD_merk5') : '0';
        $temp = Input::get('SSD_merk6');
        $SSD_merk6 = isset($temp) ? Input::get('SSD_merk6') : '0';
        $temp = Input::get('SSD_merk7');
        $SSD_merk7 = isset($temp) ? Input::get('SSD_merk7') : '0';
        $temp = Input::get('SSD_merk8');
        $SSD_merk8 = isset($temp) ? Input::get('SSD_merk8') : '0';
        $temp = Input::get('SSD_controller1');
        $SSD_controller1 = isset($temp) ? Input::get('SSD_controller1') : '0';
        $temp = Input::get('SSD_controller2');
        $SSD_controller2 = isset($temp) ? Input::get('SSD_controller2') : '0';
        $temp = Input::get('SSD_controller3');
        $SSD_controller3 = isset($temp) ? Input::get('SSD_controller3') : '0';
        $temp = Input::get('SSD_controller4');
        $SSD_controller4 = isset($temp) ? Input::get('SSD_controller4') : '0';
        $temp = Input::get('SSD_controller5');
        $SSD_controller5 = isset($temp) ? Input::get('SSD_controller5') : '0';
        $temp = Input::get('SSD_controller6');
        $SSD_controller6 = isset($temp) ? Input::get('SSD_controller6') : '0';

        $temp = Input::get('SDD_formaat');
        if (isset($temp)) { $SDD_formaat = Input::get('SDD_formaat'); }
        else { $SDD_formaat = '-'; }
        $temp = Input::get('SSD_soort');
        if (isset($temp)) { $SSD_soort = Input::get('SSD_soort'); }
        else { $SSD_soort = '-'; }

        $temp = Input::get('ssd_price0');
        switch($temp) {
            case "0":       Session::put('SSD_price_min', '1'); break;
            case "50":      Session::put('SSD_price_min', '2'); break;
            case "100":     Session::put('SSD_price_min', '3'); break;
            case "150":     Session::put('SSD_price_min', '4'); break;
            case "200":     Session::put('SSD_price_min', '5'); break;
            case "250":     Session::put('SSD_price_min', '6'); break;
            case "300":     Session::put('SSD_price_min', '7'); break;
            case "350":     Session::put('SSD_price_min', '8'); break;
            case "400":     Session::put('SSD_price_min', '9'); break;
            case "450":     Session::put('SSD_price_min', 'a'); break;
            case "500":     Session::put('SSD_price_min', 'b'); break;
            case "550":     Session::put('SSD_price_min', 'c'); break;
            case "600":     Session::put('SSD_price_min', 'd'); break;
            default:        Session::put('SSD_price_min', '1'); break;
        }
        $temp = Input::get('ssd_price1');
        switch($temp) {
            case "0":       Session::put('SSD_price_max', '1'); break;
            case "50":      Session::put('SSD_price_max', '2'); break;
            case "100":     Session::put('SSD_price_max', '3'); break;
            case "150":     Session::put('SSD_price_max', '4'); break;
            case "200":     Session::put('SSD_price_max', '5'); break;
            case "250":     Session::put('SSD_price_max', '6'); break;
            case "300":     Session::put('SSD_price_max', '7'); break;
            case "350":     Session::put('SSD_price_max', '8'); break;
            case "400":     Session::put('SSD_price_max', '9'); break;
            case "450":     Session::put('SSD_price_max', 'a'); break;
            case "500":     Session::put('SSD_price_max', 'b'); break;
            case "550":     Session::put('SSD_price_max', 'c'); break;
            case "600":     Session::put('SSD_price_max', 'd'); break;
            default: Session::put('SSD_price_max', 'd'); break;
        }
        $temp = Input::get('ssd_writespeed0');
        switch($temp) {
            case "100":     Session::put('SSD_schrijf_min', '1'); break;
            case "150":     Session::put('SSD_schrijf_min', '2'); break;
            case "200":     Session::put('SSD_schrijf_min', '3'); break;
            case "250":     Session::put('SSD_schrijf_min', '4'); break;
            case "300":     Session::put('SSD_schrijf_min', '5'); break;
            case "350":     Session::put('SSD_schrijf_min', '6'); break;
            case "400":     Session::put('SSD_schrijf_min', '7'); break;
            case "450":     Session::put('SSD_schrijf_min', '8'); break;
            case "500":     Session::put('SSD_schrijf_min', '9'); break;
            case "550":     Session::put('SSD_schrijf_min', 'a'); break;
            case "600":     Session::put('SSD_schrijf_min', 'b'); break;
            default:        Session::put('SSD_schrijf_min', '1'); break;
        }
        $temp = Input::get('ssd_writespeed1');
        switch($temp) {
            case "100":     Session::put('SSD_schrijf_max', '1'); break;
            case "150":     Session::put('SSD_schrijf_max', '2'); break;
            case "200":     Session::put('SSD_schrijf_max', '3'); break;
            case "250":     Session::put('SSD_schrijf_max', '4'); break;
            case "300":     Session::put('SSD_schrijf_max', '5'); break;
            case "350":     Session::put('SSD_schrijf_max', '6'); break;
            case "400":     Session::put('SSD_schrijf_max', '7'); break;
            case "450":     Session::put('SSD_schrijf_max', '8'); break;
            case "500":     Session::put('SSD_schrijf_max', '9'); break;
            case "550":     Session::put('SSD_schrijf_max', 'a'); break;
            case "600":     Session::put('SSD_schrijf_max', 'b'); break;
            default:        Session::put('SSD_schrijf_max', 'b'); break;
        }
        $temp = Input::get('ssd_readspeed0');
        switch($temp) {
            case "410":     Session::put('SSD_lees_min', '1'); break;
            case "430":     Session::put('SSD_lees_min', '2'); break;
            case "450":     Session::put('SSD_lees_min', '3'); break;
            case "470":     Session::put('SSD_lees_min', '4'); break;
            case "510":     Session::put('SSD_lees_min', '5'); break;
            case "530":     Session::put('SSD_lees_min', '6'); break;
            case "550":     Session::put('SSD_lees_min', '7'); break;
            default:        Session::put('SSD_lees_min', '1'); break;
        }
        $temp = Input::get('ssd_readspeed1');
        switch($temp) {
            case "410":     Session::put('SSD_lees_max', '1'); break;
            case "430":     Session::put('SSD_lees_max', '2'); break;
            case "450":     Session::put('SSD_lees_max', '3'); break;
            case "470":     Session::put('SSD_lees_max', '4'); break;
            case "510":     Session::put('SSD_lees_max', '5'); break;
            case "530":     Session::put('SSD_lees_max', '6'); break;
            case "550":     Session::put('SSD_lees_max', '7'); break;
            default:        Session::put('SSD_lees_max', '7'); break;
        }

        Session::put('SDD_opslag1', $SDD_opslag1  );
        Session::put('SDD_opslag2', $SDD_opslag2  );
        Session::put('SDD_opslag3', $SDD_opslag3  );
        Session::put('SDD_opslag4', $SDD_opslag4  );
        Session::put('SDD_opslag5', $SDD_opslag5  );
        Session::put('SDD_opslag6', $SDD_opslag6  );
        Session::put('SDD_opslag7', $SDD_opslag7  );
        Session::put('SDD_opslag8', $SDD_opslag8  );
        Session::put('SDD_opslag9', $SDD_opslag9  );
        Session::put('SDD_opslag10', $SDD_opslag10  );
        Session::put('SDD_opslag11', $SDD_opslag11  );
        Session::put('SDD_opslag12', $SDD_opslag12  );
        Session::put('SDD_opslag13', $SDD_opslag13  );
        Session::put('SDD_opslag14', $SDD_opslag14  );
        Session::put('SDD_opslag15', $SDD_opslag15  );
        Session::put('SDD_formaat', $SDD_formaat  );
        Session::put('SSD_soort', $SSD_soort  );
        Session::put('SSD_merk1', $SSD_merk1  );
        Session::put('SSD_merk2', $SSD_merk2  );
        Session::put('SSD_merk3', $SSD_merk3  );
        Session::put('SSD_merk4', $SSD_merk4  );
        Session::put('SSD_merk5', $SSD_merk5  );
        Session::put('SSD_merk6', $SSD_merk6  );
        Session::put('SSD_merk7', $SSD_merk7  );
        Session::put('SSD_merk8', $SSD_merk8  );
        Session::put('SSD_controller1', $SSD_controller1  );
        Session::put('SSD_controller2', $SSD_controller2  );
        Session::put('SSD_controller3', $SSD_controller3  );
        Session::put('SSD_controller4', $SSD_controller4  );
        Session::put('SSD_controller5', $SSD_controller5  );
        Session::put('SSD_controller6', $SSD_controller6  );

        if($SDD_formaat != '-' && $SSD_soort != '-') {
            if((int)$SDD_opslag1 + (int)$SDD_opslag2 + (int)$SDD_opslag3 + (int)$SDD_opslag4 +
                (int)$SDD_opslag5 + (int)$SDD_opslag6 + (int)$SDD_opslag7 + (int)$SDD_opslag8 +
                (int)$SDD_opslag9 + (int)$SDD_opslag10 + (int)$SDD_opslag11 + (int)$SDD_opslag12 +
                (int)$SDD_opslag13 + (int)$SDD_opslag14 + (int)$SDD_opslag15 != 0) {
                Session::put('ssd_check', 'yes');
            } else {
                Session::put('ssd_check', '-');
            }
        } else {
            Session::put('ssd_check', '-');
        }
        Session::put('menuitem', 'bluraydvd');
    }

    public function saveBluraydvd() {
        // Deze methode slaat alle waardes van de categorie "blu-ray & dvd" op. Hierbij wordt bij de verplichte onderdelen
        // gecontroleerd of deze ingevuld zijn. Wanneer dit het geval is, wordt de check variabele veranderd en is
        // op de site een groen vinkje te zien bij dit onderdeel.

        $temp = Input::get('brander_merk1');
        $brander_merk1 = isset($temp) ? Input::get('brander_merk1') : '0';
        $temp = Input::get('brander_merk2');
        $brander_merk2 = isset($temp) ? Input::get('brander_merk2') : '0';
        $temp = Input::get('brander_merk3');
        $brander_merk3 = isset($temp) ? Input::get('brander_merk3') : '0';
        $temp = Input::get('brander_merk4');
        $brander_merk4 = isset($temp) ? Input::get('brander_merk4') : '0';
        $temp = Input::get('brander_merk5');
        $brander_merk5 = isset($temp) ? Input::get('brander_merk5') : '0';
        $temp = Input::get('brander_merk6');
        $brander_merk6 = isset($temp) ? Input::get('brander_merk6') : '0';
        $temp = Input::get('brander_speelt1');
        $brander_speelt1 = isset($temp) ? Input::get('brander_speelt1') : '0';
        $temp = Input::get('brander_speelt2');
        $brander_speelt2 = isset($temp) ? Input::get('brander_speelt2') : '0';
        $temp = Input::get('brander_speelt3');
        $brander_speelt3 = isset($temp) ? Input::get('brander_speelt3') : '0';
        $temp = Input::get('brander_speelt4');
        $brander_speelt4 = isset($temp) ? Input::get('brander_speelt4') : '0';

        $temp = Input::get('brander_type');
        if (isset($temp)) { $brander_type = Input::get('brander_type'); }
        else { $brander_type = '-'; }
        $temp = Input::get('brander_besturing');
        if (isset($temp)) { $brander_besturing = Input::get('brander_besturing'); }
        else { $brander_besturing = '-'; }
        $temp = Input::get('brander_ladetype');
        if (isset($temp)) { $brander_ladetype = Input::get('brander_ladetype'); }
        else { $brander_ladetype = '-'; }

        $temp = Input::get('Blu-RayDVD_price0');
        switch($temp) {
            case "0":       Session::put('brander_price_min', '1'); break;
            case "20":      Session::put('brander_price_min', '2'); break;
            case "40":      Session::put('brander_price_min', '3'); break;
            case "60":      Session::put('brander_price_min', '4'); break;
            case "80":      Session::put('brander_price_min', '5'); break;
            case "100":     Session::put('brander_price_min', '6'); break;
            case "120":     Session::put('brander_price_min', '7'); break;
            default:        Session::put('brander_price_min', '1'); break;
        }
        $temp = Input::get('Blu-RayDVD_price1');
        switch($temp) {
            case "0":       Session::put('brander_price_max', '1'); break;
            case "20":      Session::put('brander_price_max', '2'); break;
            case "40":      Session::put('brander_price_max', '3'); break;
            case "60":      Session::put('brander_price_max', '4'); break;
            case "80":      Session::put('brander_price_max', '5'); break;
            case "100":     Session::put('brander_price_max', '6'); break;
            case "120":     Session::put('brander_price_max', '7'); break;
            default:        Session::put('brander_price_max', '7'); break;
        }

        Session::put('brander_merk1', $brander_merk1 );
        Session::put('brander_merk2', $brander_merk2 );
        Session::put('brander_merk3', $brander_merk3 );
        Session::put('brander_merk4', $brander_merk4 );
        Session::put('brander_merk5', $brander_merk5 );
        Session::put('brander_merk6', $brander_merk6 );
        Session::put('brander_type', $brander_type );
        Session::put('brander_speelt1', $brander_speelt1 );
        Session::put('brander_speelt2', $brander_speelt2 );
        Session::put('brander_speelt3', $brander_speelt3 );
        Session::put('brander_speelt4', $brander_speelt4 );
        Session::put('brander_besturing', $brander_besturing );
        Session::put('brander_ladetype', $brander_ladetype );

        if($brander_type != '-' && $brander_besturing != '-' && $brander_ladetype != '-') {
            if((int)$brander_speelt1 + (int)$brander_speelt2 + (int)$brander_speelt3 + (int)$brander_speelt4 != 0) {
                Session::put('bluraydvd_check', 'yes');
            } else {
                Session::put('bluraydvd_check', '-');
            }
        } else {
            Session::put('bluraydvd_check', '-');
        }
    }

}