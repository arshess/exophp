<?php
$picardie = [59=>"nord",62=>"pas de calais", 02=>"aisne", 60=>"oise", 80=>"somme"];
foreach ($picardie as $dept => $value) {
   echo "<p>Le département " . $value . " a le numéro " . $dept . "</p>";
}
?>