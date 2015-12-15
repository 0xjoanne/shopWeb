<!DOCTYPE html>
<html>
<head>
	<title>Contra Botanic - Resistration</title>
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
		include 'header.php';
		print "<main class='registration-content'>";
		if (isset($_GET['msg'])){
			print "<p class='user-info'>";
			print $_GET['msg'];
			print "</p>";
		}
	?>
		<!-- registration form -->
		<form method="post" action="checkregistration.php" class="user-form">
			<input type="text" name="firstname" placeholder="Firstname" class="text-input">
			<input type="text" name="lastname" placeholder="Lastname" class="text-input">
			<input type="text" name="username" placeholder="Username" class="text-input">

			
			<input type="password" name="psw" Placeholder="Password" class="psw text-input"> 
			<div class="confirm-area">
				<input type="password" name="cPsw" Placeholder="Confirm your password" class="confirm-psw text-input">
				<p class="match-tip"></p>
			</div>
			<input type="email" name="email" placeholder="Email" class="text-input">
			<input type="submit" value="SIGN UP" class="signup-btn">
		</form>
	</main>
	
	<!-- footer -->
	<?php  
		include 'footer.php';
	?>

	<!-- script -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript" src="js/shop.js"></script>
</body>
</html>