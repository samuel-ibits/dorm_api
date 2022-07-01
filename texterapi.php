<?php

$phone=$_GET['phone'];
$topic=$_GET['topic'];
$message=$_GET['uname'];

if($topic==""){
    $topic="dorm";
}


if($phone!==""){
    texterapi($topic, $phone, $message); 
}

function texterapi($topic, $phone, $message){

$url = "https://netbulksms.com/index.php?"."option=com_spc&comm=spc_api&username=dormcomn1&password=dormcomn1&sender=".$topic."&recipient=".$phone."&message=".$message."";
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
	
	
	
	
	   
}
	?>