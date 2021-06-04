<?php 
function updateOutgoing($id,$data,$conn){
  $stmt = sprintf("UPDATE stk_outgoing SET quantity=%s,productId=%s WHERE outgoingId = $id",$data['qty'],$data['id']);
  $conn->query($stmt) or die("The product is not registered");
}
?>