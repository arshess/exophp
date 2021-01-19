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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
    <style>
    body{
        background : #4E69B3;
    }
    .calendar{
        min-height : 300px;
    }
    .alert-success{
        background : #A6B0D8;
    }
    .alert-warning{
        background : #B56A52;
    }
    .btn{
        background : #E17E9D;
    }
    input{
        background : #F8F8F6;
    }
    
    </style>
</head>
<body>
    <form action="" method="post" class="container row col-6 offset-3">
    <div class="col-11">
        <label class="fw-bold" for="inputmonth">Mois :</label>
        <select name="inputmonth" id="inputmonth" class="form-select">
            <option <?php if($month=="01") echo " selected ";?>value="01">janvier</option>
            <option <?php if($month=="02") echo " selected ";?>value="02">fevrier</option>
            <option <?php if($month=="03") echo " selected ";?>value="03">mars</option>
            <option <?php if($month=="04") echo " selected ";?>value="04">avril</option>
            <option <?php if($month=="05") echo " selected ";?>value="05">mai</option>
            <option <?php if($month=="06") echo " selected ";?>value="06">juin</option>
            <option <?php if($month=="07") echo " selected ";?>value="07">juillet</option>
            <option <?php if($month=="08") echo " selected ";?>value="08">aout</option>
            <option <?php if($month=="09") echo " selected ";?>value="09">septembre</option>
            <option <?php if($month=="10") echo " selected ";?>value="10">octobre</option>
            <option <?php if($month=="11") echo " selected ";?>value="11">novembre</option>
            <option <?php if($month=="12") echo " selected ";?>value="12">décembre</option>       
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
        <input class="truc h-75 my-1 btn fw-bold text-white" name="submit" type="submit" value="Generate">
    <br/>
    </div>    
    </form>
    <!-- calendar -->
    <div class="container">

    <?php
    if(isset($_POST['submit'])){?>

    <h1 class="text-center text-white fw-bold my-3">Calendrier de <?=tradDate($mois) . " " . $year?></h1>

    <div class="row text-white fw-bold">
        <div class="col">lundi</div>
        <div class="col">mardi</div>
        <div class="col">mercredi</div>
        <div class="col">jeudi</div>
        <div class="col">vendredi</div>
        <div class="col">samedi</div>
        <div class="col">dimanche</div>
    </div>
    <div class="row col-12 shadow calendar">
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
                echo "<div class='col alert-warning text-right'>" . $day . "</div>";
            }
        }
        //cases du mois à la con
        echo "<div class='col alert-success'>".$i."</div>";
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
                echo "<div class='col alert-warning text-right'>" . $day . "</div>";
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
