<?php
global $countries;
require('../utils/regex.php');

$key = htmlspecialchars(array_key_first($_GET));
$value = htmlspecialchars($_GET[$key]);
// var_dump($key);
if($key=='inputExpY'|| $key=='inputExpN'){
    $key = 'inputExp';
}
echo VerifForm($key,$value);



function VerifForm($key,$value){
    global $countries;
    switch ($key) {
        case 'inputFirstName':
            if(preg_match(REGEXNAME, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'inputLastName':
            if(preg_match(REGEXNAME, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'inputBirthDay':
            if(preg_match(REGEXBIRTHDAY, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'inputBirthPlace':
            if(in_array($value,$countries)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'inputNationalite':
            if(preg_match(REGEXNATIONALITE, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'inputNumRue':
            if(preg_match(REGEXNUMRUE, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'inputRue':
            if(!preg_match(REGEXSTRING, $value)){
                $Validate="is-valid";
        
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'inputCP':
            if(preg_match(REGEXCP, $value)){
                $Validate="is-valid";
        
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'inputCity':
            if(!preg_match(REGEXCITY, $value)){
                $Validate="is-valid";        
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'inputPhone':
            if(preg_match(REGEXPHONE, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'inputMail':
            if(preg_match(REGEXMAIL, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'inputDiplome':
            if(preg_match(REGEXDIPLOME, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";
            }
        break;
        case 'inputAnpe':
            if(preg_match(REGEXANPE, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";       
            }
        break;
        case 'inputCodecAdemy':
            if(preg_match(REGEXCODECURL, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";        
            }
        break;
        case 'inputBadgeCodec':
            if(preg_match(REGEXBADGE, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";        
            }
        break;
        case 'inputSuperHero':
            if(!preg_match(REGEXSTRING, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";        
            }
        break;
        case 'inputHack':
            if(!preg_match(REGEXSTRING, $value)){
                $Validate="is-valid";
            }
            else{
                $Validate="is-invalid";        
            }
        break;
        case 'inputExp':
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