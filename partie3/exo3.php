<?php
$var1 = 100;
$var2 = rand(1,100);
while($var1>=10){
    echo "<p>".$var1." x ". $var2."= ". $var1*$var2."</p>";
    $var1--;
}
?>