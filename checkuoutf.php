<?php include 'comm/header.php' ?>
<br><br><br><br>
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
<style>
  @media screen and (max-width: 600px) { 
  a.btn.btn-lg {
    margin-left: -900px !important;
}
.btn {
    background-color: #8b5c7e;
    color: white;
    margin-left: -900px;
}
.mt-2, .my-2 {
    margin-top: 0.5rem !important;
    margin-left: -380px !important;
}
  }
</style>
<div class="container">



    <?php 
            //  include('comm/dbcon.php');
            
            include('comm/dbcon.php');
            $user_id=$_GET['user_id'];     
            $query = "SELECT * FROM shop WHERE user_id='$user_id'"; 
           
             $fire = mysqli_query($con, $query);
             if (mysqli_num_rows($fire) > 0) {
                 
             while ($row = mysqli_fetch_array($fire)) {
               ?>
             <div style="margin-left: 900px;">
                 <a href="checkoutdisplay.php?user_id=<?php echo $row['user_id']?>" class="btn btn-lg" style="background-color: #f47514;"> View Details User</a>
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