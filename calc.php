<?php

//Link to Database
$link = mysql_connect('localhost', 'webapp', 'sW7HwM225PxrwbZC');
mysql_select_db('spoed');

//Create get var function
function mysql_get_var($query,$y=0){
       $res = mysql_query($query);
       $row = mysql_fetch_array($res);
       mysql_free_result($res);
       $rec = $row[$y];
       return $rec;
}

//Get params for zone 1
$OccupancyRate1 		= mysql_get_var("SELECT COUNT(*) FROM uz_henis WHERE zone = '1'");
$CriticalRate1			= mysql_get_var("SELECT COUNT(*) FROM uz_henis WHERE (zone = '1' AND triage = 'rood')");
$ShockroomRate1			= mysql_get_var("SELECT COUNT(*) FROM uz_henis WHERE (zone = '1' AND type = 'Mug')");
$LengthOfStay1			= round(mysql_get_var("SELECT AVG(verblijfstijd) FROM uz_henis WHERE zone = '1'"));
$Boarding1				= mysql_get_var("SELECT COUNT(*) FROM uz_henis WHERE (zone = '1' AND opname = 'W') OR (zone = '1' AND opname = 'J')");

//Get params for zone 2
$OccupancyRate2 		= mysql_get_var("SELECT COUNT(*) FROM uz_henis WHERE zone = '2'");
$CriticalRate2			= mysql_get_var("SELECT COUNT(*) FROM uz_henis WHERE (zone = '2' AND triage = 'rood')");
$ShockroomRate2			= mysql_get_var("SELECT COUNT(*) FROM uz_henis WHERE (zone = '2' AND type = 'Mug')");
$LengthOfStay2			= round(mysql_get_var("SELECT AVG(verblijfstijd) FROM uz_henis WHERE zone = '2'"));
$Boarding2				= mysql_get_var("SELECT COUNT(*) FROM uz_henis WHERE (zone = '2' AND opname = 'W') OR (zone = '2' AND opname = 'J')");

//Get params for zone 3
$OccupancyRate3 		= mysql_get_var("SELECT COUNT(*) FROM uz_henis WHERE zone = '3'");
$CriticalRate3			= mysql_get_var("SELECT COUNT(*) FROM uz_henis WHERE (zone = '3' AND triage = 'rood')");
$ShockroomRate3			= mysql_get_var("SELECT COUNT(*) FROM uz_henis WHERE (zone = '3' AND type = 'Mug')");
$LengthOfStay3 			= round(mysql_get_var("SELECT AVG(verblijfstijd) FROM uz_henis WHERE zone = '3'"));
$Boarding3				= mysql_get_var("SELECT COUNT(*) FROM uz_henis WHERE (zone = '3' AND opname = 'W') OR (zone = '3' AND opname = 'J')");

//Prehospitaal oproepen
$AmbulanceState			= mysql_get_var("SELECT value FROM AlgemeneVars WHERE id = '10'");
$AmbulanceCall			= mysql_get_var("SELECT value2 FROM AlgemeneVars WHERE id = '10'");
$AmbulanceCallLocation	= mysql_get_var("SELECT value3 FROM AlgemeneVars WHERE id = '10'");
$AmbulanceCallTime		= mysql_get_var("SELECT tijdstip FROM AlgemeneVars WHERE id = '10'");

$MugState				= mysql_get_var("SELECT value FROM AlgemeneVars WHERE id = '11'");
$MugCall				= mysql_get_var("SELECT value2 FROM AlgemeneVars WHERE id = '11'");
$MugCallLocation		= mysql_get_var("SELECT value3 FROM AlgemeneVars WHERE id = '11'");
$MugCallTime			= mysql_get_var("SELECT tijdstip FROM AlgemeneVars WHERE id = '11'");

$CriticalRate = $CriticalRate1 + $CriticalRate2 + $CriticalRate3;

require_once('hospital.php');
require_once('hospital_rules.php');
?>