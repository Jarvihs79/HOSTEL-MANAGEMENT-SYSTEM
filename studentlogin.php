<?php
include("header.php");
error_reporting(0); 
session_start();
?>
<div class="login-container">
    <form method="post">
      <input type="text" placeholder="email" name="email"><br>
      <input type="text" placeholder="password" name="password"><br>

      <input type="submit" value="Login" name="submit" class="btn btn-primary"> 
    </form>
  </div>

  <?php
  if(isset($_POST['submit']))
  {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `student` WHERE email='". $email."'  AND password='".$password."'";
    $data = mysqli_query($conn,$query);

    $total = mysqli_num_rows($data);
    
    if($total==1){
      $result=mysqli_fetch_assoc($data);
      $username=$result['email'];
      $studentid=$result['stdid'];
      $hostelid=$result['hostelid'];
      echo "$username,$studentid";
      // echo 'login ok';
      $_SESSION['username']=$username;
      $_SESSION['studentid']=$studentid;
      header("location:student.php?un=$username&&sid=$studentid&&hid=$hostelid");
    }
    else{
      echo 'login failed';
      }
    }
    ?>

