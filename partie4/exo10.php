<?php 
function facto($nb){
    $result=0;
    if ($nb==0) 
    return 1;
    $result = $nb*facto($nb-1);
    return $result;
    
}

echo facto((int)100);
?>