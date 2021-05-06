
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
    <label for="productId">Product Name</label>
    <input type="text" name="pro_name" id="pro_id" required   
    value="<?=$update ? $row[1] : $name ?>"> 
 </div>
<div>
 <label for="qty">Quantity</label>
 <input type="number" name="qty" id="qty" maxlength="4" required 
 value="<?=$update ? $row[1] : $qty ?>">

</div>
<button name = <?=$update ? "update" : "submit" ?> ><?=$update?"Update":"Add Product"?></button>
</form>