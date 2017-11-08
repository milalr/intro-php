<?php
if (!($_POST)){
	header('Location:calcular-pedido.html');}

$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$subtotal = $precio * $cantidad;
$pago = $_POST['pago'];

if ($pago == 'tarjeta'){
	$descuento=$subtotal * 0.2;
	
}elseif ($pago == 'cupon'){
	$descuento = $subtotal * 0.1;
}else{
	$descuento = $subtotal * 0.15;
}

$total = $subtotal - $descuento;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Boleta</title>
</head>
<body>
	<p>Producto: <?php echo $producto ?></p>
	<p>Precio: <?php echo $precio ?></p>
	<p>Cantidad: <?php echo $cantidad ?></p>
	<p>SubTotal : <?php echo $subtotal ?></p>
	<p>Descuento : <?php echo $descuento ?></p>
	<p>Total : <?php echo $total ?></p>
	
</body>
</html>
