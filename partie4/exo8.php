<?php
function somme(...$nb){
    $sum=0;
    foreach ($nb as $key) {
        intval($key);
        $sum+=$key;
    }
    return $sum;
}

echo somme(1,2,3,5,6);
?>