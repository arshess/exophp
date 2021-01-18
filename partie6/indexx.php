<?php
// on init les variables pour éviter erreur quand fort vide.
$nom="";
$prenom="";
$civilite="";
$basename= "";
$ext= "";
// si variables $get existent et sont 
if (isset($_GET['nom'])) $nom = $_GET['nom'];
if (isset($_GET['prenom'])) $prenom = $_GET['prenom'] ;
if (isset($_GET['civilite'])) $civilite = $_GET['civilite'] ;
if (isset($_GET['inputfile'])) $uploadedfile = $_GET['inputfile'] ;

if (isset($_POST['nom'])) $nom = $_POST['nom'];
if (isset($_POST['prenom'])) $prenom = $_POST['prenom'];
if (isset($_POST['civilite'])) $civilite = $_POST['civilite'];
if (isset($_POST['inputfile'])) $uploadedfile = $_POST['inputfile'] ;
if (isset($uploadedfile)) {
    $i= strrpos($uploadedfile,".");
    $basename= substr($uploadedfile,0,$i);
    $ext = substr($uploadedfile,$i+1, strlen($uploadedfile));
    if($ext != "pdf" || $ext!= "PDF"){
        $basename = "Erreur, veuillez envoyer un pdf";
        $ext="";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <main class="container row col-6 offset-3">
        <form id="fortm" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="inputcivilite">Civilité</label>
            <select class="form-control m-3" name="civilite" id="inputcivilite" required>
                <option <?php if($civilite=="Madame") echo " selected ";?> value="Madame">Madame</option>
                <option <?php if($civilite=="Monsieur") echo " selected ";?>value="Monsieur">Monsieur</option>
                <option <?php if($civilite=="Autre") echo " selected ";?>value="Autre">Autre</option>   
            </select>
            <label for="inputnom">Nom :</label>
            <input class="form-control m-3" type="text" name="nom" requided id="inputnom" value="<?=$nom ?>">
            <label for="inputprenom">Prénom :</label>
            <input class="form-control m-3" type="text" name="prenom" required id="inputprenom" value="<?=$prenom ?>">
            <label for="inputfile">Fichier :</label>
            <input class="form-control  m-3 " type="file" name="inputfile" required id="inputfile">
            <div class="input-group m-3">
                <span  class="input-group-text" id="basename">BaseName</span>
                <input class="form-control" aria-describedby="basename" type="text" name="" disabled id="inputuploadedfile" value="<?=$basename ?>">
            </div>
            <div class="input-group m-3">
                <span class="input-group-text" id="basic-addon3">Extension </span>
                <input type="text" class="form-control"  aria-describedby="basic-addon3" disabled value="<?=$ext ?>">
            </div>
            

            <input class="btn btn-primary m-3" type="submit" value="Zou ! ">
            <button class="btn btn-secondary m-3" id="btnreset" name="btnreset" onclick="resete()" type="button">reset</button>
        </form> 
    </main>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
     <script>
    function resete(){
        document.getElementById("inputnom").value="";
        document.getElementById("inputprenom").value="";
        document.getElementById("inputcivilite").value="";
    }  
    </script>
</body>
</html>