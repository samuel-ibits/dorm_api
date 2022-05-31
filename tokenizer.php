<?php include 'connect.php';


function validatetoken($token){
$rselr="SELECT * FROM tokenizer WHERE id='".$token."'";
$result= $GLOBALS['conn19']->query($rselr);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
    echo '<script> alert("token validated");</script>';
    $GLOBALS['$userid']= $row["userid"];

}    return 1;
echo 1;
}else{     return 0;
}
session_start();
 $_SESSION['dormuserid']=$GLOBALS['$userid'];

}


function generatetoken($userid){
    $time= date("Y-m-d h:i:sa");

$token=substr(md5(time()), 0, 20);
$sqllp = "INSERT INTO tokenizer (id, userid, timestampp)VALUES ('$token', '$userid', '$time')";




If ($GLOBALS['conn19']->query($sqllp) == TRUE) {
  echo '<script> alert("token generated sucessfully")</script>';

  session_start();
 $_SESSION['dormtoken']=$token;

  return $token;
}

}



?>