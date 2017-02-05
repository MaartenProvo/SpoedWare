<?php
function gauge($GaugeId, $GaugeValue, $GaugeMax, $GaugeColor, $GaugeValueDisplay) {
?>
  var g = new JustGage({
    id: "<?php echo $GaugeId;?>",
    value: <?php echo $GaugeValue;?>,
    pointer: true,
    pointerOptions: {
	toplength: -15,
	bottomlength: 8,
	bottomwidth: 10,
	color: "#8e8e93",
  	stroke: "#ffffff",
	stroke_width: 3,
	stroke_linecap: 'round'
        },
    min: 0,
    max: <?php echo $GaugeMax;?>,
	customSectors: [{
        color : "<?php echo $GaugeColor;?>",
        lo : 0,
        hi : <?php echo $GaugeMax;?>
    }],
	hideValue: <?php echo $GaugeValueDisplay;?>,
	hideMinMax: true
  });
<?php
}
?>