<?php include 'connect.php';
header("Content-Type:application/json");
header("Access-Control-Allow-Origin: *");

include 'tokenizer.php';

//response
function response($userid,$response_desc,$response_code){
	$response['userid'] = $userid;
	$response['response_code'] = $response_code;
	$response['response_desc'] = $response_desc;
	$json_response = json_encode($response);
}
//tracker
function listener($f){
	include 'connect.php';
	$_SESSION['dormuserid']="$f";
	
		
		   $date= date("Y-m-d h:i:sa");
	 $iiin = "INSERT INTO login (id, userid, date, page) VALUES ( '', '$f', '$date', 'loging username')";
	if ($conn17->query($iiin)==true) {
		
	
	}else{echo $conn17->error;}
	}


//get login details
$u=$_GET['phone'];
$p=$_GET['pass'];


 //validating
    	$selr="SELECT * FROM users WHERE phone like '%{$u}%'";
$result= $conn->query($selr);
If ($result->num_rows>0){  
While ($row=$result->fetch_assoc()){
		
	$t= $row["phone"];

	
}}else{
    $selr="SELECT * FROM users WHERE uname like '%{$u}%'";
$result= $conn->query($selr);
If ($result->num_rows>0){  
While ($row=$result->fetch_assoc()){
	
	
	$t= $row["phone"];

	
}}
    
}
//get the right combination of toid
$toid='a'.$t.$p;

//proper login in
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
   

 setcookie("dormpage", "studytools.php", time() + (86400 * 30), "/");
 
  $response_desc='login successfull';
    $response_code=200;
   
    listener($f);
	$token=generatetoken($f);
	response($token, $response_desc, $response_code);
	setcookie("dormtoken", $token, time() + (86400 * 30), "/");

}
}

}else{
  $response_desc='login not sucessfull';
    $response_code=500;
    response('null',$response_desc,$response_code,);

}



?>