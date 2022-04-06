<?php
	
	session_start();
	
	session_destroy();

	setcookie('uaccount',$uaccount,time()-36);


	header('Location: login.php');

?>

