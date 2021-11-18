<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MuscleBulidTv</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
</head>

<body>
    <?php
    include 'navbar.php';
    ?>
    <section class="contact pb-5" style=" background-color: teal; height: 100vh;">
        <div class="container  py-3 " id="contact">
            <div>
                <h2 style="text-align: center; color:  white;">Contact</h2>
                <hr>
            </div>
            <form action="">
                <div class="row my-1">
                    <div class="col-sm-12 col-lg-6">
                        <label for="formGroupExampleInput" class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                    </div>
                    <div class=" col-sm-12 col-lg-6">
                        <label for="formGroupExampleInput" class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                </div>
                <div class="row">
                    <div class=" col-sm-12 col-lg-6">
                        <label for="formGroupExampleInput" class="form-label">Email Address </label>
                        <input type="text" class="form-control" placeholder="Email Adress" aria-label="First name">
                    </div>
                    <div class=" col-sm-12 col-lg-6">
                        <label for="formGroupExampleInput" class="form-label">Password</label>
                        <input type="text" class="form-control" placeholder="Password " aria-label="Last name">
                    </div>
                </div>
                <div class="row">
                    <div class=" col-sm-12 col-lg-12">
                        <label for="formGroupExampleInput" class="form-label">Living Address </label>
                        <input type="text" class="form-control" placeholder="Email Adress" aria-label="First name">
                    </div>
                </div>
                <div class="row">
                    <div class=" col-sm-12 col-lg-4">
                        <label for="formGroupExampleInput" class="form-label"> State </label>
                        <input type="text" class="form-control" placeholder=" State" aria-label="First name">
                    </div>
                    <div class=" col-sm-12 col-lg-4">
                        <label for="formGroupExampleInput" class="form-label">Pincode</label>
                        <input type="number" class="form-control" placeholder="Password " aria-label="Last name">
                    </div>
                    <div class=" col-sm-12 col-lg-4">
                        <label for="formGroupExampleInput" class="form-label"> Contact Number</label>
                        <input type="number" class="form-control" placeholder=" Contact Number " aria-label="Last name">
                    </div>
                </div>

                <div class="form-check form-switch my-1">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Checked</label>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>



        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>

</html>