<?php ob_start();
?>
<div class="container-fluid">
    <h1>Profil</h1>
    <form action="./index.php" method="post">
    <div class="row">
        <div class="col-2">
            <label for="inputFirstName" class="col col-form-label">Prénom :</label>
        </div>        
        <div class="col-3">
            <input type="text" id="inputFirstName" name="inputFirstName" class="form-control-plaintext" value="<?= $_COOKIE['firstName']??'';?> " readonly >
        </div>
        <div class="col-1"><i data-id="inputFirstName" class=" btnEdit bi bi-pencil-square text-muted form-control-plaintext "></i></div>
    </div>
    <div class="row">
        <div class="col-2">
            <label for="inputLastName" class="col col-form-label">Nom :</label>
        </div>        
        <div class="col-3">
            <input type="text" id="inputLastName" name="inputLastName" class="form-control-plaintext col-3" value="<?= $_COOKIE['lastName']??'';?> " readonly >
        </div>
        <div class="col-1"><i data-id="inputLastName" class="btnEdit bi bi-pencil-square text-muted form-control-plaintext "></i></div>
    </div>
    <div class="row">
        <div class="col-2">
            <label for="inputAge" class="col col-form-label">Âge :</label>
        </div>        
        <div class="col-3">
            <input type="text" id="inputAge" name="inputAge" class="form-control-plaintext col-3" value="<?= $_COOKIE['age']??'';?> " readonly >
        </div>
        <div class="col-1"><i data-id="inputAge" class="btnEdit bi bi-pencil-square text-muted form-control-plaintext "></i></div>
    </div>
    <div class="row">
        <div class="col-2">
            <label for="inputGenre" class="col col-form-label">Genre :</label>
        </div>        
        <div class="col-3">
            <input type="text" id="inputGenre" name="inputGenre" class="form-control-plaintext col-3" value="<?= $_COOKIE['genre']??'';?> " readonly >
        </div>
        
    </div>
    <div class="row">
        <div class="col-2">
            <label for="inputPostalCode" class="col col-form-label">Code Postal :</label>
        </div>        
        <div class="col-3">
            <input type="text" id="inputPostalCode" name="inputPostalCode" class="form-control-plaintext col-3" value="<?= $_COOKIE['postalCode']??'';?> " readonly >
        </div>
        <div class="col-1"><i data-id="inputPostalCode" class="btnEdit bi bi-pencil-square text-muted form-control-plaintext "></i></div>
    </div>
    <div class="row">
        <div class="col-2">
            <label for="inputEmail" class="col col-form-label">Adresse mail :</label>
        </div>        
        <div class="col-3">
            <input type="email" id="inputEmail" name="inputEmail" class="form-control-plaintext col-3" value="<?= $_COOKIE['email']??'';?> " readonly >
        </div>
        <div class="col-1"><i data-id="inputEmail" class="btnEdit bi bi-pencil-square text-muted form-control-plaintext "></i></div>
    </div>
    <div class="row">
        <div class="col-2">
            <label for="inputRecherche" class="col col-form-label">Recherche :</label>
        </div>        
        <div class="col-3">
            <select name="inputRecherche" id="inputRecherche" class="form-select" disabled>
                <option value="H" <?=($_COOKIE['recherche']=='H')?'selected':'';?>>Hommes</option>
                <option value="F" <?=($_COOKIE['recherche']=='F')?'selected':'';?>>Femmes</option>
                <option value="B" <?=($_COOKIE['recherche']=='B')?'selected':'';?>>Les deux</option>
                <option value="A" <?=($_COOKIE['recherche']=='A')?'selected':'';?>>Autre</option>   
            </select>
        </div>
        <div class="col-1"><i data-id="inputRecherche" class="btnEdit bi bi-pencil-square text-muted form-control-plaintext "></i></div>
    </div>
    <button id="btnSaveModif" class="btn btn-primary text-uppercase fw-bold my-3 col-3 text-light">
    <i class="bi bi-save"></i> Enregistrer
    </button>
    <button type="submit" id="btnResetCookies" class="btnResetCookies btn btn-danger text-uppercase fw-bold my-3 col-3 offset-lg-3 text-light">
        <i class="bi bi-trash"></i> EFFACER MES TRACES!
    </button>
    <a href="http://meetic.fr">
        <button type="button" class="btn btn-success text-upparcase fw-bold my-3 text-light"><i class="bi bi-cash-stack"></i> TAKE MY MONEY</button>
    </a>
    </form>
</div>





<?php $contenu = ob_get_clean();
require_once('gabarit.php');