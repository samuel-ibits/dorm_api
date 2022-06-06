<?php include 'connect.php';
include 'tokenizer.php';



$selr="SELECT * FROM products";
$result= $conn20->query($selr);
If ($result->num_rows>0){  
While ($row=$result->fetch_assoc()){
	
	$sn=$row["sn"];
	$id=$row["id"];
    $price=$row["price"];
    $images=$row["images"];
    $name=$row["name"];
    $description=$row["description"];
    $comment_id=$row["comment_id"];
    $links=$row["links"];
    
    
    $json_response = json_encode($row);
    
    return $json_response; 
}}else{
}
?>
