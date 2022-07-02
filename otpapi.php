<?php include 'connect.php';
include 'texterapi.php';
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
   
 
//    $p=$_GET['phone'];
//    $u=$_GET['uname'];
   $vercode=rand(1, 9).rand(1, 9).rand(1, 9).rand(1, 9);
      $u="sammy";
      $p= "08151519625";
   $sel= "SELECT * FROM users WHERE phone like '%".$p."%' AND uname like '%".$u."%'";
   $result= $conn->query($sel);
   If ($result->num_rows>0){  
   While ($row=$result->fetch_assoc()){
   $userid= $row["userid"];
   $id= $row["id"];
   $phone= $row["phone"];
   }
     $_SESSION['vercode']=$vercode;
      $_SESSION['userid']=$userid;
       $_SESSION['idd']=$id;
       $_SESSION['phonee']=$phone;

   $topic='Dorm OTP';
   $message='do no share this code with anyone  :'.$vercode;
   texterapi($topic, $phone, $message);
   }else{
   $ale2 = "No match found, this account does not exist";
   echo "<script type='text/javascript'>alert('$ale2'); </script>".$ale2;
   }
   if ($conn->query($sel) === TRUE) {
    $response_desc="OTP sent successfully";
    $response_code=200;
 response($vercode,$response_desc,$response_code);
}else{ $response_desc="OTP Failed, account cannot be verified".$conn->error;
    $response_code=500;
 response($vercode,$response_desc,$response_code);}