<?php 

error_reporting(0);
require 'vendor/autoload.php';
use Twilio\Rest\Client;

// $host = $_GET['host'];
// $port = $_GET['port'];
$api = $_GET['api'];
$protocol = $_GET['protocol'];
$proxies = $_GET['proxies'];

$fields = array(
 'protocol' => $protocol,
);
$fields['proxies'] = $proxies;
if(isset($api) && isset($proxies)){
    $api .= '/proxy';
    $fields_string = json_encode($fields);
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api);
	curl_setopt($ch, CURLOPT_POST, TRUE);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $result = curl_exec($ch); // get boolean result 
	curl_close($ch);
	$cap = json_decode($result, true);
    error_log(print_r($cap, true), 0);
   
   if ($cap == '1') {
      echo "SUCCESS";
   }else{
      echo "FAILED";
   }
}else{
   echo '<span style="width: 100%;margin: 5px 0;color: #9c2a43;font-size: 15px;font-weight: bold;">Invalid Data</span>';
}







?>