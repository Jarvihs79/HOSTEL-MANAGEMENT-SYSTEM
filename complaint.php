<?php
include ("header.php");
session_start();
$user = $_GET['un'];
$stdid=$_GET['sid'];
$hostelid=$_GET['hid'];
$user1=$_SESSION['username'];
if ($user1 == true)
{

}
else{
    header("location:index.php");
}
?>
<form method="post">
<div>
    <h1>COMPLAINTS</h1>
            <label for="rmno">ENTER ROOM NO :</label><br>
            <input type="text" id="rmno" name="rmno">
        </div>

<div>
<label for="comment">   ANY OTHER COMPLAINT:</label>
<textarea class="form-control" rows="10" cols="50" id="query" name="text"></textarea>
<input type="submit" value="Submit" name="submit" class="btn btn-primary">
</div>
</form>
<?php
if(isset($_POST['submit'])){
  $user = $_GET['un'];
$stdid=$_GET['sid'];
$hostelid=$_GET['hid'];
  $rmnumber=$_POST['rmno'];
  $text=$_POST['text'];

  if($rmnumber!="" && $text!="")
  {
  $query="INSERT INTO `complaint`(`hostelid`, `stdid`, `name`, `text`) VALUES ('".$hostelid."','".$stdid."','$rmnumber','$text')";
  $data=mysqli_query($conn,$query);
  if($data)
 {
   echo "Data inserted successfully.";
  
 }
 else
 {
   echo "Error inserting student"; 
  }

}
}


 ?>