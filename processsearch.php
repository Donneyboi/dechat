<?php  session_start();
include "db.php";
@$search=$_POST['search'];
if ($search=="") {
$slect=mysqli_query($conn,"select * from signup where 1");

    while($arr=mysqli_fetch_array($slect)){
    $firstn=$arr['firstname'];
    $last=$arr['lastname'];
    $file=$arr['file'];
    $id=$arr['id'];
    ?>  

                  <div class="smallserchdiv" onclick="showd(<?php echo $id ?>)">
                    <div class="searchimage"><?php echo "<img src='profile/$file'>";?></div>
                    <div class="searchname"><?php echo $firstn."   ".$last ?></div>
                </div>



<?php }  

}
else{$slect=mysqli_query($conn,"select * from signup where email like '%$search%' or firstname like  '%$search%' or lastname  like '%$search%'");
//echo $search;

 
while($arr=mysqli_fetch_array($slect)){
    $firstn=$arr['firstname'];
    $last=$arr['lastname'];
    $file=$arr['file'];
    $idc=$arr['id'];
    ?>  

               <div class="smallserchdiv" onclick="showd(<?php echo $idc ?>)">
                    <div class="searchimage"><?php echo "<img src='profile/$file'>";?></div>
                    <div class="searchname"><?php echo $firstn."   ".$last ?></div>
                </div>



<?php }  


} ?>

      <script type="text/javascript">    
             function showd(a){
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