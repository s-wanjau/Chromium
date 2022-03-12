<?php
include "config.php";

if (isset($_POST['login'])){

    $userEmail = $_POST["emailAddress"];
    $userPassword = $_POST["password"];

    // compare
    $sql = "SELECT * FROM `student` WHERE emailAddress='$userEmail'";

    $result = mysqli_query($conn,$sql);


    if ($result){

        $data = mysqli_num_rows($result);


        if ($data==1){

            while ($row=mysqli_fetch_array($result)){

                $id = $row['id'];
                $emailAddress = $row["emailAddress"];
                $password = $row["password"];
                $firstName = $row["firstName"];

                // verify the password
                if (password_verify($userPassword,$password)){

                    session_start();
                    $_SESSION["loggedin"]=true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"]=$firstName;


                    header("location:index.php");


                }else{
                    echo "Passwords are not matching";
                }

            }


        }else{
            echo "No such email address found";
        }

    }





}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                <form action="login_form.php" method="POST">
                    <h3><i class="fa fa-hand-o-down" style="font-size:48px;color:red"></i>Login now!!<i class="fa fa-hand-o-down" style="font-size:48px;color:red"></i></h3>
    
    
                    <div class="row mb-3">
                        <div class="col">
                            <input class="form-control rounded-pill" type="mail" name="emailAddress" placeholder="Enter your email"/>
    
                        </div>
    
                    </div>
                    <div class="row">
                        <div class="col">
                            <input class="form-control rounded-pill" type="password" name="password" placeholder="Enter your password"/>
    
                        </div>
    
    
                    </div><br/>
    
    
    
                    <div class="row">
                        <input class="form-control rounded-pill bg-warning" type="submit" name="login" value="login">
    
                    </div>
    
                </form>
                <hr/>
                <div class="text-center">
                    <a href="signup_form.php"> Don`t have an account register?</a>
                </div>
            </div>
        </div>
    
    
    </div>
    
</body>
</html>