<?php include 'connect.php';

header("Content-Type:application/json");

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
   

function response($vercode,$response_desc,$response_code){
	$response['vercode'] = $vercode;
	$response['response_code'] = $response_code;
	$response['response_desc'] = $response_desc;
	$json_response = json_encode($response);
	echo $json_response;
} 
   


$phone=$_GET['phone'];
$topic=$_GET['topic'];
$message=$_GET['uname'];

if($topic==""){
    $topic="dorm";
}


if($phone==""){echo'emptty';}else{
    texterapi($topic, $phone, $message); 
}

function texterapi($topic, $phone, $message){
    echo'api called';
$url = "https://netbulksms.com/index.php?option=com_spc&comm=spc_api&username=dormcomn1&password=dormcomn1&sender=dorm&recipient=08151519625&message=hello";
// $url="https://netbulksms.com/components/com_spc/smsapi.php?username=dormcomn1&password=dormcomn1&sender=@@sender@@&recipient=@@08151519625@@&message=@@message@@&";

 	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
	
	
	
	print_r($result);
	   
}
	?>