<html>
<head>
<title>Event Registration</title>
<meta name='description' content='event registration'>
<meta name='keywords' content='event,reg,registration'>
</head>
<body>
<?php
	require_once('connect.php');
	require_once('header.php');
?>
<ul>
<?php
	$query='SELECT * FROM `events`';
	$result=$mysqli->query($query);
	while($row=$result->fetch_assoc())
	{
		echo "<a href='index.php?eventid=".$row['id']."'><li>".$row['name']."</li></a>";
	}
?>
</ul>
<div>
<?php
	$event_id=$_REQUEST['event_id'];
	$query="SELECT * FROM `events` WHERE id=`$event_id`";
	$result=$mysqli->query($query);
	$row=$result->fetch_assoc();
	echo $row['details'];
	echo "<a href='reg.php?event_id=".$row['id']."'>register</a>";
?>
</div>
<?php
	require_once('footer.php');
?>
</body>
</html>
