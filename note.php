
fixed-top
<?php
    session_start();
?>

<?php

include 'conn.php';
//Process wiil be happen if click on Submit Button.....
?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">



echo("Email already Exist");


    <div class="alert alert-warning alert-dismissible fade show" role="alert">
     <strong>Welcome</strong>to my website. 
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>


     <form class="d-flex ">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>




                    <!--                --below is complete--


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
            //For Duplicate Email check and Insert data in Database.
            $emailcheck = "select * from GymTable where Email='$Email'";
            $query = mysqli_query($conn,$emailcheck);
            $emailcount = mysqli_num_rows( $query);
            $insertquery='';
            if($emailcount<=1){
                $insert ="insert into gymtable (Firstname,Lastname,Email,Password,Address,State,Pincode,Number,Checked) VALUES ('$Firstname','$Lastname','$Email','$Pass','$Address','$State','$Pincode','$Number','$Checked')";
                $insertquery= mysqli_query($conn,$insert);
                if($insertquery){
                    ?>
                    
                        <div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
                        <strong>Form Submited Succeccfully.</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                }}
            else{?>
               
                <div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
                Email already exist.Please try different Email. 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
            }
              
        }
        

    }
     else{ 
     ?>
     <script> alert("DB Connection Error")</script>
     <?php
    }

        

?>




                                -----end------
-->