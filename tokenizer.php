<?php include 'connect.php';
//generate token function
function generatetoken($userid){
    $time= date("Y-m-d h:i:sa");

    //create the  random token with md5
$token=substr(md5(time()), 0, 20);

// store in db for  future validation
$sqllp = "INSERT INTO tokenizer (id, userid, timestampp)VALUES ('$token', '$userid', '$time')";

If ($GLOBALS['conn19']->query($sqllp) == TRUE) {
  //echo '<script> alert("token generated sucessfully")</script>';

//if sucesssfull store in cookies and sessions
 



 setcookie("dormtoken", $token, time() + (86400 * 30), "/");


  
}

return $token;}



?>