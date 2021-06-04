<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
table{
    margin-bottom: 62px;
}
tr{
    height: 43px;
}
th{
    font-family: poppins;
    font-size: 14px;
    background-color: rgb(10, 11, 34);
}
td a{
    color: white;
    background-color: dodgerblue;
    padding: 6px 17px;
    border-radius: 1px;
}
tr:hover{
    background-color: gray;
}
</style>
    <?php    
  require_once("../reusable/dbConfig.php");
  $stmt = "SELECT userId,added_time, firstName , lastName ,telephone, gender,nationality,username , email ,countryName from stk_users INNER JOIN countries on stk_users.nationality = countries.countryId;";
  $query =$conn->query($stmt) or die($conn->error);
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
   
    <?php while($row =$query->fetch()){ ?> 
        <tbody>
        <tr>
        <td><?=$row["userId"] ?></td>
            <td data-label="Firstname"><?=$row["firstName"] ?></td>
            <td data-label="Lastname"><?=$row["lastName"] ?></td>
            <td data-label="Telephone"><?=$row["telephone"] ?></td>
            
            <td data-label="gender"><?=$row["gender"] ?></td>
            <td data-label="Nationality"><?=$row["countryName"] ?></td>
            <td data-label="Username"><?=$row["username"] ?></td>
            <td data-label="Email"><?=$row["email"] ?></td>
            <td data-label="Date"><?=substr($row["added_time"],0,10) ?></td>
            <td data-label="Update">
                <a href="./dashboard.php?update=<?=$row['userId']?>#update">Update</a>
                <?php 
                
                
                ?>
            </td>
            <td data-label="delete">
                <a href="./dashboard.php?deleteId=<?=$row['userId']?>#deletes">Delete</a>
            </td>
            
        </tr>
       <?php } ?> 
       </tbody>
</table>


</body>
</html>