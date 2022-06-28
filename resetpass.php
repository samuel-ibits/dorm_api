<?php include 'connect.php';
header("Content-Type:application/json");

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET');
session_start();

$vercode=rand(1, 9).rand(1, 9).rand(1, 9).rand(1, 9);



	$p=$_GET['phone'];
$u=$_GET['uname'];

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
$topic='dorm';
$message='DORM :'.$vercode;

echo"<fieldset style="."'"."visibility:hidden;padding:0%;margin:0px;height:0px;width:0px;"."'".">"."<embed src ="."'"."https://netbulksms.com/index.php?"."option=com_spc&comm=spc_api&username=dormcomn1&password=dormcomn1&sender=$topic&recipient=$phone&message=$message&
"."'".">";
Echo"</fieldset>";

}else{
$ale2 = "No match found, this account does not exist";
echo "<script type='text/javascript'>alert('$ale2'); </script>".$ale2;
}
if ($conn->query($sel) === TRUE) {}
 

   




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