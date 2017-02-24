<pre><?php
function getCommonWords($a, $b)
{ 
$arr1 = explode( " ",$a);
$arr2 = explode( " ",$b);
	foreach ($arr1 as $r  ){
		foreach($arr2 as $p){
			if ($r==$p){echo $r, "<br>";}
							}
						}
}

if ($_POST)
{
$a = $_POST['text1'];
$b = $_POST['text2'];
getCommonWords($a, $b);
}
?>
</pre>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>task 1</title>
</head>
<body>
	<form method='POST'>

	<textarea name="text1"></textarea><br>
	<textarea name='text2'></textarea><br>
	<button>GO</button>
	</form>

</body>