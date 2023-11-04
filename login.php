<?php
$success = 0;
$user = 0;

if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
   

    $sql = "select * from `data` where username = '$username' and password='$password'";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        $num = mysqli_num_rows($result);
        if($num>0)
        {
            // echo "Login Successful";
            $success = 1;
            session_start();
            $_SESSION['username'] = $username;
            header('location:home.php');
        }
        else
        {
            //  echo "Invalid Data";
            $user = 1;
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
    .container{
      margin-top: 130px;
      }
      body{
        background-image:linear-gradient(to right,white,white,green);
      }
    </style>
 </head>

 <body>
<div class="container">

<br/>
<br/>
<form action="login.php" method="post">
 <div class="row">
  <div class="col-md-4 col-sm-8 mx-auto">
    <div class="card">
      <div class="card-body" style="background-color: #eeefff">
                                                    
       <div class="text-center">
         <h3 style="color: blue;">Login</h3>
       </div>
       <div class="text-center">
         <h3 style="color: brown;"><?php
         if($success>0)
         {
            echo "Login Successful";
         }
         ?></h3>
       </div>

       <div class="text-center">
         <h3 style="color: brown;"><?php
         if($user>0)
         {
            echo "Invalid Username or Password";
         }
         ?></h3>
       </div>


              
       <div class="text-left" >
                 
    
       
                        
         <div class="mb-2">
           <label for="username" class="fw-bold text-primary">USERNAME *</label>
           <input type="text"  name="username" class="form-control" placeholder="Enter Your UserName" required>
         </div>
          
          
                        
         <div class="mb-2">
            <label for="password" class="fw-bold text-primary">PASSWORD</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
         </div>

         
         <div class="d-grid">		 
           <input type="submit" class="btn btn-success" value="LOGIN"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         </div>
	
       </div>
      </div>
    </div>
   </div>
  </div> 
</form>
</div>

 </body>
</html>
