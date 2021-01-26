<?php
if(isset($_POST["submit"])){
    setcookie("id",$_POST["input_Identifiant"], time()-600);
    setcookie("password",$_POST["input_Password"], time()-600);

die();
    setcookie("id",$_POST["input_Identifiant"], time()+600);
    setcookie("password",$_POST["input_Password"], time()+600);
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
    <form action="" method="post" class="container col-6">
    <label for="inputidentifiant">Identifiant</label>
    <input type="text" class="form-control my-3" name="input_Identifiant" required>
    <label for="inputpassword">Mot de passe : </label>
    <input class="form-control my-3" type="password" name="input_Password" required>
    <input class="btn btn-success my-3" type="submit" name="submit" id="submit" value="Zou !">
    </form>
</body>
</html>
