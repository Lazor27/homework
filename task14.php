<?php
$arr=array(4,2,5,19,13,0,10);
foreach($arr as $i){
	if($i==2||$i==3||$i==4){echo "Есть!"; die;}
	else echo "Нет!";
}
?>