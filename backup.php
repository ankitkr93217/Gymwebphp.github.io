<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MuscleBuildTv</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


</head>

<body>
<?php

include 'conn.php';
//Process wiil be happen if click on Submit Button.....
if(isset($_POST['submit'])){
    $Firstname= mysqli_real_escape_string($conn,$_POST['firstname']);
    $Lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
    $Email    = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $Address  = mysqli_real_escape_string($conn,$_POST['address']);
    $State    = mysqli_real_escape_string($conn,$_POST['state']);
    $Pincode  = mysqli_real_escape_string($conn,$_POST['pincode']);
    $Number   = mysqli_real_escape_string($conn,$_POST['number']);
    $Checked  = mysqli_real_escape_string($conn,$_POST['checked']);
    //.....

     //For Password Encrypt.
    $Pass = password_hash($password,PASSWORD_BCRYPT);
    //For Duplicate Email check and Insert data in Database.
    $emailcheck = "select * from GymTable where Email='$Email'";
    $query = mysqli_query($conn,$emailcheck);
    $emailcount = mysqli_num_rows( $query);
    if($emailcount>0){echo("Email already Exist");}
    else{
        $insert ="insert into gymtable (Firstname,Lastname,Email,Password,Address,State,Pincode,Number,Checked) VALUES ('$Firstname','$Lastname','$Email','$Pass','$Address','$State','$Pincode','$Number','$Checked')";
        $insertquery= mysqli_query($conn,$insert);
    }
    if($insertquery)
    
    {
        ?>
        <script>alert("Submited Successful")</script>
        <?php
    }     
}
?>


    <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex">
            <div class="container-fluid">
                <a class="navbar-brand" href="C:\Users\200098\Desktop\BOOTSTRAP/home.html">MuscleBuildTv</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about.html">ABOUT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                SERVICE
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/videos.html">WORKOUT</a></li>
                                <li><a class="dropdown-item" href="#">DIET</a></li>
                                <li><a class="dropdown-item" href="#">COACH</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">CONTACT US</a>
                        </li>

                    </ul>
                    <form class="d-flex ">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <div class="mx-2 py-2">
                        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                            data-bs-target="#signinModal">SignIn</button>
                    </div>
                    <div class="mx-1 py-2">
                        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                            data-bs-target="#signupModal">SignUp</button>
                    </div>

                </div>
            </div>
        </nav>
    </section>

    <!-- Button trigger modal -->
    <!-- signup Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">SIGN UP</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address Or Number</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
    <!-- signin  Modal -->
    <div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="signinModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signinModalLabel">SIGN IN</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <section class="home">
        <div class="container-fluid  " id="home">
            <div class="row  homerow">
                <div class="homecontent mt-5 ">
                    <h1>Welcome To MuscleBuildTv</h1>
                    <div class="my-5">
                        <a href="#trending"><button class="btn btn-warning fw-bold">TRENDING</button></a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="coach">
        <div class="container-fluid">

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner py-2 ">
                    <div class="mt-2" style=" text-align: center;">
                        <h3 style="color: white;">MY TOP COACHES</h3>
                    </div>
                    <div class="carousel-item active mt-5  row-cols-lg-4 row-cols-sm-12">
                        <div class="card cardcontent">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in
                                    to
                                    additional content. This content is a little bit longer.</p>
                                <a class="btn btn-primary" href="#" role="button">ENROLL NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item mt-5   row-cols-lg-4 row-cols-sm-12">
                        <div class="card cardcontent">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in
                                    to
                                    additional content. This content is a little bit longer.</p>
                                <a class="btn btn-primary" href="#" role="button">ENROLL NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item  mt-5   row-cols-lg-4 row-cols-sm-12">
                        <div class="card cardcontent">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in
                                    to
                                    additional content. This content is a little bit longer.</p>
                                <a class="btn btn-primary" href="#" role="button">ENROLL NOW</a>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!--  <section class="trending">
        <div id="trending" class="container-fluid bg-white" <h3 class="text-center mt-5">Bodybuilding Information</h3>
            <hr>
            <div class="row my-3  ">
                <div class="col-md-12  col-sm-12 order-1 workouttiptext">
                    <h5>Mr Olympia Victor Martinez</h5>
                    <hr>
                    <p>
                        Division: IFBB Pro Bodybuilding
                        <br>

                        Turned Pro: 2001
                        <br>
                        Height / Weight: 5'9" / 260 lbs
                        <br>

                        Age: 47
                        <br>

                        Location: Dominican Republic
                    </p>

                </div>

                <div class="col-md-12   col-sm-12 order-2" style="align-items: center;" >
                    <div class="embed-responsive ">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/yQkc56joP7Q"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
  -->

    <section class="nutrition bg-dark pb-4">
        <div class="container ">
            <h2 class=" text-center text-white">Nutrition</h2>
            <hr>
            <div class="row mt-4">
                <div class="col-lg-4 col-sm-12 px-2 py-2">
                    <div class="card">
                        <div> <img src="image/10i.webp " style="height:15rem; " class="card-img-top img-fluid"
                                alt="..."></div>
                        <div class="card-body">
                            <h5 class="card-title">ON Whey Nutrition</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's content.</p>
                            <a href="https://asitisnutrition.com/#" class="btn btn-primary">Click For Order</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 px-2 py-2">
                    <div class="card">
                        <img style="height: 15rem;" src=" image/10i.webp" class="card-img-top img-fluid " alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ON Whey Nutrition</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's content.</p>
                            <a href="https://asitisnutrition.com/#" class="btn btn-primary">Click For Order</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 px-2 py-2">
                    <div class="card">
                        <img style="height: 15rem;" src="image/10i.webp" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ON Whey Nutrition</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's content.</p>
                            <a href="https://asitisnutrition.com/#" class="btn btn-primary">Click For Order</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row  ">
                <div class="col-lg-4 col-sm-12   px-2 py-2">
                    <div class="card">
                        <img style="height: 15rem;" src="image/10i.webp" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ON Whey Nutrition</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's content.</p>
                            <a href="https://asitisnutrition.com/#" class="btn btn-primary">Click For Order</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-12  px-2 py-2">
                    <div class="card">
                        <img style="height: 15rem; " src="image/10i.webp" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ON Whey Nutrition</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the
                                card's content.</p>
                            <a href="https://asitisnutrition.com/#" class="btn btn-primary">Click For Order</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="workouttips" style="background-color: #2cfff4;">
        <div class="container py-4 align-content-center text-center" id="workouttips">

            <div class=" pb-4">
                <h3>WORKOUT TIPS</h3>
            </div>

            <div class="row tips my-2">
                <div class="col-lg-6  col-sm-12 ">
                    <img src="image/1i.gif" class="img-fluid" alt="..." style="width: 100%;">
                </div>
                <div class="col-lg-6 col-sm-12 workouttiptext">
                    <div>
                        <h4>HI MY NAME IS ANKIT</h4>
                        <P> SDVDHNF RSRTHDHND HRTNFNSBSR Bodybuilding is the use of progressive resistance exercise to
                            control and develop one's muscles by muscle hypertrophy for aesthetic purposes. It is
                            distinct
                            from similar activities such as powerlifting because it focuses on physical appearance
                            instead
                            of strength. Wikipedia
                        </P>
                    </div>
                </div>
            </div>
            <div class="row tips my-2">
                <div class="col-lg-6 col-sm-12 workouttiptext ">
                    <div>
                        <h4>HI MY NAME IS ANKIT</h4>
                        <p> SDVDHNF RSRTHDHND HRTNFNSBSR Bodybuilding is the use of progressive resistance exercise to
                            control and develop one's muscles by muscle hypertrophy for aesthetic purposes. It is
                            distinct
                            from similar activities such as powerlifting because it focuses on physical appearance
                            instead
                            of strength. Wikipedia
                        </P>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 ">
                    <img src="image/3i.png" style="width: 100%;" class="img-fluid" alt="...">
                </div>
            </div>
            <div class="row tips">
                <div class="col-lg-6 col-sm-12">
                    <div>
                        <img src="image/2i.jpg" style="width: 100%;" class=" img-fluid" alt="...">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 workouttiptext ">
                    <div>
                        <h4>HI MY NAME IS ANKIT</h4>
                        <P> SDVDHNF RSRTHDHND HRTNFNSBSR Bodybuilding is the use of progressive resistance exercise to
                            control and develop one's muscles by muscle hypertrophy for aesthetic purposes. It is
                            distinct
                            from similar activities such as powerlifting because it focuses on physical appearance
                            instead
                            of strength. Wikipedia
                        </P>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="contact" style="background-color: teal;">
        <div class="container  py-3 " id="contact">
            <div>
                <h2 style="text-align: center; color:  white;">Contact</h2>
                <hr>
            </div>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="row my-1">
                    <div class="col-sm-12 col-lg-6">
                        <label for="formGroupExampleInput" class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" required placeholder="First name" aria-label="First name">
                    </div>
                    <div class=" col-sm-12 col-lg-6">
                        <label for="formGroupExampleInput" class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" required placeholder="Last name" aria-label="Last name">
                    </div>
                </div>
                <div class="row">
                    <div class=" col-sm-12 col-lg-6">
                        <label for="formGroupExampleInput" class="form-label">Email Address </label>
                        <input type="text"name="email" class="form-control" required placeholder="Email Adress" aria-label="First name">
                    </div>
                    <div class=" col-sm-12 col-lg-6">
                        <label for="formGroupExampleInput" class="form-label">Password</label>
                        <input type="text" name="password" class="form-control" required placeholder="Password " aria-label="Last name">
                    </div>
                </div>
                <div class="row">
                    <div class=" col-sm-12 col-lg-12">
                        <label for="formGroupExampleInput" class="form-label">Living Address </label>
                        <input type="text" class="form-control" name="address" required placeholder="Living Address" aria-label="First name">
                    </div>
                </div>
                <div class="row">
                    <div class=" col-sm-12 col-lg-4">
                        <label for="formGroupExampleInput" class="form-label"> State </label>
                        <input type="text" class="form-control" name="state" required placeholder=" State" aria-label="First name">
                    </div>
                    <div class=" col-sm-12 col-lg-4">
                        <label for="formGroupExampleInput" class="form-label">Pincode</label>
                        <input type="number" name="pincode" class="form-control" required placeholder="Pincode " aria-label="Last name">
                    </div>
                    <div class=" col-sm-12 col-lg-4">
                        <label for="formGroupExampleInput" class="form-label"> Contact Number</label>
                        <input type="number" name="number" class="form-control" required placeholder=" Contact Number " aria-label="Last name">
                    </div>
                </div>

                <div class="form-check form-switch my-1">
                    <input class="form-check-input" name="checked" value="Done" type="checkbox" required id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Checked</label>
                </div>
                <div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>



        </div>
    </section>

   



    <div class="upbutton">
        <button id="btn" class="btn btn-danger" onclick="topFunction()"><i class="fas fa-angle-double-up"></i>
        </button>
    </div>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>
</body>

</html>