<?php
// Fonction qui transforme une chaîne de caractères en leet speak
function leetSpeak($str){
	$i=0; $out=""; while(isset($str[$i])){ $ch=$str[$i];
		$upper=$ch; if($upper>='a'&&$upper<='z'){ $upper=chr(ord($upper)-32); }
		if($upper==='A'){$out.='4';}
		else if($upper==='B'){$out.='8';}
		else if($upper==='E'){$out.='3';}
		else if($upper==='G'){$out.='6';}
		else if($upper==='L'){$out.='1';}
		else if($upper==='S'){$out.='5';}
		else if($upper==='T'){$out.='7';}
		else { $out.=$ch; }
		$i=$i+1;
	}
	return $out;
}
echo leetSpeak('Salut Les Gens');
?>