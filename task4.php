<h1>Список файлов в директории</h1>
<?php
	function scan($directory){
		$files = scandir($directory);
		foreach ($files as $key => $value) {
			echo $key, " => ", $value,"<br>";
		}
		}


$dir    = '/';
scan($dir);