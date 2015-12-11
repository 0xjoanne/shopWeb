<!DOCTYPE html>
<html>
<head>
	<title>Contra Botanic - Log in</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	<P><?php 
	session_start();
	print $_SESSION['msg']
	 ?> </P>
	<form method="post" action="checklogin.php" class="user-form">
		<input type="text" name="username" placeholder="Username" class="text-input">
		<input type="password" name="psw" Placeholder="Password" class="psw text-input"> 
		<input type="submit" value="LOG IN">
	</form>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/shop.js"></script>
</body>
</html>
<!-- if ($_SESSION['USERNAME'] = "" || == "undefined")
show different menu -->