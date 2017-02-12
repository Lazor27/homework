<?php
for($i=0;$i<10;$i++) {
	$arr[$i]=rand(1,10);
    echo $arr[$i], " ";
					}
	echo "<br>";
$max = array_keys($arr, max($arr))[0];
$min = array_keys($arr, min($arr))[0];
echo "Максимальный елемент с инексом [", $max,"],<br> Минимальный елемент с индексом [", $min,"] <br>";

$tmp=$arr[$max];
$arr[$max]=$arr[$min];
$arr[$min]=$tmp;

for($i=0;$i<10;$i++) {echo $arr[$i], " ";}
?>