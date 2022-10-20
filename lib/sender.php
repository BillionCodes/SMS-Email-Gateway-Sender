<?php 

error_reporting(0);
require 'vendor/autoload.php';
use Twilio\Rest\Client;

$number = $_GET['number'];
$sender = $_GET['sender'];
$api = $_GET['api'];
$carrier = $_GET['carrier'];
//$api = explode('|', $api);
$message = $_GET['message'];

//remove sender( to implement later..)  set: carrier, msg, num, text 
if (ctype_digit($number) && isset($sender) && isset($number) && isset($api) && isset($message) && isset($carrier)) {
   


   //$sid = $api[0];
   //$token = $api[1];
   $fields = array(
    'number' => $number,
    'message' => $message,
	'from' => $sender,
    'carrier' => $carrier);
    $fields_string = http_build_query($fields);
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api);
	curl_setopt($ch, CURLOPT_POST, TRUE);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    $result = curl_exec($ch); // get boolean result 
	curl_close($ch);
	$cap = json_decode($result, true);
   
   if ($result == 'true1') {
      echo '<span style="width: 100%;margin: 5px 0;color: #7bad8b;font-size: 15px;">Message Sent => +'.$number.'</span>';
   }else{
      echo '<span style="width: 100%;margin: 5px 0;color: #ff0000;font-size: 15px;">Message Failed => +'.$number.'</span>';
   }
}else{
   echo '<span style="width: 100%;margin: 5px 0;color: #9c2a43;font-size: 15px;">Invalid Data</span>';
}







?>