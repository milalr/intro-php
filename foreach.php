<?php
	$alumnos = ['pamela','milagros','yenifer','gael','nancy'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Foreach</title>
</head>
<body>
	<h1>Tabla de estudiantes</h1>
	<div>
	<?php
		foreach($alumnos as $alumno){
			echo " <p>$alumno</p>";
		}
	?>	
	<p>TOTAL DE ALUMNOS MATRICULADOS: <?php echo count($alumnos);
		?></p>
	</div>
</body>
</html>