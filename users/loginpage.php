<?php
session_start();
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
            width: 40%;
            margin: auto;
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
            margin: 22px;
            border: none;
            /* border-bottom: 1px solid black; */
            outline: none;
        }
        input::placeholder{
            font-size: 19px;
            opacity: 0.9;
        }
        button{
            display: block;
            animation: changecolor 5s infinite;
            margin-left: 23px;
            position: relative;
            background: rgb(255, 0, 179);
            padding: 15px 73px;
            border: none;
            border-radius: 23px;
            cursor: pointer;
            margin-top: 2px;
        }
        h3{
            color: white;
        }
        h3 span a{
            font-size: 23px;
            /* color: white; */
        }
        @keyframes changecolor{
            0%{
                color: black;
                text-shadow: 0px 0px;
                box-shadow: 2px 2px;
            }
            25%{
                color: white;
                text-shadow: none;
                box-shadow: 9px 9px 9px cyan;
            }
            50%{
                color: white;
                background-color: green;
            }
            75%{
                box-shadow: 6px 6px 6px indigo;
                color: white;
            }
            100%{
                box-shadow: 12px 12px 12px lightsalmon;
                color: white;
            }
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
    <form action="dashboard.php" method="POST">
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