<?php 
	$db = "shopdb";
	// open a connection to the database
	$link = mysql_connect("localhost","root","");
	if (!$link){
		die("Could not connect: " .mysql_error());
	}
	// select shopdb
	mysql_select_db($db, $link) or die("Select db error: " .mysql_error());
 
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$uname = $_POST['username'];
	$psw = $_POST['psw'];
	$email = $_POST['email'];
	// insert record
	$result = mysql_query("INSERT INTO users (firstname,lastname,username,password,email) VALUES('$fname','$lname','$uname','$psw','$email')") or die("Insert error: " .mysql_error());

	if($result){
		header('Location: login.php');
	}else{
		echo "There is something wrong. Please try again.";
	}
	//close
	mysql_close($link);

	
?>