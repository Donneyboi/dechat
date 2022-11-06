<?php session_start(); include "db.php"; ?>

<?php 
$status=$_GET['status'];
$postid=$_GET['postid'];
$totalimg=$_GET['totalimg'];
$c=$_GET['c'];


//echo $status. "--".$postid."---".$totalimg;
if($c>$totalimg){
    $c=1;
}
if($c<1){
    $c=1;
}

$c--;
$selimage=mysqli_query($conn, "select * from postimage where postid='$postid' order by id desc limit $c,1");


            while($fetchimage=mysqli_fetch_array($selimage)){
                 $postfile=nl2br($fetchimage['filename']);
                          
                    echo "<img src='postimage/$postfile'>

                    <button value='".$postid."' onclick='sli(this,this,".$totalimg.")'>PREV</button>
                    <button value='".$postid."' onclick='sli(this,this,".$totalimg.")'>NEXT</button>";
                    
                    }



                     
?>