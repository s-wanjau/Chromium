


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="container-fluid">
        <div>
            <nav class="navbar">

                <ul class="styleup">
                    <li><a href="index.php">Home</a> </li>
                    <li><a href="about.php">About</a> </li>
                    <li><a href="activities.php">Activities</a> </li>
                    <li><a href="learning.php">Learning</a> </li>
                    <li><a href="boarding.php">Boarding/Dining</a> </li>
                    <li><a href="contact.php">Contact us</a> </li>
                </ul>
            </nav>
        </div><br/>
        <section id="contact">
            
            <!--<div class="container">-->
                <h1 class="center">Contact us</h1>
                <form action="contact.php" method="POST">
                    <div class="row">
                        <div class="col-20">
                            <label>Full names</label>

                        </div>
                        <div class="col-80">
                            <input type="text" name="firstName" placeholder="your name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-20">
                            <label>Email</label>

                        </div>
                        <div class="col-80">
                            <input type="email" name="emailAddress" placeholder="your email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-20">
                            <label>Feedback</label>

                        </div>
                        <div class="col-80">
                            <textarea name="feedback" placeholder="share your feedback with us"></textarea>
                        </div>
                    </div>
                </form>
                 
            <!--</div><br/>-->
            <div>
                <button class="btnsubmit" type="submit">Submit</button>
            </div>
        </section><br/><br/><br/>
        <footer class="footer">
            <p class="copyright">&copy; chromium 2022 project</p>
        </footer>

    </div>
    
</body>
</html>