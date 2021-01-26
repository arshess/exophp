<?php 
ob_start();
?>
<h1>Félicitations</h1>
<p>Felicitations, tu as réussi a remplir ce formulaire, LE formulaire ultime qui déchire !</p>
<?php $content = ob_get_clean(); 
require('./vue/gabarit.php');