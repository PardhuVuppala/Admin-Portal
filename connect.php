<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db ='form';
$con = mysqli_connect($hostname,$username,$password,$db);
if($con)
{
    // echo "Connection Successful";
}
else{
    die(mysqli_error($con));
}
?>