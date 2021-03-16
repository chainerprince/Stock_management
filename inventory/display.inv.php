
<?php
   $stmt = "SELECT * FROM stk_inventory";
   $query = mysqli_query($connection,$stmt);
   ?>

   <table>
       <thead>

           <tr>
               <th>No</th>
               <th>productId</th>
               <th>Quantity</th>
               <th>Added Time</th>
               <th>Update</th>
               <th>Delete</th>
           </tr>
       </thead>
 
   <?php 
   while($row = mysqli_fetch_assoc($query) ){?>
   <tbody>
          <tr>
              <td data-label="No"><?=$row['inventory_id']?></td>
              <td data-label="ProductId"><?=$row['productId']?></td>
              <td data-label="Qty"><?=$row['quantity']?></td>
              <td data-label="Date"><?=substr($row['added_date'],0,10)?></td>
              <td data-label="Update"><a href="./dashboard.php?id=<?=$row['inventory_id'] ?>#update">update</a></td>
              <td data-label="Delete"><a href="./dashboard.php?deleteId=<?=$row['inventory_id'] ?>#deletes">Delete</a></td>
              
          </tr>
   <?php } ?>
   </tbody>
   </table>
