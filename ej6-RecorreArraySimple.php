<?php
echo "<br><strong>Bucle 1</strong><br>";
$a = array( 1,1,2,3,5,8,13);
foreach( $a as $v ) {
    echo $v . " ";
}
echo "<br><br><strong>Bucle 2</strong><br>";
$a = array( 1,1,2,3,5,8,13);
for( $i = 0; $i < count( $a ); $i++ ) {
    echo $a[$i] . " ";
}
echo "<br><br><strong>Explica per que a l'enginyeria del software es tant 
	  important fer que els programes siguin mantenibles:</strong><br>
	  Principalment per la fort evolucio en el temps, el fet de
	  que sigui mantenible en estalbiara temps i diners alhora de 
	  fer que el nostre 'producre' es mantingui al dia i competent, d'aquesta
	  forma a mes tambe podra ser reutilitzat en cas necessari.<br>";
?>

