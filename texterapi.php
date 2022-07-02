<?php include 'connect.php';




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
Echo"<fieldset style="."'"."visibility:hidden;padding:0%;margin:0px;height:0px;width:0px;"."'".">"."<embed src ="."'"."https://netbulksms.com/index.php?"."option=com_spc&comm=spc_api&username=dormcomn1&password=dormcomn1&sender=$topic&recipient=$phone&message=$message&
    "."'".">";
    Echo"</fieldset>";

}
?>