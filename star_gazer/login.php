<?php

include("navbar.php");

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    include "databases/connection.php";
    $pass=$_POST["password"];
    $email=$_POST["email"];
    $sql="SELECT email,password FROM users where email='$email' && password='$pass'";
    $result=mysqli_query($lol,$sql);
    if(mysqli_num_rows($result)==1)
    {
        

        echo "<script>alert('Login Successful')</script>";   
     }
   else
   {
    
    echo "<script>alert('Login failed')</script>";   

   }





}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>login</title>
</head>
<body>
<div class="container">
    <form action="login.php" method=post>
        <div class="form" >
            <h1>LOGIN</h1>
           
            <div class="input-box">
                <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                <input type="email" id ="email" name="email">
                <label for="email">Email</label><br>
            </div>

         

            <div class="input-box">
                <span class="icon"><ion-icon name="shield-outline"></ion-icon></span>
                <input type="text" id ="password" name="password">
                <label for="password">Password</label><br>
            </div>
            <input type="submit" class="login" value="login">
            <p> don't have a account?<a href="register.php">register</a></p>
        </div>
    </form>

    </div>




    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    
</body>
</html>