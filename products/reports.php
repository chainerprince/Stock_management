 

<?php function showTable(){
    require("../reusable/dbConfig.php");
      $stmt = "SELECT inventory_id, stk_inventory.added_date, product_Name,stk_products.productId, SUM(stk_products.quantity) as TotalQty FROM stk_products INNER JOIN stk_inventory ON stk_products.productId = stk_inventory.productId GROUP BY(product_Name)";
      $quantity = $conn->query($stmt) or die("Error".$conn->error);
    ?>
<table>
<caption>The list of products in the table</caption>
<thead>
<tr>
 <th>No</th>
 <th>Product Name</th>
 <th>Total Quantity</th>
 <th>Date</th>
 </tr>
</thead>
 <tbody>
<?php while($row=$quantity->fetch_assoc()){ ?>
   <tr>
    <td data-label="No"><?=$row['inventory_id']?></td>
    <td data-label="Name"><?=$row['product_Name']?></td>
    <td data-label="Qty"><?=$row['TotalQty']?></td>
    <td data-label="Date"><?=$row['added_date']?></td>
   </tr>
<?php  } ?>
</tbody>
</table>
<?php } ?>
<?php function showOutGoing(){
    require("../reusable/dbConfig.php");
      $stmt = "SELECT outgoingId, stk_outgoing.added_date, product_Name,stk_products.productId, SUM(stk_products.quantity) as TotalQty FROM stk_products INNER JOIN stk_outgoing ON stk_products.productId = stk_outgoing.productId GROUP BY(product_Name)";

      $quantity = $conn->query($stmt) or die("Error".$conn->erro);
    ?>
<table>
<caption>The products Taken out of store</caption>
<thead>
<tr>
 <th>No</th>
 <th>Product Name</th>
 <th>Total Quantity</th>
 <th>Date</th>
 </tr>
</thead>
<tbody>
<?php while($row=$quantity->fetch_assoc()){ ?>
   <tr>
    <td data-label="No"><?=$row['outgoingId']?></td>
    <td data-label="Name"><?=$row['product_Name']?></td>
    <td data-label="Qty"><?=$row['TotalQty']?></td>
    <td data-label="Date"><?=$row['added_date']?></td>
   </tr>
<?php  } ?>
</tbody>
</table>
<?php } ?>