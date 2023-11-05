<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "select * from `data` where id =$id";
$result  = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name = $row['name'];
$username = $row['username'];
$email = $row['email'];
$gender = $row['gender'];
$password = $row['password'];
$mobile = $row['mobile'];

if(isset($_POST['submit']))
{
     $name = $_POST['name'];
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $mobile = $_POST['mobile'];

    $sql = " update `data` set id = '$id', name ='$name', username = '$username', email = '$email'
     , gender = '$gender', password = '$password' , mobile = '$mobile' where id = $id";
    $result = mysqli_query($con,$sql);
    if($result)
    {    
        // echo "Data Update Successfully";
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
    <h3 class="text-center">UPDATE OPERATION</h3>
    <div class="container">
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
    <label>Password</label>
    <input type="password" class="form-control" name="password"  value="<?php
    echo $password;?>">
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
</body>
</html>