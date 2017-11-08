<?php
$tabla = $_POST['tabla'];
$maximo = $_POST['maximo'];
$multiplicador = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	<h1>Tabla del <?php echo $tabla ?></h1>
	<?php
		while ($multiplicador<=$maximo){
			//echo "$tabla * $multiplicador = " . $tabla * $multiplicador;
			echo "<p>{$tabla} * {$multiplicador} = " . $tabla * $multiplicador . "</p>";
			$multiplicador++;
		}
	?>
	
</body>
</html>

	
