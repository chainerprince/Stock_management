<?php
  require_once("../reusable/dbConfig.php");
  $conn = mysqli_connect($host,$user,$pwd,$db);
  $update = false;
  if(!$conn){
      die("The database connection failed". mysqli_connect_error());
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
        if (!preg_match ("/^[+][0-9]*$/", $telephone) ) {  
            print "<span style='color:red;'>We only accept numeric characters for numbers</span>";
        } else{
            $query = "INSERT INTO stk_users
            (firstName,lastName,telephone,gender,nationality,username,email,password)
            VALUES ('$fname','$lname','$telephone','$gender','$nationality','$username','$email','$pwd');
              ";
             $query_res = mysqli_query($conn,$query);
            if($query_res){
                print "<span style='color:green;'>The user is added successfully ✔️✔️✔️</span>";
            }else{
                print "<span style='color:red;'>". mysqli_error($conn) . "❌❌❌" ."</span>";
            }
        } 

      }
     

      
  }
?>