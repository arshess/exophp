<?php    
function accueil(){

    if(isset($_POST['submit'])){
        $uploadedfile = $_FILES['inputFile'];        
        //on recupère l'extension
        $ext = pathinfo($_FILES['inputFile']['name']);
        $ext = strtolower($ext['extension']);
        // autre version
        // $i= strrpos($uploadedfile['name'],".");
        // $basename= substr($uploadedfile['name'],0,$i);
        // $ext = substr($uploadedfile['name'],$i+1, strlen($uploadedfile['name']));

        
        //on vérifie si c'est bien une image
        $extensions = ['jpg','jpeg','gif','png','webp','bmp','tiff'];
        $type_mime = ['image/jpeg','image/png','image/gif','image/webp','image/bmp','image/tiff'];
        if((in_array($uploadedfile['type'],$type_mime)==true) && (in_array($ext,$extensions)==true)){
            //on récupère le nombre de fichier dans le dossier upload pour le rename
            //si moins de 10 fichier, on ajoute un 0 devant pour éviter les soucis de Tri de tableau;
            if(count(scandir("./upload/"))<10)
            {
                $name = '0'. count(scandir("./upload/"));
            }else{
                $name = count(scandir("./upload/"));
            }                
            $tmp_name = $uploadedfile["tmp_name"];
            $target_file = "./upload/".$name.".".$ext;
            // on tente d'envoyer le fichier renommer dans le bon dossier
            if(move_uploaded_file($tmp_name, $target_file)){
                addJson($name.".".$ext);
                require('./vues/vuecarrousel.php');
            }
            else{
                $erreur = '<span class="alert alert-warning">Erreur lors de l\'upload</span>';
                require('./vues/vueform.php');                  
            }
        }
        else
        {
            $erreur = '<span class="alert alert-warning">Veuillez choisir un fichier de type image</span>';
            require('./vues/vueform.php');
        }
    }else{
        require('./vues/vueform.php');    
    }       
}
function galerie(){
    require('./vues/vuecarrousel.php');
}
function getImages(){
    $fp = fopen('images.json','r+');
    $json = fread($fp,530000);
    $json = json_decode($json,true);
    return $json;
}
function addJson($name){
    $fp = fopen('images.json','r+');
    $json = fread($fp,530000);
    if($json==null){
        $json =[];
    }
    $json = json_decode($json,true);
    array_push($json,array('name'=>$name));
    $json = json_encode($json);
    rewind($fp);
    fputs($fp,$json);
    fclose($fp);
}