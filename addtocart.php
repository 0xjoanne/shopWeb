<?php  
	session_start();
	$id = $_SESSION["id"];
	$title = $_SESSION["title"];
	$price = $_SESSION["price"];
	$quantity = $_POST["quantity"];
	$count = 0;
	if(!isset($_SESSION["cart"])){
		$cart = array();
		array_push($cart, array($title,$price,$quantity));
		$_SESSION["cart"] = $cart;
	}else{
		for ($i=0; $i < count($_SESSION["cart"]); $i++) { 
			if($_SESSION["cart"][$i][0]==$title){
				$_SESSION["cart"][$i][2] = $_SESSION["cart"][$i][2] + $quantity;
				$count++;
			}
		}	
		if(!$count){
			array_push($_SESSION["cart"], array($title,$price,$quantity));
		}	
	}

	//redirect page
	header("Location: displayproduct.php?id=".$id);
?>
