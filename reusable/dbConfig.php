<?php
$host = "localhost";
$user = "root";
$pwd = "";
$db = "php_work";
$dsn = "mysql:host=$host;dbname=$db";

// $conn= new mysqli($host,$user,$pwd,$db) or die("Error on Db conn".$conn->error)
try {
    $conn = new PDO($dsn,$user,$pwd);
    if($conn){
        echo "connected to the db successfullu";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>