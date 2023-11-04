<?php
$success = 0;
$user = 0;

if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';
    $name = $_POST['name'];
    $email  = $_POST['email'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
 
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
  <meta charset="UTF-8">
  <meta name="Author" content="Chandan Mukherjee">
  <meta name="Keywords" content="Reg Page">
  <meta name="Description" content="User Reg Page">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Registration</title>
  <style>

    body{
      background-image:linear-gradient(to right,white,white,blue);
    }
    </style>
 </head>

 <body>
<div class="container mt-5">

<br/>
<br/>
<form action="signup.php" method="post">
 <div class="row">
  <div class="col-md-6 col-sm-8 mx-auto">
    <div class="card">
      <div class="card-body" style="background-color: #eeefff">
                                                    
       <div class="text-center">
         <h3 style="color: blue">CREATE ACCOUNT </h3>
       </div>

       <div class="text-center">
         <h3 style="color: brown;"><?php
         if($success>0)
         {
            echo "Signup Successful";
            header('location:index.php');
         }
         ?></h3>
       </div>

       <div class="text-center">
         <h3 style="color: brown;"><?php
         if($user>0)
         {
            echo "Username already exists,signup unsuccessful";
         }
         ?></h3>
       </div>

              
       <div class="text-left">
                 
        <form>
         <div class="mb-2">
           <label for="name" class="fw-bold text-primary" >NAME *</label>
           <input type="text" name="name" class="form-control" placeholder="Enter Your Full Name" required >
         </div>
                        
         <div class="mb-2">
           <label for="email" class="fw-bold text-primary">EMAIL *</label>
           <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
         </div>
                        
         <div class="mb-2">
           <label for="username" class="fw-bold text-primary">USERNAME *</label>
           <input type="text"  name="username" class="form-control" placeholder="Enter Your UserName" required>
         </div>
                        
                           
         <div class="mb-2">
            <label for="gender" class="fw-bold text-primary form-check-label">GENDER</label> &nbsp;&nbsp;&nbsp;
            <input type="radio" class="form-check-input" name="gender" value="m" />
                <span class="text-info">MALE</span> &nbsp;&nbsp;
            <input type="radio" class="form-check-input" name="gender" value="f" />
                <span class="text-info">FEMALE</span>
            <input type="radio" class="form-check-input" name="gender" value="o" />
            <span class="text-info">OTHERS</span>
         </div>
                        
         <div class="mb-2">
            <label class="fw-bold text-primary">Mobile</label>
            <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number">
         </div>
                        
         <div class="mb-2">
            <label for="password" class="fw-bold text-primary">PASSWORD</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
         </div>

         
         <div class="d-grid">		 
           <input type="submit" class="btn btn-primary" value="CREATE ACCOUNT"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         </div>
		</form>
       </div>
      </div>
    </div>
   </div>
  </div> 
</form>
</div>

 </body>
</html>
