<?php

$stmt = "SELECT * FROM countries";
$update ? $stmt = "SELECT * FROM countries WHERE countryId != $country_id": $stmt . "";
$query = $conn->query($stmt);
?>
<?php
  while($row=$query->fetch_assoc()){?>
   <option value=<?=$row['countryId']?>><?=$row['countryName']?></option>
  <?php } ?>
 

