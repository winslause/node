<?php
include "connect.php";
include "function.php";
 ?> 
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>crud operation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
        
    </head>
    <body>
        .<div class="container"> 
            <button class="btn btn-primary my-5"><a href="users.php" class="text-light">Add user</a></button>
        </div>

        
<table class="table">
  <thead>
    <tr>
      <th scope="col">SI No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>

      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sql = "select * from crud";
      $result = mysqli_query($con,$sql);
      if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
              $id = $row["id"];
              $name = $row["name"];
              $email = $row["email"];
              $mobile = $row['mobile'];
              $password = $row["password"];

              echo "<tr>
              <th scope='row'>$id</th>
              <td>$name</td>
              <td>$email</td>
              <td>$mobile</td>
              <td>$password</td>
              <td> <button class='btn btn-primary'><a href='update.php? updateid=$id' class='text-light'>Update</a>
              </button>
              <button class='btn btn-danger'><a href='delete.php? deleteid=$id' class='text-light'>Delete</a></button>
              </td>
            </tr>";
              # code...
          }
      }
      




?>
   <td>
       

 
   </td>
  </tbody>
</table>

        
        
        <script src="" async defer></script>
    </body>
</html>