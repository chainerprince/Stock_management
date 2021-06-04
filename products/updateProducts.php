<?php 
  include "../reusable/dbConfig.php";
  
  function updateProduct($id,$values,$conn){
    
      
    $stmt = sprintf("UPDATE stk_products set product_Name='%s' ,brand='%s',supplier='%s',supplier_phone='%s' WHERE productId = $id",$values['pro_name'],$values['brand'],$values['supplier'],$values['supplier_phone']);
      
    $query = $conn->query($stmt) or die("error".$conn->error);
    if($query){
      print "The Product Updated Succesfully";
    }

  }


 
?>