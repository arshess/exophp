<?php
session_start();
if(isset($_COOKIE['firstName'])){
    if(isset($_GET['action'])){
        switch ($_GET['action']) {
            case 'lovers':
                require_once('./controllers/lovers_controller.php');
                lovers();
                break;
            case 'user':
                require_once('./controllers/user_controller.php');
                user();
                break;
            default:
                require_once('./controllers/index_controller.php');
                accueil();
                break;
        }
    }else{
        require_once('./controllers/lovers_controller.php');
        lovers();
    }
}else{
    require_once('./controllers/index_controller.php');
    accueil();
}