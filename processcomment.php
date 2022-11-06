<?php session_start();
include "db.php";
$postid=mysqli_real_escape_string($conn, $_GET['postid']);
$message=mysqli_real_escape_string($conn, $_GET['message']);
$people=mysqli_real_escape_string($conn, $_GET['emm']);
  $email=$_SESSION['id'];
  $time=time();

if ($message!="") {
$insertcomment=mysqli_query($conn,"insert into comment(email,postid,message,time)values('$email','$postid','$message','$time')");

  $insertnoti=mysqli_query($conn,"insert into notification(email,message,time)values('$people','comment on your photo','".date('h:i:a')."')");
}


  ?>