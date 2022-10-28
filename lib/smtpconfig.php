<?php 

error_reporting(0);
require 'vendor/autoload.php';
use Twilio\Rest\Client;

$host = $_GET['host'];
$port = $_GET['port'];
$api = $_GET['smtp'];
$user = $_GET['user'];
$pass = $_GET['password'];
$ssl = $_GET['ssl'];

//remove sender( to implement later..)  set: carrier, msg, num, text 
if (ctype_digit($port) && isset($host) && isset($port) && isset($api) && isset($user) && isset($ssl)) {
   
   $fields = array(
    'host' => $host,
    'port' => $port,
	'user' => $user,
    'pass' => $pass,
    'secureConnection' => $ssl
);
    $fields_string = http_build_query($fields);
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api);
	curl_setopt($ch, CURLOPT_POST, TRUE);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    $result = curl_exec($ch); // get boolean result 
	curl_close($ch);
	$cap = json_decode($result, true);
   
   if ($result == 'true1') {
      echo "SUCCESS";
   }else{
      echo "FAILED";
   }
}else{
   echo '<span style="width: 100%;margin: 5px 0;color: #9c2a43;font-size: 15px;font-weight: bold;">Invalid Data</span>';
}







?>