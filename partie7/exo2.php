<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $_SESSION["lastname"] = "A";
    $_SESSION["firstname"] = "jeremy";
    $_SESSION["age"] = 33;    
    ?>
    <a href="./exo2etdemi.php">coucou</a>
</body>
</html>