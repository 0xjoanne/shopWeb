<html>
<head>
	<title>Display Product</title>
	<style type="text/css">
		td {font-family: tahoma, arial, verdana; font-size: .875em;}
	</style>
</head>
<body>
	<!-- write the code for insertion -->
	<!-- open a connection to the DB: -->
	<?php
	session_start();
	print $_SESSION['username'];
	$db = "shopdb";
	$id = $_GET['id'];
	$link = mysql_connect("localhost","root","");
	if (! $link) die ("Couldnt connect to MySQL");
	mysql_select_db($db , $link) or die("Select DB Error: ".mysql_error());

	/*select the record to display*/
	$result = mysql_query("SELECT * FROM plants WHERE id = $id")
			  or die("SELECT Error: ".mysql_error());

	$row = mysql_fetch_array($result);

	/*display the results*/
		print "<img src='".$row['image']."'>";
		print "<p>".$row["title"]."</p>";
		print "<p>".$row["price"]."</p>";
		print "<p>".$row["details"]."</p>";

	/*closeing the database*/
	mysql_close($link);
	?>
	<br>

</body>
</html>	