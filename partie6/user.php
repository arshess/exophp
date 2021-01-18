<?php

if (isset($_GET['nom']) ||isset($_GET['prenom']) ) {
    echo "<p>formulaire en method GET</p>
    <p> nom = " . $_GET['nom'] . "</p>
    <p> prénom = " . $_GET['prenom'] . "</p>";
}
if (isset($_POST['nom'])||isset($_POST['prenom'])) {
    echo "<p>formulaire en method POST</p>
    <p> nom = " . $_POST['nom'] . "</p>
    <p> prénom = " . $_POST['prenom'] . "</p>";
}


?>
