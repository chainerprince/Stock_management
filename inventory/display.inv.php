
<?php
   $stmt = "SELECT stk_inventory.* , stk_users.username FROM stk_inventory INNER JOIN stk_users ON stk_users.userId = stk_inventory.userId";
   $query =$conn->query($stmt);
   ?>

   <table>
       <thead>

           <tr>
               <th>No</th>
               <th>productId</th>
               <th>Quantity</th>
               <th>Added Time</th>
               <th>User</th>
               <th>Update</th>
               <th>Delete</th>
           </tr>
       </thead>
 
   <?php 
   while($row = $query->fetch_assoc()){?>
   <tbody>
          <tr>
              <td data-label="No"><?=$row['inventory_id']?></td>
              <td data-label="ProductId"><?=$row['productId']?></td>
              <td data-label="Qty"><?=$row['quantity']?></td>
              <td data-label="Date"><?=substr($row['added_date'],0,10)?></td>
              <td data-label="Date"><?=$row['username']?></td>
              <td data-label="Update"><a href="./dashboard.php?id=<?=$row['inventory_id'] ?>#update">update</a></td>
              <td data-label="Delete"><a href="./dashboard.php?deleteId=<?=$row['inventory_id'] ?>#deletes">Delete</a></td>
              
          </tr>
   <?php } ?>
   </tbody>
   </table>
