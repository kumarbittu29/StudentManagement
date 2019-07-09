<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_management";

$connect = mysqli_connect($servername,$username,$password,$dbname);

if($connect){
echo ("");
}
else{
echo ("Connection failed");
}

?>