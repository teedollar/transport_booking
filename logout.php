<?php
	@session_start();

	if((isset($_SESSION['c_id']))){
		session_destroy();
		unset($_SESSION['c_id']);

		$url = "index.php";
		header("Location:index.php ");
	}
	else{
		header("Location:index.php ");
	}


?>