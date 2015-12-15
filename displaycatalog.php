<!DOCTYPE html>
<html>
<head>
	<title>Display Product</title>
	<meta charset="UTF-8">
	<meta name="description" content="Contrabotanic is a project by Amanda Perumal, to make plants that last and customer can cuddle too. The felt plants are handmade with 100% wool and modelled after various types of succulents.">
	<meta name="keywords" content="contra botanic, felt plant, crown flora studio, toronto">
	<meta name="Creation-Date" content="2015-12-15">
	<meta name="author" content="Qiongrong Jiang, qiongrongjiang@gmail.com, Abbigail Abas, abbigail.abas@gmail.com, Humber College"> 
	<meta name="copyright" content="Qiongrong Jiang, Abbigail Abas">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<?php
	session_start();

	// open a connection to the DB
	$db = "shopdb";
	$link = mysql_connect("localhost","root","");
	if (! $link) die ("Couldnt connect to MySQL");
	mysql_select_db($db , $link) or die("Select DB Error: ".mysql_error());

	//select the record to display
	$result = mysql_query("SELECT * FROM plants")
			  or die("SELECT Error: ".mysql_error());

	//display the results
	include 'header.php';
	print "<main class='catalog-content'>";
	if(isset($_SESSION['username'])){
		print "<p class='welcome-info'>Welcome, ".$_SESSION['username'].".</p>";
	}
	print "<ul>";
	while ($row = mysql_fetch_array($result)){
		print "<li>";
		print "<a href='displayproduct.php?id=".$row['id']."'><img src='images/".$row['image']."'></a>";
		print "<a href='displayproduct.php?id=".$row['id']."' class='cat-title'>".$row["title"]."</a>";
		print "<p>".$row["price"]."</p>";
		print "</li>";
	}
	print "</ul>";
	print "</main>";
	include 'footer.php';

	//closeing the database
	mysql_close($link);
	?>

	<!-- script -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/shop.js"></script>
</body>
</html>	