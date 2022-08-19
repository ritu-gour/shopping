<style>
    @media screen and (max-width: 600px) { 
        .row {
   
    display: grid !important;
}
.card.c6 {
    
    margin-left: 90px !important;
}


h3.c0 {
    margin-right: -200px;
    margin-left: 50px;
}
h5.c01 {
    margin-left: 140px;
    margin-right: -200px;
}
p.my-4.c10 {
    margin-right: -180px;
}
    }


</style>
<?php include 'comm/header.php' ?>


<br>
<br>
<div class="container my-5">

    <?php
                    
                    include('comm/dbcon.php');
                    $user_id=$_GET['user_id'];        
                    $query = "SELECT * FROM shop WHERE user_id='$user_id'";
                    $fire = mysqli_query($con, $query);
                    if (mysqli_num_rows($fire) > 0) {
                        
                    while ($row = mysqli_fetch_array($fire)) {
                      ?>
    <div class="row">
        <div class="col-6">
            <!-- <div class="card" style="border: none;">
                <?php echo'<img class="img1" src="data:image/jpeg;base64,'
                 . base64_encode($row['image']) . '" height="430px" width="540px"/>' ?>
            </div> -->
            <div class="card c6" style="border:none">

                <a href="#"><?php echo'<img class="img" style="margin-left:10px;padding:30px;" src="data:image/jpeg;base64,'
 . base64_encode($row['image']) . '" height="400px" width="auto"/>' ?></a>
            </div>
        </div>
        <div class="col-6">
            <h3 style="color: #FD3A69;" class="c0"><?php echo $row['product_name'] ?></h3>
            <h5 class="c01"><i class="fa fa-rupee" style="font-size:20;"></i> <?php echo $row['product_price'] ?></h5>
            <p style="text-align: justify;" class="my-4 c10"><?php echo $row['Desc'] ?></p>
           <a href="cart.php?user_id=<?php echo $row['user_id']?>" style="text-decoration: none;" class="c9"> <button type="button" class="btn btn btn-lg btn-block my-5">View Cart</button></a>

        </div>

    </div>
    <?php
        }
    }
        ?>
</div>






<?php include 'comm/footer.php' ?>