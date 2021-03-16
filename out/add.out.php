<?php
$qty = $_POST['qty'];
$id = $_POST['id'];
$stmt = "INSERT INTO stk_outgoing(quantity,productId) VALUES ('$qty','$id')";
if(mysqli_query($connection,$stmt)){
    print "<h1 style=' color:green;'> Data inserted Succesfully<h1>";
}else{
    print "<h1 style=' color:red;'> There Was an Error " .mysqli_error($connection)  ."<h1>";
}
?>