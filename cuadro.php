<?php
if (isset($_POST["enviar"])) {
$tam = $_POST["matris"];
for ($i=1; $i <= $tam ; $i++) echo "*";
	echo "<br>";
for ($j=2; $j < $tam; $j++) {
	echo "*";
	for ($i=2; $i < $tam; $i++)
		echo "__";
	echo "* <br>";
}
for ($i=1; $i <= $tam ; $i++) echo "*";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CUADRO</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="number" name="matris" placeholder="Ingrese Tamaño Matris">
	<button type="submit" name="enviar">Ingresar</button>
</form>
</body>
</html>