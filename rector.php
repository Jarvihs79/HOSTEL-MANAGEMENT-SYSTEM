<?php
include ("header.php");
session_start();

$user=$_GET['un'];
$hostelid=$_GET['hid'];
$hostel=$_GET['hn'];
$user1=$_SESSION['username'];
$hostel1=$_SESSION['hostelname'];
$hostelid1=$_SESSION['hostelid'];
echo"$user1";
if ($user == true)
{

}
else{
    header("location:rectorlogin.php"); 
}
?>
    <main>
        <div class=""> <h1>Welcome Rector Of <?php echo "$hostel1"?></h1><br>
        <h2>Your Hostel ID is <?php echo "$hostelid"?></h2>
    </div>
        <ul>
            <li class="plum"><a href="plumbingdisplay.php?un=<?php echo "$user"?>&&hid=<?php echo "$hostelid"?>&&hn==<?php echo "$hostel"?>">plumbing</a></li>
            <li class="clean"><a href="cleaningdisplay.php?un=<?php echo "$user"?>&&hid=<?php echo "$hostelid"?>&&hn==<?php echo "$hostel"?>">cleaning</a></li>
            <li class="elec"><a href="electricaldisplay.php?un=<?php echo "$user"?>&&hid=<?php echo "$hostelid"?>&&hn==<?php echo "$hostel"?>">electrical</a></li>
            <li class="complaint"><a href="complaintdisplay.php?un=<?php echo "$user"?>&&hid=<?php echo "$hostelid"?>&&hn==<?php echo "$hostel"?>">complaints</a></li>
</ul>

</main>
   
    <?php
include ("footer.php");
?>