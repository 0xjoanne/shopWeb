<!DOCTYPE html>
<html>
<head>
	<title>Contra Botanic - Display Product</title>
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
	$id = $_GET['id'];
	$link = mysql_connect("localhost","root","");
	if (! $link) die ("Couldnt connect to MySQL");
	mysql_select_db($db , $link) or die("Select DB Error: ".mysql_error());

	// select the record to display
	$result = mysql_query("SELECT * FROM plants WHERE id = $id")
			  or die("SELECT Error: ".mysql_error());

	$row = mysql_fetch_array($result);
	$_SESSION['id'] = $row['id'];
	$_SESSION['title'] = $row['title'];
	$_SESSION['price'] = $row['price'];

	// display the results
		include "header.php";
		print "<main class='product-content'>";
		if(isset($_SESSION['username'])){
			print "<p class='welcome-info'>Welcome, ".$_SESSION['username']. ".</p>";
		};
		if(isset($_GET['msg'])){
			print "<p class='welcome-info'>".$_GET['username']. "</p>";
		}
		print "<img src='images/".$row['image']."'>";
		print "<div class='product-detail'>";
		print "<p class='product-title'>".$row["title"]."</p>";
		print "<p class='product-price'>".$row["price"]."</p>";
		print "<p class='product-info'>".$row["details"]."</p>";
		if(isset($_SESSION['username'])){
			print "<form method='post' action='addtocart.php' class='addcart-form'>";
			print "<input type='text' placeholder='quantity' name='quantity'>";
			print "<input type='submit' value='Add to Cart'>";
			print "</form>";
		}
		print "</main>";
		include "footer.php";

	// close the database
	mysql_close($link);
	?>

	<!-- script -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/shop.js"></script>
</body>
</html>	