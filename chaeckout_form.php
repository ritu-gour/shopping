
<?php include 'comm/header.php' ?>
<br><br><br><br>
    <div class="container">
        <?php 
             include('comm/dbcon.php');
             $user_id=$_GET['user_id'];        
             $query = "SELECT * FROM shop WHERE user_id='$user_id'";
             $fire = mysqli_query($con, $query);
             if (mysqli_num_rows($fire) > 0) {
                 
             while ($row = mysqli_fetch_array($fire)) {
               ?>
               <p class="my-5"><?php echo $row['product_name'] ?> </p>
             <?php
                    }
     }
      ?>
    </div>
</body>
</html>



















































