<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .one{
        text-align:center;
        margin-top: 17%;
    }
    .one:hover { 
      color: yellow;
    }
    body{
      background-image: url('plain.avif');
 background-size: cover;
 height: 100vh;
 width: 100%;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CRUD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Admin Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">User Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">User Signup</a>
      </li>
    </ul>
  </div>
</nav>
<h3 class="one">CRUD OPERATIONS</h3>
</body>
</html>