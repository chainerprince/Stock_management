<?php 
function updateInventory($id,$data,$conn){
  $stmt = sprintf("UPDATE stk_inventory SET quantity=%s,productId=%s WHERE inventory_id = $id",$data['qty'],$data['id']);
  $conn->query($stmt) or die("This cannot be done ". $conn->error);
}
?>