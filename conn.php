<?php

$Server= "localhost";
$Username= "root";
$Password= "";
$Databaserahul= "rahul";


$conn= mysqli_connect($Server,$Username,$Password,$Databaserahul);
if($conn){
     ?>
     <div class="alert alert-warning alert-dismissible fade show" role="alert">
     <strong>Welcome</strong>to my website. 
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
     <!--<script>alert("welcome to my website.")</script>  -->
     <?php
         }
     else{ 
     ?>
     <script> alert("DB Connection Error")</script>
     <?php
    }

        
?>
