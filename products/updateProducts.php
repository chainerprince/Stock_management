<?php 
  include "../reusable/dbConfig.php";
  
  function updateProduct($id,$values,$connection){
    
      
    $stmt = sprintf("UPDATE stk_products set product_Name='%s' ,brand='%s',supplier='%s',supplier_phone='%s' WHERE productId = $id",$values['pro_name'],$values['brand'],$values['supplier'],$values['supplier_phone']);
      
    $query = mysqli_query($connection,$stmt) or die("error".mysqli_error($connection));
    if($query){
      print "The Product Updated Succesfully";
    }

  }


 
?>