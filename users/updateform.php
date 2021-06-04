
<style>
<?php include  "./join.css"; ?>
</style> 
<?php require_once("./addUser.php");   ?>
<form action="./dashboard.php?id=$id#update"  method="POST">
      <h4>Update User</h4> 
               <div>
                <label for="uname">Username</label>
                <input type="text" name="uname" readonly id="uname"
                value="<?=$row['username']?>"
                >
            </div>
                <div>
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname"
                    value="<?=$row['firstName']?>"
                    >                    
                </div>
               <div>
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname"
                value="<?=$row['lastName']?>"
                >
               </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" readonly name="email" id="email"
                    value="<?=$row['email']?>"
                    >
                </div>
                <div>
                    <label for="tel">Telephone</label>
                    <input type="text" name="tel" id="tel" required 
                     title="We only accept ten digits"
                    value="<?= $row['telephone'] ?>"
                    >
                </div>
                  
                <div class="gender">
                    <label for="gender" id="top">Gender </label> 
                        <input type="radio" name="gender" id="male" value="male" <?=  $row[4] == "male" ? "checked":"" ?> >
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="fmale" value="female" <?=  $row[4] == "female" ? "checked":"" ?>>
                        <label for="fmale">female</label>
                            
                </div>
               
                <div>
                    <label for="photo">Nationality</label>
                    <select name="nationality" id="nationality">
                    <option value="<?=  $country['countryId']  ?>"> <?= $country['countryName']  ?> </option>
                       <?php require("../reusable/countries.php") ?>
                    </select>
                </div>
              <?php  if($_SESSION['role']==1){?>
                 <div>
                 <label for="role">Roles</label>
                 <select name="role" id="role">
                  <?php 
                 $rolesQuery=$conn->query("select * from roles");
                if($rolesQuery){
                    while ($row=$rolesQuery->fetch_assoc()) {?>
                       <option value="<?=$row["roleId"] ?>"><?=$row["role"]?></option>
                       <?php } }?> 
                 </select>
                </div> 
              <?php  } ?>
                   <button class="btn-abs" name="update">Update</button>
</form>