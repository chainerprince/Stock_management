<?php
$host = "localhost";
$user = "root";
$pwd = "itara";
$db = "store";
$connection = mysqli_connect($host,$user,$pwd,$db) or die("Error on Db conn".mysqli_connect_error())
?>