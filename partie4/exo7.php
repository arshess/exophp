<?php

function euuuhhhh($age,$gender){
switch ($gender) {
    case 'Homme':
        if($age>=18){
            return "Vous êtes homme un et vous êtes majeur";
        }else{
            return "Vous êtes un homme et vous êtes mineur";
        }
        break;
    case 'Femme':
        if($age>=18){
            return "Vous êtes une femme et vous êtes majeure";
        }else{
            return "Vous êtes une femme et vous êtes majeure";
        }
        break;
    
    default:
        if($age>=18){
            return "vous êtes majeur.e et trop 2020 pour l'énnoncé ☺";
        }else{
            return "vous êtes mineur.e et trop 2020 pour l'énnoncé ☺";
        }
        break;
}}
echo euuuhhhh(17,3);

?>