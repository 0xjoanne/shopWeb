<!-- me! -->

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
	$db = "newdb";
	$link = mysql_connect("localhost","root","");
	if (! $link) die ("Couldnt connect to MySQL");
	mysql_select_db($db , $link) or die("Select DB Error: ".mysql_error());

	/*select the record to display*/
	$result = mysql_query("SELECT * FROM products")
			  or die("SELECT Error: ".mysql_error());

	/*find out how many rows are there and display number*/
	$num_rows = mysql_num_rows($result);


	print "There are $num_rows records.<br>";
	/*display the results*/
	print "<ul width='600' cellpadding='10' cellspacing='0' border='2'>\n";

	while ($get_info = mysql_fetch_row($result)){

		print "<ul align='center' valign='top'>\n";
		foreach ($get_info as $field)
		print "\t<li align='center' colspan='1' rowspan='1'
		bgcolor='#64b1ff'>$field</li>\n";
		print "</ul>\n";
	}
	print "</ul>\n";
	/*closeing the database*/
	mysql_close($link);
	?>
	<br>

	<form method="post" action="db_interface.php">
		<input type="submit" value="Dbase Interface">
	</form>

</body>
</html>	