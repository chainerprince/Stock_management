<?php
  require_once("../reusable/dbConfig.php");
  $conn = mysqli_connect($host,$user,$pwd,$db);
  $update = false;
  if(!$conn){
      die("The database connection failed". mysqli_connect_error());
  }else{
     
      if(isset($_POST['submit'])){
        // require("./reusable/data.valid.php");
        $name = $_POST['pro_name'];
        $brand = $_POST['brand'];
        $supplier = $_POST['supplier'];
        $supplier_phone = $_POST['supplier_phone'];
        if (!preg_match ("/^[0-9]*$/", $supplier_phone) ) {  
            print "<span style='color:red;'>We only accept numeric characters for numbers</span>";
        } else{
            $query = "INSERT INTO stk_products
            (product_Name,brand,supplier_phone,supplier)
            VALUES ('$name','$brand','$supplier_phone','$supplier');
              ";
             $query_res = mysqli_query($conn,$query);
            if($query_res){
                print "<span style='color:green;'>The query submitted successfully ✔️✔️✔️</span>";
            }else{
                print "<span style='color:red;'>". mysqli_error($conn) . "❌❌❌" ."</span>";
            }
        } 

      }
     

      
  }
?>