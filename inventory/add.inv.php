<?php
$qty = $_POST['qty'];
$name = $_POST['pro_name'];

$stmt1 = "SELECT productId FROM stk_products WHERE product_Name = '$name'";
$idQry = mysqli_query($connection,$stmt1) or die("Error ".mysqli_error($connection));
// print(mysqli_num_rows($idQry));
if(mysqli_num_rows($idQry) > 1){
    $id = mysqli_fetch_assoc($idQry)['productId'];
    $userId = $_SESSION['userId'];
    $stmt = "INSERT INTO stk_inventory(quantity,productId,userId) VALUES ('$qty','$id','$userId')";
    if(mysqli_query($connection,$stmt)){
        print "<h1 style=' color:green;'> Data inserted Succesfully<h1>";
    }else{
        print "<h1 style=' color:red;'> There Was an Error " .mysqli_error($connection)  ."<h1>";
    }
   
}else{
    die("<h1 style=' color:red;'> The Product couldn't be found " .mysqli_error($connection)  ."<h1>");
}
?>