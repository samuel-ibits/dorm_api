<?php include 'connect.php';
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
   

function response($userid,$response_desc,$response_code){
	$response['userid'] = $userid;
	$response['response_code'] = $response_code;
	$response['response_desc'] = $response_desc;
	$json_response = json_encode($response);
	echo $json_response;
} 
// get posted data
$data = json_decode(file_get_contents("php://input"));
  
 // set product property values
 
   
 $email=$data->email;
 $fname=$data->fname;
 $lname=$data->lname;
 $fulname=$fname." ". $lname;
 $phon=$data->phone;
 $ch=strlen($phon);
 $chh=is_numeric($phon);
 if($ch<11 OR $ch>11 OR $chh!=1 ){$err=" Invalid phone-number";
 }else{$phone=$phon;$err="";} 
 $uname=$data->uname;
 $pas=$data->pass;
 $repass=$data->repass;

 if ($pas==$repass AND $err==""){$pass=$data->pass;	$err2="";
 $pockid='pocket'.rand();

 $userid='user'.rand();

 $tokenid= 'a'.$phone.$pass;
  $date= date("Y-m-d h:i:sa");
 
 
 
    
 
 $ins="INSERT INTO users (id, fname, lname, uname, password, phone, userid, email) VALUES ('$tokenid', '$fname', '$lname', '$uname', '$pass', '$phone', '$userid', '$email')";
  
 }else{
     $err2="Passwords does not match";
 }if ($conn->query($ins)===TRUE) {
     $sqdd="INSERT INTO profile (Id, ppic, name, username, phone, sta, date, mcred, course, school, email, descyour, year, pocketid, howsch, descou, dessch, dob, bescou, besstudtm, rescrush, irep, enjdoing, favfood, ihate, icherish) VALUES ('$userid', 'media/', '$fname', '$uname', '$phone', '1', '$date', '5', '', '', '$email', '' , '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
 if ($conn6->query($sqdd)===TRUE) {}else{}
 
 $sqdl="CREATE TABLE ".$userid." (id VARCHAR(30) NOT NULL PRIMARY KEY, shown TEXT NOT NULL, prefer TEXT NOT NULL, average TEXT NOT NULL)";
 if ($conn9->query($sqdl)===TRUE) {}else{}
 
     echo "New Account Created";
 $ale1 = "Account created success";
 echo " <script type='text/javascript'>alert('$ale1'); </script>".$ale1;
  $prof="block";$regdis="none";
  
  $rselr="SELECT * FROM users WHERE id='".$tokenid."'";
 $result= $conn->query($rselr);
   If ($result->num_rows>0){
 While ($row=$result->fetch_assoc()){
     $f=$userid;
     $_SESSION['dormuserid']="$f";
     
 }}
 } else {if($err==""){if($err2==""){
 $ale2 = "Error:  Account not created phone-number has already been used before If this is your number contact us on facebook @ m.me/dorm.com.ng";
 echo "<script type='text/javascript'>alert('$ale2'); </script>".$ale2;
 $prof="none"; $regdis="block";
     echo 'Error:   Account not created phone-number has already been used before If this is your number <a href="info@dorm.com.ng">send us a message now</a> <br>';
     
 }else{$ale2 = "Error: Passwords does not match.Check passwords and try again";
         echo "<script type='text/javascript'>alert('$ale2'); </script>".$ale2;
 $prof="none"; $regdis="block";
     }
     
 }
     
 else{$ale2 = "Error: You have entered an invalid phone number.Check your phone number and try again";
 echo "<script type='text/javascript'>alert('$ale2'); </script>".$ale2;
 $prof="none"; $regdis="block";
     }
 
 
 
 }
 

$sel= "SELECT * FROM users WHERE id='".$toid."'";
$result= $conn->query($sel);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){

  

$userid=$row["userid"];
$phone= $row["phone"];
$uname= $row["uname"];
$password= $row["password"];
$tokid='a'.$phone.$password;
$tokid2='a'.$uname.$password;	
If($toid==$tokid or $toid==$tokid2){
    $f=$userid;
    $_SESSION['dormuserid']="$f";

 
  $response_desc='login sucessfull';
    $response_code=200;
    response($f,$response_desc,$response_code);

   //Echo '<script type="text/Javascript">window.location.href ="https://dorm.com.ng/v2/dm/html/studytools.php";</script>';
}
}

}else{
  $response_desc='login not sucessfull';
    $response_code=500;
    response('null',$response_desc,$response_code,);

}



?>