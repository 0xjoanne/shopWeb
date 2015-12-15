<?php 
	// open a connection to the database
	$db = "shopdb";
	$link = mysql_connect("localhost","root","");
	if (!$link){
		die("Could not connect: " .mysql_error());
	}
	mysql_select_db($db, $link) or die("Select db error: " .mysql_error());
 
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$uname = $_POST['username'];
	$psw = $_POST['psw'];
	$email = $_POST['email'];

	// check if filled
    foreach($_POST as $val) {
        if(trim($val) == '' || empty($val)) {
            header("Location: registration.php?msg=Please fill out all fields.");
            die();
        }
    }

	// check username
	$isTaken = mysql_query("SELECT * FROM users WHERE username = '$uname'") or die ("Select error: " .mysql_error());

	$count = mysql_num_rows($isTaken);
	if($count){
		header("Location: registration.php?msg=Sorry, the username '$uname' is taken.");
	}else{
		// insert to db
		$result = mysql_query("INSERT INTO users (firstname,lastname,username,password,email) VALUES('$fname','$lname','$uname','$psw','$email')") or die("Insert error: " .mysql_error());
		if($result){
			header('Location: login.php');
		}else{
			echo "There is something wrong. Please try again.";
		}
	}
	
	//close db
	mysql_close($link);

	
?>