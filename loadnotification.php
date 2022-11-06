<?php session_start();
include "db.php";

$select=mysqli_query($conn," select * from  notification where email='".$_SESSION['id']."' ORDER BY time DESC");
while($row=mysqli_fetch_array($select)){
 $email=$row['email'];
 $message=$row['message'];
 $time=$row['time'];
 $select2=mysqli_query($conn," select* from signup where id='$email'");
 $arr=mysqli_fetch_array($select2);
 $firstn=$arr['firstname'];
  $lastn=$arr['lastname'];
  $file=$arr['file'];

   ?> 	             


 	             <div class="notismalldiv">
		           		<div class="notiimage">
		           			<?php echo "<img src='profile/$file'>"  ?></div>
		           		<div class="notiname">
		           			<h3><?php echo  $firstn." ".$lastn ?></h3>
		           			<span><?php  echo $message ?></span>
		           		</div>
		           	</div>

		           	<?php } ?>
				