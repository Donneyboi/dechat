<?php session_start();
include "db.php";
 $email=$_SESSION['id'];
if (1==1) {
	$first=$_POST['firstname'];
	$lastn=$_POST['lastname'];
	$pass=$_POST['password'];
$select=mysqli_query($conn,"select * from signup where password='$pass' and id='$email'");
$nums=mysqli_num_rows($select);

if ($nums>0) {
	
	$update=mysqli_query($conn,"update signup set firstname='$first',lastname='$lastn' where id='$email'");
	if ($update) {
	echo "s";
	}
}

}

  ?>