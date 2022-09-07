<?php
include ("header.php");
session_start();

$user=$_GET['un'];
$hostelid=$_GET['hid'];
$hostel=$_GET['hn'];
$user1=$_SESSION['username'];
$hostel1=$_SESSION['hostelname'];
$hostelid1=$_SESSION['hostelid'];
if ($user1 == true)
{

}
else{
    header("location:rectorlogin.php"); 
}
?>
<table style=" border: 3px solid black;">
<tr>
    <th>HostelID</th>
    <th>StudentID</th>
    <th>R.NO</th>
    <th>Wash Basin</th>
    <th>Shower</th>
    <th>Comode</th>
    <th>Any Other</th>
    <th>Complaint</th>
    <th>Delete</th>
    </tr>

    <?php
    $user=$_GET['un'];
    $hostelid=$_GET['hid'];
    $hostel=$_GET['hn'];
    $query="SELECT * FROM `plumbing` WHERE hostelid ='".$hostelid."'";
    $data= mysqli_query($conn,$query);

    $total = mysqli_num_rows($data);
    if($total!=0){
        while($result=mysqli_fetch_assoc($data)){
            echo "<tr>
            <td align='center'>".$result['hostelid']."</td>
            <td align='center'>".$result['stdid']."</td>
                <td align='center'>".$result['rmnumber']."</td>
                <td align='center'>".$result['washbasin']."</td>
                <td align='center'>".$result['shower']."</td>
                <td align='center'>".$result['comode']."</td>
                <td align='center'>".$result['anyother']."</td>
                <td align='center'>".$result['text']."</td>
                <td><a href='plumbingdelete.php?en=$result[entryno]'>Delete</a></td>
                </tr>";
                }
                }
                else{
                    echo "No Records found";
                }

?>