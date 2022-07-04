<?php include 'connect.php';
if($_GET['token']=""){
    $token=$_COOKIE['dormtoken'];
}

  $rselr="SELECT * FROM tokenizer WHERE id='".$token."'";
  $result= $GLOBALS['conn19']->query($rselr);
    If ($result->num_rows>0){
     While ($row=$result->fetch_assoc()){
      
      $userid= $row["userid"];
      
      
    }   
          }
  
  

          ?>
