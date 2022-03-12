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
        <section id="boarding">
            <h1 class="center">Boarding/Dining</h1>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="Images/dh1.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Dining hall.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="Images/dorm2.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Dormitory.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="Images/dorm4.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Domitory.</p>
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
                <p>Our students sleep in clean dormitories that are cleaned everyday by our students<br/>
                    they do so so that they inculate discipline and responsibility.That`s not all we 
                    provide for them a balanced diet so that they grow healthy.
                </p>
            </div>
                <!--<p>Our students sleep in clean dormitories that are cleaned everyday by our students<br/>
                    they do so so that they inculate discipline and responsibility.That`s not all we 
                    provide for them a balanced diet so that they grow healthy.
                </p>-->
                <table class="table table-danger table-hover table-bordered">
                    <tr class="table-danger">
                        <th class="table-danger">Day</th>
                        <th class="table-danger">Breakfast</th>
                        <th class="table-danger">Lunch</th>
                        <th class="table-danger">Supper</th>
                    </tr>
                    <tr class="table-warning">
                        <td>Monday</td>
                        <td>2 Boiled eggs,bread and tea</td>
                        <td>Rice and beans</td>
                        <td>Ugali and beans and fruits</td>
                    </tr>
                    <tr class="table-primary">
                        <td>Tuesday</td>
                        <td>2 Boiled eggs,2 scorns and tea</td>
                        <td>Chapati and greengrams</td>
                        <td>Ugali and kales and fruits</td>
                    </tr>
                    <tr class="table-secondary">
                        <td>Wednesday</td>
                        <td>2 Boiled eggs,bacon and tea</td>
                        <td>Spaghetti and minced meat</td>
                        <td>Rice and beans and fruits</td>
                    </tr>
                    <tr class="table-success">
                        <td>Thursday</td>
                        <td>2 Boiled eggs,bread and tea</td>
                        <td>Rice and beans</td>
                        <td>Ugali and beans</td>
                    </tr>
                    <tr class="table-info">
                        <td>Friday</td>
                        <td>2 Boiled eggs,2scorns and tea</td>
                        <td>Pasta and beef</td>
                        <td>Ugali and beef</td>
                    </tr>
                    <tr class="table-light">
                        <td>Saturday</td>
                        <td>2 Boiled eggs,bacon,cheese and tea</td>
                        <td>chips and smokies</td>
                        <td>Ugali and beef</td>
                    </tr>
                    <tr class="table-dark">
                        <td>Sunday</td>
                        <td>2 Boiled eggs,baguettes and tea</td>
                        <td>Rice and greengrams</td>
                        <td>Chapati and ndengu</td>
                    </tr>
                </table>


            </div>


        </section>
    <footer class="footer">
        <p class="copyright">&copy; chromium 2022 project</p>
    </footer>

    </div>
    
</body>
</html>