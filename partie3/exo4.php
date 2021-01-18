<?php
$var = 1;
while ($var < 10) {
    echo "<p>".$var."</p>";
    $var += $var/2; 
}
echo "<p>".$var."</p>";
?>