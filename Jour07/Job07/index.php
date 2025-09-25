<?php
// Transformation de chaîne selon option choisie
echo '<form method="post" style="margin-bottom:1rem">';
echo '<input type="text" name="str" placeholder="Votre texte" style="min-width:320px" /> ';
echo '<select name="fonction">';
echo '<option value="">-- choisir --</option>';
echo '<option value="gras">gras</option>';
echo '<option value="cesar">cesar</option>';
echo '<option value="plateforme">plateforme</option>';
echo '</select> ';
echo '<button type="submit">OK</button>';
echo '</form>';

// Fonction gras : mots commençant par une majuscule -> entourés de <b></b>
function gras($str){
    $out=""; $i=0; $len=0; while(isset($str[$len])){ $len=$len+1; }
    $mot=""; $inWord=false;
    $flush = function(&$out,&$mot){ if($mot!==''){ $out.=$mot; $mot=''; } };
    while($i<$len){
        $ch = $str[$i];
        $isLetter = ($ch>='a'&&$ch<='z')||($ch>='A'&&$ch<='Z');
        if($isLetter){
            if(!$inWord){ // début de mot
                $inWord=true; $start=$i; $mot=""; // collecter le mot
                // détecter majuscule
                $up = $ch; if($up>='a'&&$up<='z'){ $up = chr(ord($up)-32); }
                $firstUpper = ($ch>='A'&&$ch<='Z');
                // collecter complet
                while($i<$len){
                    $ch2 = $str[$i];
                    $isL = ($ch2>='a'&&$ch2<='z')||($ch2>='A'&&$ch2<='Z');
                    if(!$isL) break; $mot.=$ch2; $i=$i+1;
                }
                if($firstUpper){ $out.='<b>'.$mot.'</b>'; } else { $out.=$mot; }
                $inWord=false; continue; // déjà avancé i
            }
        } else {
            $out.=$ch; $i=$i+1;
        }
    }
    return $out;
}

// Fonction cesar : décale chaque lettre (a-z, A-Z)
function cesar($str,$decalage){
    $out=""; $i=0; $len=0; while(isset($str[$len])){ $len=$len+1; }
    // normaliser decalage
    if($decalage<0){ $decalage = -$decalage; } // simple
    while($i<$len){
        $ch=$str[$i];
        if(($ch>='a'&&$ch<='z')||($ch>='A'&&$ch<='Z')){
            $isLower = ($ch>='a'&&$ch<='z');
            $base = $isLower ? ord('a') : ord('A');
            $pos = ord($ch)-$base; // 0-25
            $pos = ($pos + $decalage)%26;
            $out .= chr($base+$pos);
        } else {
            $out .= $ch;
        }
        $i=$i+1;
    }
    return $out;
}

// Fonction plateforme : ajoute _ aux mots finissant par me
function plateforme($str){
    $out=""; $i=0; $len=0; while(isset($str[$len])){ $len=$len+1; }
    while($i<$len){
        // sauter espaces successifs
        if($str[$i]==' '){ $out.=' '; $i=$i+1; continue; }
        // collecter un mot
        $mot=""; while($i<$len && $str[$i] != ' '){ $mot.=$str[$i]; $i=$i+1; }
        // vérifier terminaison "me"
        $mLen=0; while(isset($mot[$mLen])){ $mLen=$mLen+1; }
        if($mLen>=2 && $mot[$mLen-2]=='m' && $mot[$mLen-1]=='e'){ $mot .= '_'; }
        $out.=$mot; if($i<$len && $str[$i]==' ') { /* espace repris boucle */ }
    }
    return $out;
}

if(isset($_POST['str']) && isset($_POST['fonction'])){
    $texte = $_POST['str'];
    $f = $_POST['fonction'];
    $res = '';
    if($f==='gras'){ $res = gras($texte); }
    else if($f==='cesar'){
        $decal=2; if(isset($_POST['decalage'])){ // parser entier simple
            $raw=$_POST['decalage']; $n=0; $sgn=1; $k=0; if(isset($raw[0]) && $raw[0]=='-'){ $sgn=-1; $k=1; }
            while(isset($raw[$k]) && $raw[$k]>='0' && $raw[$k]<='9'){ $n=$n*10 + (ord($raw[$k])-48); $k=$k+1; }
            $decal = $n*$sgn; if($decal<0){ $decal = ($decal%26+26)%26; }
        }
        $res = cesar($texte,$decal);
    }
    else if($f==='plateforme'){ $res = plateforme($texte); }

    echo '<br>'.$res.'</div>';
}
?>