<style>
<?php 
      include "../css/form.css"  ;
      $name = "";
      if(isset($_GET['prodName'])){
        
        $name = $_GET['prodName'];
        $qty = "";
      }
     
     ?>
</style>
<form action="" method="post">
    
<div>
    <label for="productId">Product Name</label>
    <input type="text" name="pro_name" id="id"  required 
    value="<?=$update ? $row[1] : $name ?>"> 
 </div>
<div>
 <label for="qty">Quantity</label>
 <input type="number" name="qty" id="qty" required
 value="<?=$update ? $row[2] : $qty ?>">
 <button name = <?=$update ? "update" : "submit" ?> ><?=$update?"Update":"Sell"?></button>
</div>
</form>