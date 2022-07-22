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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="editcode.php" method="GET" align="center" >
   Name
   <input type="text" name="name" value="<?php echo "$name" ?>" required><br><br>
   Email
   <input type="email" name="email" value="<?php echo "$email" ?>" required><br><br>
   Phone
   <input type="number" name="phone" value="<?php echo "$phone" ?>" required><br><br>
   Address
   <input type="textarea" name="address" value="<?php echo "$address" ?>" required><br><br>
<br>
   <input type="submit" value="Update">

   
   
</form>
</body>
</html>