<?php  session_start();
include "db.php";

$select=mysqli_query($conn, "select * from signup where id='".$_GET['useridxx']."'");
$arr=mysqli_fetch_array($select);
$firstn=$arr['firstname'];
$lastn=$arr['lastname'];
$file=$arr['file'];
$id=$arr['id'];
$email=$arr['email'];



 ?>
                   
                    

                     <div class="detailhead">
                         <div class="detailhead1">
                             <i class="fa fa-arrow-left" onclick="hideprofile(<?php echo $id;?>)"></i>
                             <h3><?php echo $firstn." ".$lastn;?></h3>
                         </div>
                         <div class="detailhead2">
                         <?php echo  "<img src='profile/$file'>"  ?>

                             <h3><?php echo $firstn." ".$lastn; ?></h3>
                         </div>
                         <div class="detailhead3">
                             <button type="button">
                                111
                                <span>following</span>
                             </button>
                                         <button type="button">
                                111
                                <span>following</span>
                             </button>
                         </div>
                         <div class="detailhead4">
                             <button type="button" style="width: 30%;height: 30px;margin-right: 10px;
                             border-radius: 20px;">follow</button>
                             <button>message</button>
                         </div>

                     </div>
                      <div class="detailbody">
                          
                          <?php 
                          $selectpost=mysqli_query($conn," select * from post where email='$id'");
                          $arri=mysqli_fetch_array($selectpost);
                          $idcc=$arri['id'];
                          $select3=mysqli_query($conn," select *  from postimage where postid='$idcc'");
                          while($ff=mysqli_fetch_array($select3)){
                           $file=$ff['filename'];
                            ?>
                             <?php echo  "<img src='postimage/$file'>"?>

                         <?php    } ?>
                      </div>
                        
                     
                        
                       
            <script type="text/javascript">    
             function hideprofile(a){
              //$('.loadindeatail').show();
              //detail
               $('.detail').hide();

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