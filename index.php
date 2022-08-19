<style>
    @media screen and (max-width: 600px) { 
        img.img1.ro.rounded-circle {
    margin-top: 30px;
}
        .col-6.clas1 {
    
    margin-left: 20px;
}
.img1 {
    height: 40px;
    width: 40px;
    margin-left: 30px;
}
.row.card11 {
    display: grid;
    width: 900px;
    margin-left: 60px;
    height: px;
}
.card.card17 {
    height: 80px;
}
.card.card7 {
    height: 100px;
}
.card.card10 {
    height: 100px;
}
.text-center.my-4.card4 {
    margin-right: -270px;
}
h2.c1 {
    margin-right: -200px;
    margin-left: -20px;
}
.row.card3 {
    display: grid;
}
p.c1 {
    margin-right: -170px;
    margin-left: -40px;
}
        .card1 {
    
    height: 160px;
}
img.rounded-circle.my-3.shadow {
    height: 160px;
}
.card2 {
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
    width: 330px;
}
}
</style>
<?php include 'comm/header.php' ?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="image/clothes.jpg" class="d-block w-100" alt="..." height="500px" width="400px"
                style=" opacity: 1;">
            <div class="carousel-caption d-none d-md-block mt-5 mb-5">
                <h1 class="c" style="color: white;">SHOP</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img src="image/mobiles.jpg" class="d-block w-100" alt="..." height="500px" width="400px"
                style=" opacity: 1;">
            <div class="carousel-caption d-none  d-md-block mt-5 mb-5">
                <h1 class="c" style="color:white;">SHOP</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img src="image/shh.jpg" class="d-block w-100" alt="..." height="500px" width="400px" style=" opacity: 1;">
            <div class="carousel-caption d-none d-md-block mt-5 mb-5">
                <h1 class="c" style="color:white;">SHOP</h1>
            </div>
        </div>
    </div>

</div>
</div>


<div class="container my-5">
    <div class="row ">
        <div class="col-4">
            <div class="card card1">

                <img src="image/im.jpg" class="d-block w-100" alt="..." height="300px" width="400px">
                <div class="carousel-caption d-none  d-md-block mt-5 mb-5">
                    <h1 class="c" style="color: white;">Cloth</h1>
                </div>

            </div>
        </div>
        <div class="col-4">
            <div class="card card1">
                <img src="image/im1.jpg" class="d-block w-100" alt="..." height="300px" width="400px">
                <div class="carousel-caption d-none  d-md-block mt-5 mb-5">
                    <h1 class="c" style="color: white;">Shoes</h1>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card card1">
                <img src="image/im2.jpg" class="d-block w-100" alt="..." height="300px" width="400px">
                <div class="carousel-caption d-none  d-md-block mt-5 mb-5">
                    <h1 class="c" style="color:white;">Mobile</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="pt-5 pb-5" style="background-color: #ededef;">
    <div class="container">
        <div class="row">
            <div class="col-6">

            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>

            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                                                        <?php

                            include('comm/dbcon.php');

                            $query = "SELECT * FROM shop WHERE category='Flowers' LIMIT 1,3";
                            $rs_result = mysqli_query($con, $query);
                            if (mysqli_num_rows($rs_result) > 0) {

                            while ($row = mysqli_fetch_assoc($rs_result)){
                            
                            ?>
                            <div class="col-md-4 mb-3">

                                <div class="card">
                                    <a href="flowers.php"><?php echo'<img class="img" style="margin-left:80px; padding:0px;" src="data:image/jpeg;base64,'
                 . base64_encode($row['image']) . '" height="200px" width="150px"/>' ?></a>
                                    <div class="card-body">
                                        <h4 class="card-title" style="font-size:15px;"><?php echo $row['product_name'] ?></h4>
                                        

                                    </div>


                                </div>

                            </div>
                            <?php
                                   
                                }
                            }
                                ?>


                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                                                        <?php

                            include('comm/dbcon.php');

                            $query = "SELECT * FROM shop WHERE category='Flowers' LIMIT 4,3";
                            $rs_result = mysqli_query($con, $query);
                            if (mysqli_num_rows($rs_result) > 0) {

                            while ($row = mysqli_fetch_assoc($rs_result)){
                            
                            ?>
                            <div class="col-md-4 mb-3">

                                <div class="card" style="height: 300px;">
                                    <a href="flowers.php"><?php echo'<img class="img" style="margin-left:80px; padding:0px;" src="data:image/jpeg;base64,'
                 . base64_encode($row['image']) . '" height="200px" width="150px"/>' ?></a>
                                    <div class="card-body">
                                    <h4 class="card-title" style="font-size:15px;"><?php echo $row['product_name'] ?></h4>

                                    </div>


                                </div>

                            </div>
                            <?php
                                   
                                }
                            }
                                ?>


                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                                                        <?php

                            include('comm/dbcon.php');

                            $query = "SELECT * FROM shop WHERE category='Flowers' LIMIT 6,3";
                            $rs_result = mysqli_query($con, $query);
                            if (mysqli_num_rows($rs_result) > 0){ 

                            while ($row = mysqli_fetch_assoc($rs_result)){
                            
                            ?>
                            <div class="col-md-4 mb-3">

                                <div class="card" style="height: 300px;" >
                                    <a href="flowers.php"><?php echo'<img class="img" style="margin-left:80px; padding:0px;" src="data:image/jpeg;base64,'
                 . base64_encode($row['image']) . '" height="200px" width="150px"/>' ?></a>
                                    <div class="card-body">
                                    <h4 class="card-title" style="font-size:15px;"><?php echo $row['product_name'] ?></h4>

                                    </div>


                                </div>

                            </div>
                            <?php
                                   
                                }
                            }
                                ?>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>





<div class="container-fluid my-5" style="background-color: #F5F5F5;">
    <div class="container">
        <div class="row">
            <div class="col-6  clas1">
                <h2 class="c1">Lorem ipsum dolor sit</h2>
                <p style="text-align: justify;" class="c1">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Aspernatur aut a corporis,
                    quaerat laborum, harum aliquid obcaecati nostrum
                    distinctio blanditiis architecto nam, sint eaque facere deleniti minima eum dolorem velit!
                    Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Aspernatur aut a corporis,
                    quaerat laborum, harum aliquid obcaecati nostrum
                    distinctio blanditiis architecto nam, sint eaque facere deleniti minima eum dolorem velit!
                    Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Aspernatur aut a corporis,
                    quaerat laborum, harum aliquid obcaecati nostrum
                    distinctio blanditiis architecto nam, sint eaque facere deleniti minima eum dolorem velit!</p>
                <p style="text-align: justify;" class="c1">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Aspernatur aut a corporis,
                    quaerat laborum, harum aliquid obcaecati nostrum
                    distinctio blanditiis architecto nam, sint eaque facere deleniti minima eum dolorem velit!
                    Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Aspernatur aut a corporis,
                    quaerat laborum, harum aliquid obcaecati nostrum
                    distinctio blanditiis architecto nam, sint eaque facere deleniti minima eum dolorem velit!
                    Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Aspernatur aut a corporis,
                    quaerat laborum, harum aliquid obcaecati nostrum
                </p>
            </div>
            <div class="col-6">
                <div class="card card2">
                    <img src="image/im2.jpg" class="d-block w-100" alt="..." height="500px" width="400px">

                </div>
            </div>
        </div>
    </div>
</div>

<section class="pt-5 pb-5" style="background-color: #ededef;">
    <div class="container">
        <div class="row">
            <div class="col-6">

            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>

            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                                                        <?php

                            include('comm/dbcon.php');

                            $query = "SELECT * FROM shop WHERE category='Mobile' LIMIT 1,3";
                            $rs_result = mysqli_query($con, $query);
                            if (mysqli_num_rows($rs_result) > 0) {

                            while ($row = mysqli_fetch_assoc($rs_result)){
                            
                            ?>
                            <div class="col-md-4 mb-3">

                                <div class="card" style="height: 300px;">
                                    <a href="mobile.php"><?php echo'<img class="img" style="margin-left:80px; padding:0px;" src="data:image/jpeg;base64,'
                 . base64_encode($row['image']) . '" height="200px" width="150px"/>' ?></a>
                                    <div class="card-body">
                                        <h4 class="card-title" style="font-size:15px;"><?php echo $row['product_name'] ?></h4>
                                        

                                    </div>


                                </div>

                            </div>
                            <?php
                                   
                                }
                            }
                                ?>


                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                                                        <?php

                            include('comm/dbcon.php');

                            $query = "SELECT * FROM shop WHERE category='Mobile' LIMIT 4,3";
                            $rs_result = mysqli_query($con, $query);
                            if (mysqli_num_rows($rs_result) > 0) {

                            while ($row = mysqli_fetch_assoc($rs_result)){
                            
                            ?>
                            <div class="col-md-4 mb-3">

                                <div class="card" style="height: 300px;">
                                    <a href="mobile.php"><?php echo'<img class="img" style="margin-left:80px; padding:0px;" src="data:image/jpeg;base64,'
                 . base64_encode($row['image']) . '" height="200px" width="150px"/>' ?></a>
                                    <div class="card-body">
                                    <h4 class="card-title" style="font-size:15px;"><?php echo $row['product_name'] ?></h4>

                                    </div>


                                </div>

                            </div>
                            <?php
                                   
                                }
                            }
                                ?>


                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                                                        <?php

                            include('comm/dbcon.php');

                            $query = "SELECT * FROM shop WHERE category='Mobile' LIMIT 6,3";
                            $rs_result = mysqli_query($con, $query);
                            if (mysqli_num_rows($rs_result) > 0){ 

                            while ($row = mysqli_fetch_assoc($rs_result)){
                            
                            ?>
                            <div class="col-md-4 mb-3">

                                <div class="card">
                                    <a href="mobile.php"><?php echo'<img class="img" style="margin-left:80px; padding:0px;" src="data:image/jpeg;base64,'
                 . base64_encode($row['image']) . '" height="200px" width="150px"/>' ?></a>
                                    <div class="card-body">
                                    <h4 class="card-title" style="font-size:15px;"><?php echo $row['product_name'] ?></h4>

                                    </div>


                                </div>

                            </div>
                            <?php
                                   
                                }
                            }
                                ?>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>



<div class="container-flude my-2">
    <div id="carouselExampleSlidesOnly" class="carousel slide " style="background-color: #8b5c7e; color:white;"
        data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">

                <div class="container con my-4">
                    <img src="image/im.jpg" style="margin-left: 40px;" class="rounded-circle my-3 shadow" width="150px"
                        height="150px" alt="Cinque Terre">
                    <div class="card-body text-white" style="margin-left: 20px;">
                        <h5 class="card-title">RITU</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Debitis dolores dolor quam a facilis rerum?
                        </p>

                    </div>

                    <div class="d-flex p-3 text-white" style="margin-left: 20px;">

                    </div>
                </div>


            </div>
            <div class="carousel-item">
                <div class="container con my-4">
                    <img src="image/im.jpg" style="margin-left: 40px;" class="rounded-circle my-3 shadow" width="150px"
                        height="150px" alt="Cinque Terre">
                    <div class="card-body text-white" style="margin-left: 20px;">
                        <h5 class="card-title">kratika</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Debitis dolores dolor quam a facilis rerum?
                        </p>

                    </div>
                    <div class="d-flex p-3 text-white" style="margin-left: 20px;">

                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <div class="container con my-4">
                    <img src="image/im.jpg" style="margin-left: 40px;" class="rounded-circle my-3 shadow" width="150px"
                        height="150px" alt="Cinque Terre">

                    <div class="card-body text-white" style="margin-left: 20px;">
                        <h5 class="card-title">simran</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Debitis dolores dolor quam a facilis rerum?
                        </p>

                    </div>
                    <div class="d-flex p-3 text-white" style="margin-left: 20px;">

                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="container con my-4">
                    <img src="image/im.jpg" style="margin-left: 40px;" class="rounded-circle my-3 shadow" width="150px"
                        height="150px" alt="Cinque Terre">

                    <div class="card-body text-white" style="margin-left: 20px;">
                        <h5 class="card-title">Ajjmi</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Debitis dolores dolor quam a facilis rerum?
                        </p>

                    </div>

                </div>
            </div>


        </div>
    </div>
</div>
</div>

<div class="container my-3">
    <p class="text-center" style="font-size:50px;"><b>Products</b>
    </p>
    <div class="row card3">
        <?php

include('comm/dbcon.php');

$query = "SELECT * FROM shop LIMIT 6 ";
$rs_result = mysqli_query($con, $query);
if (mysqli_num_rows($rs_result) > 0) {

while ($row = mysqli_fetch_assoc($rs_result)){
 
  ?>
        <div class="col-4">
            <div class="card " style="border:none">

                <a href="#"><?php echo'<img class="img" src="data:image/jpeg;base64,'
                 . base64_encode($row['image']) . '" height="250px" width="350px"/>' ?></a>
            </div>
            <div class="text-center my-4 card4">
                <a href="product_view.php?user_id=<?php echo $row['user_id']?>"
                    style="text-decoration: none; color:black;">
                    <p class="p1">View Cart</p>
                </a>

                <h5><?php echo $row['product_name'] ?> &nbsp;&nbsp;<i class="fa fa-rupee" style="font-size:20;"></i>
                    <?php echo $row['product_price'] ?></h5>
            </div>
        </div>
        <?php
                                   
                                }
                            }
                                ?>

    </div>


</div>



<div class="container-fluid" style="background-color: #8b5c7e; color:white;">

    <div class="container">
        <br><br>
        <p class="text-center" style="font-size:50px;"><b>Gallery</b>
        </p>
        <div class="row card6">
            <div class="col-3">
                <div class="card card17">
                    <img src="image/dress/613QQUEWx0L._AC_UL320_.jpg" class="d-block w-100 card17" alt="..." height="250px"
                        width="400px">
                </div>
            </div>
            <div class="col-3">
                <div class="card card7">
                    <img src="image/mobile1.jpg" class="d-block w-100" alt="..." height="250px" width="400px">
                </div>
            </div>
            <div class="col-3">
                <div class="card card7">
                    <img src="image/shoe1.jpg" class="d-block w-100" alt="..." height="250px" width="400px">
                </div>
            </div>
            <div class="col-3">
                <div class="card card7">
                    <img src="image/rose1.jpg" class="d-block w-100" alt="..." height="250px" width="400px">
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-3">
                <div class="card card10">
                    <img src="image/taddy1.jpg" class="d-block w-100" alt="..." height="250px" width="400px">
                </div>
            </div>
            <div class="col-3">
                <div class="card card10">
                    <img src="image/Chocolate.jpg" class="d-block w-100" alt="..." height="250px" width="400px">
                </div>
            </div>
            <div class="col-3">
                <div class="card card10">
                    <img src="image/watch1.jpg" class="d-block w-100" alt="..." height="250px" width="400px">
                </div>
            </div>
            <div class="col-3">
                <div class="card card10">
                    <img src="image/bad.jpg" class="d-block w-100" alt="..." height="250px" width="400px">
                </div>
            </div>
        </div>
    </div>


    <br>
    <br><br>
</div>
<div class="container my-">
    <br>
    <br>
    <div class="row card11">
        <div class="col-3">
            <div class="card9">
                <img src="image/l1.png" class="d-block w-100" alt="..." height="150px" width="150px">
            </div>
        </div>
        <div class="col-3">
            <div class="card9">
                <img src="image/l3.png" class="d-block w-100" alt="..." height="150px" width="150px">
            </div>
        </div>
        <div class="col-3">
            <div class="card9">
                <img src="image/l4.png" class="d-block w-100" alt="..." height="130px" width="70px">
            </div>
        </div>
        <div class="col-3">
            <div class="card9">
                <img src="image/l5.png" class="d-block w-100" alt="..." height="120px" width="180px">
            </div>
        </div>
    </div>
</div>














<?php include 'comm/footer.php' ?>