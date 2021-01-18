<?php
$age;
$gender;

switch ($gender) {
    case 'Homme':
        if($age>=18){
            echo "Vous êtes homme un et vous êtes majeur";
        }else{
            echo "Vous êtes un homme et vous êtes mineur";
        }
        break;
    case 'Femme':
        if($age>=18){
            echo "Vous êtes une femme et vous êtes majeure";
        }else{
            echo "Vous êtes une femme et vous êtes majeure";
        }
        break;
    
    default:
        if($age>=18){
            echo "vous êtes majeur.e et trop 2020 pour l'énnoncé ☺";
        }else{
            echo "vous êtes mineur.e et trop 2020 pour l'énnoncé ☺";
        }
        break;
}

?>