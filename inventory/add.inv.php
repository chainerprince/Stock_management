<?php
$qty = $_POST['qty'];
$name = $_POST['pro_name'];

$stmt1 = "SELECT productId FROM stk_products WHERE product_Name = '$name'";
$idQry = $conn->query($stmt1) or die("Error ".$conn->error);
// print(mysqli_num_rows($idQry));
if($idQry->num_rows> 1){
    $id = $idQry->fetch_assoc()['productId'];
    $userId = $_SESSION['userId'];
    $stmt = "INSERT INTO stk_inventory(quantity,productId,userId) VALUES ('$qty','$id','$userId')";
    if($conn->query($stmt)){
        print "<h1 style=' color:green;'> Data inserted Succesfully<h1>";
    }else{
        print "<h1 style=' color:red;'> There Was an Error " .$conn->error."<h1>";
    }
   
}else{
    die("<h1 style=' color:red;'> The Product couldn't be found " .$conn->error."<h1>");
}
?>