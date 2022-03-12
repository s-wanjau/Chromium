<?php
@ include 'config.php';


if (isset($_POST["register"])){

    $firstName = $_POST["firstName"];
    $lastName =$_POST["lastName"];
    $emailAddress = $_POST["emailAddress"];
    $password = $_POST['password'];
    $confirmpassword = $_POST["confirmpassword"];


    // Validate

    if (strlen($password)<6){
        $passError = "Password must have more than 6 characters";
        echo $passError;
    }elseif (filter_var($emailAddress, FILTER_VALIDATE_EMAIL)==false){
        echo 'eformat';
    }
    else{
        $storePass = password_hash($password,PASSWORD_DEFAULT);
    }

    if ($confirmpassword!=$password){
        $conPassErr="Passwords do not Match!";
        echo $confirmpassword;
    }


    if (empty($passError) and empty($conPassErr)){

        $sql = "INSERT INTO `student`(`firstName`, `lastName`, `emailAddress`, `password`)  
                 VALUES ('$firstName','$lastName','$emailAddress','$storePass')";

        $result=mysqli_query($conn,$sql);

        if ($result){
            echo "You have been registered";
            header("location:login_form.php");

        }else{
            echo "Error executing query".mysqli_error($conn);
        }


    }


    mysqli_close($conn);




}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="form-container">
        <div class="card">
            <div class="card-body">
                <form action="signup_form.php" method="POST">

                    <h3><i class="fa fa-hand-o-down" style="font-size:48px;color:red"></i>Register now!!<i class="fa fa-hand-o-down" style="font-size:48px;color:red"></i></h3>
                    
                    <div class="row">
                        <div class="col">
                            <input class="form-control rounded-pill" type="text" id="fname" name="firstName" placeholder="Enter your Firstname" required/>
    
                        </div>
                        <div class="col">
                            <input class="form-control rounded-pill" type="text" id="lname" name="lastName" placeholder="Enter your Lastname" required/>
    
                        </div>
    
                    </div><br/>
    
                    <div class="row mb-3">
                        <div class="col">
                            <input class="form-control rounded-pill" type="mail" id="email" name="emailAddress" placeholder="Enter your email" required/>
    
                        </div>
    
                    </div>
                    <div class="row">
                        <div class="col">
                            <input class="form-control rounded-pill" type="password" id="password" name="password" placeholder="Enter your password" required/>
    
                        </div>
                        <div class="col">
                            <input  class="form-control rounded-pill" type="password" name="confirmpassword" placeholder="Confirm your password"/>
    
                        </div>
    
                    </div><br/>
    
                    <!--<div class="row">
                        <div class="col">
                            <input  class="form-control rounded-pill" type="password" name="confirmpassword" placeholder="Confirm your password"/>

                        </div>
                        
                    </div>-->
    
                    <div class="row">
                        <input class="form-control rounded-pill bg-warning" type="submit" name="register" value="register">
    
                    </div>
    
                </form>
                <hr/>
                <div class="text-center">
                    <a href="login_form.php"> Already have an account just login?</a>
                </div>
            </div>
        </div>
    
    
    </div>
    
</body>
</html>