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
    
    <?php 
     $stmt = "SELECT product_Name,productId FROM stk_products";
     $query = mysqli_query($connection,$stmt) or die(mysqli_error($connection));
     
    ?>
    <label for="productId">Product Name</label>
    <select name="pro_name" id="id">
    <?php
     while($row=mysqli_fetch_assoc($query)){
       ?>
   <option value="<?=$row['productId']?>"><?=$row['product_Name']?></option>
    <?php }
    ?>  
    </select>
 </div>
<div>
 <label for="qty">Quantity</label>
 <input type="number" name="qty" id="qty" required
 value="<?=$update ? $row[2] : $qty ?>">
 <button name = <?=$update ? "update" : "submit" ?> ><?=$update?"Update":"Sell"?></button>
</div>
</form>