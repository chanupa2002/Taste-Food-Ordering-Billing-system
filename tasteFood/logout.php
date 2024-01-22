<?php 

	session_start();

	session_destroy();

	// redirecting the user to the home page
	header('Location: home.php?ordered=yes');

 ?>