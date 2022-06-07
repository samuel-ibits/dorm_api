<?php include 'connect.php';
include 'tokenizer.php';


if(validatetoken($_COOKIE['dormtoken'])== 1){


	$date=date("h:i:s A"). date("F j, Y");
$id=$userid."acl".rand();
	$price=$_POST['price'];
		$about=$_POST['address'];
			$title=$_POST['title'];
				$wphone=$_POST['wphone'];
				$status=$_POST['status'];
				$link="https://wa.me/".$wphone."?text=Hi,+I+am+intrested+in+your+Accomodia+house+Title:+".$title." ";
				$null="";
$views="0";
 
 
	
		$file="uploadfile1";
		
$medianame1=basename( $_FILES["$file"]["name"]);
$mediatemp1=$_FILES["$file"]['tmp_name'];
  $uploaddir="../../../media/accomodia/img/";
 $uploaddest1=$uploaddir.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);
 $upl11= $uploaddest1;
 
 
 
		$file="uploadfile2";
		
$medianame1=basename( $_FILES["$file"]["name"]);
$mediatemp1=$_FILES["$file"]['tmp_name'];
  $uploaddir="../../../media/accomodia/img/";
 $uploaddest1=$uploaddir.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);
 $upl12= $uploaddest1;
	
 
 
		$file="uploadfile3";
		
$medianame1=basename( $_FILES["$file"]["name"]);
$mediatemp1=$_FILES["$file"]['tmp_name'];
  $uploaddir="../../../media/accomodia/img/";
 $uploaddest1=$uploaddir.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);
 $upl13= $uploaddest1;
 
		$file="uploadfile4";
		
$medianame1=basename( $_FILES["$file"]["name"]);
$mediatemp1=$_FILES["$file"]['tmp_name'];
  $uploaddir="../../../media/accomodia/img/";
 $uploaddest1=$uploaddir.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);
 $upl14= $uploaddest1;
 
 
 
		$file="uploadfile5";
		
$medianame1=basename( $_FILES["$file"]["name"]);
$mediatemp1=$_FILES["$file"]['tmp_name'];
  $uploaddir="../../../media/accomodia/img/";
 $uploaddest1=$uploaddir.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);
 $upl15= $uploaddest1;
 
 
		$file="uploadfile6";
		
$medianame1=basename( $_FILES["$file"]["name"]);
$mediatemp1=$_FILES["$file"]['tmp_name'];
  $uploaddir="../../../media/accomodia/img/";
 $uploaddest1=$uploaddir.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);
 $upl16= $uploaddest1;
 
 
 
		$file="uploadfile7";
		
$medianame1=basename( $_FILES["$file"]["name"]);
$mediatemp1=$_FILES["$file"]['tmp_name'];
  $uploaddir="../../../media/accomodia/img/";
 $uploaddest1=$uploaddir.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);
 $upl17= $uploaddest1;
	
 
	
	if ($name==""){
	    
	
	$oop="select * from product"; 
$conn14->query($oop);
	$sqd="INSERT INTO `product` (`id`, `name`, `price`, `about`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `pic6`, `vid1`, `vid2`, `vid3`, `vid4`, `vid5`, `vid6`, `messageid`, `status`, `views`, `contact`, `link`) VALUES ('$id', '$title', '$price', '$about', '$upl11', '$upl12', '$upl13', '$upl14', '$upl15', '$upl16', '$upl17', '$null', '$null', '$null', '$null', '$null', '$id', '$status', '$views', '$wphone', '$link')";
	 if ($conn14->query($sqd)==false) {echo "Error: not uploaded ";
	  }else{echo'Uploaded Successfully';
	      
$ale1 = "Uploaded successfully";
echo "<script type='text/javascript'>alert('Logged in successfully');</script>";

 Echo '<script type="text/Javascript">window.location.href ="https://dorm.com.ng/v2/dm/html/accomodia.php";</script>';

	  }
	}


}


?>
