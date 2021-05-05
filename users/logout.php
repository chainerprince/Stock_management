<?php
 session_start();
 session_unset();
 session_destroy();
 header("location:http://localhost/php_project/users/loginpage.php");
?>