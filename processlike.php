<?php session_start();
include "db.php";
if (1==1) {
  $inp=$_POST['mylike'];
  $email=$_SESSION['id'];
  $time=time();


  $select=mysqli_query($conn, "select * from likes where id='$email' and postid='$inp'");
	$num=mysqli_num_rows($select);
	if ($num>0) {
		$delect=mysqli_query($conn, "delete from likes where id='$email' and postid='$inp' ");
	}

else{
	$insert=mysqli_query($conn,"insert into likes(email,postid,time)values('$email','$inp','$time')");

  $insertnoti=mysqli_query($conn,"insert into notification(email,message,time)values('$email','likes your photo','".date('h:i:a')."')");

}
}

  ?>