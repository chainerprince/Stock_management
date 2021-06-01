<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    p{
        margin-left: 50%;
        color: blue;
    }
    </style>
</head>
<body>
    <?php
// session_start();
include_once '../reusable/dbConfig.php';
if(isset($_POST['pswd'])){
$password= trim($_POST["pswd"]);
$username= trim($_POST["username"]);
$sql="SELECT * from stk_users where username='$username';";
$query=mysqli_query($connection,$sql);
if(mysqli_num_rows($query)<1){
    echo "<p>Invalid Logins</p>";
}
else{
    $row=mysqli_fetch_assoc($query);
    //hashing given password
    $hashpswd=hash("sha512",$password);
    //comparing two password
    $hashing=hash("sha512",$row['password']);
    if(!$hashing=$password){
        header("location:./loginpage.php?error:invalid_login");
        echo "<p>Invalid Login</p>";
    }
    else{ 
        $userId = $row['userId'] ;
         $_SESSION['username'] = $row['username'];
         $_SESSION['role'] = $row['role'];
         $_SESSION['email'] = $row['email'];
         $_SESSION['userId'] = $userId;        
         require("platform.php");
         $stmt = "INSERT INTO platform(mac_adress,ip_adress,OS,Browser,userId) VALUES('$MAC','$ip_address','$operating_system','$user_browser',$userId)";
         $query = mysqli_query($connection,$stmt) or die(mysqli_error($connection));
         if($query){
            null;
         }else{
             echo "something went wrong login again ❗❗❗";
         }
    }
}}
?>
</body>
</html>