<?php

$stmt = "SELECT * FROM countries";
$update ? $stmt = "SELECT * FROM countries WHERE countryId != $country_id": $stmt . "";

$query = mysqli_query($connection,$stmt);
?>

<?php
  while($row=mysqli_fetch_assoc($query)){?>
   <option value=<?=$row['countryId']?>><?=$row['countryName']?></option>
  <?php } ?>
 

