<?php
$dt = new DateTime();
$h = $dt->format('H');
$i = $dt->format('i');
$s = $dt->format('s');
$m = $dt->format('m')+3;
$d = $dt->format('d');
$y = $dt->format('Y');
echo date("d-M-Y",mktime($h,$i,$s,$m,$d,$y));
?>