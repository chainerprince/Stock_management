<?php 
function updateOutgoing($id,$data,$connection){
  $stmt = sprintf("UPDATE stk_outgoing SET quantity=%s,productId=%s WHERE outgoingId = $id",$data['qty'],$data['id']);
  mysqli_query($connection,$stmt) or die("The product is not registered");
}
?>