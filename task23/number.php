<?php

$number = $_POST['name']; 
if(is_numeric($number)){
$number="$number";
$arr = str_split($number);
$p=0;
foreach($arr as $a){
$a=(integer)$a;	
$p+=$a;
}
echo $p;}
else echo "Вы ввели не число!!!"
?>
<br>