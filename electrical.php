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
<h2>ELETRICAL </h2>

<form method="post">
<!-- <p>The <strong>input type="radio"</strong> defines a radio button:</p> -->
<div>
            <label for="rmno">ENTER ROOM NO :</label><br>
            <input type="text" id="rmno" name="rmno">
        </div>

<p>1: FAN WORKING PROPERLY</p>
  <input type="radio" id="basin" name="r1" value="YES">
  <label for="basin">yes</label><br>
  <input type="radio" id="basin" name="r1" value="NO">
  <label for="basin">no</label><br><br>
 
  


<p>2: TUBELIGHT WORKING </p>

  <input type="radio" id="shower" name="r2" value="YES">
  <label for="shower">yes</label><br>
  <input type="radio" id="shower" name="r2" value="NO">
  <label for="shower">no</label><br><br>
 
  


<p>3: SWITCH WORKING</p>

  <input type="radio" id="comode" name="r3" value="YES">
  <label for="comode">yes</label><br>
  <input type="radio" id="comode" name="r3" value="NO">
  <label for="comode">no</label><br><br>
 
  


<p>4: ANY CIRCUIT DAMAGE</p>
  <input type="radio" id="other" name="r4" value="YES">
  <label for="other">yes</label><br>
  <input type="radio" id="other" name="r4" value="NO">
  <label for="other">no</label><br><br>
 
  
  <label for="comment">IN detail query:</label>
  <textarea class="form-control" rows="10" COLS="50" id="query" name="text"></textarea>
  <input type="submit" value="Submit" name="submit" class="btn btn-primary">
</form>
<div>
</div>
<?php
if(isset($_POST['submit'])){
  $user = $_GET['un'];
$stdid=$_GET['sid'];
$hostelid=$_GET['hid'];
  $rmnumber=$_POST['rmno'];
  $fan=$_POST['r1'];
  $tubelight=$_POST['r2'];
  $switch=$_POST['r3'];
  $circuit=$_POST['r4'];
  $text=$_POST['text'];

  if($rmnumber!="" && $fan!="" && $tubelight!=""  && $switch!="" && $circuit!="")
  {
  $query="INSERT INTO `electrical`(`hostelid`, `stdid`, `rmnumber`, `fan`, `tubelight`, `switch`, `circuit`, `text`) VALUES ('".$hostelid."','".$stdid."','$rmnumber','$fan','$tubelight','$switch','$circuit','$text')";
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

