<?php
var_dump($_COOKIE);
echo "<p>Hello " . $_COOKIE['id'] . "</p>";
echo "<p>Si j'étais un salaud, je donnerai ton mdp en clair : " . $_COOKIE["password"] . "</p>";

?>