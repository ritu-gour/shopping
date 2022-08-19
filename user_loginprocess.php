
<?php
error_reporting(0);
?>


<?php

session_start();
 include('comm/dbcon.php');
  if (isset($_POST['submit1'])) {
    $user_email= $_POST['user_email'];
    $password = $_POST['password'];
    $email_search = "SELECT * FROM user_details WHERE user_email='$user_email' AND password='$password'";
  
    $query = mysqli_query($con, $email_search);
    $result1 = mysqli_fetch_assoc($query);
    $user_id = $result1['user_id'];
    $user_email = $result1['user_email'];
    $user_name=$result1['user_name'];
    $password = $result1['password'];
    

  if ($user_id == $user_id && $password == $password) {

    $_SESSION['user_email'] =$user_email;
    $_SESSION['user_name']=$user_name;
    $_SESSION['user_id'] = $user_id;
    
   
    echo '<script type="text/javascript">';
    echo 'alert("Login Sucess Fully");';
    echo 'window.location = "user_dashboard.php";';
    echo '</script>';
   
  } else {
    // echo '<script type="text/javascript">';
    // echo 'alert("User Name And Password Not Matched");';
    echo 'window.location = "index.php";';
    // echo '</script>';

    echo ' not Login';

  }
}
?>
