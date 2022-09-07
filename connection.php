<?php 
error_reporting(0);
$servername = "localhost";
$username = "root";
$password= "";
$dbname = "hostel_managment_system";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    // echo "Connection established with database ";
}
else {
    echo "Connection failed: ".mysqli_connect_error();
}
?>