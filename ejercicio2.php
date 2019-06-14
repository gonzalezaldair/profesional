<?php

function potencia ($numero, $exponente)
{
    $numeroo = 1;
    for ($i=0; $i<$exponente; $i++)
    {
        $numeroo = ($numeroo*$numero);
    }
    return $numeroo;
}

	$numero = 12345;

	$tam=strlen($numero);
	if ($tam > 3) {
		if ($tam % 2 == 0) {
			$num=substr($numero,0,1);
			$num.=substr($numero,2,1);
			echo '<pre>'; print_r($num); echo '</pre>';
			$total = pow($num,$tam);
			echo '<pre> con pow '; print_r($total); echo '</pre>';

			$total1= potencia($num,$tam);
			echo '<pre> sin pow '; print_r($total1); echo '</pre>';

		}else {
			$num=substr($numero,1,1);
			$num.=substr($numero,3,1);
			echo '<pre>'; print_r($num); echo '</pre>';
			$total = pow($num,$tam);
			echo '<pre>con pow '; print_r($total); echo '</pre>';

			$total1= potencia($num,$tam);
			echo '<pre> sin pow '; print_r($total1); echo '</pre>';
		}
	}else{
		echo "debe ingresar un valor mayor minimo de 3 digitos";
	}
?>



