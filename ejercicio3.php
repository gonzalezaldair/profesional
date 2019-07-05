<?php
	$numero = 8597;
	$tam = strlen($numero);
	$aux='';
	for ($i=1; $i <= $tam; $i++)
	{
			$mod = $numero%10;
			$div = $numero/10;
		if ($aux>=$mod) {
			$aux= $mod.$aux;
		}else{
			$aux= $aux.$mod;
		}
		echo '<pre>aux '; print_r($aux); echo '</pre>';
		$numero = $div;
	}
/*hacer la concatenacion a la derecha e izquiera*/

?>