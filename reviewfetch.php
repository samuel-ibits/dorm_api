<?php include 'connect.php';
include 'tokenizer.php';


if(validatetoken($_COOKIE['dormtoken'])== 1){



$sul = "SELECT * FROM review ORDER BY id DESC";
$result= $sta = $conn2->query($sul);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
$abc=$row["id"];$rop=$row["id"];
	$rateeid=$row["rateid"];
	
	// number of coments
$suql = "SELECT * FROM c".$rateeid; 
 $connStatus = $conn5->query($suql); 
 $numberOfcoments= mysqli_num_rows($connStatus); 
 if($numberOfcoments==""){$numberOfcoments="0";}
  $numberOfcoment='<span style="color:red">'.$numberOfcoments.' </span>';
  
  

  //number of liked
		$l="steelblue";$m="liked";$n="";
$suql = "SELECT * FROM ".$rateeid." WHERE color like '%{$l}%' OR color like '%{$m}%' OR color like '%{$n}%'"; 
 $connStatus = $conn5->query($suql); 
 $numberOfRows= mysqli_num_rows($connStatus); 
 if($numberOfRows==""){$numberOfRows="0";}
  $numberOfliked='<span style="color:red">'.$numberOfRows.' </span>';


  //number of disliked
		$r="red";$s="nlike";
$suql = "SELECT * FROM ".$rateeid." WHERE color like '%{$r}%' OR color like '%{$s}%'"; 
 $connStatus = $conn5->query($suql); 
 $bnumberOfRows= mysqli_num_rows($connStatus); 
 if($bnumberOfRows==""){$bnumberOfRows="0";}
  $bnumberOfdisliked='<span style="color:red">'.$bnumberOfRows.' </span>';
  

  $row['dislikes']=$bnumberOfRows;
  $row['likes']= $numberOfRows;
  $row['comment']=$numberOfcoments;


  $id=$row['id'];
       
  $tag=$row['tag'];
      
  $message=$row['message'];
  
  $date=$row['date'];
     
  $time=$row['time'];
     
  $username=$row['username'];
 
  $userid=$row['userid'];
   
  $rateid=$row['rateid'];
   
  $school=$row['school'];
   
  $course=$row['course'];
   
  $pic=$row['pic'];
      
  $title=$row['title'];
    
  $mediatype1=$row['mediatype1'];
  $mediaurl1=$row['mediaurl1'];

  $mediatype2=$row['mediatype2'];
  $mediaurl2=$row['mediaurl2'];

                                                                                                                                                                                          
                                    
                              
  $json_response = json_encode($row);

  return $json_response;
}

}
}

?>