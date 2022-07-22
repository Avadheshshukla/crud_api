<?php
$servername="localhost";
$username= "root";
$password="";
$database="crud_db";

//create conn
$conn = new mysqli($servername,$username,$password,$database);

$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$address=$_GET['address'];


$mysqli = "UPDATE users SET name='$name', email='$email', phone='$phone', address='$address' WHERE email='$email'";
$query = mysqli_query($conn,$mysqli);

if ($conn->query($mysqli) === TRUE)
{
    //echo "update successfully";
}
else{
   // echo "Something went wrong";
}
header ("Location: index.php");
$conn->close();
?>