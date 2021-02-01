<?php    
function accueil(){
    $init=true;
    global $countries;
    //init variables
    $input['FirstName'] = '';
    $input['LastName'] = '';
    $input['BirthDay'] = '';
    $input['BirthPlace'] = 'France';
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
    $Validate['BadgeCodec']='';
    $Validate['NumRue']='';
    $Validate['Rue']='';
    $Validate['CodecAdemy']='';
    $Validate['CP']='';
    $Validate['Diplome']='';
    $Validate['Exp']="";
    $Validate['FirstName']='';
    $Validate['LastName']='';
    $Validate['Nationnalite']='';
    $Validate['Mail']='';
    $Validate['Phone']='';
    $Validate['Anpe']='';
    $Validate['SuperHero']='';
    $Validate['Hack']='';
    //si on a submit le form, alors on fais les tests
    if(isset($_POST['submit'])){     
        //variables plus courtes
        $init=0;
        $input['FirstName'] = ucfirst(htmlentities(trim($_POST['inputFirstName'])));
        $input['LastName'] = ucfirst(htmlentities(trim($_POST['inputLastName'])));
        $input['BirthDay'] = htmlentities(trim($_POST['inputBirthDay']));
        $input['BirthPlace'] = htmlentities(trim($_POST['inputCountry']));
        $input['Nationnalite'] = htmlentities(trim($_POST['inputNationalite']));
        $input['NumRue'] = htmlentities(trim($_POST['inputNumRue']));
        $input['Rue'] = htmlentities(trim($_POST['inputRue']));
        $input['CP'] = htmlentities(trim($_POST['inputCP']));
        $input['City'] = ucfirst(htmlentities(trim($_POST['inputCity'])));
        $input['Phone'] = htmlentities(trim($_POST['inputPhone']));
        $input['Mail'] = htmlentities(trim($_POST['inputMail']));
        $input['Diplome'] = htmlentities(trim($_POST['inputDiplome']));
        $input['Anpe'] = htmlentities(trim($_POST['inputAnpe']));
        $input['CodecAdemy'] = htmlentities(trim($_POST['inputCodecAdemy']));
        $input['BadgeCodec'] = htmlentities(trim($_POST['inputBadgeCodec']));
        $input['SuperHero'] = htmlentities(trim($_POST['inputSuperHero']));
        $input['Hack'] = htmlentities(trim($_POST['inputHack']));
        $input['Exp'] = htmlentities(trim($_POST['inputExp']));
        //tests
        foreach ($input as $key =>$value) {
            $Validate[$key]= VerifForm($key,$value);
        }
    }

    if($init==true || array_search('is-invalid',$Validate)){
        require('./vue/VueAccueil.php');        
    }
    else{
        //on reconfigure certains champs
        $input['BirthDay']= date('d / M / Y',strtotime($input['BirthDay']));

        require('./vue/VueGG.php');
    }
}

function VerifForm($key,$value){
    global $countries;
    switch ($key) {
        case 'FirstName':
            if(preg_match(REGEXNAME, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'LastName':
            if(preg_match(REGEXNAME, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'BirthDay':
            if(preg_match(REGEXBIRTHDAY, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'BirthPlace':
            if(in_array($value,$countries)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'Nationnalite':
            if(preg_match(REGEXNATIONALITE, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'NumRue':
            if(preg_match(REGEXNUMRUE, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'Rue':
            if(!preg_match(REGEXSTRING, $value)){
                $Validate="is-valid";
        
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'CP':
            if(preg_match(REGEXCP, $value)){
                $Validate="is-valid";
        
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'City':
            if(!preg_match(REGEXCITY, $value)){
                $Validate="is-valid";        
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'Phone':
            if(preg_match(REGEXPHONE, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'Mail':
            if(preg_match(REGEXMAIL, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'Diplome':
            if(preg_match(REGEXDIPLOME, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'Anpe':
            if(preg_match(REGEXANPE, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";       
            }
        break;
        case 'CodecAdemy':
            if(preg_match(REGEXCODECURL, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";        
            }
        break;
        case 'BadgeCodec':
            if(preg_match(REGEXBADGE, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";        
            }
        break;
        case 'SuperHero':
            if(!preg_match(REGEXSTRING, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";        
            }
        break;
        case 'Hack':
            if(!preg_match(REGEXSTRING, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";        
            }
        break;
        case 'Exp':
            if(preg_match(REGEXCHECKBOX, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";        
            }
        break;        
        default:

            break;
    } 
    return $Validate;
}