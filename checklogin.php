<?php 
	session_start();

	// open a connection to the database
	$db = "shopdb";
	$link = mysql_connect("localhost","root","");
	if (!$link){
		die("Could not connect: " .mysql_error());
	}
	mysql_select_db($db, $link) or die("Select db error: " .mysql_error());

	// select the record
	$loginUname = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
	$loginPsw = filter_var($_POST['psw'],FILTER_SANITIZE_STRING);
	$result = mysql_query("SELECT * FROM users WHERE username = '$loginUname' and password = '$loginPsw'") or die ("Select error: " .mysql_error());

	// check if match
	$count = mysql_num_rows($result);
	if($count == 1){
		$_SESSION['username'] = $loginUname;
		$_SESSION['msg'] = "";
		mysql_close($link);
		header("Location: displaycatalog.php");
	}else{
		$_SESSION['username'] = "";
		$_SESSION['msg'] = "Wrong Username or password. Please try again.";
		header("Location: login.php?msg=Wrong Username or password.");
		mysql_close($link);
	}
?>