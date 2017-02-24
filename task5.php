
<?php
	function scan($directory, $name){
		echo'<h1>Список файлов в директории</h1>';
		$files = scandir($directory);
		foreach ($files as $key => $value) {
			if ($value==$name)
			echo $key, " => ", $value,"<br>";
		}   echo "<br>";
		}

if ($_POST)
{
$dir    = '/';
$name = $_POST['name'];
scan($dir,$name);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Search form</title>
</head>
<body>
	<form method="POST">
		<input type="text" name='name'>
		<button>GO</button>
	</form>
</body>
</html>