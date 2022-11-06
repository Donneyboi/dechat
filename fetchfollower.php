<?php session_start();
include "db.php";


$select=mysqli_query($conn,"select * from follow where followingid='".$_SESSION['id']."'");
while ($arr=mysqli_fetch_array($select)) {
	    $followerid=$arr['followerid'];
	    $pedding=$arr['pedding'];

$selct=mysqli_query($conn,"select * from follow where followerid='".$_SESSION['id']."' and followingid=' $followerid' ");
$nums=mysqli_num_rows($selct);

	    $select2=mysqli_query($conn,"select * from signup where id='$followerid'");
	    $arr2=mysqli_fetch_array($select2);
	    $firstn=$arr2['firstname'];
	    $lastn=$arr2['lastname'];
	    $file=$arr2['file'];



if ($nums>0) {
?>

 <div class="smallffdiv">
		              			   	   <?php echo "<img src='profile/$file'>";?><h3><?php echo    $firstn.' ' .$lastn;  ?></h3>
		              				<button type="button">followed</button>
		              			</div>
<?php
}
else{

 ?>
                                 <div class="smallffdiv">
		              			   	   <?php echo "<img src='profile/$file'>";?><h3><?php echo    $firstn.' ' .$lastn;  ?></h3>
		              				<button type="button" onclick="follow(<?php echo $followerid;?>)" id="ddx<?php echo $id;?>">followback</button>
		              			</div>

<?php } }?>

		              			<script type="text/javascript">    
             function follow(a){
                 $.ajax({
                url:"processfriend.php?idx="+a,
                 type:"GET",
                 data: "nav=link",
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(data){
                 //$('.commentcheck').css({"dispaly":"flex"});

                  //$('.commentcheck').show();
                   
                 },
                 success:function(data){
                    $('#ddx'+a).html(data);
                    //$('.commentcheck').hide();
        
                 },
                 error:function(data){
                    alert('error typing to processData');
                 }

                    });
                            
                          }
                      </script>