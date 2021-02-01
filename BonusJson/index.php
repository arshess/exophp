<?php
require('./controller.php');
if(isset($_GET['action'])){
    switch ($_GET['action']) {
        case 'form':
            accueil();
            break;
        case 'galerie':
        galerie();
            break;
        default:
            accueil();
            break;
    }
}else{
    accueil();
}
