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
            echo $menuitem . "<br>";

            switch ($menuitem) {
                case "powersupply":
                    $this->savePowerSupply(); break;
                case "bar":
                    echo "i is bar";
                    break;
                case "cake":
                    echo "i is cake";
                    break;
            }


        }
    }

    public function savePowerSupply() {
        $temp = Input::get('voeding_cpup4');
        $voeding_cpup4 = isset($temp) ? Input::get('voeding_cpup4') : '0';
        $temp = Input::get('voeding_cpup8');
        $voeding_cpup8 = isset($temp) ? Input::get('voeding_cpup8') : '0';
        $temp = Input::get('voeding_cpup4p4');
        if(isset($temp)) {
            $voeding_cpup4p4 = Input::get('voeding_cpup4p4');
        } else {
            $voeding_cpup4p4 = '-';
        }
        $temp = Input::get('voeding_modulair');
        if(isset($temp)) {
            $voeding_modulair = Input::get('voeding_modulair');
        } else {
            $voeding_modulair = '-';
        }
        $temp = Input::get('voeding_certificering');
        if(isset($temp)) {
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
        if(isset($temp)) {
            $voeding_pci6 = Input::get('voeding_pci6');
        } else {
            $voeding_pci6 = '-';
        }
        $temp = Input::get('voeding_pci6+2');
        if(isset($temp)) {
            $voeding_pci6_2 = Input::get('voeding_pci6+2');
        } else {
            $voeding_pci6_2 = '-';
        }


        Session::put('cpu_p4', $voeding_cpup4);
        echo Session::get('cpu_p4');
        Session::put('cpu_p8', $voeding_cpup8);
        echo Session::get('cpu_p8');
        Session::put('cpu_p4+p4', $voeding_cpup4p4);
        echo Session::get('cpu_p4+p4');
        Session::put('powersupply_modular', $voeding_modulair);
        echo Session::get('powersupply_modular');
        Session::put('powersupply_certificate', $voeding_certificering);
        echo Session::get('powersupply_certificate');
        Session::put('powersupply_brand1', $voeding_merk1);
        echo Session::get('powersupply_brand1');
        Session::put('powersupply_brand2', $voeding_merk2);
        echo Session::get('powersupply_brand2');
        Session::put('powersupply_brand3', $voeding_merk3);
        echo Session::get('powersupply_brand3');
        Session::put('powersupply_brand4', $voeding_merk4);
        echo Session::get('powersupply_brand4');
        Session::put('powersupply_brand5', $voeding_merk5);
        echo Session::get('powersupply_brand5');
        Session::put('pci_express_6pin', $voeding_pci6);
        echo Session::get('pci_express_6pin');
        Session::put('pci_express_6pin2pin', $voeding_pci6_2);
        echo Session::get('pci_express_6pin2pin');

        echo Session::get('powersupply_price_min');
        echo Session::get('powersupply_price_max');
        echo Session::get('powersupply_power_min');
        echo Session::get('powersupply_power_max');
        echo Session::get('s-ata_min');
        echo Session::get('s-ata_max');
    }
}

?>