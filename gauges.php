<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="raphael-2.1.4.min.js"></script>
<script src="justgage.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style>
  .gaugeBig {
    width: 450px;
    height: 450px;
    display: inline-block;
  }
  .gaugeSmall {
    width: 150px;
    height: 150px;
    display: inline-block;
  }
  .bigBox {
	  margin:5;
	  padding:5;
	  height:75;
  }
  .smallBox {
	  margin:5;
	  padding:5;
	  height:50;
  }
</style>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('calc.php');
require_once('hospital.php');
require_once('functions_gauge.php');
require_once('functions_prehos.php');
?>
<script>
document.addEventListener("DOMContentLoaded", function(event) {
	<?php gauge("gauge1", $OccupancyRate1, $TreatmentroomsZone1, $Zone1State, "false");?>
	<?php gauge("gauge1a", 3, 5, 900, "false");?>
	<?php gauge("gauge1b", $LengthOfStay1, 180, 900, "false");?>
	<?php gauge("gauge1c", $Boarding1, 3, 900, "false");?>
	<?php gauge("gauge2", $OccupancyRate2, $TreatmentroomsZone2, $Zone2State, "false");?>
	<?php gauge("gauge2a", 3, 5, 900, "false");?>
	<?php gauge("gauge2b", $LengthOfStay2, 180, 900, "false");?>
	<?php gauge("gauge2c", $Boarding2, 3, 900, "false");?>
	<?php gauge("gauge3", $OccupancyRate3, $TreatmentroomsZone3, $Zone3State, "false");?>
	<?php gauge("gauge3a", 3, 5, 900, "false");?>
	<?php gauge("gauge3b", $LengthOfStay3, 180, 900, "false");?>
	<?php gauge("gauge3c", $Boarding3, 3, 900, "false");?>
	});
</script>
</head>
<body>
<table cellspacing="0" cellpadding="0" style="text-align:center">
	<tr>
    	<td rowspan="4">
        <div class="bigBox" style="background-color:#C00">Triage<br><font size="+6">8</font> Patiënten<font size="+6">15</font>min.</div>
        <?php prehos(); ?>
        <div class="smallBox" style="background-color:#ACA"><table>
					<tr><td style="vertical-align:top"><i class="fa fa-user fa-2x"></i></td>
					<td style="vertical-align:top">Man, 29j<br>Onwel</td></tr>
				</table></div>
        <div class="smallBox" style="background-color:#ACA"><table>
					<tr><td style="vertical-align:top"><i class="fa fa-user fa-2x"></i></td>
					<td style="vertical-align:top">Vrouw, 25j<br>Hartproblemen</td></tr>
				</table></div>
         <div class="smallBox" style="background-color:#C00"><table>
					<tr><td style="vertical-align:top"><i class="fa fa-user fa-2x"></i><font size="+6"><?php echo ($CriticalRate); ?></font></td>
					<td style="vertical-align:top">kritieke<br>patiënten</td></tr>
				</table></div>
      	</td>
        <td colspan="3"><h3>Urgente Zone</h3></td>
        <td colspan="3" style="background-color:#DDD"><h3>Fast-Track</h3></td>
        <td colspan="3"><h3>Pediatrie</h3></td>
	</tr>
    <tr>
        <td colspan="3"><div id="gauge1" class="gaugeBig"></div></td>
        <td colspan="3"  style="background-color:#DDD"><div id="gauge2" class="gaugeBig"></div></td>
        <td colspan="3"><div id="gauge3" class="gaugeBig"></div></td>
	</tr>
    <tr>
        <td>INSTROOM</td>
        <td>DOORSTROOM</td>
        <td>UITSTROOM</td>
        <td style="background-color:#DDD">INSTROOM</td>
        <td style="background-color:#DDD">DOORSTROOM</td>
        <td style="background-color:#DDD">UITSTROOM</td>
        <td>INSTROOM</td>
        <td>DOORSTROOM</td>
        <td>UITSTROOM</td>
    </tr>
    <tr>
        <td><div id="gauge1a" class="gaugeSmall"></div></td>
        <td><div id="gauge1b" class="gaugeSmall"></div></td>
        <td><div id="gauge1c" class="gaugeSmall"></div></td>
        <td style="background-color:#DDD"><div id="gauge2a" class="gaugeSmall"></div></td>
        <td style="background-color:#DDD"><div id="gauge2b" class="gaugeSmall"></div></td>
        <td style="background-color:#DDD"><div id="gauge2c" class="gaugeSmall"></div></td>
        <td><div id="gauge3a" class="gaugeSmall"></div></td>
        <td><div id="gauge3b" class="gaugeSmall"></div></td>
        <td><div id="gauge3c" class="gaugeSmall"></div></td>
	</tr>
</table>
</body>
</html>