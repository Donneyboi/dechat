   <?php session_start();
include "db.php";
$slect=mysqli_query($conn,"select * from signup");
while($arr=mysqli_fetch_array($slect)){
	$firstn=$arr['firstname'];
	$last=$arr['lastname'];
	$email=$arr['email'];
	$file=$arr['file'];
	$id=$arr['id']
    ?>  

      <div class="smallserchdiv">
			<div class="searchimage"><?php echo "<img src='profile/$file'>";?></div>
			<div class="searchname"><?php echo $firstn."   ".$last ?></div>
				</div>



<?php }  ?>

