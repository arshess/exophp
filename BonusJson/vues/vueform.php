<?php
ob_start()?>

<form action="./index.php" method="post" enctype="multipart/form-data">
        <label for="inputFile">Veuillez choisir une image a televerser : </label>
        <input type="file" name="inputFile" class="form-control my-3" id="inputFile">
        <p><?=$erreur??'';?></p>
        <div class="d-flex justify-content-end"><input type="reset" value="Reset" class="btn btn-warning me-2 col-1">
        <input type="submit" name="submit" class="btn btn-primary fw-bold col-3" value="UUPPLOOOAAADDD!!!!"></div>        
</form>
<?php $contenu = ob_get_clean();
require('./vues/vuegabarit.php');
