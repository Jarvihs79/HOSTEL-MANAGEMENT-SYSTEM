<?php
include ("header.php");


$entryno=$_GET['en'];

// $user=$_SESSION['username'];
// $hostel=$_SESSION['hostelname'];
// $hostelid=$_SESSION['hostelid'];
if ($entryno == true)
{
$query="DELETE FROM `plumbing` WHERE entryno='".$entryno."'";
$data= mysqli_query($conn,$query);
if ($data){
    echo "<script>alert('Removed entry');</script>";?>
    <!-- <META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost:8080/hms/plumbingdisplay.php"><?php 
}
else {
    echo "<font color='red'>No entry";
}
}
else{
    header("location:index.php"); 
}


?>
