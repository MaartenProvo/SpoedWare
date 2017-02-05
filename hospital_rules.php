<?php
//Zone 1 Rules
//Begin Red Checks
if ($OccupancyRate1 >= $OccupancyZone1Red) {
	$Zone1State	= "#C00";
} elseif ($CriticalRate1 >= $ShockroomsZone1) {
	$Zone1State	= "#C00";
//Begin Yellow checks
} elseif ($OccupancyRate1 >= $OccupancyZone1Yellow) {
	$Zone1State	= "#CC0";
}elseif ($ShockroomRate1 >= $ShockroomsZone1) {
	$Zone1State	= "#CC0";
}

?>