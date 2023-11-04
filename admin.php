<?php
$invalid = 0;
 
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
 
     $username = $_POST['adminid'];
     $password = $_POST['password'];
    

     if($username == "admin" && $password =="password" )
     {
        header('location:display.php');
         }
     else
     { 
              $invalid = 1;
     }  
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style> 
#F1{
    
    background-color: rgba(0,0,0.5,0);
    margin: auto;
    padding: 40px;
    border-radius: 5px;
    box-shadow: 0 0 10px #000;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 380px;
    height:450px;

}
#App500{

background-color: rgba(0,0,0.5,0);
 
}
.bg_image1{
 background-size: cover;
 height: 100vh;
 width: 100%;

}
.Admin1
{
margin: 0;
text-align: right;

}
#F2
{
background-color: rgba(0,0,0.5,0);

 

}

body{


    background-image:linear-gradient(to right,white,white,blue);
}
        </style>
</head>
<body>
<div>
          
  <div class="container" id="App9">


<br /> 
<br />

<div class="row" id="F1">
  <div>
      <div  id="App500">
          <div class="card-body" id="F2">
              <div class="text-center">
                  <h4 class="fw-bold text-primary" >ADMIN LOGIN</h4>
                  <p class="fw-bold text-primary" >
                    <?php
                     if($invalid)
                     {
                         echo "Invalid Username or Password";
                     }
                    ?>
                  </p>
              </div>

              <div class="text-left">
                  <form action="admin.php" method="post">

                      <div class="mb-4">
                          <label  class="fw-bold text-primary">Admin ID *</label>
                          <input type="text" 
                              name="adminid" class="form-control"  placeholder="Enter Admin id"/>
                      </div>

                      <div class="mb-4">
                          <label  class="fw-bold text-primary">Password *</label>
                          <input type="password"
                              name="password" class="form-control" placeholder="Enter Password" />
                      </div>
                      <div class="mb-4">
                      <input type="checkbox"></input>
                      <label for="terms"></label><span> Agree terms & conditions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>   
                      
                      </div>
                      
                
                      <div class="d-grid">

                      <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
     
    </div>

     

      </div>      
</body>
</html>