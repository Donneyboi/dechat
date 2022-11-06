<?php session_start();
include "db.php";
 $email=$_SESSION['id'];
if (1==1) {
$mail=$_POST['email'];
$pass=$_POST['password'];
$select=mysqli_query($conn,"select * from signup where password='$pass' and id='$mail'");
$nums=mysqli_num_rows($select);
if ($nums>0) {}

else{
 $update=mysqli_query($conn," update signup set email='$mail' where id='$email'");
}


   
    
    
}


 ?>