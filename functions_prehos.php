<?php

function prehos() {
	global $AmbulanceState;
	global $AmbulanceCall;
	global $AmbulanceCallLocation;
	global $MugState;
	global $MugCall;
	global $MugCallLocation;
	
	if ($AmbulanceState == 'vertrokken') {
		echo('<div class="smallBox" style="background-color:#C00"><table>
					<tr><td style="vertical-align:top"><i class="fa fa-ambulance fa-2x"></i></td>
					<td style="vertical-align:top">'.$AmbulanceCall.'<br>'.$AmbulanceCallLocation.'</td></tr>
				</table></div>');
	} elseif ($AmbulanceState == 'beschikbaar') {
		echo('<div class="smallBox" style="background-color:#0C0"><table>
					<tr><td style="vertical-align:top"><i class="fa fa-ambulance fa-2x"></i></td>
					<td style="vertical-align:top">Beschikbaar</td></tr>
				</table></div>');
	}

	if ($MugState == 'vertrokken') {
		echo('<div class="smallBox" style="background-color:#C00"><table>
					<tr><td style="vertical-align:top"><i class="fa fa-car fa-2x"></i></td>
					<td style="vertical-align:top">'.$MugCall.'<br>'.$MugCallLocation.'</td></tr>
				</table></div>');
	} elseif ($MugState == 'beschikbaar') {
		echo('<div class="smallBox" style="background-color:#0C0"><table>
					<tr><td style="vertical-align:top"><i class="fa fa-car fa-2x"></i></td>
					<td style="vertical-align:top">Beschikbaar</td></tr>
				</table></div>');
	}

}
?>