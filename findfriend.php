<?php session_start();
include "db.php";
$slect=mysqli_query($conn,"select * from signup where 1");
while ($frinds=mysqli_fetch_array($slect)) {
	$firstn=$frinds['firstname'];
	$lastn=$frinds['lastname'];
	$file=$frinds['file'];
	$id=$frinds['id'];





 ?>


                          <div class="smallffdiv">
		              				<?php echo"<img src='profile/$file'>" ?><h3><?php  echo $firstn." ".$lastn; ?></h3>
		              				<button type="button" onclick="follow(<?php echo $id;?>)" id="ddx<?php echo $id;?>">follow</button>
		              			</div>








		          <?php } ?>


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