<?php

$stmt = "SELECT * FROM countries";
$update ? $stmt = "SELECT * FROM countries WHERE country_id != $country_id": $stmt . "";

$query = mysqli_query($connection,$stmt);
?>

<?php
  while($row=mysqli_fetch_assoc($query)){?>
   <option value=<?=$row['country_id']?>><?=$row['country_name']?></option>
  <?php } ?>
 

