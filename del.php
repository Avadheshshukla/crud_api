<?php

$servername="localhost";
$username= "root";
$password="";
$database="crud_db";

//create conn
$conn = new mysqli($servername,$username,$password,$database);

$email=$_GET['email'];
$sql = "DELETE  FROM users WHERE email= '$email'";

if ($conn->query($sql) === TRUE)
{
    echo "Record deleted";
}
else{
    echo "Something went wrong";
}
header ("Location: index.php");
$conn->close();

?>