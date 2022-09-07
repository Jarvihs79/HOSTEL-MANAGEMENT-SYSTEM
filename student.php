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
    header("location:studentlogin.php");
}
?>
    <main>
        <div class=""> <h1> Welcome <?php echo "$user";?></h1></div>
       
        <ul>
            <li class="plum"><a href="plumbing.php?un=<?php echo "$user";?>&&sid=<?php echo "$stdid";?>&&hid=<?php echo "$hostelid";?>">plumbing</a></li>
            <li class="clean"><a href="cleaning.php?un=<?php echo "$user";?>&&sid=<?php echo "$stdid";?>&&hid=<?php echo "$hostelid";?>">cleaning</a></li>
            <li class="elec"><a href="electrical.php?un=<?php echo "$user";?>&&sid=<?php echo "$stdid";?>&&hid=<?php echo "$hostelid";?>">electrical</a></li>
            <li class="complaint"><a href="complaint.php?un=<?php echo "$user";?>&&sid=<?php echo "$stdid";?>&&hid=<?php echo "$hostelid";?>">complaints</a></li>
            <li class="complaint"><a href="profile.php?un=<?php echo "$user";?>&&sid=<?php echo "$stdid";?>&&hid=<?php echo "$hostelid";?>">complaints</a></li>

</ul>

</main>
   
    <?php
include ("footer.php");
?>