<?php
// Calcule deux nombres selon l'opération
function calcule($a,$operation,$b){
    if($operation==='+'){ return $a + $b; }
    if($operation==='-'){ return $a - $b; }
    if($operation==='*'){ return $a * $b; }
    if($operation==='/'){ return $b==0 ? 'NaN' : $a / $b; }
    if($operation==='%'){ return $b==0 ? 'NaN' : ($a % $b); }
    return 'op inconnue';
}
echo calcule(5,'+',3);
?>

