<?php include 'connect.php';
header("Content-Type:application/json");
header("Access-Control-Allow-Origin:http://127.0.0.1:5500/");

include 'tokenizer.php';

function failed($response_desc, $response_code){

	$response['response_code'] = $response_code;
	$response['response_desc'] = $response_desc;
	$json_response = json_encode($response);
	echo $json_response;

}

function response($blog_id,$blog_title,$blog_text,$blog_img,$blogger_name,$blog_post_date,$response_desc,$response_code)
{
	
$response["blog_id"]= $blog_id;
$response["blog_title"]=$blog_title;
 $response["blog_text"]=$blog_text;
 $response["blog_img"]=$blog_img;
 $row["blogger_name"]=$blogger_name;
 $response["blog_post_date"]=$blog_post_date;

 
  $response_desc='post fetch sucessfull';

	$response['response_code'] = $response_code;
	$response['response_desc'] = $response_desc;
	$json_response = json_encode($response);
	echo $json_response;
}


 
    
    	$selr="SELECT * FROM posts";
$result= $GLOBALS['conn21']->query($selr);
If ($result->num_rows>0){  
While ($row=$result->fetch_assoc()){
	
	
	

$blog_id=$row["blog_id"];
$blog_title= $row["blog_title"];
$blog_text= $row["blog_text"];
$blog_img= $row["blog_img"];
$blogger_name= $row["blogger_name"];
$blog_post_date= $row["blog_post_date"];

 
  $response_desc='post fetch sucessfull';
    $response_code=200;
    response($blog_id,$blog_title,$blog_text,$blog_img,$blogger_name,$blog_post_date,$response_desc,$response_code);

   //Echo '<script type="text/Javascript">window.location.href ="https://dorm.com.ng/v2/dm/html/studytools.php";</script>';
}
}else{
  $response_desc='no data found';
    $response_code=500;
    failed($response_desc,$response_code);

}



?>