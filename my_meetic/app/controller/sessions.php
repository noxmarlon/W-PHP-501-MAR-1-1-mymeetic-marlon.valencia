<?php 
	include_once('register_login_controller.php');
	include_once('changepass.php');
	if(isset($_POST['welcome'])){
		// remove all session variables
		session_unset(); 

		// destroy the session 
		session_destroy();
	}
	if(!($_SESSION)){
		header("Location:index.php");
	}
?>