<?php
function long($a,$value)
{  foreach($a as $f){
	
if (strlen($f)<=$value){
 	echo $f," ";
 }
		
	}
}
if($_POST){
$value=$_POST['value'];



$file=file_get_contents('file.txt');
$file=explode(" ", $file);
echo "Елементы файла которые менше за $value","<br>";
long($file,$value);
}



?>




<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>task 3</title>
</head>
<body>
<h1>Input max value</h1>
	<form method="POST">
		<input type="text" name="value">
		<button> GO</button>

	</form>
</body>
