<?php
/**
 * Created by PhpStorm.
 * User: Michelle
 * Date: 17/01/2015
 * Time: 17:19
 */

class CheckController extends BaseController {

    public function checkToContinue() {
        if(Session::get('powersupply_check') != "-" && Session::get('processorcooler_check') != "-"
            && Session::get('internalharddrive_check') != "-" && Session::get('soundcard_check') != "-"
            && Session::get('pci_check') != "-" && Session::get('videocard_check') != "-"
            && Session::get('processor_check') != "-" && Session::get('internalmemory_check') != "-"
            && Session::get('internalmemory_check') != "-" && Session::get('casing_check') != "-"
            && Session::get('ssd_check') != "-" && Session::get('bluraydvd_check') != "-") {
            return View::make('awaiting_response')->with('test', "dit is een test");
        } else {
            return View::make('index')->with('message', 'not done yet');
        }
    }
}