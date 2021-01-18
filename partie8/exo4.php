<?php
$date = new DateTime("2016-08-02 15:00:00");
echo "<p> Le timestamp du jour est : " . time() ."</p>" ;
echo "<p> Le timestamp du mardi 2 août 2016 à 15h00 est : " . date_timestamp_get($date) ."</p>" ;


?>