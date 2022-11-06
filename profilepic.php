<?php session_start(); 
include "db.php";
$email=$_SESSION['id'];
$selectp=mysqli_query($conn,"select * from signup where id='$email'");
$row=mysqli_fetch_array($selectp);
$file=$row['file'];

echo $file;
    
 ?>