<?php
$qty = $_POST['qty'];
$name = $_POST['pro_name'];
$userId = $_SESSION['userId'];

$stmt1 = "SELECT productId FROM stk_products WHERE product_Name = '$name'";
$idQry = $conn->query($stmt1) or die("Error ".$conn->error);
// print(mysqli_num_rows($idQry));
if($idQry->num_rows> 0){
    $id = $idQry->fetch()['productId'];
    $stmt = "INSERT INTO stk_outgoing(quantity,productId,userId) VALUES ('$qty','$id','$userId')";
    if($conn->query($stmt)){
        print "<h1 style=' color:green;'> Data inserted Succesfully<h1>";
    }else{
        print "<h1 style=' color:red;'> There was an Error " .$conn->error."<h1>";
    }
   
}else{
    die("<h1 style=' color:red;'> The product doesn't exist " .$conn->error."<h1>");
}


?>

