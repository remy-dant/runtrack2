<?php
// Fonction qui compte le nombre d'occurrences d'un caractère dans une chaîne
function occurrences($str,$char){
	$cpt=0; $len=0; while(isset($str[$len])){ $len=$len+1; }
	if(!isset($char[0]) || isset($char[1])){ return 0; }
	$needle=$char[0]; $i=0; while($i<$len){ if($str[$i]===$needle){ $cpt=$cpt+1; } $i=$i+1; }
	return $cpt;
}
echo occurrences('Bonjour','o');
?>