<?php //НИКАК НЕ ПОЛУЧИЛОСЬ С РУССКИМИ СИМВОЛАМИ 
      //ПОДСКАЖИТЕ КАК ПО ДРУГОМ
	function up_register($string)
	{   //setlocale(LC_ALL, 'ru') ;
		$N_string=(string)'';
		$len=strlen($string);
		$arr=str_split($string);
		for ($i=0; $i <$len-2 ; $i++) { 
			if ($arr[$i]=='.') {
				$arr[$i+2] = mb_strtoupper($arr[$i+2]);
			}  
		}
		$N_string =	implode($arr);
		$N_string =ucfirst($N_string);

	return $N_string;
	}
$string = 'anyone who reads English literary texts. will be familiar with the. most of the works attributed to King.';

 $string=up_register($string);
 echo $string;