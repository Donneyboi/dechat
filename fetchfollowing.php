<?php session_start();
include "db.php";
$select=mysqli_query($conn,"select * from follow where followerid='".$_SESSION['id']."'");
while($arr=mysqli_fetch_array($select)){
	$following=$arr['followingid'];

$select2=mysqli_query($conn, "select * from signup where id='$following'");
$arr2=mysqli_fetch_array($select2);
       $firstn=$arr2['firstname'];
	    $lastn=$arr2['lastname'];
	    $file=$arr2['file'];


  ?>

                               <div class="smallffdiv">
		              				 <?php echo "<img src='profile/$file'>";?><h3><?php echo    $firstn.' ' .$lastn;  ?></h3>
		              				<button type="button" onclick="unfollowed(<?php echo $following  ?>)" id='dxx'>unfollowed</button>
		              			</div>

		              			<?php } ?>
    			<script type="text/javascript">    
             function unfollowed(a){
                 $.ajax({
                url:"unfollow.php?idx="+a,
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