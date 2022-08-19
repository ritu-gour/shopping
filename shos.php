<style>
     @media screen and (max-width: 600px) { 
        .row {
    display: grid !important;
   
}
.card.shadow {
    box-shadow: none !important;
}
.text-center.my-4.t2 {
    margin-right: -240px !important;
}
     }
</style>
<?php include 'comm/header.php' ?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/b80.jpg"  class="d-block w-100" alt="..." height="400px" width="400px"
                    style=" opacity: 1;background-size: cover;">
                <div class="carousel-caption d-none d-md-block mt- mb-5">
                    <h1 class="c" style="color: yellow;">Shoes</h1>
                </div>
            </div>
         
          
        </div>

    </div>
<div class="container my-3">
    <p class="text-center" style="font-size:50px;"><b>Products</b>
    </p>
    <div class="row">
        <?php

include('comm/dbcon.php');

$query = "SELECT * FROM shop WHERE category='Shos'";
$rs_result = mysqli_query($con, $query);
if (mysqli_num_rows($rs_result) > 0) {

while ($row = mysqli_fetch_assoc($rs_result)){
 
  ?>
        <div class="col-4">
            <div class="card shadow" style="border:none">

                <a href="#"><?php echo'<img class="img" style="margin-left:80px; padding:30px;" src="data:image/jpeg;base64,'
                 . base64_encode($row['image']) . '" height="280px" width="200px"/>' ?></a>
            </div>
            <div class="text-center my-4 t2">
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

<?php include 'comm/footer.php'  ?>