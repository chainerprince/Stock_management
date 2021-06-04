<?php
   include "dbConfig.php";
   $stmt = "SELECT SUM(quantity) as totalProducts FROM stk_inventory";
   $query = $conn->query($stmt) or die("Error".$conn->error);
   $invTotal = $query->fetch_assoc()['totalProducts'];
   $stmt = "SELECT SUM(quantity) as totalProducts FROM stk_outgoing";
   $query = $conn->query($stmt) or die("Error".$conn->error);
   $outTotal = $query->fetch_assoc()['totalProducts'];
  
   
   $totalProducts = $outTotal + $invTotal;


   
   
?>
