<?php

// From MySQL to European date:
$mysql_date = '2021‐12‐18';
$euro_date = date('d/m/Y', strtotime($mysql_date));

// From European date to MySQL format date:
$euro_date = '26/12/2011';
list($d,$m,$y) = explode('/',$euro_date);
$mysql_date = "$y‐$m‐$d";
?>