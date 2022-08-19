<?php
include "comm/dbcon.php";
if (isset($_POST['submit1'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile=$_POST['mobile'];
  $des = $_POST['des'];
 
  

  $query = "INSERT INTO `contact_tbl`(`name`, `email`, `mobile`, `des`) 
  VALUES('$name','$email','$mobile','$des')";

  $fire = mysqli_query($con, $query) or die("con not insert the data." . mysqli_error($con));

  if ($fire)   {

    echo '<script type="text/javascript">';
    echo 'alert("successfull");';
    // echo 'window.location = "view_client.php";';
    echo '</script>';
  } else {
    echo '<script type="text/javascript">';
    echo 'alert(" please try again!");';
  
    //  echo 'window.location ="addclient.php";';
  
    echo '</script>';
   
  }
}
?>


<link rel="stylesheet" href="css/contcat.css">
<link rel="stylesheet" href="css/index.css">
<style>
body {
    background: #8b5c7e;
    /* fallback for old browsers */

}

input {
    background-color: white;
}
@media screen and (max-width: 600px) { 
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1pxsolidrgba(0,0,0,.125);
    border-radius: 0.25rem;
    width: 350px;
}
}
</style>
</head>

<body>
    <?php include 'comm/header.php' ?>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/b9.jpg"  class="d-block w-100" alt="..." height="400px" width="400px"
                    style=" opacity: 1;background-size: cover;">
                <div class="carousel-caption d-none d-md-block mt- mb-5">
                    <h1 class="c" style="color: white;">Contact Us</h1>
                </div>
            </div>
         
          
        </div>

    </div>
    <!-- main  -->
    <div class="container ">
        <div class="row">
            <div class="column ">
                <div class="card ">
                    <br>
                    <h3 class="text-center my-3">Contact Form</h3>

                    <form class="my-4" action="#" method="POST" enctype="multipart/form-data">

                        <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        <div class="row">

                            <div class="col-md-6">


                                <label for="name">name</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" class="no-outline" name="name" placeholder="Name"><br>
                                    <!-- <input type="email" class="no-outline" id="admin_mail" name="admin_mail" placeholder="Enter admin's email" required /> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="email" class="no-outline" name="email" placeholder="Email"><br>
                                    <!-- <input type="email" class="no-outline" id="admin_mail" name="admin_mail" placeholder="Enter admin's email" required /> -->
                                </div>
                            </div>
                        </div>
                        <div class="row my-5">
                            <div class="col-md-6">


                                <label for="mobile">Mobile</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" class="no-outline" name="mobile" placeholder="Mobile"><br>
                                    <!-- <input type="email" class="no-outline" id="admin_mail" name="admin_mail" placeholder="Enter admin's email" required /> -->
                                </div>
                            </div>
                            <div class="col-md-6">


                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="des"
                                        rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 my-5">
                            <button type="submit" name="submit1" class="btn btn-lg"
                                style="background-color:#8b5c7e; color: white; border-radius:4px;">
                                Send
                            </button>

                        </div>
                        <!-- <div class="d-grid gap-2">
                                <a href="forget_pass.php" class="text-center" style="text-decoration: none;">Forget Password</a>
                               
                            </div> -->

                    </form>

                </div>
            </div>
        </div>
        
    </div>
    <div class="container-fluid ">
        <!--Google map-->
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
            <iframe src="https://maps.google.com/maps?q=Bhopal,+Madhya+Pradesh&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <!--Google Maps-->
    </div>
    
   

    <?php include 'comm/footer.php' ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>