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
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <link rel="stylesheet" href="./join.css"> -->
    <!-- <link rel="stylesheet" href="./sidebar.css">

    <link rel="stylesheet" href="./dashuser.css"> -->
    <link rel="stylesheet" href="../css/dashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/sidebar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/table.css?v=<?php echo time(); ?>">
   
</head>
<body>
    <?php require_once("../reusable/dashnav.php") ?>
   
    <div class="container">
    <?php 
    if($_SESSION['role'] == 1){
        require_once("../reusable/sidebar.php");
    }
    
     require("../reusable/reports.tot.php") ?>
   
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
      <?php if($_SESSION['role'] == 1){?> 
        <div class="create__form" id="create">
               <h5 style="text-align: center;">Add User</h5>
               <?php echo $_SESSION['role']  ?>
         <?php require("./form.php") ?>
      </div>
     <?php } ?>
   

          <!-- UPDATING THE USER -->
        <div class="update" id="update">
          <h5>Update User</h5>
          <?php 
          if(isset($_GET['id'])){
            $id = $_GET['id'];
            $data = "SELECT * FROM stk_users WHERE userId= $id";
            $query = mysqli_query($connection,$data);

            $row = mysqli_fetch_array($query);
            
            $country_id = $row['nationality'];
            $country = mysqli_fetch_assoc(mysqli_query($connection,"SELECT * FROM countries WHERE countryId = $country_id"));
        
            if(isset($_POST['update'])){
             
                include "./updateUser.php";
                updateProduct($id,$_POST,$connection);
              
            }
            
            echo "This is the update page below";
            require("./updateform.php"); 
          }
          else{
            // print "<h2>Choose a User to update </h2>";
            // require("./displayUsers.php");
          }

 ?>

      </div>
     
    
          <!-- DELETING A USER -->
      <div class="delete" id="deletes">
          
         <?php 
          if(isset($_GET['deleteId'])){
              echo "<h5>Delete User</h5>";
              $id = $_GET['deleteId'];
              $data = "DELETE  FROM stk_users WHERE userId=$id";
              $query = mysqli_query($connection,$data);
              if($query){
                  print "The User with id $id is deleted succesfully ";
              }else{
                  print "You can't delete this User";
              }

          }else{
            //   print "Select a User to delete";
            //   require("./displayUsers.php");

          }
         ?>
         
      </div>
     <!-- DISPLAYING A PRODUCT  -->
      <div class="all__products" id="products">
         

      <?php  

      if($_SESSION['role'] == 1) {
          echo " <h4>All Users</h4>";
        require("./displayUsers.php");
        require("./search.php");
      }
     
      ?>
      </div>

<!-- END OF ROUTABLES; -->
        </div>
     </main>
    </div>
    
</body>
</html>