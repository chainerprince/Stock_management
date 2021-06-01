<?php
session_start();
require("login.php");
 if(isset($_SESSION['username'])){
     header("location:./dashboard.php");
     exit;
 }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Document</title>
</head>
<body>
    <style>
        .login{
            background: gray;
            width: 30%;
            margin: auto;
            height: 260px;
        }
        h2{
            color: white;
            font-weight: lighter;
            -webkit-text-fill-color: transparent;
            -webkit-text-stroke-color: white;
            -webkit-text-stroke-width: 1px;
            margin-left: 22px;
        }
        .login input{
            display: block;
            padding: 19px 70px;
            border-radius: 8px;
            margin: 12px 22px;
            border: none;
            outline: none;
            margin-top: 2px;

        }
        input::placeholder{
            font-size: 19px;
            opacity: 0.9;
        }
        button{
            display: block;
            margin-left: 23px;
            position: relative;
            background: #ff5484;
            padding: 10px 63px;
            border: none;
            border-radius: 23px;
            cursor: pointer;
            font-size: 21px;
            color: white;
        }
        button:hover{
            background: #f53677;
        }
        h3{
            color: white;
        }
        h3 span a{
            font-size: 23px;
            /* color: white; */
        }
        .field{
            position: relative;
        }
        #icon{
            position: absolute;
            left: 27px;
            top: 15px;
            font-size: 24px;
        }
        p{
            color: red;
            font-size: 25px;
            margin-left: 34px;
        }
    </style>
</head>
<body>
    <div class="login">
        <h2>login Here</h2>
    <form action="" method="POST">
    <div class="field">
        <i class="far fa-user" id="icon"></i>
    <input type="text" name="username" placeholder="Username">
</div>
<div class="field">
    <i class="fas fa-lock" id="icon"></i>
    <input type="password" name="pswd" placeholder="password">
</div>
    <button type="submit" name="login">Login</button>
    </form>
</body>
</html>