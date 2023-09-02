<?php
include("../databases/connection.php");
include("../databases/connection1.php");

if(isset($_POST['submit'])){
$name=$_POST['name'];
$size=$_POST['size'];
$speed=$post['speed'];

$image=$_FILES['planetimage']['name'];
$tmpname=$_FILES['image']['tmp_name'];
$uploc= 'image/'.$imagename;

$sql="insert into planets(p_name,p_size,rotation_speed,image)values ('$name','$size','$speed','$imagename')";
$result = mysqli_query($lol,$sql);
if($result){
    echo "<script>alert('data added successfully')</script>";
}
else 
{ 
echo "Error in inserting the data";
}



}




?>