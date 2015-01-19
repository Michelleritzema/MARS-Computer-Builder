<?php
/**
 * Created by PhpStorm.
 * User: Michelle
 * Date: 19/01/2015
 * Time: 11:07
 */

class CustomerData extends Eloquent {

    protected $table = 'customer_data';
    protected $primaryKey = 'datetime';
    public $timestamps = false;

}