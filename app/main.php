<?php
define('HOST', 'http://localhost:81/last/');
?>
<!DOCTYPE html>
<html>
<head>
<title>Main Page</title>
<link rel="stylesheet" href="<?=HOST?>css/style.css">
<meta charset="utf-8">
</head>
<body>
	<div class="title">
<h1>Paymentwall PHP Test</h1>
<h2>Number To String Convertion</h2>
	</div>
	<div class="convertion_form">
<form name="form" class="form" method="POST" action="app/convert_result.php">
	<label>Enter your Number Please:</label>
	<input class="number_input" type="text" name="number_input">
	<input class="button" type="submit" value="Convert">
</form>
	</div>
</body>
</html>
	