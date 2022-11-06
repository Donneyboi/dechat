<?php session_start();
include "db.php";
if (1==1) {

	$firstn=$_POST['firstname'];
	$lastn=$_POST['lastname'];
	$email=$_POST['email'];
	$country=$_POST['country'];
	$date=$_POST['date'];
	$gender=$_POST['gender'];
	$pass=$_POST['password'];
	$cpass=$_POST['cpassword'];


	if ($firstn=="") {
		echo "firstname is empty";
	}
	elseif ($lastn=="") {
		echo "lastname is empty";
	}
	elseif ($email=="") {
		echo " your email is empty";
	}
	elseif ($country=="") {
		echo "country filed is empty";
	}
	elseif ($date=="") {
		echo "enter your date of birth";
	}
	elseif ($gender=="") {
		echo "gender is empty";
	}

	elseif ($pass=="") {
		echo "password is empty";
	}
	elseif ($pass!=$cpass) {
		echo "password dont match";
	}
	else{
		$select=mysqli_query($conn,"select * from signup where email='$email'");
		$num=mysqli_num_rows($select);
		if ($num>0) {
			echo "email aready exit";
		}
		else{
			$insret=mysqli_query($conn,"insert into signup(firstname,lastname,email,country,dob,gender,password)values('$firstn','$lastn','$email','$country','$date','$gender','$pass')");
			$lastids=mysqli_insert_id($conn);
			if ($insret) {
					$_SESSION['id']=$lastids;
			echo "<script>window.location.href='index.html'</script>";
				
			}
		}
	}

}




 ?>