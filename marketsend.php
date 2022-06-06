<?php include 'connect.php';
include 'tokenizer.php';

if(validatetoken($_COOKIE['dormtoken'])== 1){

  
    $sn=$_POST["sn"];
	$id=$_POST["id"];
    $price=$_POST["price"];
    $images=$_POST["images"];
    $name=$_POST["name"];
    $description=$_POST["description"];
    
    $cartegories=$_POST["cartegories"];
    $merchant=$_POST["merchant"];

    $links=$_POST["links"];
    


$sqllp = "INSERT INTO products (sn, id, price, images, name, description, cartegories, merchant, comment_id, links)VALUES ('$sn', '$id', '$price', '$images', '$name', '$description', '$cartegories', '$merchant', '$comment_id', '$links')";

If ($GLOBALS['conn20']->query($sqllp) == TRUE) {
  echo '<script> alert("products posted success")</script>';

}





}

?>
