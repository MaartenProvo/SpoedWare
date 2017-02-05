<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('calc.php');

echo "<h2>Calculations</h2><table border='2'>";
echo "<tr><td><strong>Zone 1</strong></td>";
echo "<td>Occupancy rate zone 1: " . $OccupancyRate1 . "</td>";
echo "<td>Critical rate zone 1: " . $CriticalRate1 . "</td>";
echo "<td>Shockroom rate zone 1: " . $ShockroomRate1 . "</td>";
echo "<td>Length of Stay zone 1: " . $LengthOfStay1 . "</td>";
echo "<td>Boarders zone 1: " . $Boarding1 . "</td></tr>";

echo "<tr><td><strong>Zone 2</strong>";
echo "<td>Occupancy rate zone 2: " . $OccupancyRate2 . "</td>";
echo "<td>Critical rate zone 2: " . $CriticalRate2 . "</td>";
echo "<td>Shockroom rate zone 2: " . $ShockroomRate2 . "</td>";
echo "<td>Length of Stay zone 2: " . $LengthOfStay2 . "</td>";
echo "<td>Boarders zone 2: " . $Boarding2 . "</td></tr>";

echo "<tr><td><strong>Zone 3</strong>";
echo "<td>Occupancy rate zone 3: " . $OccupancyRate3 . "</td>";
echo "<td>Critical rate zone 3: " . $CriticalRate3 . "</td>";
echo "<td>Shockroom rate zone 3: " . $ShockroomRate3 . "</td>";
echo "<td>Length of Stay zone 3: " . $LengthOfStay3 . "</td>";
echo "<td>Boarders zone 3: " . $Boarding3 . "</td></tr></table>";

echo "<h2>HospitalSettings</h2>";
echo "Hospital location: " . $HospitalLocation . "<br>";
echo "Hospital address: " . $HospitalAddress . "<br>";

echo "<table border='2'><tr><td><strong style='color:". $Zone1State . "'>Zone 1</strong></td>";
echo "<td>Treatmentrooms: " . $TreatmentroomsZone1 . "</td>";
echo "<td>Shockrooms: " . $ShockroomsZone1 . "</td>";
echo "<td>Occupancy yellow: " . $OccupancyZone1Yellow . "</td>";
echo "<td>Occupancy red: " . $OccupancyZone1Red . "</td></tr>";

echo "<tr><td><strong>Zone 2</strong></td>";
echo "<td>Treatmentrooms: " . $TreatmentroomsZone2 . "</td>";
echo "<td>Shockrooms: " . $ShockroomsZone2 . "</td>";
echo "<td>Occupancy yellow: " . $OccupancyZone2Yellow . "</td>";
echo "<td>Occupancy red: " . $OccupancyZone2Red . "</td></tr>";

echo "<tr><td><strong>Zone 1</strong></td>";
echo "<td>Treatmentrooms: " . $TreatmentroomsZone3 . "</td>";
echo "<td>Shockrooms: " . $ShockroomsZone3 . "</td>";
echo "<td>Occupancy yellow: " . $OccupancyZone3Yellow . "</td>";
echo "<td>Occupancy red: " . $OccupancyZone3Red . "</td></tr></table>";

echo "<h2>Calls</h2>";
echo "<table border='2'><tr><td><strong>Ambulance</strong></td>";
echo "<td>" . $AmbulanceState . "</td>";
echo "<td>" . $AmbulanceCall . "</td>";
echo "<td>" . $AmbulanceCallLocation	 . "</td>";
echo "<td>" . $AmbulanceCallTime	 . "</td></tr>";
echo "<tr><td><strong>MUG</strong></td>";
echo "<td>" . $MugState	 . "</td>";
echo "<td>" . $MugCall	 . "</td>";
echo "<td>" . $MugCallLocation	 . "</td>";
echo "<td>" . $MugCallTime	 . "</td></tr></table>";

?>