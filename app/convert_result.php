<?php
define('HOST', 'http://localhost:81/last/');
?>
<!DOCTYPE html>
<html>
<head>
<title>Result</title>
<link rel="stylesheet" href="<?=HOST?>/css/style.css">
<meta charset="utf-8">
</head>
<body>
	<div class="title">
		<h1>Paymentwall PHP Test</h1>
		<h2>Number To String Convertion</h2>
	</div>
	<div id="result">
		<?php
		include_once 'get_value.php';
		?>
	</div>
	<div id="more_convertion">
<p>Want more Numbers Convert - <a href="<?=HOST?>">Click her!</a></p>
	</div>
</body>
</html>