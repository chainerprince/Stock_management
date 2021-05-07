<?php
require_once("../reusable/dbConfig.php");
// <table></table>

$stmt = "SELECT platform.*, u.username FROM platform INNER JOIN stk_users u ON platform.userId = u.userId";
$query = mysqli_query($connection,$stmt) or die(mysqli_error($connection));
?>

<table>
  <thead>
   <tr>
    <th>Username</th>
    <th>Browser</th>
    <th>Ip Address</th>
    <th>Mac Address</th>
    <th>Operating System</th>
   </tr>
  </thead>
<tbody>

<?php
while($row = mysqli_fetch_assoc($query)){?>
     <tr>
      <td><?=$row['username']?></td>
      <td><?=$row['browser']?></td>
      <td><?=$row['ip_adress']?></td>
      <td><?=$row['mac_adress']?></td>
      <td><?=$row['OS']?></td>
     </tr>

<?php } 
?>
</tbody>
</table>