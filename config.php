<?php
require_once "vendor/autoload.php";
include 'connection.php';
include 'session_start.php';

use Omnipay\Omnipay;

define('CLIENT_ID', 'ARaSfRojMjrMg-2AH3CwsHYoVYONqEtxoj06q2oI21gK4nyPXOrZkHo94S93hCH0w18KoYHxgC1YdpOM');
define('CLIENT_SECRET', 'EL1P2k2jeYMPQDGdWoRvqwWfFsj3khSoeLLe5-AudtKSBPRU0uSIz_sVdj1Uj6Z7CEgHZfUlDuV4zkA7');

//define('PAYPAL_RETURN_URL', 'YOUR_SITE_URL/success.php');
//define('PAYPAL_RETURN_URL', 'success.php');
define('PAYPAL_RETURN_URL', 'http://localhost/1.Obra/successful.php');
//define('PAYPAL_RETURN_URL', 'http://localhost/1.Obra/process_payment.php');




//define('PAYPAL_CANCEL_URL', 'YOUR_SITE_URL/cancel.php');
define('PAYPAL_CANCEL_URL', 'http://localhost/1.Obra/cancel.php');
define('PAYPAL_CURRENCY', 'PHP'); // set your currency here



$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live