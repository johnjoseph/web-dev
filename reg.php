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
	<h1>Registration</h1>
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
	<form method='POST'>
	<?php
		$event_id = $_REQUEST['eventid'];
		if ($_POST['submit']) {
			$query = "INSERT INTO reg (event_id, name, phone) VALUES ('$event_id', '$_POST[name]', '$_POST[phone]')";
			$mysqli->query($query);
			$query = "SELECT * FROM events WHERE `id`='$event_id'";
			$result=$mysqli->query($query);
			$row=$result->fetch_assoc();
			echo "successfully registered for ".$row['name'];
		} else if ($event_id) {
			$query="SELECT * FROM `events` WHERE id='$event_id'";
			if ($result = $mysqli->query($query))
			{
				if ($row = $result->fetch_assoc()) {
					echo "Event: $row[name]<br/>";
					echo "<input type='hidden' name='eventid' value='$event_id' />";
					?>
			<input type='text' name='name' placeholder='Name' />
			<input type='text' name='phone' placeholder='Phone' />
			<input type='submit' name='submit' value='Register' />
					<?php
				}
				$result->free();
			}
		}

		/* close connection */
		$mysqli->close();
	?>
	</form>
</div>
</div>

</body>
</html>
