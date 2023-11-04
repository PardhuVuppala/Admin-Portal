<?php
include 'connect.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <form class="form-inline my-2 my-lg-0">
      <a href='logout.php' class="nav-link">Logout</a>
    </form>
</nav>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="add.php" class="text-light">Add User</a></button>
        <table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">Serial No</th> -->
      <th scope="col">Name</th>
      <th scope="col">UserName</th>
      <th scope="col">email</th>
      <th scope="col">gender</th>
      <th scope="col">password</th>
      <th scope="col">mobile</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
  <?php
  $sql = "Select * from `data`";
  $result = mysqli_query($con,$sql);
  if($result)
  {
  
    while( $row = mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        $name = $row['name'];
        $username = $row['username'];
        $email = $row['email'];
        $gender = $row['gender'];
        $password=$row['password'];
        $mobile = $row['mobile'];
        echo ' <tr>
        
        <td scope="row">'.$name.'</td>
        <td>'.$username.'</td>
        <td>'.$email.'</td>
        <td>'.$gender.'</td>
        <td>'.$password.'</td>
        <td>'.$mobile.'</td>
     
        <td class="d-align"><button class="btn btn-primary btn-sm" ><a href="update.php?
        updateid='.$id.'" class="text-light">Update</a></button> 
        <button class="btn btn-danger btn-sm"><a href="delete.php?
        deleteid='.$id.'" class="text-light">Delete</a></button></td>
        
   
      </tr>'; 

    }
  }
   ?>
    
  </tbody>
</table>
   </div>
</body>
</html>