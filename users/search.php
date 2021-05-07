<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search|php</title>
    <style>
     #user{
         margin: 1rem;
     }
    </style>
</head>
<body>
    <?php
          

       if(isset($_POST['user'])){
             $name = $_POST['user'];
             $stmt = "SELECT * FROM stk_users INNER JOIN countries ON countries.countryId = stk_users.nationality WHERE  username LIKE '%$name%' ";
             $query = mysqli_query($connection,$stmt) or die("error".mysqli_error($connection));
             if( mysqli_num_rows($query)>=1){
                $display ='block';
                echo "<h4 style='color:green;'>The user is found</h4>";
             }else{
                 $display = 'none';
                 echo "<h4 style='color:red;'>The user is not found</h4>";
             }
       }else{
          $display = 'none';
       }
    ?>

<table style="display:<?=$display?> ;">
<tr>
            <th>Userid</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>telephone</th>
            <th>Gender</th>
            <th>Nationality</th>
            <th>Username</th>
            <th>Email</th>
            <th>Added Date</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    <?php while($row = mysqli_fetch_assoc($query)){ 
       
        ?> 
      
        <tr>
        <td><?=$row["userId"] ?></td>
            <td><?=$row["firstName"] ?></td>
            <td><?=$row["lastName"] ?></td>
            <td><?=$row["telephone"] ?></td>
            
            <td><?=$row["gender"] ?></td>
            <td><?=$row["countryName"] ?></td>
            <td><?=$row["username"] ?></td>
            <td><?=$row["email"] ?></td>
            <td><?=$row["added_time"] ?></td>
            <td>
                <a href="./dashboard.php?id=<?=$row['userId'] ?>#update">Update</a>
                <?php 
                
                
                ?>
            </td>
            <td>
                <a href="./dashboard.php?deleteId=<?=$row['userId'] ?>#deletes">Delete</a>
            </td>
            
        </tr>
       <?php } ?> 
</table>

<?php unset($_POST['name']) ?>


    <form action="" method="POST" id="specific">
    <label for="user" style="text-align:center;">Get User</label>
        <div class="specific">

     <input type="text" required maxlength="200"  id="user" name="user">
     <button type="submit">Find User</button>
        </div>
    
    </form>
</body>
</html>