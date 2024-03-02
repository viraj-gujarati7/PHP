<html>
<head>
	<title>PHP Function which returns vslue</title>
</head>
<body>
	<?php
		function addFunction($num1, $num2) {
			$sum = $num1 + $num2;
			return $sum;
		}
		$return_value = addFunction(10, 20);
		echo "Returned value from the function: $return_value";
	?>
</body>
</html>