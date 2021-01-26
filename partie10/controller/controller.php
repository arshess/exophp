<?php
    
function accueil(){
    global $countries;
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
        foreach ($input as $key =>$value) {
            $Validate[$key]= VerifForm($key,$value);
            // echo "<p>". $key ."= ". $value ."</p>";
        }
    }
    var_dump($Validate);
    if(isset($err) && array_search('is-invalid',$Validate))
        require('./vue/VueGG.php');
    else
        require('./vue/VueAccueil.php');
}

function VerifForm($key,$value){
    global $countries;
    switch ($key) {
        case 'FirstName':
            if(preg_match(REGEXNAME, $value)){
                $Validate['FirstName']="is-valid";
            }
            else{
                $Validate['FirstName']="is-invalid";
            }
        break;
        case 'LastName':
            if(preg_match(REGEXNAME, $value)){
                $Validate['LastName']="is-valid";
            }
            else{
                $Validate['LastName']="is-invalid";
            }
        break;
        case 'BirthDay':
            if(preg_match(REGEXBIRTHDAY, $value)){
                $Validate['BirthDay']="is-valid";
            }
            else{
                $Validate['BirthDay']="is-invalid";
            }
        break;
        case 'Pays':
            if(in_array($value,$countries)){
                $Validate['BirthPlace']="is-valid";
            }
            else{
                $Validate['BirthPlace']="is-invalid";
            }
        break;
        case 'Nationnalite':
            if(preg_match(REGEXNATIONALITE, $value)){
                $Validate['Nationalite']="is-valid";
            }
            else{
                $Validate['Nationalite']="is-invalid";
            }
        break;
        case 'NumRue':
            if(preg_match(REGEXNUMRUE, $value)){
                $Validate['NumRue']="is-valid";
            }
            else{
                $Validate['NumRue']="is-invalid";
            }
        break;
        case 'Rue':
            if(preg_match(REGEXSTRING, $value)){
                $Validate['Rue']="is-valid";
        
            }
            else{
                $Validate['Rue']="is-invalid";
            }
        break;
        case 'CP':
            if(preg_match(REGEXCP, $value)){
                $Validate['CP']="is-valid";
        
            }
            else{
                $Validate['CP']="is-invalid";
            }
        break;
        case 'City':
            if(preg_match(REGEXSTRING, $value)){
                $Validate['City']="is-valid";        
            }
            else{
                $Validate['City']="is-invalid";
            }
        break;
        case 'Phone':
            if(preg_match(REGEXPHONE, $value)){
                $Validate['Phone']="is-valid";
            }
            else{
                $Validate['Phone']="is-invalid";
            }
        break;
        case 'Mail':
            if(preg_match(REGEXMAIL, $value)){
                $Validate['Mail']="is-valid";
            }
            else{
                $Validate['Mail']="is-invalid";
            }
        break;
        case 'Diplome':
            if(preg_match(REGEXDIPLOME, $value)){
                $Validate['Diplome']="is-valid";
            }
            else{
                $Validate['Diplome']="is-invalid";
            }
        break;
        case 'Anpe':
            if(preg_match(REGEXANPE, $value)){
                $Validate['PoleEmploi']="is-valid";
            }
            else{
                $Validate['PoleEmploi']="is-invalid";       
            }
        break;
        case 'CodecAdemy':
            if(preg_match(REGEXCODECURL, $value)){
                $Validate['CodecUrl']="is-valid";
            }
            else{
                $Validate['CodecUrl']="is-invalid";        
            }
        break;
        case 'BadgeCodec':
            if(preg_match(REGEXBADGE, $value)){
                $Validate['CodecBadge']="is-valid";
            }
            else{
                $Validate['CodecBadge']="is-invalid";        
            }
        break;
        case 'SuperHero':
            if(preg_match(REGEXSTRING, $value)){
                $Validate['Hero']="is-valid";
            }
            else{
                $Validate['Hero']="is-invalid";        
            }
        break;
        case 'Hack':
            if(preg_match(REGEXSTRING, $value)){
                $Validate['Hack']="is-valid";
            }
            else{
                $Validate['Hack']="is-invalid";        
            }
        break;
        case 'Exp':
            if(preg_match(REGEXCHECKBOX, $value)){
                $Validate['Exp']="is-valid";
            }
            else{
                $Validate['Exp']="is-invalid";        
            }
        break;        
        default:
            echo $key;
            break;
    } 
    return $Validate;
}