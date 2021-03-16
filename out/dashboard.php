<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <link rel="stylesheet" href="./join.css"> -->
    <!-- <link rel="stylesheet" href="table.css"> -->
   
    <link rel="stylesheet" href="../css/dashboard.css?v=<?php echo time(); ?>">
    <!-- <link rel="stylesheet" href="./dashboard.css"> -->
    <link rel="stylesheet" href="../css/table.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/sidebar.css?v=<?php echo time(); ?>">
   
</head>
<body>
    <?php require_once("../reusable/dbConfig.php"); require_once("../reusable/dashnav.php") ?>

   
    <div class="container">
    <?php require_once("../reusable/sidebar.php");require("../reusable/reports.tot.php") ?>
   
    <main class="main">
        <div class="main__cards">
       
            
            <a href="http://localhost/php_project/products/dashboard.php#products" class="products">
            Products : <?=$totalProducts?> Products
            </a>
         
   
         
             <a href="http://localhost/php_project/inventory/dashboard.php#products" class="incoming">
             Inventory :  <?= $invTotal ?> Products
            </a>
                  
      
         
             <a href="http://localhost/php_project/out/dashboard.php#products" class="outgoing">
             Outgoing : <?=$outTotal ?> Products
            </a>
                
       

             <a href="http://localhost/php_project/users/dashboard.php#products" class="users">
             store users
            </a>
       
        </div>

        <!-- Routables -->
        <div class="routable" id="routes">
            
            <!-- CREATING A USER -->
      <div class="create__form" id="create">
               <h5>Add Product</h5>
         <?php $update = false; require("./form.out.php") ?>
         <?php 
          if(isset($_POST['submit'])){
              require_once("./add.out.php");
          }
         ?> 
      </div>

          <!-- UPDATING THE USER -->
        <div class="update" id="update">
          <h5>Update Product</h5>
          <?php 
          if(isset($_GET['id'])){
            $id = $_GET['id'];
            $data = "SELECT * FROM stk_outgoing WHERE outgoingId=$id";
            $query = mysqli_query($connection,$data);
            $row = mysqli_fetch_array($query);
           
            if(isset($_POST['update'])){
              
                include "./update.out.php";
                updateOutgoing($id,$_POST,$connection);
              
            }
            
            $update = true;
            echo "This is the update page below";
            require("./form.out.php"); 
          }
          else{
            print "<h2>Choose a User to update </h2>";
            require("./display.out.php");
          }

 ?>

      </div>
     
    
          <!-- DELETING A USER -->
      <div class="delete" id="deletes">
          <h5>Delete Product</h5>
         <?php 
          if(isset($_GET['deleteId'])){
              $id = $_GET['deleteId'];
              $data = "DELETE  FROM stk_outgoing WHERE outgoingId=$id";
              $query = mysqli_query($connection,$data);
              if($query){
                  print "The User with id $id is deleted succesfully ";
              }else{
                  print "You can't delete this User";
              }

          }else{
              print "Select a User to delete";
              require("./display.out.php");

          }
         ?>
      </div>
     <!-- DISPLAYING A PRODUCT  -->
      <div class="all__products" id="products">
          <h4>All Products</h4>
      <?php  require("./display.out.php");?>
      </div>

<!-- END OF ROUTABLES; -->
        </div>
     </main>
    </div>
    
</body>
</html>