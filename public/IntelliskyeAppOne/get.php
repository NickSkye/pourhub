<?php
$con=mysqli_connect("localhost","nickskye_nick","1Lyakl4e!","nickskye_FailSafe");

if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$username = $_GET['Username'];
$password = $_GET['Password'];
$result = mysqli_query($con,"SELECT Email FROM FailSafeUsers where Username='$Username' and Password='$Password'");
$row = mysqli_fetch_array($result);
$data = $row[0];

if($data){
echo $data;
}
mysqli_close($con);
?>