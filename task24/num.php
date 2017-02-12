<?php
$number = $_POST['number']; 
$digit  = $_POST['digit'];
if(is_numeric($number) && is_numeric($digit)){
	$number="$number";
	$arr=str_split($number);
	$p=0;
		foreach($arr as $a){
			$a=(integer)$a;
				if($a==$digit){
				$p++;
							}  } 
	echo "Число вхождений: ", $p;}
else echo "Вы ввели не число!!!";
?>