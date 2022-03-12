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
        </div>
        <section id="activities">
            <h1 class="center">Activities</h1>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="Images/swimming.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Swimming gala</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="Images/basketball.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Basketball tournament.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="Images/football.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Football tournament.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <div class="flexbox">
                <p>By now you must have known a thing or to about us,but that`s not all<br/>
                    we not only focus on academic accellence but we have a keen eye on nuturing the GOD given
                    talents that your kids have so that we mold them to become holistic and competitive citizens<br/>
                    That`s why we have programs that cater to just that.Activities like football,basketball,volleyball,
                    netball,handball, swimming,racket games,music and drama festivals among others<br/>
                    You can trust us your kids are safe hands no doubt about that.
 
                 </p>
            </div>

                <!--<p>By now you must have known a thing or to about us,but that`s not all<br/>
                   we not only focus on academic accellence but we have a keen eye on nuturing the GOD given
                   talents that your kids have so that we mold them to become holistic and competitive citizens<br/>
                   That`s why we have programs that cater to just that.Activities like football,basketball,volleyball,
                   netball,handball, swimming,racket games,music and drama festivals among others<br/>
                   You can trust us your kids are safe hands no doubt about that.

                </p>-->
                <div class="flexbox">
                    <div class="row">
                        <div class="col">
                            <img src="Images/swimming.jpeg" alt="loading" height="300px" width="300px">
                        </div>
                        <div class="col">
                            <p>We`ve won swimming gala competitions at the national level</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="Images/rugby.jpeg" alt="loading" height="300px" width="300px">
                        </div>
                        <div class="col">
                            <p>We`ve won rugby competitions at the national level</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="Images/football.jpeg" alt="loading" height="300px" width="300px">
                        </div>
                        <div class="col">
                            <p>We`ve won football competitions at the national level</p>
                        </div>
                    </div>

                </div>
                <div class="flexbox">
                    <div class="row">
                        <div class="col">
                            <img src="Images/basketball.jpeg" alt="loading" height="300px" width="300px">
                        </div>
                        <div class="col">
                            <p>We`ve won basketball competitions at the national level</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="Images/racket.jpeg" alt="loading" height="300px" width="300px">
                        </div>
                        <div class="col">
                            <p>We`ve won racket games competitions at the national level</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="Images/drama and music.jpeg" alt="loading" height="300px" width="300px">
                        </div>
                        <div class="col">
                            <p>We`ve won music and drama competitions at the national level</p>
                        </div>
                    </div>

                </div>
                
                
               
                

            </div>

        </section>
    <footer class="footer">
        <p class="copyright"> &copy; chromium 2022 project</p>
    </footer>

    </div>
    
</body>
</html>