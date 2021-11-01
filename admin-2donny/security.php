<?php

	session_start();

	include('db/dbconfig.php');

	if ($connection) {
		// database connected
	}
	else {
		header("db/dbconfig.php");
	}

	if (!$_SESSION['username']) {
		header('Location: login.php');
	}

?>