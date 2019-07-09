<?php
include("connect.php");
if(isset($_POST['submit']))
{
    $emailId = $_POST['emailId'];
    $password = $_POST['password'];
    $check = "SELECT * FROM student_data WHERE emailId='$emailId' && password='$password'";
    $login= mysqli_query($connect,$check);
    $total = mysqli_num_rows($login);
    if($total==1)
        {
         header('location:disp_stu_home.php', false, 303);
         exit();
        }
    else
        {
        $error ="Login Failed";
        }
    }
?>