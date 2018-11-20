<?php
	@session_start();

	$url = "index.php";

	if((isset($_SESSION['a_id']))){
		session_destroy();
		unset($_SESSION['a_id']);

		header("Location:index.php ");
	}
	else{
		header("Location:index.php ");
	}

?>