<?php session_start();
include "db.php";
$select=mysqli_query($conn,"select * from post ORDER BY time DESC");
while($row=mysqli_fetch_array($select)) {
       $post=$row['message'];
       $idx=$row['id'];
       $email=$row['email'];
       $time=$row['time'];
       
       $selectname=mysqli_query($conn,"select* from signup where id='$email'");
       $arr=mysqli_fetch_array($selectname);
       $firstn=$arr['firstname'];
       $lastn=$arr['lastname'];
       $file=$arr['file'];
       $idxx=$arr['id'];


 ?>              


               <div class="body2">

                     	<div class="body2head">
                     		<div class="bimage">
                     	   <?php echo "<img src='profile/$file'>";?>
                     		</div>
                     		<div class="bname">
                     			<h3 onclick="showdetail(<?php echo $idxx ?>)"><?php echo $firstn." ".$lastn;  ?></h3>
                     			<p><?php echo date("h:i", $time)  ?></p>
                     		</div>
                     		<div class="bdelect">...</div>
                     	</div>

                     	<div class="fortextandimage">
                     		<div class="fortext"><?php echo $post;  ?></div>
                     		  <?php
     $sn=mysqli_query($conn, "select * from postimage where postid='$idx' order by id desc");
        $timage=mysqli_num_rows($sn);

                 $selimage=mysqli_query($conn, "select * from postimage where postid='$idx' order by id desc limit 1");
                 ?>
                    <div class="forimage" id="forimage<?php echo $idx; ?>">
                        <?php
            while($fetchimage=mysqli_fetch_array($selimage)){
                 $postfile=nl2br($fetchimage['filename']);
                          
                    echo "<img src='postimage/$postfile' onclick='showpopup(".$idx.")'/>
                    <button value='".$idx."' onclick='sli(this,this,".$timage.")'>PREV</button>

                    <button value='".$idx."' onclick='sli(this,this,".$timage.")'>NEXT</button>";

                        }



                     ?></div>
        <!--------------------------------this area is for image when you click it will pop up this div------------------------->
<div class="popimge"></div>
                     	</div>
                     	<div class="bfooter">


                 <script type="text/javascript">
                $(document).ready(function () {
                $('.forlike<?php  echo $idx;?>').on('submit',function (para) {
                    para.preventDefault();
                    $.ajax({
                url:"processlike.php",
                 type:"post",
                 data:new FormData(this),
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(){
                 // $('.likeshow').html("wait");
                 },
                 success:function(para2){
                    $('.likeshow<?php echo $idx; ?>').html(para2);
                    swowall();
                 },
                 error:function(){
                    alert('error typing to processData');
                 }

                    })
                });
                })
            </script>
            <div class="likeshow<?php echo $idx; ?>"></div>
                     		<form id="like" action="processlike.php" method="post" class="forlike<?php  echo $idx;?>">
                     			<label class="fa fa-heart" for="like<?php echo $idx;?>"><span>
                                                        <?php  
                                                    $selS=mysqli_query($conn,"select * from likes where postid='$idx'");
                                                    $numl=mysqli_num_rows($selS);
                                                    if ($numl<1) {
                                                    
                                                    }
                                                    else{
                                                    echo $numl;
                                                    }
                                                    ?>      
                                </span></label>
                                <input type="hidden" name="mylike" value="<?php echo $idx;?>">
                                <input type="submit" style="display: none;" id="like<?php echo $idx;?>" name="like">

                     		</form>
                     		<button type="button" onclick="opencomment(<?php  echo $idx; ?>)">
                            <?php $numc=mysqli_query($conn,"select * from comment where postid='$idx'");
                            $numsc=mysqli_num_rows($numc);
                                echo $numsc;
                                     
                             ?> comment <i class="fa fa-arrow-right"></i></button>
                        	</div>



                            <!-----------------------------------------------comment------------------------------------------------->
                            <div class="comment" id="comm<?php echo $idx ;?>">
                         
                       <?php $selectcoment=mysqli_query($conn,"select * from comment where postid='$idx'"); ?>
                          	<div class="commenthead">
                          		<i class=" fa fa-times" onclick="gobackc(<?php echo $idx; ?>)"></i>
                          		<h4>dominic 's post</h4>
                          		<div></div>
                          	</div>


                          	<div class="commentbody">
                          		<div class="body2head">
                     		<div class="bimage">
                     			   <?php echo "<img src='profile/$file'>";?>
                     		</div>
                     		<div class="bname">
                     			<h3><?php echo $firstn." ".$lastn;?></h3>
                     			<p><?php echo $time;  ?></p>
                     		</div>
                     		<div class="bdelect">...</div>
                     	</div>

                     	<div class="fortextandimage">
                     		<div class="fortext"><?php echo $post;?></div>
                     		<div class="forimage"> <?php
                 $selimage=mysqli_query($conn, "select * from postimage where postid='$idx'");
            while($fetchimage=mysqli_fetch_array($selimage)){
                 $postfile=nl2br($fetchimage['filename']);

                    echo "<img src='postimage/$postfile'/>";
                        }



                     ?></div>
                     	</div>



                     	<!----------------------------------------this place is for the main  comment------------------------------->
                     	<div class="comment2">
                            <?php  while($commen=mysqli_fetch_array($selectcoment)) {
                                $massage=$commen['message'];
                                $emailc=$commen['email'];
                                //this cid is id of comment
                                 $cid=$commen['id'];

                                $selectcommentname=mysqli_query($conn,"select * from signup where id='$emailc'");
                                $arrcomenr=mysqli_fetch_array($selectcommentname);
                                $fistn=$arrcomenr['firstname'];
                                $lasn=$arrcomenr['lastname'];
                                $idc=$arrcomenr['id'];
                                //$cfile=['file'];
                          


                                $replysel=mysqli_query($conn,"select * from replycomment where commentid='$cid'");
                                $rggn=mysqli_num_rows($replysel);
                                

                          ?>
                     		<div class="commmentcontainer">
                     			<div class="chead">
                     				<div class="cheadimage"><?php echo "<img src='profile/$file'>";?></div>
                     				<h3><?php echo $fistn." ".$lasn; ?></h3>
                     			</div>
                     			<div class="commentbox"><?php echo $massage; ?> <?php echo $rggn. "  "."Replys"; ?></div>
<?php //this is where  i did my reply
                                while($gg=mysqli_fetch_array($replysel)){
                               

                             $massager=$gg['comment'];
                             $emaila=$gg['email']; 
                             $repselectn=mysqli_query($conn,"select * from signup where id='$emaila'");
                             $replyname=mysqli_fetch_array($repselectn);
                             $rfirstn=$replyname['firstname'];
                             $rlastn=$replyname['lastname'];
                            //."<br />";
   ?>
                               
                         
                            <div class="replydiv">
                                <div class="smallreply">
                                    <div class="replyhead"><?php echo "<img src='profile/$file'>";?><h3><?php echo $rfirstn." ".$rlastn; ?></h3></div>
                                    <div class="replybody"><p><?php echo $massager; ?></p></div>
                                </div>
                            </div>
                        <?php } ?>
                     		</div>


                                  <form action="" method="get" class="replyform" >
                            <input type='hidden' id="commpostid<?php echo $cid;?>" name="commpostid" value="<?php echo $cid;?>">
                                   <input type="text" name="commmessage" id="commmessage<?php echo $cid;?>">
                                   <button type="button" onclick="reply(this)" value="<?php echo $cid;?>">reply</button>
                                </form>
                              <?php   }  ?>
                     	</div>
                   
                           <!-----------------------------------------end--------------------------------------------------------->
                          	
                          	</div>
                          		 <form class=" commentfooter" action="" method="get">
        <input type="hidden" name="postid" id="postid<?php echo $idx;?>" value="<?php echo $idx ;?>">
        <input type="text" name="message" id="message<?php echo $idx;?>"> 
         <label class="fa fa-paper-plane" for="com<?php echo $idx;?>"></label>
         <input type="hidden" name="eem" value="<?php echo $email;?>" id="emm<?php echo $idx;?>">
<button onclick="commentform(this)"  name="commentbt" style="display:none;" 
id="com<?php echo $idx ;?>" value="<?php echo $idx ;?>" type="button"></button>
                       
                          </form></div>


                     </div>
                       <?php } ?>
                     <script type="text/javascript" src="java/java.js"></script>


                         <!---------------------------------------------------------end---------------------------------------------------->

                           <!----------------------------------------------------------detail---------------------------------------------------->
                         <!--  <script type="text/javascript">
                               $(document).ready(function () {
                                   $('.loaddeat').load('detail.php');
                               })
                           </script>-->
                           <div class="loaddeat"></div>





<div class="commentcheck" style="width:100%;height: 100vh; position: absolute;background: white;top: 0px; display: none; align-items: center;
justify-content: center;">   
</div>
        <script type="text/javascript">
        function commentform(p) {
            p=p.value;
            
            var postid=document.getElementById('postid'+p).value;
            var message=document.getElementById('message'+p).value;
             var emm=document.getElementById('emm'+p).value;
  
               datas="postid="+postid+"&message="+message+"&emm="+emm;
                    $.ajax({
                url:"processcomment.php",
                 type:"GET",
                 data: datas,
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(data){
                 $('.commentcheck').css({"dispaly":"flex"});

                  $('.commentcheck').show();
                   
                 },
                 success:function(data){
                    $('.commentcheck').html(data);
                    $('.commentcheck').hide();
                       swowall();
                 },
                 error:function(data){
                    alert('error typing to processData');
                 }

                    })
                            }
                
            </script>



<div class="checkrr"></div>
             <script type="text/javascript">
        function reply(rp) {
           rp=rp.value;
    
            var commpostid=document.getElementById('commpostid'+rp).value;
            var commmessage=document.getElementById('commmessage'+rp).value;
             //var emm=document.getElementById('emm'+p).value;
            alert(rp);
  
               datads="commpostid="+commpostid+"&commmessage="+commmessage;
                    $.ajax({
                url:"reply.php",
                 type:"GET",
                 data: datads,
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(data){
                 //$('.commentcheck').css({"dispaly":"flex"});

                  //$('.commentcheck').show();
                   
                 },
                 success:function(data){
                    $('.checkrr').html(data);
                    swowall();
                    //$('.commentcheck').hide();
        
                 },
                 error:function(data){
                    alert('error typing to processData');
                 }

                    })
                            }
                
            </script>




    <script type="text/javascript">
function opencomment(p) {
        //alert(p)
    $('#comm'+p).show();
    }
</script>

    <script type="text/javascript">
function gobackc(p) {
        //alert(p)
    $('#comm'+p).hide();
    }
</script>
<!----------------------------------------------------this code is for popimage----------------------------->
<script type="text/javascript">
    function showpopup(a) {
        document.getElementsByClassName('popimge'+a).display="flex";
        
    }
</script>

<script type="text/javascript">
    

</script>


                      <script type="text/javascript">
                        var c=0;
                          function sli(o,o2,totalimg){
                            o=o.value;
o2=o2.innerHTML;

if(o2=='NEXT'){
    c++;
}
if(o2=='PREV'){
    c--;
}
if(c<1){
    c=1;
}
if(c>totalimg){
    c=totalimg;
}


dataslide="postid="+o+"&status="+o2+"&totalimg="+totalimg+"&c="+c;
                    $.ajax({
                url:"slide.php",
                 type:"GET",
                 data: dataslide,
                 contentType:false,
                 cache:false,
                 processData:false,
                 beforeSend:function(data){
                 //$('.commentcheck').css({"dispaly":"flex"});

                  //$('.commentcheck').show();
                   
                 },
                 success:function(data){
                    $('#forimage'+o).html(data);
                    //$('.commentcheck').hide();
        
                 },
                 error:function(data){
                    alert('error typing to processData');
                 }

                    });
                            //alert(totalimg);
                          }
                      </script>
<!---------------------------------this where i load my detail------------------------>


            <script type="text/javascript">    
             function showdetail(a){
              //$('.loadindeatail').show();
              //detail
               $('.detail').show();

                 $.ajax({
                url:"detail.php?useridxx="+a,
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
                    $('.detail').html(data);
                    //$('.commentcheck').hide();
        
                 },
                 error:function(data){
                    alert('error typing to processData');
                 }

                    });
                            
                          }
                      </script>


                 