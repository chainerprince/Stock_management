<?php
   include "dbConfig.php";

   $stmt = "SELECT SUM(quantity) as totalProducts FROM stk_inventory";
   $query = mysqli_query($connection,$stmt) or die("Error".mysqli_error($connection));
   $invTotal = mysqli_fetch_assoc($query)['totalProducts'];
   

   $stmt = "SELECT SUM(quantity) as totalProducts FROM stk_outgoing";
   $query = mysqli_query($connection,$stmt) or die("Error".mysqli_error($connection));
   $outTotal = mysqli_fetch_assoc($query)['totalProducts'];
  
   
   $totalProducts = $outTotal + $invTotal;


   
   
?>
