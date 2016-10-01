<?php
$m = array( "Alibaba" => "y los quarenta ladrones",
            "Harry Potter" => "y el caliz de fuego");

//afegim un element més
$m["Anibal"] = "El canibal";

//mostrem *tot* el contingut de l'array
print_r($m);
print( "<br>");

//Accedim a un element (mostrem només un element)
print( $m["Alibaba"]);
print( "<br>");

//Esborrem un element
unset( $m["Harry Potter"]);

//mostrem *tot* el contingut de l'array
print_r($m);
print( "<br>");

echo "<br><strong>Despre de l'execuciod'aquest codi, quines claus conte
	  l'array?</strong><br>Quden 2 claus, Alibaba i Anibal<br><br>
	  <strong>Quin valor li correspon a cada clau?</strong><br>Per 'Alibaba' 
	  la clau es 'y los cuarenta ladrones' i per 'Anibal' la clau es 'El canibal',
	  tal i com retorna la linea 20 del codi";
	  
echo "<br><br><strong>Com es fa per afegir un nou parell clau-valor a 
	  l'array?</strong><br>Tal i com es veu a la linea 6 del codi<br>";

echo "<br><strong>Com es fa per accedir a un valor mitjansant la seva 
	  clau?</strong><br>De la seguent forma: \$array['nomclau'], tal com
	  podme veure a les lineas 6, 13 i 17 del codi<br>";

echo "<br><strong>Com s'esborra una entrada clau-valor?</strong><br>
      tal i com veiem a la linea 17 del codi<br>";	  
?>
