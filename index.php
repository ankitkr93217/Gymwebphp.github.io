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
include 'navbar.php';
?>

<?php

//include 'conn.php';
//Process wiil be happen if click on Submit Button.....


$Server= "localhost";
$Username= "root";
$Password= "";
$Databaserahul= "rahul";


    $conn= mysqli_connect($Server,$Username,$Password,$Databaserahul);
    if($conn){
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
                       $insertquery=null;
            
                $insert ="insert into gymtable (Firstname,Lastname,Email,Password,Address,State,Pincode,Number,Checked) VALUES ('$Firstname','$Lastname','$Email','$Pass','$Address','$State','$Pincode','$Number','$Checked')";
                $insertquery= mysqli_query($conn,$insert);
                if($insertquery){
                    ?>
                    
                        <div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
                        <strong>Form Submited Succeccfully.</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                }
                else{
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
                    <strong>Something wrong.please try again.</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
             
              
        }
        

    }
     else{ 
        ?>
        <div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
        <strong>Database Connection Unsuccessful.That'why problem came.</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }

        

?>


    <section class="home">
        <div class="container-fluid  " id="home">
            <div class="row  homerow">
                <div class="homecontent mt-5 ">
                    <h1>Welcome To MuscleBuildTv</h1>
                    <div class="my-5">
                        <a href="videos.php"><button class="btn btn-warning fw-bold">TRENDING</button></a>
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
                        <h3 style="color: white; ">MY TOP COACHES</h3>
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

  <section class="nutrition bg-dark pb-4" id="nutrition">
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
                        <p> SDVDHNF RSRTHDHND HRTNFNSBSR Bodybuilding is the use of progressive resistance exercise to
                            control and develop one's muscles by muscle hypertrophy for aesthetic purposes. It is
                            distinct
                            from similar activities such as powerlifting because it focuses on physical appearance
                            instead
                            of strength. Wikipedia
                        </p>
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
    <?php  /*  include 'video.php'  */ ?> 
    <section class="contact" style="background-color: teal;">
        <div class="container  py-3 " id="contact">
            <div>
                <h2 style="text-align: center; color:  white;">Contact</h2>
                <hr>
            </div>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="row my-1">
                    <div class="col-sm-12 col-lg-6">
                        <label for="formGroupExampleInput" class="form-label fw-bold ">First Name</label>
                        <input type="text" name="firstname" class="form-control" required placeholder="First name" aria-label="First name">
                    </div>
                    <div class=" col-sm-12 col-lg-6">
                        <label for="formGroupExampleInput" class="form-label fw-bold">Last Name</label>
                        <input type="text" name="lastname" class="form-control" required placeholder="Last name" aria-label="Last name">
                    </div>
                </div>
                <div class="row">
                    <div class=" col-sm-12 col-lg-6">
                        <label for="formGroupExampleInput" class="form-label fw-bold">Email Address </label>
                        <input type="text"name="email" class="form-control" required placeholder="Email Adress" aria-label="First name">
                    </div>
                    <div class=" col-sm-12 col-lg-6">
                        <label for="formGroupExampleInput" class="form-label fw-bold">Password</label>
                        <input type="text" name="password" class="form-control" required placeholder="Password " aria-label="Last name">
                    </div>
                </div>
                <div class="row">
                    <div class=" col-sm-12 col-lg-12">
                        <label for="formGroupExampleInput" class="form-label fw-bold">Living Address </label>
                        <input type="text" class="form-control" name="address" required placeholder="Living Address" aria-label="First name">
                    </div>
                </div>
                <div class="row">
                    <div class=" col-sm-12 col-lg-4">
                        <label for="formGroupExampleInput" class="form-label fw-bold"> State </label>
                        <input type="text" class="form-control" name="state" required placeholder=" State" aria-label="First name">
                    </div>
                    <div class=" col-sm-12 col-lg-4">
                        <label for="formGroupExampleInput" class="form-label fw-bold">Pincode</label>
                        <input type="number" name="pincode" class="form-control" required placeholder="Pincode " aria-label="Last name">
                    </div>
                    <div class=" col-sm-12 col-lg-4">
                        <label for="formGroupExampleInput" class="form-label fw-bold"> Contact Number</label>
                        <input type="number" name="number" class="form-control" required placeholder=" Contact Number " aria-label="Last name">
                    </div>
                </div>

                <div class="form-check form-switch my-1">
                    <input class="form-check-input" name="checked" value="Done" type="checkbox" required id="flexSwitchCheckDefault">
                    <label class="form-check-label fw-bold" for="flexSwitchCheckDefault">Checked</label>
                </div>
                <div>
                    <button type="submit" name="submit" class="btn btn-primary fw-bold">Submit</button>
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
