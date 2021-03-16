<?php 
  include "../reusable/dbConfig.php";
  
  function updateProduct($id,$values,$connection){
    
      
    $stmt = sprintf("UPDATE stk_users set firstName='%s' ,lastName='%s',
    telephone='%s',gender='%s',nationality='%s',
     username = '%s',email='%s',password='%s' WHERE userId = $id",
     $values['fname'],$values['lname'],
     $values['tel'],$values['gender'],$values['nationality'],
     $values['uname'],$values['email'],$values['pwd']);
      
    $query = mysqli_query($connection,$stmt) or die("error".mysqli_error($connection));
    if($query){
      print "The Product Updated Succesfully";
    }

  }
function loadCountries($connection){
  

}

  
?>