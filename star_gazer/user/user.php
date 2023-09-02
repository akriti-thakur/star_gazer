<?php

include("../navbar.php");
include("../databases/connection.php");
include("../databases/connection2.php");






?>




















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planets</title>
    <!-- font-awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    



<div class="container">



    <div class="row">
        <div class="col-10">
            <div class="input-group">
                <div class="input-group-prepend">
                   <span class="input-group-text bg-dark" id="search"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>
                <input  name="bb" type="text" class="form form-control" placeholder="search user....">


            </div>
            

           

          



        </div>
     


        <div class="col-2">
            <button class="btn btn dark" type="button" data-bs-toggle="modal" data-bs-target="#planetadd">
               Add New User
            </button>
        </div>
  </div>

</div>


<!-- Modal -->
<div class="modal fade" id="planetadd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add user</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" id="addplanet" enctype="multipart/form-data">
      <div class="modal-body">

      <!-- this is also right -->

      <div class="col-md-6">
    <label for="username" class="form-label">Username:</label>
    <input type="text" class="form-control" id="username">
  </div>
  <br>
  <div class="col-md-6">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <br>
  <div class="col-12">
    <label for="age" class="form-label">Age:</label>
    <input type="number" class="form-control" id="age" placeholder="">
  </div>
  <br>
  <div class="col-12">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="password" placeholder="">
  </div>
<br>
  <div class="col-12">
    <label for="photo">photo:</label><br>
    <label for="photo" class="custom-file-label">choose file</label>
    <input type="file" class="custom-file-input" id="userphoto" placeholder="">
  </div>


    <!-- this is also right -->



<!-- <div class="form-group">
           <label for="username">USERNAME:</label>
           <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text bg-dark" id="username"><i class="fa fa-user-alt text-light" aria-hidden="true"></i></span>
                </div>
                <input type="text" class="form form-control" placeholder="write user...." autocomplete="off" id="username" required="required">


            </div>
</div>

<div class="form-group">
           <label for="email">EMAI:</label>
           <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text bg-dark" id="username"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                </div>
                <input type="email" class="form form-control" placeholder="write email...." autocomplete="off" id="email" required="required">


            </div>
</div>

<div class="form-group">
           <label for="age">AGE:</label>
           <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text bg-dark" id="age"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i></span>
                </div>
                <input type="number" class="form form-control" placeholder="write age...." autocomplete="off" id="age" required="required">


            </div>
</div>

<div class="form-group">
           <label for="password">PASSWORD:</label>
           <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text bg-dark" id="username"><i class="fa fa-user-alt text-light" aria-hidden="true"></i></span>
                </div>
                <input type="text" class="form form-control" placeholder="write password...." autocomplete="off" id="password" required="required">


            </div>
</div>
<div class="form-group">
           <label for="photo">photo:</label>
           <div class="input-group">
             <label for="photo" class="custom-file-label">choose photo</label>
                <input type="file" class="custom-file-input" id="photo" >


            </div>
</div> -->


        
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
    </div>


 
<!-- TABLE -->
<table class="table mr-4"id="planettable">

  <thead>
    <tr>
      <th scope="col">image</th>
      <th scope="col">planet_id</th>
      <th scope="col">planet_name</th>
      <th scope="col">planet_size</th>
      <th scope="col">rotation_speed</th>
      <th scope="col">operation</th>
      




    </tr>
  </thead>
  <tbody class="table-group-divider text-danger-emphasis">
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
      
      <a href="" class="mr-3 edit "style="color: #CD833a" title="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
      <a href="" class="mr-3  delete "style="color: red" title="delete"><i class="fa fa-trash" aria-hidden="true"></i></a>

      </td>

    </tr>
   
  </tbody>

</table>


<!-- pagination -->

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>







































 <!-- font-awesome cdn -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">



<!-- j-query -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<!-- popper and js link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>






<style>

*{
    padding: 0;
    margin: 0;
    box-sizing:border-box;
}


body{
width: 100%;
min-height: 100vh;
background-image: url("../image/cl.jpg");
position:fixed;

   
}



.container{

    margin-top: 100px;

}

.col-2 button {
    border-radius: 50px;
    border-color: black;
    background-color:azure;
    outline: none;
   
}

.col-2 button:hover{
    background-color: darkorange;
}

table{
    margin-top: 50px;
    padding: 150px;
  
 
    
}

</style>