<style>
<?php 
      include "../css/form.css"  ;
      $id = "";
      if(isset($_GET['outId'])){
        
        $id = $_GET['outId'];
        $qty = "";
      }
     
     ?>
</style>
<form action="" method="post">
    
<div>
    <label for="productId">ProductId</label>
    <input type="number" name="id" id="id"  required 
    value="<?=$update ? $row[1] : $id ?>"> 
 </div>
<div>
 <label for="qty">Quantity</label>
 <input type="number" name="qty" id="qty" required
 value="<?=$update ? $row[2] : $qty ?>">
 <button name = <?=$update ? "update" : "submit" ?> ><?=$update?"Update":"Sell"?></button>
</div>
</form>