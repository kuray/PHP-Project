<?php
	session_start();
	if ($_SESSION) {
		echo "Hello";
	}else{
		header('Location: login.php');
		exit();
	}

	print_r($_SESSION);
?>