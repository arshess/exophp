<?php
$date = new DateTime("2016-02-01");

$today = new DateTime(date("2016-03-01"));

$interval = date_diff($today,$date, true);
$interval = $interval->format('%R%a');
echo "<p> Au mois de février 2016, il y avait " . $interval ." jours</p>" ;

?>