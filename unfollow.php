<?php session_start();
include "db.php";
$select=mysqli_query($conn,"delete from follow where  followingid='".$_GET['idx']."' and followerid='".$_SESSION['id']."'");


 ?>