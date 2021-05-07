   <form action="change.php" method="POST">
     <h1>Change Password</h1>
     <div class="row">
     <input type="hidden" name="userid" value="<?=$_GET['userid']?>">
     <label for="password">Password</label>
       <input type="password" name="password" id="password">
     </div>
     <div class="row">
     <label for="new">New Password</label>
       <input type="password" name="newpassword" id="new" pattern=".{6,}">
     </div>   
   <div class="row">
     <label for="cpassword">Confirm Password</label>
     <input type="password" name="cpassword" id="cpassword">
 </div>
      <div class="row">
       <input type="submit" name="Change" value="Change password">
     </div>
      </form>
