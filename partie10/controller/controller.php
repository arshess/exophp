<?php
    
function accueil(){
    global $countries;
    //si on a submit le form, alors on fais les tests
    if(isset($_POST['submit'])){
        //
        //Prévision Ajax => rajouter des issets pour chaque verif => faire l'ajax
        //
        //variables plus courtes
        $input['FirstName'] = ucfirst(htmlentities(trim($_POST['inputfirstname'])));
        $input['LastName'] = ucfirst(htmlentities(trim($_POST['inputlastname'])));
        $input['BirthDay'] = htmlentities(trim($_POST['inputbirthday']));
        $input['Pays'] = htmlentities(trim($_POST['inputcountry']));
        $input['Nationnalite'] = htmlentities(trim($_POST['inputnationalite']));
        $input['NumRue'] = htmlentities(trim($_POST['inputnumrue']));
        $input['Rue'] = htmlentities(trim($_POST['inputrue']));
        $input['CP'] = htmlentities(trim($_POST['inputCP']));
        $input['City'] = ucfirst(htmlentities(trim($_POST['inputcity'])));
        $input['Phone'] = htmlentities(trim($_POST['inputphone']));
        $input['Mail'] = htmlentities(trim($_POST['inputmail']));
        $input['Diplome'] = htmlentities(trim($_POST['inputdiplome']));
        $input['Anpe'] = htmlentities(trim($_POST['inputanpe']));
        $input['CodecAdemy'] = htmlentities(trim($_POST['inputcodecademy']));
        $input['BadgeCodec'] = htmlentities(trim($_POST['inputbadge']));
        $input['SuperHero'] = htmlentities(trim($_POST['inputsuperhero']));
        $input['Hack'] = htmlentities(trim($_POST['inputhack']));
        $input['Exp'] = htmlentities(trim($_POST['inputexp']));
        //tests
        $Validate= VerifForm($input);

    }else{
        $input['FirstName'] = '';
        $input['LastName'] = '';
        $input['BirthDay'] = '';
        $input['Pays'] = 'France';
        $input['Nationnalite'] = '';
        $input['NumRue'] = '';
        $input['Rue'] = '';
        $input['CP'] = '';
        $input['City'] = '';
        $input['Mail'] = '';
        $input['Phone'] = '';
        $input['Diplome'] = '';
        $input['Anpe'] = '';
        $input['CodecAdemy'] = '';
        $input['BadgeCodec'] = '';
        $input['SuperHero'] = '';
        $input['Hack'] = '';
        $input['Exp'] = 'Caramba';
        $Validate['BirthDay']='';
        $Validate['BirthPlace']='';
        $Validate['City']='';
        $Validate['CodecBadge']='';
        $Validate['NumRue']='';
        $Validate['Rue']='';
        $Validate['CodecUrl']='';
        $Validate['CP']='';
        $Validate['Diplome']='';
        $Validate['Exp']="";
        $Validate['FirstName']='';
        $Validate['LastName']='';
        $Validate['Nationalite']='';
        $Validate['Mail']='';
        $Validate['Phone']='';
        $Validate['PoleEmploi']='';
        $Validate['Hero']='';
        $Validate['Hack']='';
    }
    // var_dump($BirthDay);
    if(isset($err) && array_search('is-invalid',$Validate))
        require('./vue/VueGG.php');
    else
        require('./vue/VueAccueil.php');
}

function VerifForm($input){
    global $countries, $err;
    if(preg_match(REGEXNAME, $input['FirstName'])){
        $Validate['FirstName']="is-valid";
    }
    else{
        $Validate['FirstName']="is-invalid";
    }
    if(preg_match(REGEXNAME, $input['LastName'])){
        $Validate['LastName']="is-valid";
    }
    else{
        $Validate['LastName']="is-invalid";
    }
    if(preg_match(REGEXBIRTHDAY, $input['BirthDay'])){
        $Validate['BirthDay']="is-valid";
    }
    else{
        $Validate['BirthDay']="is-invalid";
    }
    if(in_array($input['Pays'],$countries)){
        $Validate['BirthPlace']="is-valid";
    }
    else{
        $Validate['BirthPlace']="is-invalid";
    }
    if(preg_match(REGEXNATIONALITE, $input['Nationnalite'])){
        $Validate['Nationalite']="is-valid";
    }
    else{
        $Validate['Nationalite']="is-invalid";
    }
    if(preg_match(REGEXNUMRUE, $input['NumRue'])){
        $Validate['NumRue']="is-valid";
    }
    else{
        $Validate['NumRue']="is-invalid";
    }
    if(preg_match(REGEXSTRING, $input['Rue'])){
        $Validate['Rue']="is-valid";

    }
    else{
        $Validate['Rue']="is-invalid";
    }
    if(preg_match(REGEXCP, $input['CP'])){
        $Validate['CP']="is-valid";

    }
    else{
        $Validate['CP']="is-invalid";
    }
    if(preg_match(REGEXSTRING, $input['City'])){
        $Validate['City']="is-valid";

    }
    else{
        $Validate['City']="is-invalid";
    }
    if(preg_match(REGEXPHONE, $input['Phone'])){
        $Validate['Phone']="is-valid";

    }
    else{
        $Validate['Phone']="is-invalid";
    }
    if(preg_match(REGEXMAIL,$input['Mail'])){        
        $Validate['Mail']="is-valid";
    }
    else{
        $Validate['Mail']="is-invalid";
    }
    if(preg_match(REGEXDIPLOME, $input['Diplome'])){
        $Validate['Diplome']="is-valid";
    }
    else{
        $Validate['Diplome']="is-invalid";
    }
    if(preg_match(REGEXANPE, $input['Anpe'])){
        $Validate['PoleEmploi']="is-valid";
    }
    else{
        $Validate['PoleEmploi']="is-invalid";       
    }
    if(preg_match(REGEXCODECURL, $input['CodecAdemy'])){
        $Validate['CodecUrl']="is-valid";
    }
    else{
        $Validate['CodecUrl']="is-invalid";        
    }
    if(preg_match(REGEXBADGE, $input['BadgeCodec'])){
        $Validate['CodecBadge']="is-valid";
    }
    else{
        $Validate['CodecBadge']="is-invalid";        
    }
    if(preg_match(REGEXSTRING, $input['SuperHero'])){
        $Validate['Hero']="is-valid";
    }
    else{
        $Validate['Hero']="is-invalid";        
    }
    if(preg_match(REGEXSTRING, $input['Hack'])){
        $Validate['Hack']="is-valid";
    }
    else{
        $Validate['Hack']="is-invalid";        
    }
    if(preg_match(REGEXCHECKBOX, $input['Exp'])){
        $Validate['Exp']="is-valid";
    }
    else{
        $Validate['Exp']="is-invalid";        
    }
    return $Validate;
}