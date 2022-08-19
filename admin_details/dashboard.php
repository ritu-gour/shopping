<?php
include "../comm/dbcon.php";
if (isset($_POST['submit'])) {
  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $Desc = $_POST['Desc'];
  $category = $_POST['category'];
  $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
  

  $query = "INSERT INTO `shop`(`product_name`, `product_price`, `Desc`,`image`,`category`)
    VALUES('$product_name','$product_price','$Desc','$image','$category')";

  $fire = mysqli_query($con, $query) or die("con not insert the data." . mysqli_error($con));

  if ($fire) 
  {

    echo '<script type="text/javascript">';
    echo 'alert("successfull submit");';
    echo 'window.location = "view_product.php";';
    echo '</script>';
  } else {
    echo '<script type="text/javascript">';
    echo 'alert(" please try again!");';
  
     echo 'window.location ="index2.php";';
  
    echo '</script>';
   
  }
  
}
?>



    <?php include 'header.php'?>
    <!-- main  -->
    <div class="container ">
        <div class="row">
            <div class="column">
                <div class="card">
                    <br>
                    <h3 class="text-center my-3">Product</h3>

                    <form class="my-4" action="#" method="POST" enctype="multipart/form-data">

                        <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        <div class="row">
                            <div class="col-md-4">


                                <label for="category">Product Category</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" class="no-outline" name="category"
                                        placeholder="Product Category"><br>
                                    <!-- <input type="email" class="no-outline" id="admin_mail" name="admin_mail" placeholder="Enter admin's email" required /> -->
                                </div>
                            </div>
                            <div class="col-md-4">


                                <label for="product_name">Product Name</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" class="no-outline" name="product_name"
                                        placeholder="Product Name"><br>
                                    <!-- <input type="email" class="no-outline" id="admin_mail" name="admin_mail" placeholder="Enter admin's email" required /> -->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="product_price">Product Price</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" class="no-outline" name="product_price"
                                        placeholder="Product Price"><br>
                                    <!-- <input type="email" class="no-outline" id="admin_mail" name="admin_mail" placeholder="Enter admin's email" required /> -->
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="Desc"
                                rows="3"></textarea>
                        </div>
                        <div class="my-4">

                            <label for="image">Product Image</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <input type="file" name="image" class="form-control" placeholder="browse"
                                    id="image"><br>
                            </div>

                            <div class="d-grid gap-2 my-5">
                                <button type="submit" name="submit" class="btn btn-lg"
                                    style="background-color:#8b5c7e; color: white; border-radius:4px;">
                                    Submit
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
        </div>

<?php include "footer.php"  ?>