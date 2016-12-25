<?php
include 'include.php';


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title> Calculator</title>
</head>
<body>
<center>
<div>
<br>
<h1 class="color">Calculator</h1><br />

<form action="calculator.php" method="GET">
	<input type="text" name="input1" placeholder="Enter a number" class="input"> 
	<br />
	<br>
    <input type="text" name="input2" placeholder="Enter a number" class="input">
    <br/>
    <br/>
    <select name="operator" class="select">
    	<option>NONE</option>
    	<option>ADD</option>
    	<option>SUBTRACT</option>
    	<option>MULTIPLY</option>
    	<option>DEVIDE</option>
    	<option>REMAINDER</option>
    </select>
<br />
<br/>
<input type="submit" name="submit" value="Calculate" class="CALCULATE">
</form>

<h1 style="font-size: 23px;" class="color"> THE ANSWER IS: </h1>

<?php




include 'cal.php';






?>
</div>
</center>
</body>
</html>