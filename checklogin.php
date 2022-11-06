<?php session_start();
if (isset($_SESSION['id'])) {
	echo"<style>
      .forregister{display:none}
      .homepage{display:block};
	</style>";
}
else{
	echo"<style>
      .forregister{display:block}
      .homepage{display:none}
	</style>";	
}




  ?>
