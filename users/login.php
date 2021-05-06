<?php
session_start();
include_once '../reusable/dbConfig.php';
if(isset($_POST['pswd'])){
$password= trim($_POST["pswd"]);
$username= trim($_POST["username"]);
echo $username;
$sql="SELECT * from stk_users where username='$username';";
$query=mysqli_query($connection,$sql);
if(mysqli_num_rows($query)<1){
    echo "no user found";
}
else{
    $row=mysqli_fetch_assoc($query);
    //hashing given password
    $hashpswd=hash("sha512",$password);
    //comparing two password
    if($row["password"]!=$password){
        header("location:./loginpage.php?error:invalid_login");
    }
    else{
        
         $_SESSION['username'] = $row['username'];
         $_SESSION['role'] = $row['role'];
         $_SESSION['email'] = $row['email'];
         $_SESSION['userId'] = $row['userId'];
        
    }
}}