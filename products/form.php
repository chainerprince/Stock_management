<?php $brand = $name = $supplier = $supplier_phone = "" ?>
<?php require_once("./addProduct.php") ?>
<form action="<?=$update ? "./dashboard.php?id=$id#update" : "./dashboard.php#create"?>"  method="POST">
               
               <h4><?= $update ? "Update Product":"Create Product"; ?></h4> 
               <div>
                <label for="uname">Product name</label>
                <input type="text" name="pro_name" id="pro_name" 
                maxlength="100" required
                value="<?=$update ? $row[1] : $name ?>">
                </div>
                <div>
                    <label for="pro_brand">Brand</label>
                    <input type="text" name="brand" id="pro_brand" maxlength="75" required 
                    value="<?=$update ? $row[2] : $brand ?>"> 
                </div>
               <div>
                <label for="supplier">Supplier</label>
                <input type="text" name="supplier" id="supplier" maxlength="75" required 
                value="<?=$update ? $row[3] : $supplier?>">
               </div>
                <div>
                    <label for="email">Supplier Phone</label>
                    <input type="tel" name="supplier_phone" id="supp_phone" maxlength="13" minlength="10" required
                     value="<?=$update ? $row[4] : $supplier_phone ?>">
                 
                </div>
            <button name = <?=$update ? "update" : "submit" ?> ><?=$update?"Update":"Add Product"?></button>

</form>