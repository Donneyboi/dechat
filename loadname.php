<?php session_start();
include "db.php";
$email=$_SESSION['id'];
$select=mysqli_query($conn,"select * from signup where id='$email'");
$arry=mysqli_fetch_array($select);
$firstn=$arry['firstname'];
$lastn=$arry['lastname'];

echo $firstn." ".$lastn;

  ?>