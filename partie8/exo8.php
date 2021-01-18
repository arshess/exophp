<?php

$newdate = mktime(0, 0, 0, date("m")  , date("d")-22, date("Y"));
echo "Dans 20 jours nous serons le : ". date("Y-m-d",$newdate);

?>