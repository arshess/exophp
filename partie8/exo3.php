<?php
//setlocale(LC_ALL, 'fr_FR.utf-8');
$wimg =  775;
$himg = 238;
$date = date("l d F Y");
$date = $date . ". Il est actuellement ". date("H:m:s");
$soleil = date_sun_info(time(), 49.9000000 , 2.3000000);
// var_dump($soleil);
// On remplace les noms des jours et mois en fr

echo "<p>Aujourd'hui nous sommes le " . tradDate($date) . "</p>";

echo "<p>Le soleil se lève à " . date("H:m:s",$soleil["sunrise"]) . " et il se couchera à " . date("H:m:s",$soleil["sunset"]) ."</p>";

if(time()<$soleil['transit']){
    //matin
    $max = $soleil['transit']-$soleil['sunrise'];
    $test = time()-$soleil['sunrise'];
    var_dump($test);
    $testx = ($wimg/2) *(1+($test/100))-$wimg;

    $testy = ($himg-40) *(1+($test/100));
    $test = "transform : translate(". $testx."px,".$testy."px)";
    echo "<p>".$testx."</p>";
    echo "<p>".$testy."</p>";
}
else{
    //aprèsmidi
    $max = $soleil['sunset']-$soleil['transit'];
    $avancement = $soleil['sunset']-time();
    $test = ($avancement*100)/$max;
    var_dump($test);
    $testx = ($wimg/2) *(1-($test/100));

    $testy = ($himg-40) *(1-($test/100));
    $test = "transform : translate(". $testx."px,".$testy."px)";
    echo "<p>".$testx."</p>";
    echo "<p>".$testy."</p>";
}



function tradDate($date){
    $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    $french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    $date =  str_replace($english_months, $french_months, str_replace($english_days, $french_days, $date));
    return $date;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <style>
    #cercle {
        width: 40px;
        height: 40px;
        border-radius: 20px;
        background: yellow;
        position: absolute;
        left : 376px;
        z-index : 0;
        
    }
    .container{
        background : #77b5fe;
        height : 238px;
    }
    img{
        max-height : 100%;
        z-index : 1;
    }
    </style>
</head>
<body>
    <div class="container row col-6">
    <div id="cercle" style="<?=$test?>"></div>
    <img src="https://i.imgur.com/ueB8PAA.png" alt="">
    </div>
    
    
  
</body>
</html>