

 
<?php
$stmt = "SELECT stk_outgoing.* , stk_users.username FROM stk_outgoing INNER JOIN stk_users ON stk_users.userId = stk_outgoing.userId";
$query = $conn->query($stmt);
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

while($row = $query->fetch() ){?>
<tbody>
       <tr>
           <td data-label="No"><?=$row['outgoingId']?></td>
           <td data-label="ProductId"><?=$row['productId']?></td>
           <td data-label="Qty"><?=$row['quantity']?></td>
           <td data-label="Date"><?=$row['added_date']?></td>
           <td data-label="Date"><?=$row['username']?></td>
           <td data-label="Update"><a href="./dashboard.php?id=<?=$row['productId'] ?>#update">update</a></td>
           <td data-label="Delete"><a href="./dashboard.php?deleteId=<?=$row['outgoingId'] ?>#deletes">Delete</a></td>
           
       </tr>
<?php } ?>
</tbody>
</table>

