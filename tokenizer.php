<?php include 'connect.php';


function validatetoken($token){
$rselr="SELECT * FROM tokenizer WHERE id='".$token."'";
$result= $conn19->query($rselr);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
    echo '<script> alert("token validated");</script>';
   $userid= $row["userid"];

}    return true;

}else{     return false;
}
session_start();
 $_SESSION['dormtoken']=$token;

}


function generatetoken($userid){
    $time= date("Y-m-d h:i:sa");

//$token=substr(md5(time()), 0, 20);
$token='ss';
$sqllp = "INSERT INTO tokenizer (id, userid, timestampp)VALUES ('$token', '$userid', '$time')";




If ($GLOBALS['conn19']->query($sqllp) == TRUE) {
  echo '<script> alert("token generated sucessfully")</script>';

  return $token;
} else{
  echo 'thiserror '.$GLOBALS['conn19']->error;
}

}



?>