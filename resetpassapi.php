<?php include 'connect.php';

header("Content-Type:application/json");

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
 $phone=$data->phone;
   
 $uname=$data->uname;
 
  $pass=$data->pass;	
 $pockid='pocket'.rand();

 $userid='user'.rand();

 $tokenid= 'a'.$phone.$pass;
  $date= date("Y-m-d h:i:sa");
 
 
 
   




// if(isset($_POST['verify'])) {
// 	$vercodee=$_SESSION['vercode'];
// 	$myvercode=$_POST['vericode'];
// 	if ($vercodee==$myvercode){
// 		echo "corect";
// 		$card1="none";
// $card2="none";
// $card3="block";

// 	}else{ echo"incorrect";
	
    
//     }
// }

if(isset($_POST['setpass'])) {
	$oldpass=$_POST['oldpass'];
	$newpass=$_POST['newpass'];
	$userid=$_SESSION['userid'];
	$id=$_SESSION['idd'];
		if ($oldpass==$newpass){
	
	$phone=$_SESSION['phonee'];
	$newid='a'.$phone.$newpass;
	 $upd="UPDATE users SET password = '".$newpass."',id='".$newid."' where id='".$id."'";
	 
    mysqli_query($conn,$upd);
        if ($conn->query($upd) === TRUE) {
	$ale2="your new password is:".$newpass;
	echo "<script type='text/javascript'>alert('$ale2'); </script>".$ale2;

	$_SESSION['dormuserid']=$userid;
	Echo '<script type="text/Javascript">window.location.href ="https://dorm.com.ng";</script>';
}else{
		}
}else{echo"the two password dont match";


}
	

}





?>