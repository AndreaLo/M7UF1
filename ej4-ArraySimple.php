<?php
// creo un array amb 3 elements
$a = array( 5,7,11);
$gettype_a = gettype( $a );
print_r( $a );
echo "<br>";

//afegeixo més elements a l'array
$a[] = 13;  
$a[] = 17;
print_r( $a );
echo "<br>";

//encara un altre
array_push ($a, 23);
print_r( $a );
echo "<br>";

//pinto elements de l'array
echo "El valor de del terce element de l'array es " . $a[2];
echo "<br>";

unset($a[0]); 
unset($a[1]); // el valor 7 seguia a la possició 1
print_r( $a );
echo "<br>";

//creo un array sense valors
$b = array(null);

//Preguntes i respostes
echo "<br><br><strong>PREGUNTAS</strong><br>";
echo "<br><strong>Quina es la instruccio a PHP per a crear un array?
	  </strong><br>Correspon a la linea 3 del codi<br>";

echo "<br><strong>Es pot crear un array buit a PHP o sempre s'hi han
	  de posar valors a la creacio?</strong><br>Es pot crear sense 
	  valors y el resultat d'imprimir-ho es el seguent:<br>";
	  print_r( $b );
	  
echo "<br><strong>Si li prenem el tipus a l'array amb la funcio gettype(),
	  quin tipus obtenim?</strong><br>El resultat es el seguent:<br>
	  $gettype_a";

echo "<br><strong>Com puc fer per afegir un element a l'array a partir 
	  de la darrera posicio coneguda? Esmenta dues maneres diferents</strong>
	  <br>Les dues formes les podem trobar a les linies 9 i 15 del codi:
	  '\$a[] = 13' i 'array_push (\$a, 23);'<br>";

echo "<br><strong>Com s'accedeix a un element d'un array?</strong><br>
	  tal com es veu a la linea 20 del codi, es a dir: indicant el
	  numero de la posicio que volem veure '\$a[2]'<br>";
	  
echo "<br><strong>Com s'esborra un element d'un array?</strong><br>
	  podem utilitzar 'unset(\$array[posisio_a_eliminar]), com podem
	  veure a les lines 23 i 24 del codi.'<br>";

?>
