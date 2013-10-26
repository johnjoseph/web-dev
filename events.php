<?php
	require_once('connect.php');
	$id=$_REQUEST['id'];
	$query="SELECT * FROM `events` WHERE id='$id'";
	$result=$mysqli->query($query);
	$row=$result->fetch_assoc();
	print_r(json_encode($row));
?>
