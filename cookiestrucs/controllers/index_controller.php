<?php 
function accueil(){
    if (isset($_POST['submit'])) {
        //verif formulaire
        $firstName = ucfirst(htmlentities(trim($_POST['inputFirstName'])));
        $lastName = ucfirst(htmlentities(trim($_POST['inputLastName'])));
        $age = htmlentities(trim($_POST['inputAge']));
        $genre = htmlentities(trim($_POST['inputGenre']));
        $postalCode = htmlentities(trim($_POST['inputPostalCode']));
        $email = htmlentities(trim($_POST['inputEmail']));
        $recherche = htmlentities(trim($_POST['inputRecherche']));
        switch ($genre) {
            case 'M':
                $genre = 'Homme';
                break;
            case 'F':
                $genre = 'Femme';
                break;
            case 'A':
                $genre = 'Autre';
                break;                        
            default:
            $genre = 'Homme';
                break;
        }

        if (isset($_POST['submit'])) {
            try{
                $_SESSION['firstName'] = $firstName;
                setcookie('firstName',$firstName , time()+86400);
                setcookie('lastName',$lastName ,  time()+86400);
                setcookie('age',$age ,  time()+86400);
                setcookie('genre',$genre ,  time()+86400);
                setcookie('postalCode',$postalCode ,  time()+86400);
                setcookie('email',$email ,  time()+86400);
                setcookie('recherche',$recherche ,  time()+86400);
                require_once('./controllers/lovers_controller.php');
                lovers();
            }catch(exception $e){
                require_once('./vues/inscription.php');
            }           
        }
    }else{
        require_once('./vues/inscription.php');
    }
}