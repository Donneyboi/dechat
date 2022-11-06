<?php session_start();
include "db.php";
$slect=mysqli_query($conn, " select distinct  email,id,filename from stories where 1 ORDER BY id DESC");

while ($stor=mysqli_fetch_array($slect)){
	$file=$stor['filename'];
	$email=$stor['email'];
	$id=$stor['id'];

	$st=mysqli_query($conn,"select * from stories where  email='$id' ORDER BY time DESC");
	$storimage=mysqli_num_rows($st);

	$select=mysqli_query($conn, "select * from signup where id='$email'");
	$arr=mysqli_fetch_array($select);
	$firstn=$arr['firstname'];
	$lastn=$arr['lastname'];


 ?>             

	                <div class="conover">
					<div class="smalloverdiv" onclick="show('<?php  echo $id;?>')"><?php echo "<img src='storiepic/$file'>";?></div>
					<p><?php echo $firstn ." ".$lastn;?></p>
					</div>

<div class="viewbig<?php  echo $id;?>" id="viewbig">
	<?php echo "<img src='storiepic/$file'>";?>
	<div class="transprent">
		<button type="button" onclick="myst(this,this,<?php  echo $storimage ?>)" value="<?php  echo $id ?>">back</button>
		<button type="button" onclick="myst(this,this,<?php  echo $storimage ?>)" value="<?php  echo $id ?>">next</button>
	</div>
	</div>
	

<?php } ?>


    <script type="text/javascript">
      //$('#viewbig').hide();	
function show(p) {
        //alert(p)
    $('.viewbig'+p).show();
    $('#viewbig').css({"dispaly":"flex"});

    }
</script>

<script type="text/javascript">
	function myst(o,o2,totalimg) {
		o=o.value;
		o2=o2.innerHTML;

		if (o2=="next") {
			 c++;
		}
		if (o2=="back") {
			c--;
		}
		if (c<1) {c=1}
		if (c>totalimg) {
			c=totalimg;

		}

		storieslid="id="+o+"&status="+o2+"&totalimg="+totalimg+"&c="+c;
                    $.ajax({
                url:"storieslid.php",
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
                    $('#viewbig'+o).html(data);
                    //$('.commentcheck').hide();
        
                 },
                 error:function(data){
                    alert('error typing to processData');
                 }

                    });
	
	}
</script>