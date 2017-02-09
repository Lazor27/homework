<?php
$arr=array(
'm'=>"January",
$month="February",
'm1'=>"March",
'm2'=>"April",
'm3'=>"May",
'm4'=>"June",
'm5'=>"August",
'm6'=>"September",
'm7'=>"October",
'm8'=>"November",
'm9'=>"December");
foreach($arr as $i=>$U){
if ($i==$month) {echo "<strong> $U</strong><br>";}	
 else {echo $U,"<br>";}

};

?>