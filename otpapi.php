<?php include 'connect.php';
include 'texterapi.php';

 
   $p=$_GET['phone'];
   $u=$_GET['uname'];
   $vercode=rand(1, 9).rand(1, 9).rand(1, 9).rand(1, 9);
 
	$sel= "SELECT * FROM users WHERE phone like '%{$p}%' AND uname like '%{$u}%'";
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
    $topic='Dorm';
    $message='Do not share this code with anyone. :'.$vercode;
    
    texterapi($topic, $phone, $message);
    $response_desc="OTP sent successfully";
    $response_code=200;
 response($vercode,$response_desc,$response_code);
    }else{
   $response_desc="OTP Failed, No match found, this account does not exist";
    $response_code=500;
 response($vercode,$response_desc,$response_code);}