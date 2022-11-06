<?php session_start();
include "db.php";

$update=mysqli_query($conn,"update notification set seen='yes' where email='".$_SESSION['id']."'");
  ?>