<?php
include("header.php")
?>
   <form method="post">

<div class="signup-container">
    
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>Full name</b></label>
    <input type="text" placeholder="enter name" name="name" required><br>

    <label for="h-name"><b>hostel names</b></label>
    <input type="text" placeholder="enter hostel name" name="hname" required><br>
    
    
    <label for="address"><b>hostel address </b></label>
    <input type="text" placeholder="enter hostel address" name="haddress" required><br>
    

    <label for="number"><b>mobile number</b></label>
    <input type="text" placeholder="enter mobile number" name="number" required><br>


    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
    

    
    <div class="clearfix">
        
        <input type="submit" value="signup" name="submit" class="btn btn-primary" /><br>
    </div>
    <p>already have an account <a href="rectorlogin.php" style="color:dodgerblue">login</a>.</p>
  </div>
</form>

<?php 
if(isset($_POST['submit'])) 
{
  $name = $_POST['name'];
  $hname=$_POST['hname'];
  $haddress = $_POST['haddress'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $psw = $_POST['psw-repeat'];

  if($name != '' && $hname != '' && $haddress != '' && $number != '' && $email != '' && $password !='' && $password == $psw)
{
  $query = "INSERT INTO `rector`( `name`, `hostelname`, `hosteladdress`, `mnumber`, `email`, `password`, `confpassword`) VALUES ('$name', '$hname', '$haddress', '$number', '$email', '$password', '$psw')";
  $data = mysqli_query($conn,$query);

  if($data)
  {
    //echo " inserted student information";
   header ('location:rectorlogin.php');
  }
  else
  {
    echo "Error inserting student"; 
   }

}
}
?>
