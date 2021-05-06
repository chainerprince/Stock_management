<?php 
session_start();
if(!$_SESSION['username']){
    require("login.php");
  header("location:./loginpage.php");
  exit;
}
?>