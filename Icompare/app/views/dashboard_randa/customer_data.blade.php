<?php
/**
 * Created by PhpStorm.
 * User: Michelle
 * Date: 20/01/2015
 * Time: 10:58
 */

$customer_data = CustomerData::all();
$customer_data_array = $customer_data->toArray();
var_dump($customer_data_array);
?>