<?php
// design chess table 8x8

function sah($nrlinii=8, $nrcoloane=8, $alb='white', $negru='black'){
	echo "<table border=1 cellspacing=1 cellpadding=0>";
	for($l = 1; $l <= $nrlinii; $l++){
		echo "<tr>";
		for($c = 1; $c <= $nrcoloane; $c++){
			$culoare = (($l + $c) % 2 ? $alb : $negru);
			echo "<td bgcolor=$culoare width=30 height=30></td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
sah(4,4,'magenta','green');
sah(15,15,'magenta','yellow');

?>
