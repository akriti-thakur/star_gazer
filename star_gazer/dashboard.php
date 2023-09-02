<?php
include "databases/connection.php";
include "navbar.php";
// include "session.php";
?>
<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="">
       
    </head>
<body >
    <div >
        <div >
            <h1 class="mt-10" style="color: #CD833a">Dashboard</h1>
        </div >
        <div class="container grid text-center ">
            <div class="row">
                <div class="col-lg-3 p-5 m-2 bg-white border" >
                    <a href="User/user.php">Users
                    </a>
                   
                   <?php
                //    include "db_con2.php";
                    include "databases/connection.php";
                    $query = "SELECT COUNT('email') as temp FROM users ";
                    $run = mysqli_query($lol,$query);
                    $data=mysqli_fetch_assoc($run);
                    $count=$data['temp'];
                    echo $count;
                    ?>
                </div>
                <div class="col-lg-3 p-5 m-2 bg-white border">
                <a href="planet/planets.php">Planets</a>
                <?php include "databases/connection.php";
                    $query = "SELECT COUNT('p_id') as temp FROM planets";
                    $run = mysqli_query($lol,$query);
                    $data=mysqli_fetch_assoc($run);
                    $count=$data['temp'];
                    echo $count;
                    ?>
                </div>
                <div class="col-lg-3 p-5 m-2 bg-white border">
                <a href="constellations.php">Constellations</a>
                <?php include "databases/connection.php";
                    $query = "SELECT COUNT('c_id') as temp FROM constellation";
                    $run = mysqli_query($lol,$query);
                    $data=mysqli_fetch_assoc($run);
                    $count=$data['temp'];
                    echo $count;
                    ?>
                </div>
            </div>
                    

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="" async defer></script>
</body>
</html>


<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    
}


body{

    width: 100%;
   min-height: 100vh;
    background-color:thistle;
   
    
}





</style>