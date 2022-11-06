<?php session_start();
include "db.php";
$id=$_SESSION['id'];
//echo $id;
$time=time();
if (1==1) {
  if($_FILES['myfile']!="") {
    //echo $_FILES['myfile'];
  



     
  foreach ($_FILES['myfile']['name'] as $value => $key) {
		$rand=mt_rand().mt_rand().mt_rand();
		$filename=$_FILES['myfile']['name'][$value];
		$folder="storiepic/";
		$mainfile=$folder.$rand.$filename;
		$mainfile2=$rand.$filename;
		$filetype=$_FILES['myfile'];
		$filetype2=pathinfo($filename,PATHINFO_EXTENSION);
		$filename2=$_FILES['myfile']['tmp_name'][$value];
		if (move_uploaded_file($filename2, $mainfile)) {
		$inertpic=mysqli_query($conn,"insert into stories(filename,email,filetype,time)values('$mainfile2','$id','$filetype2','$time')");

		if ($inertpic) {
	echo "
			
			<script>alert(1)</script>";
		}
		else mysql_error($conn);
		}
       		
       	}


       }




}






 ?>