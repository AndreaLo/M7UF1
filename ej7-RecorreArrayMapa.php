
<?php
	echo "<strong> Parte a </strong><br><br>";
$m = array( "Alibaba" => "y los quarenta ladrones",
            "Harry Potter" => "y el cáliz de fuego");

//afegim un element més
$m["Aníbal"] = "El caníbal";

//pitem el contingut de l'array
foreach( $m as $clau=>$valor) {
    echo "El valor de [$clau] es [$valor] <br>";
}
	echo "<br><br><strong>Parte b </strong><br>";
//nou array jugadors
$jugadors_de_basket = array( "Riki Rubio", "Felipe Reyes", "Sergio Llull");
$jugadors_de_lacrosse = array( "Billy Bitter", "Chris Bocklet", "Jeremy Boltus" );
$jugadors_de_pilota_basca = array( "Inyaqui" );
$esports = array();
$esports["Lacrosse"] = $jugadors_de_lacrosse;
$esports["Pilota Basca"] = $jugadors_de_pilota_basca;
//nova clau per l'array esports
$esports["Basket"]= $jugadors_de_basket;

foreach( $esports as $esport => $jugadors ) {
    echo "<br>Els meu jugadors preferits de $esport son: <br><br>";
    //aquí va un altre foreach que et deixo per a tu!!
    foreach( $jugadors as $clau=>$valor)
    echo "$valor<br>";
}
