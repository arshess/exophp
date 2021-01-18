<?php
$date = new DateTime("2016-05-16");

$today = new DateTime(date("Y-m-d"));

$interval = date_diff($today,$date, true);
$interval = $interval->format('%R%a days');
echo "<p> Entre aujourd'hui et le 16 mai 2016, il s'est passé : " . $interval ." jours</p>" ;



?>