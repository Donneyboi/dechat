<?php session_start();
include "db.php";
$status=$_GET['status'];
$id=$_GET['id'];
$totalimg=$_GET['totalimg'];
$c=$_GET['c'];
if($c>$totalimg){
    $c=1;
}
if($c<1){
    $c=1;
}

$c--;
$selimage=mysqli_query($conn, "select * from postimage where id='$id' order by id desc limit $c,1");


            while($fetchimage=mysqli_fetch_array($selimage)){
                 $postfile=nl2br($fetchimage['filename']);
                   ?>
                          
                  	<?php echo "<img src='storiepic/$file'>";?>
	<div class="transprent">
		<button type="button" onclick="myst(this,this,<?php  echo $storimage ?>)" value="<?php  echo $id ?>">back</button>
		<button type="button" onclick="myst(this,this,<?php  echo $storimage ?>)" value="<?php  echo $id ?>">next</button>
	</div>
	</div>
                    
                    <?php } ?>





