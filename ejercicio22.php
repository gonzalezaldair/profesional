<?php
	$valor = 31500;
	echo '<pre> Valor Solicitado '; print_r($valor); echo '</pre>';

	$bi10 = intval($valor / 10000);
	$mod10 = $valor % 10000;

	$bi5 = intval($mod10 / 5000);
	$mod5 = $mod10  % 5000;

	$bi2 = intval($mod5 / 2000);
	$mod2 = $mod5 % 2000;

	$bi1 = intval($mod2 / 1000);
	$mod1 = $mod2 % 1000;

	$mon500 = intval($mod1 / 500);
	$mod500 = $mod1 % 500;

	$mon200 = intval($mod500 / 200);
	$mod200 = $mod500 % 200;

	$mon100 = intval($mod200 / 100);
	$mod100 = $mod200 % 100;

	echo '<pre> son '; print_r($bi10); echo ' billetes de $10000 </pre>';
	echo '<pre> son '; print_r($bi5); echo ' billetes de $5000 </pre>';
	echo '<pre> son '; print_r($bi2); echo ' billetes de $2000 </pre>';
	echo '<pre> son '; print_r($bi1); echo ' billetes de $1000 </pre>';
	echo '<pre> son '; print_r($mon500); echo ' monedas de $500 </pre>';
	echo '<pre> son '; print_r($mon200); echo ' monedas de $200 </pre>';
	echo '<pre> son '; print_r($mon100); echo ' monedas de $100 </pre>';

?>