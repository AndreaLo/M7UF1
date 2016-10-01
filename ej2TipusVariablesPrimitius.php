<html>
<?php
$i = 12;
$tipus_de_i = gettype( $i );

$o = 50.25;
$tipus_de_o = gettype( $o );

$u = false;
$tipus_de_u = gettype( $u );

$a = "Soy una cadena";
$tipus_de_a = gettype( $a );

$tipus_de_gettype = gettype( $tipus_de_a );

echo "La variable \$i 
      conte el valor $i 
      i es del tipus $tipus_de_i";

echo "<br><br><strong>Explica perque hem posat la barra invertida davant 
	  del simbol $</strong><br> per indicar que volem que no es tracata 
	  de una crida a una variable";
	  
echo "<br><br><strong>Digues de quin tipus es la variable $i.</strong>
	  <br>Per el contingut de la variable podem dir que es un integer";	
	  
echo "<br><br><strong>Digues per a que serveix la funcio gettype.</strong>
	  <br>Serveix per coneixer de quin tipus son les variables";	
	   
echo "<br><br><strong>Exten el codi per tal de, a mes de la variable $i,
	  treballar igual amb variables de tipus: coma flotant, booleana i 
	  cadena de caracters</strong> <br>";	
	   
echo "<br>La variable \$o 
      conte el valor $o 
      i es del tipus $tipus_de_o <br>";  
 
echo "<br>La variable \$u 
      conte el valor $u 
      i es del tipus $tipus_de_u <br>";   

echo "<br>La variable \$a 
      conte el valor $a 
      i es del tipus $tipus_de_a <br>";    

echo "<br><br><strong>Modifica el codi per saber de quin tipus es el 
	  valor que retorna gettype</strong><br><br>
	  El valor que retorna gettype de la variable \$a es: $tipus_de_gettype"        
?>
