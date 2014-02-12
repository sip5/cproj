<?php
	
		setcookie("ucid", "", time()-3600);
		setcookie("loggedin", "", time()-3600);
		
		unset($_COOKIE['ucid']);
		unset($_COOKIE['loggedin']);
		header('Location: login.php');
		exit;
	