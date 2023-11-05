<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}
?>
<?php


include 'connect.php';
$username = $_SESSION['username'];
$sql = "Select * from `data` where username='$username'";
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
  }
}
if(isset($_POST['submit']))
{
     $name = $_POST['name'];
     $username = $_POST['username'];
     $email = $_POST['email'];
         $mobile = $_POST['mobile'];

    $sql = " update `data` set id = '$id', name ='$name', username = '$username', email = '$email'
     , gender = '$gender', password = '$password' , mobile = '$mobile' where id = $id";
    $result = mysqli_query($con,$sql);
    if($result)
    {    
        // echo "Data Update Successfully";
        header('location:updateHome.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Home Page</title>
  </head>
  <style>

li{
display : flex;
justify-content:center;
}
.two{
  margin-top:35px;
}
#one{
  margin-top: 15px;
 width: 100%;
 max-width: 600px;
 min-height: 200px;
 border:1px solid black;
 border-radius:25px;
}    .sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 90vh;
}


@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
ul {
  list-style-type: none;
}
    </style>
  <body>     

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
  <i> <?php
             echo $_SESSION['username'];
            ?></i>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
    </ul>
  </div>
  <form class="form-inline my-2 my-lg-0">
      <a href='logout.php' class="nav-link">Logout</a>
    </form>
</nav>
<div class="sidebar">
  <a href="home.php">DashBoard</a>
  <a href="updateHome.php">Profile</a>
  <a href="password.php">Password</a>
  <a href="logout.php">Logout</a>
</div>
 <div class="content">
 <div class="container" id= "Hello">
    <form method = 'post'>
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" value="<?php
    echo $name;
    ?>">
  </div>
  <div class="form-group">
    <label>username</label>
    <input type="text" name="username" class="form-control" value="<?php
    echo $username; ?>">
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email"class="form-control" value="<?php
    echo $email;?>">
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" name="mobile" class="form-control" value="<?php
    echo $mobile;?>">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input">
    <label class="form-check-label">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>
</div>
  </body>
</html>