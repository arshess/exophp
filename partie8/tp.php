<?php
if(isset($_POST["submit"])){
    $month = $_POST["inputmonth"];
    $year = $_POST["inputyear"];
    $firstday =  date("l", mktime(0,0,0,$month,1,$year));
    //jour 0 du prochain mois = dernier jour du mois d'avant
    $lastday =  date("l", mktime(0,0,0,$month+1,0,$year));
    $daycount =  date("d", mktime(0,0,0,$month+1,0,$year));
    $mois = date("F", mktime(0,0,0,$month,1,$year));
    $dayZ = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
}
else{
    $month="09";
    $year="1987";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet"> 
     
    <style>
    body{
        background : #4E69B3;
    }
    .case{
        height : 60px;
        background : #A6B0D8;
    }
    .horsmois{
        background : #B56A52;
    }
    .btn{
        background : #E17E9D;
    }
    input{
        background : #F8F8F6;
    }
    .horsmois{
        opacity : 0.80;
        
    }
    h1, .calendar, .entetetableau{
        font-family: 'Hachi Maru Pop', cursive;
    }

    .calendar{
        border-radius : 10px;
        color : #F8F8F6;
        
    }
    .calendar .row:first-child div:nth-child(1){
        border-radius : 10px 0 0 0;
    }
    .calendar .row:first-child div:nth-child(7){
        border-radius : 0 10px 0 0;
    }
    .calendar .row:last-child div:nth-child(1){
        border-radius : 0 0 0 10px;
    }
    .calendar .row:last-child div:last-child{
        border-radius : 0 0 10px 0;
    }
    </style>
</head>
<body>
    <form action="" method="post" class="container row col-6 offset-3">
    <div class="col-11">
        <label class="fw-bold" for="inputmonth">Mois :</label>
        <select name="inputmonth" id="inputmonth" class="form-select">
            <option <?php if($month=="01") echo " selected ";?>value="01">Janvier</option>
            <option <?php if($month=="02") echo " selected ";?>value="02">Fevrier</option>
            <option <?php if($month=="03") echo " selected ";?>value="03">Mars</option>
            <option <?php if($month=="04") echo " selected ";?>value="04">Avril</option>
            <option <?php if($month=="05") echo " selected ";?>value="05">Mai</option>
            <option <?php if($month=="06") echo " selected ";?>value="06">Juin</option>
            <option <?php if($month=="07") echo " selected ";?>value="07">Juillet</option>
            <option <?php if($month=="08") echo " selected ";?>value="08">Août</option>
            <option <?php if($month=="09") echo " selected ";?>value="09">Septembre</option>
            <option <?php if($month=="10") echo " selected ";?>value="10">Octobre</option>
            <option <?php if($month=="11") echo " selected ";?>value="11">Novembre</option>
            <option <?php if($month=="12") echo " selected ";?>value="12">Décembre</option>       
        </select>
        <label class="fw-bold" for="inputyear">Année :</label>
        <select name="inputyear" id="inputyear" class="form-select">
        <?php 
            for ($i=1969 ; $i <= 2020; $i++ ) {
                $tmp = "<option";
                if($i==$year){
                    $tmp = $tmp." selected";
                }
                $tmp = $tmp." value='". $i ."'>".$i."</option>";
                echo $tmp;
            }    
        ?>
        </select>    
    </div>
    <div class="col-1 ">  
    <br/>
        <input class="truc h-75 my-1 btn fw-bold  text-white" name="submit" type="submit" value="Generate">
    <br/>
    </div>    
    </form>
    <!-- calendar -->
    <div class="container row col-8 offset-2">

    <?php
    if(isset($_POST['submit'])){?>

    <h1 class="text-center text-white fw-bold my-3">Calendrier de <?=tradDate($mois) . " " . $year?></h1>

    <div class="row entetetableau text-white text-end fw-bold">
        <div class="col">Lundi</div>
        <div class="col">Mardi</div>
        <div class="col">Mercredi</div>
        <div class="col">Jeudi</div>
        <div class="col">Vendredi</div>
        <div class="col">Samedi</div>
        <div class="col">Dimanche</div>
    </div>
    <div class="row-fluid col-12 shadow calendar fw-bold text-end">
    <?php
    //pour chaque jour du mois, on affiche une case
    //On utilise une row pour chaque semaine (on l'ouvre le lundi et on la ferme le dimanche).
    for ($i=1; $i <= $daycount; $i++) {  
        //on ouvre la row le lundi ou le premier jour du mois
        if(date("l", mktime(0,0,0,$month,$i,$year))== "Monday" || ($i==1)){
            echo"<div class='row'>";
        }    
        //si on est le premier du mois, on affiche des cases grises jusqu'au bon jour 
        if ($i==1) {
            $j=1;
            $compteuralacon=0;
            //on cherche cb il faut de jour avant le mois pour arriver à lundi
            while (date("l", mktime(0,0,0,$month,$j,$year))!= "Monday") {
                $j--;
                $compteuralacon++;
              
            }
            for ($fk=0; $fk < $compteuralacon ; $fk++) { 
                $day = date("d", mktime(0,0,0,$month,$j,$year));
                $j++;
                echo "<div class='col case horsmois'>" . $day . "</div>";
            }
        }
        //cases du mois
        echo "<div class='col case'>".$i."</div>";
        //on la ferme le dimanche
        if(date("l", mktime(0,0,0,$month,$i,$year))== "Sunday"){
            echo"</div>";
        }
        //Si on est le dernier jour du mois, on affiche des cases grises jusqu'a finir la semaine
        if ($i>=$daycount) {
            if(date("l", mktime(0,0,0,$month,$daycount,$year))== "Sunday"){
                echo"</div>";
            }
            while(date("l", mktime(0,0,0,$month,$daycount,$year))!= "Sunday"){
                $daycount++;
                $day = date("d", mktime(0,0,0,$month,$daycount,$year));
                echo "<div class='col case horsmois'>" . $day . "</div>";
            }
            break;
        }
    }    
    ?>    
    </div>
    <?php }?>
    </div>
</body>
</html>
<?php
function tradDate($date){
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    $date =  str_replace($english_months, $french_months, $date);
    return $date;
}
?>
