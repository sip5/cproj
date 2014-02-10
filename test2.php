<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
		$url = "https://cp4.njit.edu/cp/home/login";
		$fields = array(
			'user'=>'wad3',
			'pass'=>'1997xf11',
			'uuid'=>'0xACA021'
			
		);
		$fields_string="";
		foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
			rtrim($fields_string, '&');
			
		
		$ch = curl_init();

	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
	curl_setopt($ch, CURLOPT_MAXREDIRS, 1); 

	//execute post
	$result = curl_exec($ch);

	//close connection
	curl_close($ch);
	
	print_r($result);