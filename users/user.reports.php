<?php
require_once("../reusable/dbConfig.php");
// <table></table>

$stmt = "SELECT platform.*, u.username FROM platform INNER JOIN stk_users u ON platform.userId = u.userId";
$query = $conn->query($stmt) or die($conn->connect_error);
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
while($row = $query->fetch()){?>
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