<?php session_start();
include "db.php";
if (1==1) {
	$email=$_SESSION['id'];
	$time=time();
	$post=nl2br($_POST['message']);
	if ($post=="" and $_FILES['myfile']=="") {
	
	}
	else{
		$insertpost=mysqli_query($conn,"insert into post(email,message,time)value('$email','$post','$time')");
		$lastid=mysqli_insert_id($conn);
		if ($lastid>0) {
		if ($_FILES['myfile']=="") {

		}
else{
	foreach($_FILES['myfile']['name'] as $value => $key) {
		$rand=mt_rand().mt_rand().mt_rand();
		$filename=$_FILES['myfile']['name'][$value];
		$folder="postimage/";
		$mainfile=$folder.$rand.$filename;
		$mainfile2=$rand.$filename;
		$filetype=$_FILES['myfile'];
		$filetype2=pathinfo($filename,PATHINFO_EXTENSION);
		$filename2=$_FILES['myfile']['tmp_name'][$value];
		if (move_uploaded_file($filename2, $mainfile)) {
		$inertpic=mysqli_query($conn,"insert into postimage(filename,postid,filetype,email)values('$mainfile2','$lastid','$filetype2','$email')");

		}
		
	}

}

		}

		echo "p";
		
	}
	
}







 ?>