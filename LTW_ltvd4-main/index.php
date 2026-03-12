<?php
$result = "0";

if(isset($_POST["display"])){

$expression = $_POST["display"];

if(preg_match('/^[0-9+\-*\/.]+$/',$expression)){
$result = eval("return $expression;");
}else{
$result = "Error";
}

}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Máy Tính Cá Nhân</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<form class="calculator" method="POST">

<div class="display" id="display"><?php echo $result; ?></div>

<input type="text" name="display" id="input_display">

<div class="buttons">

<div class="button" onclick="clearDisplay()">C</div>
<div class="button" onclick="deleteDigit()">DEL</div>
<div class="button" onclick="input('.')">.</div>
<div class="button operator" onclick="input('/')">÷</div>

<div class="button" onclick="input('7')">7</div>
<div class="button" onclick="input('8')">8</div>
<div class="button" onclick="input('9')">9</div>
<div class="button operator" onclick="input('*')">×</div>

<div class="button" onclick="input('4')">4</div>
<div class="button" onclick="input('5')">5</div>
<div class="button" onclick="input('6')">6</div>
<div class="button operator" onclick="input('-')">−</div>

<div class="button" onclick="input('1')">1</div>
<div class="button" onclick="input('2')">2</div>
<div class="button" onclick="input('3')">3</div>
<div class="button operator" onclick="input('+')">+</div>

<div class="button" onclick="input('0')">0</div>

<input type="submit" class="equal" value="=">

</div>

</form>

<script src="script.js"></script>

</body>
</html>