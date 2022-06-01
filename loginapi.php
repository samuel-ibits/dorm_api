<?php include 'connect.php';
include 'tokenizer.php';


$u=$_POST['phone'];
$p=$_POST['pass'];



 
    
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




  //  Echo '<script type="text/Javascript">window.location.href ="https://dorm.com.ng/v2/dm/html/studytools.php";</script>';
   
}
}}

if (generatetoken($userid)==""){
return false;
}else{
  return true; 
};


?>