<html>
<head><title>Thy Shop</title></head>
<body>
	<h1>Welcome to thy Shop!</h1>
	<ul>
	<?php
		$json = file_get_contents('http://product-service');
		$obj = json_decode($json);
		$products = $obj->product;
		foreach($products as $product){
			echo "<li>$product</li>";
		}
	
	?>
	</ul>
</body>
</html>

