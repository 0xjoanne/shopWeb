<?php 
	// connect to mysql
	$db = "shopdb";
	$link = mysql_connect("localhost","root","");
	if (!$link){
		die("Could not connect: " .mysql_error());
	}

	// create shopdb
	$sql = "CREATE DATABASE $db";
	if(mysql_query($sql,$link)){
		echo "Database shopdb created successfully\n";
	}else{
		echo "Error creating databese: " .mysql_error(). "\n";
	}
	
	// select shopdb
	mysql_select_db($db, $link) or die("Select db error: " .mysql_error());
	// create users table
	mysql_query(
		"CREATE TABLE IF NOT EXISTS users(
			id INT NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(id),
			firstname VARCHAR(30),
			lastname VARCHAR(30),
			username VARCHAR(30),
			password VARCHAR(30),
			email VARCHAR(50)
		)"
	) or die(mysql_error());

	// create products table
	mysql_query(
		"CREATE TABLE IF NOT EXISTS products(
			id INT NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(id),
			title VARCHAR(30),
			image VARCHAR(255),
			price VARCHAR(30),
			details TEXT
		)"
	) or die(mysql_error());

	// insert records to products table
	$details = "Made from wool, these little felt plants require no watering or sunlight whatsoever! Perfect for those without a green thumb. Add greenery to your space without the hassle of caring for the real thing.\nEvery Contra Botanic felt plant is handmade using a technique called needle-felting.\n Each plant is one-of-a-kind and will vary slightly in shape.";
	mysql_query("INSERT INTO products (title,image,price,details) VALUES('Light Green','images/1.jpg','$40.00 CAD','$details')") or die ("Insert error: " .mysql_error());
	mysql_query("INSERT INTO products (title,image,price,details) VALUES('Medium Green','images/2.jpg','$40.00 CAD','$details')") or die ("Insert error: " .mysql_error());
	mysql_query("INSERT INTO products (title,image,price,details) VALUES('Medium Green','images/2.jpg','$40.00 CAD','$details')") or die ("Insert error: " .mysql_error());
	mysql_query("INSERT INTO products (title,image,price,details) VALUES('Large Green','images/3.jpg','$60.00 CAD','$details')") or die ("Insert error: " .mysql_error());
	mysql_query("INSERT INTO products (title,image,price,details) VALUES('Olive Green','images/4.jpg','$55.00 CAD','$details')") or die ("Insert error: " .mysql_error());
	mysql_query("INSERT INTO products (title,image,price,details) VALUES('Dark Green','images/5.jpg','$55.00 CAD','$details')") or die ("Insert error: " .mysql_error());
	
	// colse connect
	mysql_close($link);
	echo "db set up";
?>