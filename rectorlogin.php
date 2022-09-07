<?php
include("header.php");
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

    $query = "SELECT * FROM `rector` WHERE email='". $email."'  AND password='".$password."'";
    $data = mysqli_query($conn,$query);
    
    $total = mysqli_num_rows($data);
    $result=mysqli_fetch_assoc($data);
    $username=$result['name'];
    $hostelid=$result['hostelid'];
    $hname=$result['hostelname'];

    if($total==1){
    //   echo 'login ok';
      $_SESSION['username']=$result['name'];
      $_SESSION['hostelname']=$result['hostelname'];
      $_SESSION['hostelid']=$result['hostelid'];
      header("location:rector.php?un=$username&hid=$hostelid&hn=$hname");
    }
    else{
      echo 'login failed';
      }
    }
    ?>
