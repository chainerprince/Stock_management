<?php 

  require_once("../reusable/dbConfig.php");
  $stmt = "SELECT stk_products.* , stk_users.username FROM stk_products INNER JOIN stk_users ON stk_users.userId = stk_products.userId";
  $query =mysqli_query($connection, $stmt) or die(mysqli_error($connection));



?>

<table>
<thead>
        <tr>
            <th>No</th>
            <th>Pro Name</th>
            <th>Brand</th>
            <th>User</th>
            <th>Supplier</th>
            <th>Sup-Phone</th>
            <th>date</th>
         
            <?php 
            if($_SESSION['role']==3){?>

            
            <th>Update</th>
            <th>Delete</th>

            <?php } ?>
            
            <th>Add</th>
            <th>Sell</th>
        </tr>

</thead>
<?php 
$row = mysqli_fetch_assoc($query);
var_dump($row);
?>
    <?php while($row = mysqli_fetch_assoc($query)){ 
          var_dump($row);
         
        ?> 
       <tbody>
           
        <tr>
        <td><?=$row["productId"] ?></td>
            <td data-label="name"><?=$row["product_Name"] ?></td>
            <td data-label="brand"><?=$row["brand"] ?></td>
            <td data-label="brand"><?=$row["username"] ?></td>
            <td data-label="supplier"><?=$row["supplier"] ?></td>
             
            <td data-label="sup_phone"><?=$row["supplier_phone"] ?></td>
            <td data-label="date" class="wide"><?=substr($row["added_date"],0,10) ?></td>
            <td data-label="add">
                <a target="_blank" href="../inventory/dashboard.php?inveName=<?=$row['product_Name'] ?>#create">Add</a>
            </td>
            <td data-label="sell">
                <a target="_blank" href="../out/dashboard.php?prodName=<?=$row['product_Name'] ?>#create">Sell</a>
            </td>
            <?php if($_SESSION['role'] == 3) {?>
            <td data-label="update">
                <a href="./dashboard.php?id=<?=$row['productId'] ?>#update">Update</a>
            </td>
            <td data-label="delete">
                <a href="./dashboard.php?deleteId=<?=$row['productId'] ?>#deletes">Delete</a>
            </td>
          
            <?php } ?>
        </tr>
       <?php }?> 
       </tbody>
</table>