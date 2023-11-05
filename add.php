<?php
include 'connect.php';
$user= 0;
$success = 0;
if(isset($_POST['submit']))
{
     $name = $_POST['name'];
     $username = $_POST['username'];
     $email = $_POST['email'];
     $gender = $_POST['gender'];
     $password = $_POST['password'];
     $mobile = $_POST['mobile'];

     $sql = "select * from `data` where username = '$username'";
     $result = mysqli_query($con,$sql);
     if($result)
     {
         $num = mysqli_num_rows($result);
         if($num>0)
         {
             // echo "user already exists";
             $user = 1;
         }
         else
         {
              $sql = "insert into `data` (username,name,email,gender,password,mobile) values ('$username','$name','$email','$gender','$password','$mobile')"; 
              $result  = mysqli_query($con,$sql);
              if($result)
              {
                 //  echo "Singup Successful";
                 $success = 1;
                 $user = 0;
                 
              }
              else
              {
                  die(mysqli_error($con));
              }
         }
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
    <h3 class="text-center">ADD DETAILS</h3>
    <h3 class="text-center"><?php
    if($user>0)
    {
      echo "Username already exist";
      
    }
    else if($success>0)
    {
      echo "User Created";
      header('location:display.php');
    }

    ?></h3>
    <div class="container">
    <form method = 'post'>
    <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control required" required>
  </div>
  <div class="form-group">
    <label>username</label>
    <input type="text" name="username" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email"class="form-control" aria-describedby="emailHelp" required>
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
    <input type="password" class="form-control" name="password" required>
  </div>
  <div class="form-group">
    <label>Mobile</label>
    <input type="text" name="mobile" class="form-control" required>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" required>
    <label class="form-check-label">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</body>
</html>