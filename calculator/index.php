
<?php

// This will make error messages visible on Edumedia
// It's temporary and should be deleted when you've fixed your code
error_reporting(-1);
ini_set('display_errors', 'on');

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Money Calculator</title>
	<link href="file:///D|/wamp/www/mike/css/general.css" rel="stylesheet">
</head>
<body>
<h1>Mad Man Mike's Mega Money Calculator</h1>
<div class="calc">
<form action="file:///D|/wamp/www/mike/index.php" method="post">
<div class="number">

	<label for="num1">Number 1</label>
	<input type="num1" id="num1" name="num1">

	<label for="num2">Number 2</label>
	<input type="num2" id="num2" name="num2">

</div>

<div class="operator">
	<label for="operator">Function</label>
	<select id="operator" name="operator">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	
	</select>
</div>

<div class="button">
	<button type="calculate">Calculate</button>
</div>
</form>

<div class="result">
<?php if (!empty($_POST['num1']) && !empty($_POST['num2'])) : ?>

	<?php if ($_POST['operator'] == '+') : ?>
	<p>$<?php echo $_POST['num1'] + $_POST['num2'] * 1.13 ;?></p>
	
	<?php elseif ($_POST['operator'] == '-') : ?>
	<p>$<?php echo $_POST['num1'] - $_POST['num2'] * 1.13 ;?></p>
	
    <?php elseif ($_POST['operator'] == '/') : ?>
	<p>$<?php echo $_POST['num1'] / $_POST['num2'] * 1.13 ;?></p>

	<?php elseif ($_POST['operator'] == '*') : ?>
	<p>$<?php echo $_POST['num1'] * $_POST['num2'] * 1.13 ;?></p>

	<?php endif; ?>

<?php endif; ?>
</div>
</div> 
</body>
</html>




</body>

</html>