<?php
ob_start();
$images = getImages();
?>

<p class="fs-4 text">Maintenant que tout est upload, profites de la vue</p>

<?php if($images==null){?>
<p class="text-center text-dark fs-6">Erreur, aucune image uploadée. fais le necessaire</p>
<img src="https://media1.tenor.com/images/a0b3df7d108d6c497d9895c84072ba5b/tenor.gif" alt="smiley triste">
<?php }else{ ?>
<div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php for ($i=0; $i < count($images); $i++) {
      if($i==0){
        $active ='active';
      }
      else{
        $active=null;
      }
      ?>
      <div class="carousel-item <?=$active??''?>">
        <img src="upload/<?=$images[$i]['name']?>" class="d-block w-100" alt="image carroussel">
      </div>
    <?php } ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
</div>
<?php }
$contenu = ob_get_clean();
// require('vuegabarit.php');
require('./vues/vuegabarit.php');