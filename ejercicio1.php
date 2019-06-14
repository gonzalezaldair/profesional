<?php
$n=3;
$veces = (pow($n,2)+$n)/2;
$valores = (pow($n,2)-$n+2)/2;
for ($i=1; $i <= $veces; $i++) {
	$valor = (2*($valores++))-1;
	echo '<pre>'; print_r($valor); echo '</pre>';
}
?>