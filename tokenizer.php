<?php include 'connect.php';

//validate token
function validatetoken($token){ 
$rselr="SELECT * FROM tokenizer WHERE id='".$token."'";
$result= $GLOBALS['conn19']->query($rselr);
  If ($result->num_rows>0){
   While ($row=$result->fetch_assoc()){
    echo '<script> alert("token validated");</script>';
    $GLOBALS['$userid']= $row["userid"];

  }   
  // returns  userid as response  if true
  $response= $GLOBALS['$userid'];

   }else{ 
     //returns 0 as response iif false
     $response= 0;
        }

//returns  response
}return $response;

//generate token function
function generatetoken($userid){
    $time= date("Y-m-d h:i:sa");

    //create the  random token with md5
$token=substr(md5(time()), 0, 20);

// store in db for  future validation
$sqllp = "INSERT INTO tokenizer (id, userid, timestampp)VALUES ('$token', '$userid', '$time')";

If ($GLOBALS['conn19']->query($sqllp) == TRUE) {
  echo '<script> alert("token generated sucessfully")</script>';

//if sucesssfull store in cookies and sessions
 

 setcookie("dormtoken", $token, time() + (86400 * 30), "/");

  return $token;
}

}



?>