<html>
<head>
	<title>Web Development Workshop</title>
	<link href="simple-style.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	require_once('connect.php');
?>
<div id='header'>
	<h1>Events</h1>
</div>
<div id='wrapper'>
<div id='sidebar'>
	<ul id='links'>
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
</div>
<div id='main-content'>
	<?php
		$event_id = $_REQUEST['eventid'];
		$query="SELECT * FROM `events` WHERE id='$event_id'";
		if ($result = $mysqli->query($query))
		{
			if ($row = $result->fetch_assoc()) {
				echo "<h2>$row[name]</h2>";
				echo "<p>$row[details]</p>";
				echo "<a class='reg' href='reg.php?eventid=$row[id]'>Register</a>";
			}
			$result->free();
		}

		/* close connection */
		$mysqli->close();
	?>
</div>
</div>

</body>
</html>
