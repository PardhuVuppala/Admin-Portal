<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
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
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Admin Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">User Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">User Signup</a>
      </li>
    </ul>
  </div>
  <form class="form-inline my-2 my-lg-0">
      <a href='logout.php' class="nav-link">Logout</a>
    </form>
</nav>
          
  </body>
</html>