<?php 

error_reporting(0);
require 'vendor/autoload.php';
use Twilio\Rest\Client;

// $host = $_GET['host'];
// $port = $_GET['port'];
$bulk = $_GET['bulk'];
$service = $_GET['service'];
$api = $_GET['smtp'];
$ssl = $_GET['ssl'];

$fields = array(
 'service' => $service,
 'secureConnection' => $ssl,
 'bulk' => $bulk
);

if(isset($api) && isset($service)){
    if($bulk == "false") {
        $user = $_GET['user'];
        $pass = $_GET['password'];
        
        //remove sender( to implement later..)  set: carrier, msg, num, text 
        if (isset($user) && isset($pass)) {
           $fields['user'] = $user;
           $fields['pass'] = $pass;
        } 
    } if($bulk == 'true'){
        $list = $_GET['smtplist'];

        if(isset($list)) {
            //$List is an array 
            $fields['smtplist'] = $list;
            //error_log(print_r($list, true), 0);
        }

    }
    //$fields_string = http_build_query($fields);
    $fields_string = json_encode($fields);
    error_log(print_r($fields_string, true), 0);
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api);
	curl_setopt($ch, CURLOPT_POST, TRUE);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $result = curl_exec($ch); // get boolean result 
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $myerr = curl_error($ch);
    error_log(print_r($myerr, true), 0);
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