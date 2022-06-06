<?php include 'connect.php';
include 'tokenizer.php';


if(validatetoken($_COOKIE['dormtoken'])== 1){




    $selr="SELECT * FROM product";
    $result= $conn14->query($selr);
      If ($result->num_rows>0){
    While ($row=$result->fetch_assoc()){
    $id=$row["id"]; $name=$row["name"]; $price=$row["price"]; $about=$row["about"];
    $pic1=$row["pic1"]; $pic2=$row["pic2"]; $pic3=$row["pic3"]; $pic4=$row["pic4"]; 
    $pic5=$row["pic5"]; $pic6=$row["pic6"]; $vid1=$row["vid1"]; $vid2=$row["vid2"]; $vid3=$row["vid3"]; $vid4=$row["vid4"];
    $vid5=$row["vid5"]; $vid6=$row["vid6"]; $messageid=$row["messageid"];
    $status=$row["status"]; $views=$row["views"]; $contact=$row["contact"]; $link=$row["link"];
    
    $json_response = json_encode($row);

    return $json_response; 
}}else{
}


}
?>

