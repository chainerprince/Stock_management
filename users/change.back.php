<?php
$userid=$_POST['userid'];// or $userid=$_SESSION['userid']
$password=trim($_POST['password']);
$newPassword=$_POST['newpassword'];
$confirmedNewPassword=$_POST['cpassword'];
if(!($newPassword==$confirmedNewPassword)){
   echo " Please confirm the new Password";
}
else{
   $hashed=hash('SHA512',$password);
   include "connection.php";
   $query="SELECT * from stk_users WHERE userId='$userid' and password='$hashed'";
$exe=$conn->query($query);
if($exe->num_rows==0){
   echo " The Current Password is wrong";
}
else{
   $hashed=hash("SHA512",$newPassword);
   $updateQuery="update stk_users set password='$hashed' WHERE userId='$userid'";
$execute=$conn->query($updateQuery);
if($execute){
   echo "Changed succesfully";
}}}
?>