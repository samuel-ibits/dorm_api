<?php include 'connect.php';
include 'tokenizer.php';


if(validatetoken($_COOKIE['dormtoken'])== 1){

    $rselr="SELECT * FROM books ORDER BY name ASC";
    $result= $conn12->query($rselr);
      If ($result->num_rows>0){
    While ($row=$result->fetch_assoc()){
    
              $id=$row["id"]    ;
              $refid=$row["refid"];
               $name=$row["name"];
                $author=$row["authour"];
                $info=$row["info"];
                $preview=$row["preview"] ;
                 $view=$row["view"];
                 $url=$row["url"] ;
                 $groups=$row["groups"] ;
                $source=$row["source"] ;
                $uid=$row["uid"] ;

              
    $json_response = json_encode($row);

    return $json_response;
    }

}
}


?>