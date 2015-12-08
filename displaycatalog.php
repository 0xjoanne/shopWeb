<!-- me! -->

<!doctype html>
<html>
<head>
	<title>Validation - page</title>
</head>
<body>
	
	<!-- to include menu // connect to DB-->
	<?php include "connectdb.php" ?>

	<!-- get info from table (category) -->
	<?php
		$result = mysql_query( "SELECT * FROM products")
		 or die ("Insert Error:".mysql_error());

		 $num_rows = mysql_num_row($result);
	?>

	<!-- List-->
	<h2>Products</h2>
	<ul>
		<li></li>
	</ul>
	
	<?php
	if ($num_rows = 0){
			echo"no products brb!!"
		}else {
			while($row = mysql_fetch_array($result)){
				echo '<li><img src="images/'.$row['images'].'"/><p>'.$row['title']'</p><p>'.$row['price']'</p></li>'
			}
		}
	?>
	</ul>
	<!-- absolut path - entire url/ relative path -how to get to file ex.img/imgname.jpg-->
	<?php
		mysql_close($link);
	?>
</body>
</html>



