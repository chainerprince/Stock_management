<?php
  require_once("../reusable/dbConfig.php");
  $conn = new mysqli($host,$user,$pwd,$db);
  $update = false;
  if(!$conn){
      die("The database connection failed". $conn->connect_error());
  }else{
     
      if(isset($_POST['submit'])){
        // require("./reusable/data.valid.php");
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pwd = $_POST['pwd'];
        $telephone = $_POST['tel'];
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $nationality = $_POST['nationality'];
        $gender = $_POST['gender'];
        $role = $_POST['role'];
        if (!preg_match ('/^[0-9\-\(\)\/\+\s]*$/', $telephone) ) {  
            print "<span style='color:red;'>We only accept numeric characters for numbers</span>";
        }
        else{ 
        $stmt = "SELECT userId  FROM stk_users WHERE username = '$username' and email = '$email' ";
        if(mysqli_num_rows($conn->query($stmt))>0){
               die("The user with that username or email is already registered");
               return ;

        }
        else{
            $hashedPwd = hash("sha512",$pwd);
            $query = "INSERT INTO stk_users
            (firstName,lastName,telephone,gender,nationality,username,email,password,role)
            VALUES ('$fname','$lname','$telephone','$gender','$nationality','$username','$email','$hashedPwd','$role');
              ";
             $query_res = $conn->query($query);
            if($query_res){
                print "<span style='color:green;'>The user is added successfully ✔️✔️✔️</span>";
            }else{
                print "<span style='color:red;'>". $conn->error . "❌❌❌" ."</span>";
            }
        } 

      }
    }
  }
?>