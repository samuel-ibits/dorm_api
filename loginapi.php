<?php include 'connect.php';
include 'tokenizer.php';
header("Content-Type:application/json");


function response($userid,$response_desc,$response_code){
	$response['userid'] = $userid;
	$response['response_code'] = $response_code;
	$response['response_desc'] = $response_desc;
	$json_response = json_encode($response);
	echo $json_response;
}




function listener($f){
	include 'connect.php';
	$_SESSION['dormuserid']="$f";
	
		
		   $date= date("Y-m-d h:i:sa");
	 $iiin = "INSERT INTO login (id, userid, date, page) VALUES ( '', '$f', '$date', 'loging username')";
	if ($conn17->query($iiin)==true) {
		
	
	}else{echo $conn17->error;}
	}



$u=$_GET['phone'];
$p=$_GET['pass'];


 
    
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
$toid='a'.$t.$p;


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
    listener($f);
   //Echo '<script type="text/Javascript">window.location.href ="https://dorm.com.ng/v2/dm/html/studytools.php";</script>';
}
}

}else{
  $response_desc='login not sucessfull';
    $response_code=500;
    response('null',$response_desc,$response_code,);

}



?>