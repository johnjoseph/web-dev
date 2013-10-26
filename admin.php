<html>
<head>
<title>Web Development Workshop</title>
<link href="simple-style.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
<div id='header'>
        <h1>Admin Panel</h1>
</div>
<div id='wrapper' style='margin-left:20px;'>
<?php
	require_once('connect.php');
	echo "<table>";
	echo "<tr><th>id</th><th>name</th><th>event</th><th>phone</th></tr>";
	$query="SELECT * FROM `reg`";
	$result=$mysqli->query($query);
	while($row=$result->fetch_assoc())
	{
		$q="SELECT * FROM `events` WHERE id='$row[event_id]'";
		$r=$mysqli->query($query);
		$rw=$r->fetch_assoc();
		echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$rw['name']."</td><td>".$row['phone']."</td></tr>";
	}
	echo "</table>";
?>
</div>
</body>
</html>
