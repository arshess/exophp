<?php
function compare($nb1,$nb2){
    $nb1 = intval($nb1);
    $nb2 = intval($nb2);
    if($nb1>$nb2){
        return "le premier nombre est plus grand";
    }
    if($nb1<$nb2){
        return "le deuxième nombre est plus grand";
    }
    if($nb1==$nb2){
        return "les deux nombres sont identiques";
    }
}

echo compare("chocolat",2);


?>