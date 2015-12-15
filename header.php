<!-- header -->
<header class="main-header">
	<h1>CONTRA BOTANIC</h1>
	<!-- nav bar -->
	<nav class="main-nav">
		<ul class="nav-list">
			<li><a href="index.php"class="home">HOME</a></li>
			<?php  
				if(isset($_SESSION['username']) and $_SESSION['username']!= ""){
					print "<li><a href='logout.php'>LOG OUT</a></li>";
				}else{
					print "<li><a href='registration.php' class='registration'>REGISTRATION</a></li>
			<li><a href='login.php' class='login'>LOG IN</a></li>";
				}	
			?>
			<li><a href="displaycatalog.php" class="cat">CATALOG</a></li>
		</ul>
	</nav>
</header>

<!-- shop cart -->
<?php  
	if(isset($_SESSION['username'])){
		// cart button
		print "<a herf='javascript:void(0);' class='cart-btn'></a>";
		
		// cart area
		if(!isset($_SESSION["cart"])){
			print "<div class='cart-area'>Your cart is empty.</div>";
		}else{
			$cartArray = $_SESSION['cart'];
			$length = count($cartArray);
			print "<ul class='cart-area'>";
			for ($i=0; $i < $length; $i++) { 
				print "<li>";
				print "<p><span class='cart-title'>".$cartArray[$i][0]."</span>";
				print "<span class='cart-price'>".$cartArray[$i][1]."</span>";
				print "<span class='cart-quantity'>x ".$cartArray[$i][2]."</span></p>";
				print "</li>";
			}
			print "</ul>";
		}
	}
?>
