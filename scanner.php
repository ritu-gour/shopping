<?php include 'comm/header.php' ?>
<br><br><br><br>

<div class="container">



    <?php 
            //  include('comm/dbcon.php');
            
             $query = "SELECT * FROM shop WHERE user_id='$USER'";
             $fire = mysqli_query($con, $query);
             if (mysqli_num_rows($fire) > 0) {
                 
             while ($row = mysqli_fetch_array($fire)) {
               ?>
             <div style="margin-left: 900px;">
                 <a href="checkoutdisplay.php" class="btn btn-lg" style="background-color: #f47514;"> View Details User</a>
             </div>
              <div style="margin-left: 400px;">
              <h4 >₹ <?php echo $row['product_price'] ?>/-</h4>
              <img src="image/sccaner3.jpg" alt="" class="my-2"  width="300px" height="300px">
              </div>


    <?php
                              }
                              }
                ?>

</div>
<br><br><br><br>