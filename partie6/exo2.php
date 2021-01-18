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
        <form action="./user.php" method="post">
            <label for="inputnom">Nom :</label>
            <input class="form-control m-3" type="text" name="nom" id="inputnom">
            <label for="inputprenom">Prénom :</label>
            <input class="form-control m-3" type="text" name="prenom" id="inputprenom">
            <input class="btn btn-primary m-3" type="submit" value="Zou ! ">    
        </form> 
    </main>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>