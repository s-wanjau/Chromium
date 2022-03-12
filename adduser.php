<?php
@ include 'config.php';


session_start();

$fname = mysqli_real_escape_string($mysqli,$_POST['fname']);
$lname = mysqli_real_escape_string($mysqli,$_POST['lname']);
$email = mysqli_real_escape_string($mysqli,$_POST['email']);
$password = mysqli_real_escape_string($mysqli,$_POST['password']);
$cpassword = mysqli_real_escape_string($mysqli,$_POST['cpassword']);

     // validation
if (strlen($password)<6){
    $passError = "Password must have more than 6 characters";
    echo $passError;
}else{
    $storePass = password_hash($password,PASSWORD_DEFAULT);
}

if ($cpassword!=$password){
    $conPassErr="Passwords do not Match!";
    echo $cpassword;
}

$sql = "INSERT INTO `users`(`firstName`, `secondName`, `emailAddress`, `password`)  
                 VALUES ('$fname','$lname','$email','$storePass')";

$result=mysqli_query($conn,$sql);

if ($result){
    echo "You have been registered";
    header("location:index.php");

}else{
    echo "Error executing query".mysqli_error($conn);
}





mysqli_close($conn);
