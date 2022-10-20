<?php 


if (!empty($_GET['api'])) {
	$api = $_GET['api'];
	$fields = array(
    'number' => '5309628367',
    'message' => 'I sent this message for free',
	'from' => 'Sender',
    'carrier' => 'att');
	$fields_string = http_build_query($fields);
	$ch = curl_init();
	// check if smtp is live by sending test email
	curl_setopt($ch, CURLOPT_URL, $api);
	curl_setopt($ch, CURLOPT_POST, TRUE);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string); // POST method for smtp


	$result = curl_exec($ch); // get boolean result 
	curl_close($ch);
	//$cap = json_decode($result);
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