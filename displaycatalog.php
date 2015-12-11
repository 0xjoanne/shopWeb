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
	$link = mysql_connect("localhost","root","");
	if (! $link) die ("Couldnt connect to MySQL");
	mysql_select_db($db , $link) or die("Select DB Error: ".mysql_error());

	/*select the record to display*/
	$result = mysql_query("SELECT * FROM plants")
			  or die("SELECT Error: ".mysql_error());

	/*display the results*/
	print "<ul>";

	while ($row = mysql_fetch_array($result)){
		print "<li>";
		print "<a href='displayproduct.php?id=".$row['id']."'><img src='".$row['image']."'></a>";
		print "<a href='displayproduct.php?id=".$row['id']."'>".$row["title"]."</a>";
		print "<p>".$row["price"]."</p>";
		print "</li>";
	}
	print "</ul>";
	/*closeing the database*/
	mysql_close($link);
	?>
	<br>

</body>
</html>	