<?php session_start();
include "db.php";
$email=$_SESSION['id'];
if (isset($_POST['sub'])) {
	$location=$_POST['location'];
$update=mysqli_query($conn," update signup set country='$location' where id='$email'");

}
 



 ?>