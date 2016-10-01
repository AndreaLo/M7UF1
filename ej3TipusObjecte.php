<?php
$d = new DateTime();
$tipus_de_d = gettype( $d );
$classe_de_d = get_class( $d );
echo "La variable \$d 
      conte el valor " . $d->format( "d/m/Y") .
      " i es del tipus $tipus_de_d";

echo "<br><br><strong>De quin tipus es la variable \$d?</strong><br>
	  Es de tipus objecte<br>";		

echo "<br><strong>Que retorna la invocacio del metode format de la 
	  classe datetime?</strong><br>Retorna la data actual<br>";
	  
//echo "<br><strong>Prova a modificar el codi per a intentar mostrar $d 
	//  tal com ho feiem a l'exercici anterior (sense ->format)</strong><br>
	//  La variable \$d conte el valor $tipus_de_d"; //No funciona

echo "<br><strong>ara que sabem que la variable es de tipus objecte, 
	  coneixer de quina classe es aquell objecte</strong><br>
	  La clase de \$d es: $classe_de_d";

?>
