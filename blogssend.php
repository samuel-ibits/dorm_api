<?php include 'connect.php';
  

  
   
$blog_id=$_GET["blog_id"];
$blog_title= $_GET["blog_title"];
$blog_text= $_GET["blog_text"];
$blog_img= $_GET["blog_img"];
$blogger_name= $_GET["blogger_name"];
$blog_post_date= $_GET["blog_post_date"];

function response($response_desc,$response_code){
    $response['response_code'] = $response_code;
	$response['response_desc'] = $response_desc;
	$json_response = json_encode($response);
	echo $json_response;

}
    

if ($blog_text!=""){
$sqllp = "INSERT INTO posts(blog_title,blog_text,blog_img,blogger_name,$blog_post_date,'$response_desc', '$response_code')VALUES ('$blog_title', '$blog_text', '$blog_img', '$blogger_name', '$blog_post_date', '$response_desc', '$response_code')";

If ($GLOBALS['conn21']->query($sqllp) == TRUE) {
  echo '<script> alert("products posted success")</script>';
  
  $response_desc='post sent sucessfully';
    $response_code=200;
response($response_desc,$response_code);
} else{
    $response_desc='post sending failed';
    $response_code=500;
response($response_desc,$response_code);
}

}else{
    $response_desc='post sending failed';
    $response_code=400;
response($response_desc,$response_code);
}





?>