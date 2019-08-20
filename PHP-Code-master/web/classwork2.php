<?php
$a=20.567;
$year = floor($a);
$fractional = $a-$year;
$monthWithFrac = 12*$fractional;
$month = (int)$monthWithFrac;
$day = (int)(30*($monthWithFrac-$month));

echo "$year years $month months $day days";





?>