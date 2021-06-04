<?php 
  include "../reusable/dbConfig.php";
  function updateProduct($id,$values,$conn){
    echo $conn;
            // if (!preg_match ('/^[0-9\-\(\)\/\+\s]*$/', $values['tel']) ) {  
            print "<span style='color:red;'>We only accept numeric characters for numbers</span>";
        } 
    $stmt = sprintf("UPDATE stk_users set firstName='%s' ,lastName='%s',
    telephone='%s',gender='%s',nationality='%s',
     username = '%s',email='%s' WHERE userId = $id",
     $values['fname'],$values['lname'],
     $values['tel'],$values['gender'],$values['nationality'],
     $values['uname'],$values['email']);      
    $query = $conn->query($stmt) or die("error".$conn->connect_error);
    if($query){
      print "The User Updated Succesfully";
    }

  // }
function loadCountries($conn){
}
?>