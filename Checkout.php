<?php
include "comm/dbcon.php";
if (isset($_POST['checkout1'])) {
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $card_name= $_POST['card_name'];
  $address = $_POST['address'];
  $credit_card_number = $_POST['credit_card_number'];
  $city = $_POST['city'];
  $month = $_POST['month'];
  $states = $_POST['states'];
  $zip = $_POST['zip'];
  $exp_year = $_POST['exp_year'];
  $cvv = $_POST['cvv'];
  $product_nam=$_POST['product_nam'];
  $price=$_POST['price'];
  $checkbox = $_POST['checkbox'];
  $query = "INSERT INTO `checkout`(`fullname`, `email`, `card_name`,
   `address`, `credit_card_number`, `city`, `month`, `states`, `zip`, `exp_year`, 
   `cvv`,`product_nam`,`price`,`checkbox`) VALUES ('$fullname','$email','$card_name','$address','$credit_card_number','$city'
   ,'$month','$states','$zip','$exp_year','$cvv','$product_nam','$price','$checkbox')";

  $fire = mysqli_query($con, $query) or die("con not insert the data." . mysqli_error($con));

  if ($fire) {

    // echo '<script type="text/javascript">';
    // echo 'alert("Sucess Fully");';
    // echo 'window.location = "Checkout.php";';
    // echo '</script>';
   
//   } else {
    
//     echo 'window.location = "Checkout.php";';
    

//   }
  }
}
?>

<style>
     @media screen and (max-width: 600px) { 
        .cc{
        margin-left: 0px !important;
    }
     }
    .cc{
        margin-left: 900px;
    }
</style>

<link rel="stylesheet" href="css/checkout.css">
<?php include 'comm/header.php' ?>
<br><br><br><br>
<div class="container">
    <h2>Checkout Form</h2>
    <?php 
             include('comm/dbcon.php');
             $user_id=$_GET['user_id'];        
             $query = "SELECT * FROM shop WHERE user_id='$user_id'";
             $fire = mysqli_query($con, $query);
             if (mysqli_num_rows($fire) > 0) {
                 
             while ($row = mysqli_fetch_array($fire)) {
               ?>
<div  class="cc">
    <a href="checkuoutf.php?user_id=<?php echo $row['user_id']?>" class="btn btn-lg" style="background-color: #f47514;"> View Details User</a>
   </div>
    <div class="row my-5">
        <div class="col-75">
            <div class="container1">
            
                <form action="#" method="POST">

                    <div class="row">
                        <div class="col-50">
                            <h3>User Address</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="fullname" placeholder="John M. Doe">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="john@example.com">
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="New York">

                            <div class="row">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="states" placeholder="NY">
                                </div>
                                <div class="col-50">
                                    <label for="zip">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="10001">
                                </div>
                            </div>
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="card_name" placeholder="John More Doe">
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="credit_card_number" placeholder="1111-2222-3333-4444">
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="month" placeholder="September">
                            <div class="row">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="exp_year" placeholder="2018">
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                </div>
                            </div>
                        </div>

                    </div>
                   
                   <div style="margin-left: 13px;">
                   <input class="form-check-input" class="form-check-input" type="checkbox" value="I agree"
                                name="checkbox" required>
                                <label for="">Shipping address same as billing</label>
                   </div>
                        
                   
                    <button type="submit" class="btn btn-lg" name="checkout1">Continue to checkout</button>
                    <!-- <input type="submit" value="Continue to checkout" class="btn "> -->
               
            </div>
        </div>
        <div class="col-25">
            <div class="container1">
                <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i>
                        <b><?php echo $row['user_id'] ?></b></span></h4>
                <div class="d-flex justify-content-between ">
                    <div class="p- "> <input type="hidden" name="product_nam" value="<?php echo $row['product_name'] ?>"> <?php echo $row['product_name'] ?></div>
                    <div class="p-2 "></div>
                    <div class="p-2 " > <input type="hidden" name="price" value="<?php echo $row['product_price'] ?>">  ₹<?php echo $row['product_price'] ?>/-</div>
                </div>

                <hr>
                <p>Total <span class="price" style="color:black"><b>
                            <i class="fa fa-rupee" style="font-size:20;"></i>
                            <?php echo $row['product_price'] ?>/-</b></span></p>
            </div>
        </div>
    </div>
    </form>
    
    <?php
       }
}
?>
</div>
<br>
<br><br><br>
</body>

</html>