<?php
	require_once('config.php');
	$mysqli= new mysqli($host,$db_user,$db_password,$db_name);
	
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>

