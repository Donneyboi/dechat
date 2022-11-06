<?php  session_start();
include "db.php";
$slect=mysqli_query($conn," select * from notification where email='".$_SESSION['id']."' and seen='no'");
$num=mysqli_num_rows($slect);
if ($num>0) {
	//echo "<span style='width:5px;height:5px;border-radius:5px;background:red;display:flex;'></span>";

}
else{
	
}
 ?>
