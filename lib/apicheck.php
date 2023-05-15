<?php 


if (!empty($_GET['api'])) {
	$sender = $_GET['sender'];
	$api = $_GET['api'];
	$mail = $_GET['to'];
	$api .= '/test';
	
	$fields = array(
    'message' => 'I sent this message for free',
	'mail' => $mail,
	'sender' => $sender
);
	$fields_string = http_build_query($fields);
	$ch = curl_init();
	// check if smtp is live by sending test email
	curl_setopt($ch, CURLOPT_URL, $api);
	curl_setopt($ch, CURLOPT_POST, TRUE);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string); // POST method for smtp


	$result = curl_exec($ch); // get boolean result 
	curl_close($ch);
	$cap = json_decode($result);
	error_log(print_r($cap, true), 0);
	if ($result == 'true1') { 
		echo "LIVE";
	}else{
		echo "DEAD";
	}

}
else{
	echo "Server Empty!";
}







?>