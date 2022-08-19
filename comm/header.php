<?php
// session_start();
// if (isset($_SESSION['user_id'])) {
// } else {
 
//     header("location:index.php");// for two folders
// }

// $USER= $_SESSION['user_id'];
//  $user_email= $_SESSION['user_email'];


// include "comm/dbcon.php";

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/admin_reg.css"> -->
    <link rel="stylesheet" href="path/to/line-awesome/css/line-awesome-font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Shopping</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="stylemain.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Style sheets -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
    .c {
        font-weight: bold;
        font-size: 70px;
    }

    .carousel-caption {
        color: #fff;
        top: 30%;

    }

    .scroll {
        max-height: 400px;
        overflow-y: auto;
    }

    .clas {
        color: black;
        background-color: #8b5c7e;
        font-size: 5px;
        Width: 150px;
        margin-left: 575px;
    }

    .btn {
        background-color: #8b5c7e;
        color: white;
    }

    .img1 {

        object-fit: cover;


    }

    .cl {
        margin-left: -100px;
    }

    img {
        opacity: 1;
    }

    .b {
        padding: 90px 0 0 110px;
        margin-top: -70px;
        margin-left: -75px;
    }

    @media screen and (max-width: 600px) {
        img {
            height: 250px;
        }

        .img1 {
            height: 40px;
            width: 40px;
        }

        .clas {

            margin-left: 110px;

        }

        .cl {
            margin-left: 70px;
            /* margin: 80px; */
        }

        .dropdown,
        .dropend,
        .dropstart,
        .dropup {

            margin-top: -35px;
        }

        .cla1 {
            /* margin-left: 40px;  */
            margin: -40px 50px 50px 30px;
        }

        .cla2 {
            /* margin-left: 40px;  */
            margin: 12px 50px 50px 30px;
        }

        .c {
            font-weight: bold;
            font-size: 50px;
        }

        .carousel-caption {
            color: #fff;
            top: 100%;

        }

        /* .carousel{
    height: 20px;

} */
    }

    .p1 {
        font-size: 20px;
        color: blue;
    }

    .navbar-light .navbar-toggler {
        color: white;
        border-color: rgb(255 255 255 / 99%);

    }

    a.nav-link{
        word-spacing: 10px !important;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #8b5c7e; color:white;">
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
        <div class="container-fluid">
            <a class="navbar-brand" href="user_dashboard.php" style="color: #fff;font-size:30px;"><b>SHOP</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: #fff;"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #fff;"></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" style="color: #fff;"></a>
                    </li>
                  
                        <li class="nav-item">
                            <a class="nav-link active " aria-current="page" href="user_dashboard.php"
                                style="color: #fff;font-size:20px;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php" style="color: #fff;font-size:20px;">&nbsp;&nbsp;About</a>
                        </li>

                        <li class="nav-item">
                            <a href="shop.php" class="nav-link" style="color: #fff;font-size:20px;">&nbsp;&nbsp;Shop</a>
                        </li>
                        <li class="nav-item">
                            <a href="cloths.php" class="nav-link" style="color: #fff;font-size:20px;">&nbsp;&nbsp;Cloths</a>
                        </li>

                        <li class="nav-item">
                            <a href="flowers.php" class="nav-link" style="color: #fff;font-size:20px;">&nbsp;&nbsp;Flowers</a>
                        </li>
                        <li class="nav-item">
                            <a href="mobile.php" class="nav-link" style="color: #fff;font-size:20px;">&nbsp;&nbsp;Mobile</a>
                        </li>
                        <li class="nav-item">
                            <a href="shos.php" class="nav-link" style="color: #fff;font-size:20px;">&nbsp;&nbsp;Shoes</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact_form.php" class="nav-link " style="color: #fff;font-size:20px;">&nbsp;&nbsp;Contact</a>
                        </li>
                        <li class="nav-item">
                        <a  href="logout1.php" class="nav-link" style="color: #fff;font-size:20px;">&nbsp;&nbsp; Logout</a>
                        </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0  my-2">
                      
                        <div class="dropdown " style="margin-left: 20px;">
                            <img class="img1 ro rounded-circle" src="image/user.jpg" data-toggle="dropdown" width="40px" height="40px"
                                alt="">

                            <!-- <?php echo '<img class="img1" data-toggle="dropdown" width="40px" height="40px" src="data:image/jpeg;base64,' . base64_encode($_SESSION['image']) . '"/>' ?> -->
                            <!-- <b style="margin-right: 20px; color:white;" > <?php echo $_SESSION['user_name'] ?></b> -->
                            <b style="margin-right: 20px; color:white;" ></b>
                            <!-- <div class="dropdown-menu">
                                <a class="dropdown-item" href="logout1.php">Logout</a>
                            </div> -->
                        </div>
                    </ul>
                </form>
            </div>
        </div>
    </nav>