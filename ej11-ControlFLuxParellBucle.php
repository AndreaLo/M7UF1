<?php
$v = 4;
$es_parell = 'no';
	for ($i = $v; $i <= 104 ; $i++) {
		$es_parell = 'no';
		if(($i % 2) == 0){
				$es_parell= 'si';
		}
		echo "<br>El numero $i $es_parell es parell";
	}
?>
