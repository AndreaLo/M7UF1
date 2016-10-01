<?php
$a1 = array( 'A','B','C','D');
$a2 = array( 1,2,3,4,5,6,7);
$a3 = array( 'Boli', 'Goma', 'Llapis', 'Escursa');
$a = array( 'Lletres' => $a1, 'Numeros' => $a2, 'Materials Oficina' => $a3 );

foreach( $a as $clau=>$valor){
	echo "$clau: " ;
	$separador = "";
	foreach( $valor as $valor ) {
		echo "$separador" . "$valor";  //concatenem el separador amb l'element
		$separador = ", ";
	}
	echo "<br>";
}
