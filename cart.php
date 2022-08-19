<style>
    @media screen and (max-width: 600px) { 

    }
</style>
<?php
error_reporting(0);
include('comm/dbcon.php');

if ((isset($_GET['del']))) {
  $user_id = $_GET['del'];
  $query = "DELETE FROM shop where user_id=$user_id";
  $fire = mysqli_query($con, $query) or die("can not data." . mysqli_error($conn));
  if ($fire) {

    echo '<script type="text/javascript">';
    echo 'alert(" Successful Deleted");';
    echo 'window.location = "cart.php";';
    echo '</script>';
  } else {
    echo '<script type="text/javascript">';
    echo 'alert(" please try again!");';
  
     echo 'window.location ="cart.php";';
  
    echo '</script>';
   
  } 
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

<br><br><br><br>

<div class="container">
<a href="index.php" class="btn btn-sm "
                        style="background-color: #f47514; color:white;padding:8px 10px 8px 10px; margin-top:38px;"><i
                            class="fa fa-trash" aria-hidden="true" style="font-size: 23px;">Back</i></a>
                            <br><br>
                            <table class="table " style="overflow: scroll;">
        <thead style="background-color: black;color:white;">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th> Total Price</th>
                <th>Remove</th>

            </tr>
        </thead>
        <tbody>

            <?php 
             include('comm/dbcon.php');
             $user_id=$_GET['user_id'];        
             $query = "SELECT * FROM shop WHERE user_id='$user_id'";
             $fire = mysqli_query($con, $query);
             if (mysqli_num_rows($fire) > 0) {
                 
             while ($row = mysqli_fetch_array($fire)) {
               ?>
            <tr>
                <td>
                    <?php echo '<img class="img" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" width="auto" height="90px" />' ?>
                </td>
                <td>
                    <p class="my-5"><?php echo $row['product_name'] ?> </p>
                </td>
                <td>
                    <p class="my-5"><?php echo $row['product_price'] ?>/-</p>
                </td>
                <td>

                    <div class="card my-5" style="width: 80px; height:30px; margin-left:0px; ">
                        <input type="number" name="quantity" min="1" max="10" value="1">
                    </div>
                </td>
                <td>
                    <p class="my-5"><?php echo $row['product_price'] ?>/-</p>
                </td>
                <td>
                    <a href="<?php $_SERVER['PHP_SELF'] ?>?del=<?php echo $row['user_id']?>" class="btn btn-sm "
                        style="background-color: #f47514; color:white;padding:8px 10px 8px 10px; margin-top:38px;"><i
                            class="fa fa-trash" aria-hidden="true" style="font-size: 23px;"> Remove</i></a>
                </td>
            </tr>
            <?php
                    }
                    }
      ?>
        </tbody>
    </table>
    <?php 
             include('comm/dbcon.php');
             $user_id=$_GET['user_id'];        
             $query = "SELECT * FROM shop WHERE user_id='$user_id'";
             $fire = mysqli_query($con, $query);
             if (mysqli_num_rows($fire) > 0) {
                 
             while ($row = mysqli_fetch_array($fire)) {
               ?>
            <div class="d-flex justify-content-between">
                <div class="p-2 "><a href="#" class="btn btn-sm "
                        style="background-color: #f47514; color:white;padding:8px 10px 8px 10px; font-size:15px;">Continue
                        Shopping <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
            <div class="p-2"></div>
            <div class="p-2 "><a href="Checkout.php?user_id=<?php echo $row['user_id']?>" class="btn btn-sm "
                        style="background-color: #f47514; color:white;padding:8px 10px 8px 10px; margin-right:64px;">Proceed to
                        Checkout</a></div>
            </div>
    <?php
                    }
                    }
      ?>


</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
crossorigin="anonymous"></script>
</body>
</html>