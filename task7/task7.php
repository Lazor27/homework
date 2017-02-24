
<?php
if(!$_POST){echo '<h3>Чтобы посмотреть коментарии введите свой!!!</h3>';}
if($_POST){
	echo '<h3>Коментарии</h3>';
$file=fopen("users.txt",'a+');
$name=$_POST['name'];
$coment=$_POST['coment'];
fwrite($file, $name. PHP_EOL."Коментарий: ".$coment.PHP_EOL.PHP_EOL);


 
 echo "<pre>",file_get_contents('users.txt'),"</pre>";
 fclose($file);}
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>task7</title>
</head>
<body>
	<form  method="POST">
	    <input type="text" name="name" placeholder="Ваше имя">
		<input type="text" name='coment' placeholder="Ваш коментарий" >
		<button>GO</button>
	</form>
</body>
</html>