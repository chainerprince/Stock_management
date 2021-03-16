
<?php
if(isset($_GET['inveId'])){
    $id = (int)$_GET['inveId'];
    $qty = "";
}else{
 $id = "";
}
 ?>

<form action="" method="post">
    <!-- <?php $food = "rice" ?> -->
    <style>
        <?php include "../css/form.css"?>
    </style>
<div>
    <label for="productId">ProductId</label>
    <input type="number" name="id" id="pro_id" required   
    value="<?=$update ? $row[2] : $id ?>"> 
 </div>
<div>
 <label for="qty">Quantity</label>
 <input type="number" name="qty" id="qty" maxlength="4" required 
 value="<?=$update ? $row[1] : $qty ?>">

</div>
<button name = <?=$update ? "update" : "submit" ?> ><?=$update?"Update":"Add Product"?></button>
</form>