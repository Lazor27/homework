<?php
$arr=array(
'm1'=>"sunday",
'm2'=>"monday",
'm3'=>"tuesday",
'm4'=>"wednesday",
'm5'=>"thursday",
'm6'=>"friday",
'm7'=>"saturday");

foreach($arr as $i => $U){
	if($U=='sunday' || $U=='saturday'){echo "<strong> $U </strong><br>";}	
 else{echo "$U <br>"; }
}
?>