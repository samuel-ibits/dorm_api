<?php include 'connect.php';
include 'tokenizer.php';



  
    $sn=$GET["sn"];
	$id=$GET["id"];
    $price=$GET["price"];
    $images=$GET["images"];
    $name=$GET["name"];
    $description=$GET["description"];
    
    $cartegories=$GET["cartegories"];
    $merchant=$GET["merchant"];

    $links=$GET["links"];
    


$sqllp = "INSERT INTO posts(blog_title,blog_text,blog_img,blogger_name,$blog_post_date,'$response_desc', '$response_code')VALUES ('$blog_title', '$blog_text', '$blog_img', '$blogger_name', '$blog_post_date', '$response_desc', '$response_code')";

If ($GLOBALS['conn20']->query($sqllp) == TRUE) {
  echo '<script> alert("products posted success")</script>';

}







?>