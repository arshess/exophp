<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies lovers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
<div class="container containerIndex">    
    <div class="row">
        <!-- Partie gauche -->
        <div class="col-12 col-lg-7 d-flex flex-column align-items-center justify-content-center">
            <p class="aggroAccueil = fs-2">BIENVENUE JEUNE < 3 LOVER < 3</p>
            <p class="sloganAccueil= fs-4">toi aussi tu as faim ?</p>            
        </div>
        <!-- Partie droite -->
        <div class="col-12 col-lg-5 formIndex d-flex flex-column justify-content-center">
            <p class="fs-3">Rejoins dès maintenant nos 20 membres</p>
            <p><?= $e??'' ?></p>
            <form action="index.php" method="post">
                <label for="inputFirstName" class="mt-3 mb-1">Prénom :</label>
                <input type="text" name="inputFirstName" id="inputFirstName" class="form-control" required>
                <label for="inputLastName" class="mt-3 mb-1">Nom :</label>
                <input type="text" name="inputLastName" id="inputLastName" class="form-control" required>
                <label for="inputAge" class="mt-3 mb-1">Age :</label>
                <input type="text" name="inputAge" id="inputAge" class="form-control" required>
                <label for="inputGenre" class="mt-3 mb-1">Genre :</label>
                <select name="inputGenre" id="inputGenre" class="form-select" required>
                    <option value="M">Homme</option>
                    <option value="F">Femme</option>
                    <option value="A">Autre</option>                
                </select>
                <label for="inputPostalCode" class="mt-3 mb-1">Code Postal :</label>
                <input type="text" name="inputPostalCode" id="inputPostalCode" class="form-control" required>
                <label for="inputEmail" class="mt-3 mb-1">Mail :</label>
                <input type="email" name="inputEmail" id="inputEmail" class="form-control" required>
                <label for="inputRecherche" class="mt-3 mb-1">Ton type de recherche</label>
                <select name="inputRecherche" id="inputRecherche" class="form-select" required>
                    <option value="M">Hommes</option>
                    <option value="F" selected>Femmes</option>
                    <option value="B">les deux</option>
                    <option value="A">Autre</option>                
                </select>
                <div class="d-flex justify-content-between flex-wrap">
                    <input type="submit" name="submit" value="Rencontre nos célibataires" class="btn btn-primary fw-bold text-light my-3 col-12 col-md-6">
                    <input type="reset" value="Reset" class="btn btn-warning my-3 col-12 col-md-3 offset-md-2">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="../assets/script.js "></script>
</body>
</html>