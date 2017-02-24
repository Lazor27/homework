<?php
   function conversely($str)
{   $str_n='';
   	$len=strlen($str);
   	$str=str_split($str);
   	for ($i=$len ; $i >=0 ; $i--) 
   	{ 
   		 $str_n.=$str[$i];
   	}
    return $str_n; //  не пойму почему выводит Notice
}

$A='qwerty';
echo $A,"<br>";
$A_new=conversely($A);
echo $A_new;

?>