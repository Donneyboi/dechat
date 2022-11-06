<?php session_start();
include "db.php";

if (1==1) {
  $email=$_POST['email'];
  $pass=$_POST['password'];

  if ($email=="") {
  	echo "email is empty";
  }
   else if ($pass=="") {
  	echo "password is empty";
  }
  else{
  	$select=mysqli_query($conn,"select * from signup where email='$email' and password='$pass'");
  	$num=mysqli_num_rows($select);
    $array=mysqli_fetch_array($select);
    $idxx=$array['id'];
  	if ($num<1) {
   echo "user not found";
  	}
  	else{
  	$_SESSION['id']=$idxx;
  		echo "<script>window.location.href='index.html'</script>";
  	}
  }
}

  ?>