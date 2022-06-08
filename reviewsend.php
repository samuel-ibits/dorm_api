<?php include 'connect.php';
include 'tokenizer.php';



if(validatetoken($_COOKIE['dormtoken'])== 1){


$counter=$_POST['counter'];
 $tag=$_POST['tag'];
if(empty($tag)){$tag=$_POST['tag1'];}
if(empty($tag)){$tag=$_POST['tag2'];}
 if(empty($tag)){$tag="inside life";}
 $selr="SELECT * FROM reserve WHERE id='".$tag."'";
$result= $conn7->query($selr);
If ($result->num_rows>0){  
While ($row=$result->fetch_assoc()){
	$user1=$row["user1"];
	$user2=$row["user2"];
	$user3=$row["user3"];
	$user4=$row["user4"];
	$user5=$row["user5"];

	if($user1==$username OR $user2==$username OR $user3==$username OR $user4==$username OR $user4==$username ){
$comment=$_POST['comment'];
if(empty($comment)){$comment=$_POST['comment1'];}
if(empty($comment)){$comment="nocomment";}
$rateid="a".rand();
$comid="c".$rateid;
$time=date("h:i:s A");
$date=date("F j, Y");
$title="";
$school=$userschool;
$id="";
$course=$usercourse;


$pic=$ppic;


$media1=$_FILES["media1"];

$medianame1=basename( $_FILES["$media1"]["name"]);
$mediatemp1=$_FILES['$media1']['tmp_name'];

   $uploaddir1="media/audio/";
   $root="../../../";
 $uploaddest1=$root.$uploaddir1.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);


$media2=$_FILES["media2"];
$medianame2=basename( $_FILES["media2"]["name"]);
$mediatemp2=$_FILES['media2']['tmp_name'];

  $uploaddir2="media/image/";
  $root="../../../";
 $uploaddest2=$root.$uploaddir2.$medianame2;
 move_uploaded_file($mediatemp2,$uploaddest2);

$type1="";
$type2="";

$sql="CREATE TABLE ".$comid." (id CHAR(30) NOT NULL PRIMARY KEY, tagname TEXT NOT NULL, date TEXT NOT NULL, time TEXT NOT NULL, username TEXT NOT NULL, userid TEXT NOT NULL, comment TEXT NOT NULL, sound TEXT NOT NULL, title TEXT NOT NULL)";
if ($conn5->query($sql)===TRUE) {
}
$sql="CREATE TABLE ".$rateid." (id CHAR(30) NOT NULL PRIMARY KEY, color TEXT NOT NULL, tagname TEXT NOT NULL, date TEXT NOT NULL, time TEXT NOT NULL, username TEXT NOT NULL, userid TEXT NOT NULL, comment TEXT NOT NULL, title TEXT NOT NULL)";
if ($conn5->query($sql)===TRUE) {

 $stmt =$conn2->prepare("INSERT INTO review (id, tag, message, date, time, username, userid, rateid, school, course, pic, title, mediatype1, mediaurl1, mediatype2, mediaurl2) VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?)");
 $stmt->bind_param("isssssssssssssss",$id, $tag, $comment, $date, $time, $username, $userid, $rateid, $school, $course, $pic, $title, $type1, $uploaddest1, $type2, $uploaddest2);

 
if ( $stmt->execute()=== TRUE)  {
$ale1 = "comment posted";
echo " <script type='text/javascript'>alert('$ale1'); </script>";
 
} else {
$ale2 = "comment not posted";
echo "<script type='text/javascript'>alert('$ale2'); </script>";

    echo "Error: " . $in . "<br>" . $conn2->error;
}
} else {
$ale2 = "comment not posted";
echo "<script type='text/javascript'>alert('$ale2'); </script>";
echo "Error: " . $sql . "<br>" . $conn2->error;
}
$stmt->close();

		
	}else{
	$ale1 = "This tag has been reserved choose another tag please";
echo "<script type='text/javascript'>alert('$ale1');</script>";
}
}}else{
	
$comment=$_POST['comment'];
if(empty($comment)){$comment=$_POST['comment1'];}
if(empty($comment)){$comment="nocomment";}
$rateid="a".rand();
$comid="c".$rateid;
$time=date("h:i:s A");
$date=date("F j, Y");
$title="";
$school=$userschool;
$id="";
$course=$usercourse;



$pic=$ppic;

 

$media1=$_FILES["media1"];

$medianame1=basename( $_FILES["$media1"]["name"]);
$mediatemp1=$_FILES['$media1']['tmp_name'];

   $uploaddir1="media/audio/";
   $root="../../../";
 $uploaddest1=$root.$uploaddir1.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);


$media2=$_FILES["media2"];
$medianame2=basename( $_FILES["media2"]["name"]);
$mediatemp2=$_FILES['media2']['tmp_name'];

  $uploaddir2="media/image/";
  $root="../../../";
 $uploaddest2=$root.$uploaddir2.$medianame2;
 move_uploaded_file($mediatemp2,$uploaddest2);

$type1="";
$type2="";



$sql="CREATE TABLE ".$comid." (id CHAR(30) NOT NULL PRIMARY KEY, tagname TEXT NOT NULL, date TEXT NOT NULL, time TEXT NOT NULL, username TEXT NOT NULL, userid TEXT NOT NULL, comment TEXT NOT NULL, sound TEXT NOT NULL, title TEXT NOT NULL, pic TEXT NOT NULL)";
if ($conn5->query($sql)===TRUE) {
}
$sql="CREATE TABLE ".$rateid." (id CHAR(30) NOT NULL PRIMARY KEY, color TEXT NOT NULL, tagname TEXT NOT NULL, date TEXT NOT NULL, time TEXT NOT NULL, username TEXT NOT NULL, userid TEXT NOT NULL, comment TEXT NOT NULL, title TEXT NOT NULL)";
if ($conn5->query($sql)===TRUE) {

 $stmt =$conn2->prepare("INSERT INTO review (id, tag, message, date, time, username, userid, rateid, school, course, pic, title, mediatype1, mediaurl1, mediatype2, mediaurl2) VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?)");
 $stmt->bind_param("isssssssssssssss",$id, $tag, $comment, $date, $time, $username, $userid, $rateid, $school, $course, $pic, $title, $type1, $uploaddest1, $type2, $uploaddest2);

 
if ( $stmt->execute()=== TRUE)  {
$ale1 = "comment posted";
echo " <script type='text/javascript'>alert('$ale1'); </script>";
 
} else {
$ale2 = "comment not posted";
echo "<script type='text/javascript'>alert('$ale2'); </script>";

    echo "Error: " . $in . "<br>" . $conn2->error;
}
} else {
$ale2 = "comment not posted";
echo "<script type='text/javascript'>alert('$ale2'); </script>";
echo "Error: " . $sql . "<br>" . $conn2->error;
}
$stmt->close();

}
}


?>