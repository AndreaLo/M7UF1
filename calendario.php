<!DOCTYPE html>
<html lang="en">
<head>
  <title>Calendario Php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table table-bordered">
	<thead>
		<tr>
			<?php  
			$dias = array("LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES", "SABADO", "VIERNES", "SABADO", "DOMINGO");
			foreach ($dias as $value) { 
			  echo "<th>$value</th>";
			} ?> 
		</tr> 
	</thead>
    <tbody>
		
	</tbody>	
</table>
</body>
</html>
