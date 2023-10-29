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
            <h1> Welcome <?php
             echo $_SESSION['username'];
            ?></h1>
            <div>
                <a href='logout.php' class='btn btn-primary'>Logout</a>
            </div>
  </body>
</html>