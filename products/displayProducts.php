<?php 

//   require_once("../reusable/dbConfig.php");
  $query =mysqli_query($connection, "SELECT * from stk_products");
  
 
?>

<table>
<thead>
        <tr>
            <th>No</th>
            <th>Pro Name</th>
            <th>Brand</th>
            <th>Supplier</th>
            <th>Sup-Phone</th>
            <th>date</th>
            <th>Update</th>
            <th>Delete</th>
            <th>Add</th>
            <th>Sell</th>
        </tr>

</thead>
    <?php while($row = mysqli_fetch_assoc($query)){ ?> 
       <tbody>
        <tr>
        <td><?=$row["productId"] ?></td>
            <td data-label="name"><?=$row["product_Name"] ?></td>
            <td data-label="brand"><?=$row["brand"] ?></td>
            <td data-label="supplier"><?=$row["supplier"] ?></td>
             
            <td data-label="sup_phone"><?=$row["supplier_phone"] ?></td>
            <td data-label="date" class="wide"><?=substr($row["added_date"],0,10) ?></td>
            <td data-label="update">
                <a href="./dashboard.php?id=<?=$row['productId'] ?>#update">Update</a>
            </td>
            <td data-label="delete">
                <a href="./dashboard.php?deleteId=<?=$row['productId'] ?>#deletes">Delete</a>
            </td>
            <td data-label="add">
                <a target="_blank" href="../inventory/dashboard.php?inveId=<?=$row['productId'] ?>#create">Add</a>
            </td>
            <td data-label="sell">
                <a target="_blank" href="../out/dashboard.php?outId=<?=$row['productId'] ?>#create">Sell</a>
            </td>
            
        </tr>
       <?php }?> 
       </tbody>
</table>