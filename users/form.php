<?php $username = $lname = $fname = $telephone = $email = $password = "" ?>
<style>
<?php include  "./join.css"; ?>
</style>
         
<?php require_once("./addUser.php");  ?>
<form action="<?=$update ? "./dashboard.php?id=$id#update" : "./dashboard.php#create"?>"  method="POST">

      <h4><?= $update ? "Update User":"Create User"; ?></h4> 
               <div>
                <label for="uname">Username</label>
                <input type="text" name="uname" id="uname"
                value="<?=$update ? $row[6] : $username ?>"
                >
            </div>
                <div>
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname"
                    value="<?=$update ? $row[1] : $fname ?>"
                    >
                    
                </div>
               <div>
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname"
                value="<?=$update ? $row[2] : $lname ?>"
                >
               </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email"
                    value="<?=$update ? $row[7] : $email ?>"
                    >
                </div>
                <div>
                    <label for="pwd">Password</label>
                    <input type="password" name="pwd" id="pwd"
                    value="<?=$update ? $row[8] : $password ?>"
                    >
                </div>
                <div>
                    <label for="confirm___pwd">Password</label>
                    <input type="password" name="confirm__pwd" id="confirm__pwd"
                    value="<?=$update ? $row[8] : $password ?>">
                </div>
               
                <div>
                    <label for="tel">Telephone</label>
                    <input type="text" name="tel" id="tel" required 
                     title="We only accept ten digits"
                    value="<?=$update ? $row[3] : $telephone ?>"
                    >
                </div>
                  
                <div class="gender">
                    <label for="gender" id="top">Gender </label> 
                        <input type="radio" name="gender" id="male" value="male" <?= $update ? $row[4] ? "checked" : "" : ""?> >
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="fmale" value="female">
                        <label for="fmale">female</label>
                            
                </div>
               
                <div>
                    <label for="photo">Nationality</label>
                    <select name="nationality" id="nationality">
                    <option value="<?= $update ? $country['country_id'] : "" ?>"> <?= $update ? $country['country_name'] : "" ?> </option>
                       <?php require("../reusable/countries.php") ?>
                    </select>
                   
                </div> 


                   <button name = <?=$update ? "update" : "submit" ?> ><?=$update?"Update":"Add User"?></button>

</form>