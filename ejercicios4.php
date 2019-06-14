<?php

$consumolamhora = 0.694444444;
$cantlam= 16;
$canthora = 10;
$meses = 5;
$dias = 150;
$consumoxhora = $consumolamhora * $cantlam;
$consumoxdia = 24*$consumoxhora;
$total =$dias * $consumoxdia ;
echo '<pre> EL consumo total de las 16 lamparas es '; print_r(round($total)); echo ' Kv</pre>';
?>


public static Integer potencia(Integer a, Integer b){
Integer potencia = 1;
for(int i = 0; i<b;i++){
potencia *= a;
}
return potencia;
}