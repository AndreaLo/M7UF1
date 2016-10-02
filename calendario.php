<!DOCTYPE html>
<html lang="en">
<head>
  <title>Calendario Php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	body{
		text-align: center;
		padding: 5%;
		}
	th{
		background-color: #d9d9d9;
		}
	.actual{
		 background-color: #99ccff;
		}
	.otro{
		background-color: #e6f3ff;
	}
  </style>
</head>
<body>
	<?php
		$monthLetra = date('F');
		$monthNum = date('m');
		$year = date('Y');
		$diaSem = date('N', mktime(0,0,0, $monthNum, 1, $year));
		$diaActual = date('d');	
		$diaUltimo = date('d', mktime(0,0,0, $monthNum+1, 1, $year)-1);
	?>
	<table class="table table-bordered">
	<?php 
		echo "<h1>" .$monthLetra . " " .$year . "</h1>"; 
	?>
	<thead>
		<tr>
			<?php  
			$dias = array("LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO", "DOMINGO");
			foreach ($dias as $value) { 
				echo "<th><center>" . $value . "</center></th>";
			} 
			?> 
		</tr> 
	</thead>
	<tbody>
		<?php
		if ($diaSem > 1){
			echo "<tr>";
				for ($d=1; $d < $diaSem; $d++){
					echo "<td>  </td>";
				}
			}
		$aux=$d-1;
		for ($i=1; $i<=$diaUltimo; $i++){
			if ($i == $diaActual){
				echo "<td class='actual'>" . $i . "</td>"; 
				}	
			else{
				echo "<td class='otro'>" . $i . "</td>";
			}
			$aux = $aux +1;
			if ( $i == $diaUltimo){
				echo "</tr>";
				}		
			if (($aux%7)==0){
				echo "</tr><tr>";
				}	
		}
		?>	
	</tbody>	
</table> 		
</body>
</html>
