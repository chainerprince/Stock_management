
<?php
if(isset($_GET['inveName'])){
    $name = $_GET['inveName'];
    $qty = "";
}else{
 $name = "";
}
 ?>

<form action="" method="post">
    <!-- <?php $food = "rice" ?> -->
    <style>
        <?php include "../css/form.css"?>
    </style>
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
 <label for="qty">Quantity</label>
 <input type="number" name="qty" id="qty" maxlength="4" required 
 value="<?=$update ? $row[1] : $qty ?>">

</div>
<button name = <?=$update ? "update" : "submit" ?> ><?=$update?"Update":"Add Product"?></button>
</form>