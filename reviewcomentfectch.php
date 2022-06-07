<?php include 'connect.php';
include 'tokenizer.php';



if(validatetoken($_COOKIE['dormtoken'])== 1){

    $rselr="SELECT * FROM c".$u;
    $result= $conn5->query($rselr);
      If ($result->num_rows>0){
          echo'           <div class="comments" >
    ';
    While ($row=$result->fetch_assoc()){
      $lcomment=$row["comment"];
      $luname=$row["username"];
      $lsound=$row["sound"];
     if($row["sound"]=="media/" or $row["sound"]==""){$aud="none";}else{$aud="block";}
      $ltime=$row["time"];
      if($row["pic"]=="" or $row["pic"]=="pro.png"){$pic="https://dorm.com.ng/media/ppic/pro.png";}else{
        $pic="https://dorm.com.ng/".$row["pic"];}
    
}
      }}

?>