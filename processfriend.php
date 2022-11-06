<?php session_start();
include "db.php";
$select=mysqli_query($conn,"select * from follow where  followingid='".$_GET['idx']."' and followerid='".$_SESSION['id']."'");
$nums=mysqli_num_rows($select);
if ($nums>0) {

}
else{
	$insert=mysqli_query($conn,"insert into follow(followingid,followerid)values('".$_GET['idx']."','".$_SESSION['id']."')");

if ($insert) {
echo"following";
}
}


 //remenber the the loger is always the follower
/*
that i have to use my session

*/
 ?>
