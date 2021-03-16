<?php 
function updateInventory($id,$data,$connection){
  $stmt = sprintf("UPDATE stk_inventory SET quantity=%s,productId=%s WHERE inventory_id = $id",$data['qty'],$data['id']);
  mysqli_query($connection,$stmt) or die("This cannot be done ". mysqli_error($connection));
}
?>