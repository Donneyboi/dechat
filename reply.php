<?php session_start();
include "db.php";
$commpostid=mysqli_real_escape_string($conn, $_GET['commpostid']);
$commmessage=mysqli_real_escape_string($conn, $_GET['commmessage']);
//$people=mysqli_real_escape_string($conn, $_GET['emm']);
  $email=$_SESSION['id'];
  $time=time();

if ($commmessage!="") {
$insertcomment=mysqli_query($conn,"insert into replycomment(email,commentid,comment,time)values('$email','$commpostid','$commmessage','$time')");
if ($insertcomment) {
	echo "goog";
}
else{
	echo mysql_error($conn);
}

  //$insertnoti=mysqli_query($conn,"insert into notification(email,message,time)values('$people','comment on your photo','".date('h:i:a')."')");
}


  ?>