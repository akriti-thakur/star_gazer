<?php
$mysqli = new mysqli("localhost","root","","star_gazer");
if ($mysqli->connect_error){
  die("Connection failed: " . mysqli_connect_error());
}

?>