<?php
	session_start();
	session_destroy();
	// session_unset($_SESSION['EMAIL']);
	// session_unset($_SESSION['ROLE']);
	// session_unset($_SESSION['ID']);
	header("Location:login.php");
	die();
?>