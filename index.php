<html>
<head>
	<title>Web Development Workshop</title>
</head>
<body>
<?php
	require_once('connect.php');
?>
<div id='header'>
<h1>Workshop Example 1</h1>
</div>
<ul>
<?php
	$query='SELECT * FROM `events`';
	if ($result = $mysqli->query($query))
	{
		/* fetch associative array */
		while ($row = $result->fetch_assoc()) {
			echo "<li><a href='index.php?eventid=".$row['id']."'>".$row['name']."</a></li>";
		}

		/* free result set */
		$result->free();
	}
?>
</ul>
<div>
<?php
	$event_id = $_REQUEST['event_id'];
	$query="SELECT * FROM `events` WHERE id=`$event_id`";
	if ($result = $mysqli->query($query))
	{
		while ($row = $result->fetch_assoc()) {
			echo "<a href='reg.php?event_id=".$row['id']."'>register</a>";
		}

		$result->free();
	}

	/* close connection */
	$mysqli->close();
	
?>
</div>
<?php
	require_once('footer.php');
?>
</body>
</html>
