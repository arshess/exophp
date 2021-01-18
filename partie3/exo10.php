<?php
$rand = rand(0,30);
echo "le chiffre random est ".$rand;
for ($i=0 ; $i < 100  ; $i++ ) { 

    if($i==$rand)
        break;
    echo "<p>".$i."</p>";
}
?>