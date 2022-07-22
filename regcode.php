<?php
$servername="localhost";
$username= "root";
$password="";
$database="crud_db";

//create conn
$conn = new mysqli($servername,$username,$password,$database);

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address']; 

$sql = "INSERT INTO users (name,email,phone,address) VALUES ('$name','$email','$phone','$address')";
if($conn->query($sql) === TRUE)
{
    echo "record added";
}
else{
    echo "Error: " .  $sql . "<br>" . $conn->error;
}

header("Location: index.php");
$conn->close();
?>