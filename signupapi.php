<?php include 'connect.php';

header("Content-Type:application/json");

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
   

function response($userid,$response_desc,$response_code){
	$response['userid'] = $userid;
	$response['response_code'] = $response_code;
	$response['response_desc'] = $response_desc;
	$json_response = json_encode($response);
	echo $json_response;
} 
// get posted data
$data = json_decode(file_get_contents("php://input"));
  
 // set product property values
 
   
 $email=$data->email;
 $fname=$data->fname;
 $lname=$data->lname;
 $fulname=$fname." ". $lname;
 $phone=$data->phone;
   
 $uname=$data->uname;
 
  $pass=$data->pass;	
 $pockid='pocket'.rand();

 $userid='user'.rand();

 $tokenid= 'a'.$phone.$pass;
  $date= date("Y-m-d h:i:sa");
 
 
 
    
 
 $ins="INSERT INTO users (id, fname, lname, uname, password, phone, userid, email) VALUES ('$tokenid', '$fname', '$lname', '$uname', '$pass', '$phone', '$userid', '$email')";
  
 if ($conn->query($ins)===TRUE) {
     $sqdd="INSERT INTO profile (Id, ppic, name, username, phone, sta, date, mcred, course, school, email, descyour, year, pocketid, howsch, descou, dessch, dob, bescou, besstudtm, rescrush, irep, enjdoing, favfood, ihate, icherish) VALUES ('$userid', 'media/', '$fulname', '$uname', '$phone', '1', '$date', '5', '', '', '$email', '' , '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
}
 if ($conn6->query($sqdd)===TRUE) {
 
 

 $rselr="SELECT * FROM users WHERE id='".$tokenid."'";
 $result= $conn->query($rselr);
   If ($result->num_rows>0){
 While ($row=$result->fetch_assoc()){
     $f=$userid;
     $_SESSION['dormuserid']=$f;
     
 }}   

 $userid=$f;
 $response_desc='New Account Created Successfully';
 $response_code=200;
   // set response code - 200 ok
   http_response_code(200);
  
 response($userid,$response_desc,$response_code);


}else{
    $userid=$f;
    $response_desc='New Account was not Created  Successfully';
    $response_code=400;
       // set response code - 400 bad request
    http_response_code(400);
     
    response($userid,$response_desc,$response_code);
   
}
    
 


?>