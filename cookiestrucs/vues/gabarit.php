<?php 
if (isset($_SESSION['firstName'])) {
    $firstName = $_SESSION['firstName'];
}elseif (isset($_COOKIE['firstName'])) {
    $firstName = $_COOKIE['firstName'];
}else{
    $firstName = 'à toi !';
}
?>
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
    <div class="container pt-3">
        <header class="row">
            <h1 class="col-6 offset-3 text-center my-3">Cookies lovers</h1>
        </header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-1">
            <ul class="navbar-nav d-flex justify-content-between col-12">
                <li class="nav-item col-3"><span class="nav-link fw-bold">Bienvenue <?=$firstName;?></span></li>
                <li class="nav-item offset-6 col"><a href="./index.php?action=lovers" class="nav-link">Nos célibataires</a></li>
                <li class="nav-item col"><a href="./index.php?action=user" class="nav-link">Mes informations</a></li>
            </ul>
        </nav>
        <main class="bg-light">
            <?=$contenu?>
        
        </main>        
    </div>
    <footer class=" col-12 bg-light text-center">
        <p>Arshess &copy 2021</p>
        <p>Aucun cookie n'a été maltraité durant le développement.</p>
        </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="./assets/script.js "></script>
</body>
</html>