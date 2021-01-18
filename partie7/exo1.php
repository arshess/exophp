<?php
echo "<p>Votre navigateur a pour \"signature\":</p>".
     htmlEntities($_SERVER["HTTP_USER_AGENT"]);
echo "<p>Votre Adresse ip est : </p>". $_SERVER['REMOTE_ADDR'];
echo "<p>Le nom du serveur est : </p>". $_SERVER['SERVER_NAME'];
?>