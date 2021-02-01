<?php 
ob_start();
?>
<h1>Félicitations <?=$input['FirstName']?></h1>
<p>Felicitations, tu as réussi a remplir ce formulaire, LE formulaire ultime qui déchire !</p>
<h3>Voilà, au pif, des infos que tu as indiqué : </h3>
<p>Nom : <?=$input['LastName']?></p>
<p>Date de naissance : <?=$input['BirthDay']?> dans ce beau pays qu'est <?=$input['BirthPlace']?></p>
<p>Tu habites au : <?= $input['NumRue']. ' ' . $input['Rue']?>, situé à <?=$input['City']?></p>
<p>Voilà pourquoi tu aimes ce super héros : </p>
<p><?=$input['SuperHero']?></p>


<?php $content = ob_get_clean();

require('./vue/gabarit.php');