<?php 
 require_once("../reusable/session_header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <!-- <link rel="stylesheet" href="./sidebar2.css"> -->
    <!-- <link rel="stylesheet" href="../css/display.css"> -->
    <!-- <link rel="stylesheet" href="./dashproduct.css"> -->
    <link rel="stylesheet" href="../css/dashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/sidebar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/table.css?v=<?php echo time(); ?>">
    
    <link rel="stylesheet" href="../css/form.css?v=<?php echo time(); ?>">
</head>
<body>
    
    
    <?php
     require_once("../reusable/dbConfig.php");
    require_once("../reusable/dashnav.php");
    require_once("../reusable/reports.tot.php"); require("./reports.php")?>
   
    <div class="container">
    
    <?php
    if($_SESSION['role']==3){
        require_once("../reusable/sidebar.php");
        
    }else{
        require("../reusable/productSide.php");
    }
     
     ?>
   
    <main class="main">
        <div class="main__cards">
 
         <a href="http://localhost/oop/products/dashboard.php#products" class="products">
         Products : <?=$totalProducts?> Products
            </a>
         
   
         
             <a href="http://localhost/oop/inventory/dashboard.php#products" class="incoming">
             Inventory :  <?= $invTotal ?> Products
            </a>
                  
      
         
             <a href="http://localhost/oop/out/dashboard.php#products" class="outgoing">
             Outgoing : <?=$outTotal ?> Products
            </a>
             <a href="http://localhost/oop/users/dashboard.php#products" class="users">
             store users
            </a>
        </div>
        <!-- Routables -->
        <div class="routable" id="routes">
       <!-- CREATING PRODUCT  -->
      <div class="create__form" id="create">
      <?php if($_SESSION['role'] == 3) {?>
               <h5>Add Product to the store</h5>
          <?php require("./form.php") ?>
          <?php } ?>
      </div>
      <!-- UPDATING PRODUCT  -->
      <div class="update" id="update">
          <h5>Update Product</h5>
          <?php 
          if(isset($_GET['id'])){
            $id = $_GET['id'];
            $data = "SELECT * FROM stk_products WHERE productId=$id";
            $query = $conn->query($data);
            $row = $query->fetch();
            if(isset($_POST['update'])){
                include "./products/updateProducts.php";
                updateProduct($id,$_POST,$conn);
              
            } 
            $update = true;
            require("./products/form.php"); 
          }
          else{
            print "<h2 style='text-align:center;'>Choose a product to update </h2>";
            require("./displayProducts.php");
          }
 ?>
      </div>
<!-- DELETING A PRODUCT  -->
      <div class="delete" id="deletes">
          <h5>Delete Product</h5>
         <?php 
          if(isset($_GET['deleteId'])){
              $id = $_GET['deleteId'];
              $data = "DELETE  FROM stk_products WHERE productId=$id";
              $query = $conn->exec($data);
              if($query){
                  print "The product with id $id is deleted succesfully ";
              }else{
                  print "You can't delete this product".$conn_error;
              }
          }else{
              print "Select a Product to delete";
              require("./displayProducts.php");
          }
         ?>
      </div>
        <div class="all__products" id="products">
          <h4>All Products</h4>
      <?php  require("./displayProducts.php");?>
      </div>
        </div>
      <!-- REPORTS BASED ON PRODUCTS -->
      <style>
      .reports{
          margin-top: 45px;
      }
      </style>
      <div class="reports" id="reports">
          <h4 style="text-align: center;">Report Based on Product</h4>
          <?php showTable();showOutGoing() ?>
      </div>
<!-- DISPLAYING PRODUCTS -->
    
        <!-- END OF ROUTABLES  -->
     </main>
    </div>
</body>
</html>