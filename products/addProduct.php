<?php
  require_once("../reusable/dbConfig.php");
  $conn = new mysqli($host,$user,$pwd,$db);
  $update = false;
  if(!$conn){
      die("The database connection failed". $conn->connect_error);
  }else{
     
      if(isset($_POST['submit'])){
        // require("./reusable/data.valid.php");
        $name = $_POST['pro_name'];
        $brand = $_POST['brand'];
        $supplier = $_POST['supplier'];
        $supplier_phone = $_POST['supplier_phone'];
        $userId = $_SESSION['userId'];
        if (!preg_match ("/^[0-9]*$/", $supplier_phone) ) {  
            print "<span style='color:red;'>The phone number can't contain letters except + sign</span>";
        } else{
            $query = "INSERT INTO stk_products
            (product_Name,brand,supplier_phone,supplier,userId)
            VALUES ('$name','$brand','$supplier_phone','$supplier','$userId');
              ";
             $query_res = $conn->query($query);
            if($query_res){
                print "<span style='color:green;'>The query submitted successfully ✔️✔️✔️</span>";
            }else{
                print "<span style='color:red;'>".$conn->error. "❌❌❌" ."</span>";
            }
        } 

      }    
  }
?>