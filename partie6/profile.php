<?php
$img="1.png";
$nom ="";
$prenom = "";
$datenaiss="1970-01-01";
var_dump($_FILES);
if (isset($_POST['nom'])) $nom = $_POST['nom'];
if (isset($_POST['prenom'])) $prenom = $_POST['prenom'];
if (isset($_POST['civilite'])) $civilite = $_POST['civilite'];
if (isset($_POST['inputdatenaiss'])) $datenaiss = $_POST['inputdatenaiss'];
if (isset($_FILES['inputfile'])) $uploadedfile = $_FILES['inputfile'] ;

if (isset($uploadedfile)) {
    $i= strrpos($uploadedfile['name'],".");
    $basename= substr($uploadedfile['name'],0,$i);
    $ext = substr($uploadedfile['name'],$i+1, strlen($uploadedfile['name']));    
    $extensions = ["jpg","jpeg","gif","png","webp"];
    //voir pour ajouter verif MIME
    if(in_array($ext,$extensions)){       
        // $name = md5(rand(1,100000000000));
        $name = count(scandir("./images/"));
        //on fixe le nom d'arrivée du fichier et son nom temporaire sur le serveur
        $target_file = "images/".$name.".".$ext;
        $tmp_name = $_FILES["inputfile"]["tmp_name"];
        if(move_uploaded_file($tmp_name, $target_file)){
            $img=$target_file;
        }else{echo "erreur upload";}
    }
    else{
        die("pas une image");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container alert alert-success">
    <div class="row">
    <h2>Profil</h2>
    </div>
    <div class="row">
        <div class="col-7">
        <form action="">
        <label for="inputnom">Civilité  :</label>
        <input class="form-control me-3" type="text" name="nom" requided id="inputnom" value="<?=$civilite ?>">
        <label for="inputnom">Nom :</label>
        <input class="form-control me-3" type="text" name="nom" requided id="inputnom" value="<?=$nom ?>">
        <label for="inputprenom">Prénom :</label>
        <input class="form-control me-3" type="text" name="prenom" required id="inputprenom" value="<?=$prenom ?>">
        <label for="inputdatenaiss">Date de naissance : </label>
        <input type="date" class="form-control me-3"  name="inputdatenaiss" id="inputdatenaiss"value="<?=$datenaiss ?>"> 
        </form>
        <button class="col-2 btn btn-danger my-3 offset-5">Supression</button>
        </div>
        <div class="col-4 offset-1">
            <img class="col-12 img" src="<?= $img?>" alt="avatar">    
        </div>
    
    </div>
    
    
    </div>
</body>
</html>