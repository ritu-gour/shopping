<style>
  @media screen and (max-width: 600px) { 
   tbody {
    display: grid;
}
table.table.table-bordered.my-3 {
    width: 10px;
    max-width: 1px;
}
  }
</style>
<?php include 'comm/header.php' ?>
<br><br><br><br>

<div class="container">



    <?php 
             include('comm/dbcon.php');
             $user_id=$_GET['user_id'];        
             $query = "SELECT * FROM checkout WHERE user_id='$user_id'";    
            
             $fire = mysqli_query($con, $query);
             if (mysqli_num_rows($fire) > 0) {
                 
             while ($row = mysqli_fetch_array($fire)) {
               ?>

               <h1>User Details</h1>
               <h3 > User :- <b style="color: red;"><?php echo $row['fullname'] ?></b></h3>
    <table class="table table-bordered my-3" style="width: 1000px;">
       
        <tbody>
            <tr>
                <th scope="row">FullName:</th>
                <td><?php echo $row['fullname'] ?></td>
                <th scope="row">Email:</th>
                <td><?php echo $row['email'] ?></td>

             </tr>
             <tr>
                <th scope="row">Card Name:</th>
                <td><?php echo $row['card_name'] ?></td>
                <th scope="row">Address:</th>
                <td><?php echo $row['address'] ?></td>
                
             </tr>
             <tr>
                <th scope="row">City:</th>
                <td><?php echo $row['city'] ?></td>
                <th scope="row">Credit Card Number:</th>
                <td><?php echo $row['credit_card_number'] ?></td>
                
             </tr>
             <tr>
                <th scope="row">Month:</th>
                <td><?php echo $row['month'] ?></td>
                <th scope="row">State:</th>
                <td><?php echo $row['states'] ?></td>
                
             </tr>
             <tr>
                <th scope="row">Zip Code:</th>
                <td><?php echo $row['zip'] ?></td>
                <th scope="row">CVV:</th>
                <td><?php echo $row['cvv'] ?></td>
                
                
             </tr>
             <tr>
                
                <th scope="row">Exp Year:</th>
                <td><?php echo $row['exp_year'] ?></td>
                <th scope="row">Price:</th>
                <td>₹ <?php echo $row['price'] ?> /-</td>
               
                
             </tr>
             <tr>
                
                <th scope="row">Product Name:</th>
                <td><?php echo $row['product_nam'] ?></td>
                
                
             </tr>
             
            
          
        </tbody>
    </table>
    <?php
                              }
                              }
                ?>

</div>
<br><br><br><br>