<?php
include('navbar.php');

if($_SERVER["REQUEST_METHOD"]=="POST")
{

include("connection.php");
$name=$_POST("username");
$email=$_POST("email");
$age=$_POST("age");
$pass=$_POST("password");

$sql="SELECT * FROM user WHERE email='$email'";
$r= mysqli_query($lol,$sql);
$num = mysqli_num_rows($r); 

if($num>0){
    echo "<script type='text/javascript'>alert('Email already exists');</script>";
    }

else{
$sql="insert into users(name,email,age,password) values ('$name','$email','$age','$pass')";
$result=mysqli_query($lol,$sql);
if(!$result){
    echo"<script type='text/javascript'>alert('Account is not  added');</script>";
}

else{
    echo"<script type='text/javascript'>alert('Account has been added');</script>";
}

}
}











?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body >
    

    
    <div class="container">
        <form action="register.php" method="POST">
        <div class="form" >
            <h1>REGISTER</h1>
            <div class="input-box">
                <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                <input type="text" id ="username" name="username">
                <label for="username">Username</label><br>
            </div>

            <div class="input-box">
                <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                <input type="email" id ="email" name="email">
                <label for="email">Email</label><br>
            </div>

            <div class="input-box">
                <span class="icon"><ion-icon name="body-outline"></ion-icon></span>
                <input type="text" id ="age" name="age">
                <label for="age">Age</label><br>
            </div>

            <div class="input-box">
                <span class="icon"><ion-icon name="shield-outline"></ion-icon></span>
                <input type="text" id ="password" name="password">
                <label for="password">Password</label><br>
            </div>
            <button class="login">register</button>
       

            <p>have a account?<a href="login.php">login</a></p>

        </div>  
        </form>
    </div>




    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>