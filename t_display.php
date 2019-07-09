<?php
session_start();
include("connect.php");
error_reporting(0);
$username =$_SESSION['tname'];
$display = "SELECT * FROM teacher_data WHERE t_email ='".$username."'";
$data = mysqli_query($connect,$display);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
if($username==true){
    
}
else
{
    header('location:index.php');
}
/*echo $result['name']." ".$result['fname']." ".$result['paddress']." ".$result['personaladdress']." ".$result['sex']." ".$result['city']." ".$result['course']." ".$result['district']." ".$result['state']." ".$result['pincode']." ".$result['dob']." ".$result['mno']." ".$result['emailId']." ".$result['s_image'];*/
?>