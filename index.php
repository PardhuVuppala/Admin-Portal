<?php
include 'connect.php';
if(isset($_POST['submit']))
{
     $name = $_POST['name'];
     $username = $_POST['username'];
     $email = $_POST['email'];
     $gender = $_POST['gender'];
     $password = $_POST['password'];
     $mobile = $_POST['mobile'];

    $sql = " insert into `data` (username,name,email,gender,password,mobile) values('$username','$name','$email','$gender','$password','$mobile')";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        // echo "Data inserted Successfully";
        header('location:display.php');
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
    <title>Hello, world!</title>
</head>
<body>
    <h3 class="text-center">CRUD OPERATION</h3>
    <div class="container">
    <form method = 'post'>
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="form-group">
    <label>username</label>
    <input type="text" name="username" class="form-control">
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email"class="form-control" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
  <label for="gender" class="fw-bold text-primary form-check-label">GENDER</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" class="form-check-input" name="gender" value="m" />
  <span class="text-info">MALE</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" class="form-check-input" name="gender" value="f" />
  <span class="text-info">FEMALE</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" class="form-check-input" name="gender" value="o" />
  <span class="text-info">OTHERS</span>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" name="password">
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" name="mobile" class="form-control">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input">
    <label class="form-check-label">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</body>
</html>