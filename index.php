<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Task</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.csshttps://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container" align="center">
    <h2>Lists of Users</h2>
    <a class="btn btn-primary" href="/task1/reg.php" role="button">Add New User</a>
    <br><br>
    <table border="2" cellspacing="4">
   <thead>
      <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Action</th>
      </tr>
   </thead>
   <tbody>
       <?php
       $servername="localhost";
       $username= "root";
       $password="";
       $database="crud_db";

       //db connection 
       $connection=new mysqli($servername,$username,$password,$database);

       // connection check
       if($connection->connect_error)
       {
           die("connection failed: " . $connection->connect_error);
       }

       $sql="select * from users";
       $result=$connection->query($sql);

       if (!$result)
       {
           die("invalid query: " .$connection->error);
       }
       
     //read the data of rows
       while($row= $result->fetch_assoc())
       {
         echo "
         <tr>
          <td>$row[id]</td>
          <td>$row[name]</td>
          <td>$row[email]</td>
          <td>$row[phone]</td>
          <td>$row[address]</td>
          <td>
              <a  class='btn btn-primary btn-sm' href='/task1/edit.php?name=$row[name]&email=$row[email]&phone=$row[phone]&address=$row[address]'>Edit</a>
              <a  class='btn btn-danger btn-sm' href='/task1/del.php?email=$row[email]'>Delete</a>
          </td>
       </tr>
         ";
       }

       ?>


       
    </tbody>    
  </table>
 </div>
</body>
</html>