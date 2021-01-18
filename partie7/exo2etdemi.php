<?php
 
session_start();

echo "<p> Nom : " . $_SESSION["lastname"] . "</p>";
echo "<p> Prénom : " . $_SESSION["firstname"] . "</p>";
echo "<p> Age : " . $_SESSION["age"] . "</p>";


?>