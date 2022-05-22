<?php include 'connect.php';
include 'tokenizer.php';


generatetoken('user1002789710');


if(validatetoken($_SESSION['dormtoken'])=="true"){
  


// header("Content-Type:application/json");





 
$rselr="SELECT * FROM profile WHERE Id='".$userid."'";
$result= $conn6->query($rselr);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
    
  $pic=$row["ppic"];
 if($pic=="" or $pic=="../../../media/profiles/" or $pic=="/media/profiles"  or $pic=="/media/ppic/pro.png"or $pic=="media/"){$ppic="media/ppic/pro.png";$ppid="images/image.jpg";
  }else{ $ppic=$row["ppic"];$ppid=$row["ppic"];}
$name=$row["name"];
$username=$row["username"];
$phone=$row["phone"];
$sta=$row["sta"];
$mcred=$row["mcred"];
$course=$row["course"];
$school=$row["school"];
$email=$row["email"];
$descyour=$row["descyour"];
$year=$row["year"];
$pocketid=$row["pockid"];
$howsch=$row["howsch"];
$descou=$row["descou"];
$dessch=$row["dessch"];
$dob=$row["dob"];
$bescou=$row["bescou"];
$besstudtm=$row["besstudtm"];
$rescrush=$row["rescrush"];
$irep=$row["irep"];
$enjdoing=$row["enjdoing"];
$favfood=$row["favfood"];
$ihate=$row["ihate"];
$icherish=$row["icherish"];
	
response($name,$username,$phone,$sta,$mcred,$course,$school,$email,$descyour,$year,$pocketid,$howsch,$descou,$dessch,$dob,$bescou,$besstudtm,$rescrush,$irep,$enjdoing,$favfood,$ihate,$icherish,$response_code,$response_desc); 

} 
}else{
  close(200,"No Record Found");
     }
     
     
  
  // mysqli_close($conn6);
  
  function response($name,$username,$phone,$sta,$mcred,$course,$school,$email,$descyour,$year,$pocketid,$howsch,$descou,$dessch,$dob,$bescou,$besstudtm,$rescrush,$irep,$enjdoing,$favfood,$ihate,$icherish,$response_code,$response_desc){
    $response["name"]= $name  ;
    $response["username"]=$username ;
    $response["phone"]=  $phone;
    $response["sta"]= $sta ;
    $response["mcred"]=  $mcred;
    $response["course"]=  $course ;
    $response["school"]= $school  ;
    $response["email"]=  $email ;
    $response["descyour"]= $descyour  ;
    $response["year"]=  $year ;
    $response["pockid"]=  $pocketid ;
    $response["howsch"]= $howsch  ;
    $response["descou"]= $descou ;
    $response["dessch"]= $dessch ;
    $response["dob"]= $dob  ;
    $response["bescou"]= $bescou  ;
    $response["besstudtm"]= $besstudtm ;
    $response["rescrush"]= $rescrush  ;
    $response["irep"]=  $irep  ;
    $response["enjdoing"]= $enjdoing ;
    $response["favfood"]= $favfood  ;
    $response["ihate"]=  $ihate;
    $response["icherish"]=$icherish   ;
    $response["response_code"]=$response_code  ;
    $response["response_desc"]=$response_desc  ;
    
     
    


    $json_response = json_encode($response);
    echo 'response'.$json_response;
  }

  function close($response_code,$response_desc){
    
    $response['response_code'] = $response_code;
    $response['response_desc'] = $response_desc;
    
    $json_response = json_encode($response);
    echo 'response'.$json_response;
  }

}
  ?>