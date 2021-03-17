<?php 

  require_once("../reusable/dbConfig.php");
  $stmt = "SELECT userId,added_time, firstName , lastName ,telephone, gender,nationality,username , email ,country_name from stk_users INNER JOIN countries on stk_users.nationality = countries.country_id;";
  $query =mysqli_query($connection, $stmt);
?>
<style>
 
 
</style>

<table>
    <thead>
    <tr>
            <th>No</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Origin</th>
            <th>Username</th>
            <th>Email</th>
            <th>Added Date</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

    </thead>
   
    <?php while($row = mysqli_fetch_assoc($query)){ ?> 
        <tbody>
        <tr>
        <td><?=$row["userId"] ?></td>
            <td data-label="Firstname"><?=$row["firstName"] ?></td>
            <td data-label="Lastname"><?=$row["lastName"] ?></td>
            <td data-label="Telephone"><?=$row["telephone"] ?></td>
            
            <td data-label="gender"><?=$row["gender"] ?></td>
            <td data-label="Nationality"><?=$row["country_name"] ?></td>
            <td data-label="Username"><?=$row["username"] ?></td>
            <td data-label="Email"><?=$row["email"] ?></td>
            <td data-label="Date"><?=substr($row["added_time"],0,10) ?></td>
            <td data-label="Update">
                <a href="./dashboard.php?id=<?=$row['userId'] ?>#update">Update</a>
                <?php 
                
                
                ?>
            </td>
            <td data-label="delete">
                <a href="./dashboard.php?deleteId=<?=$row['userId'] ?>#deletes">Delete</a>
            </td>
            
        </tr>
       <?php } ?> 
       </tbody>
</table>

