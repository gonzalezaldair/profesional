<?php
$valor = 62700;
echo '<pre> Valor Solicitado '; print_r($valor); echo '</pre>';
if ($valor >= 10000) {
	$bi10 = intval(($valor/10000));
	echo '<pre> son '; print_r($bi10); echo ' billetes de $10000 pesos</pre>';
	$val10 = $bi10*10000;
	if ($valor - $val10 >=5000) {
		$valor1 = $valor - $val10;
		$bi5 = intval(($valor1/5000));
		echo '<pre>son '; print_r($bi5); echo ' billetes de $5000 pesos</pre>';
		$va5 = $bi5*5000;
		if ($valor1 - $va5 >= 2000) {
			$valor2 = $valor1 - $va5;
			$bi2000 = intval(($valor2/2000));
			$va2000 = $bi2000*2000;
			if ($valor2 - $va2000 >= 1000) {
			$valor3 = $valor2 - $va5;
			$bi1000 = intval(($valor3/1000));
			echo '<pre>son '; print_r($bi1000); echo ' billetes de $1000 pesos</pre>';
			$va1000 = $bi1000*1000;
			if ($valor3 - $va1000 >= 500) {
				$valor4 = $valor3 - $va1000;
				$mon500 = intval(($valor4/500));
				echo '<pre>son '; print_r($mon500); echo ' monedas de $500 pesos</pre>';
				$va500 = $mon500*500;
				if ($valor4 - $va500 >= 200) {
					$valor5 = $valor4 - $va500;
					$mon200 = intval(($valor4/200));
					echo '<pre>son '; print_r($mon200); echo ' monedas de $200 pesos</pre>';
					$va200 = $mon200*200;
					if ($valor5 - $va200 >= 100) {
						$valor6 = $valor5 - $va200;
						$mon100 = intval(($valor6/100));
						echo '<pre>son '; print_r($mon100); echo ' monedas de $100 pesos</pre>';
					}
				}elseif ($valor4 - $va500 >= 100) {
					$valor5 = $valor4 - $va500;
					$mon100 = intval(($valor5/100));
					echo '<pre>son '; print_r($mon100); echo ' monedas de $100 pesos</pre>';
				}

			}elseif ($valor3 - $va1000 >= 200) {
					$valor4 = $valor3 - $va1000;
					$mon200 = intval(($valor4/200));
					echo '<pre>son '; print_r($mon200); echo ' monedas de $200 pesos</pre>';
					$va200 = $mon200*200;
					if ($valor4 - $va200 >= 100) {
						$valor5 = $valor4 - $va200;
						$mon100 = intval(($valor5/100));
						echo '<pre>son '; print_r($mon100); echo ' monedas de $100 pesos</pre>';
					}
			}elseif ($valor3 - $va1000 >= 100){
						$valor4 = $valor3 - $va1000;
						$mon100 = intval(($valor4/100));
						echo '<pre>son '; print_r($mon100); echo ' monedas de $100 pesos</pre>';
			}
		}
		}elseif ($valor1 - $va5 >= 1000) {
			$valor2 = $valor1 - $va5;
			$bi1000 = intval(($valor2/1000));
			echo '<pre>son '; print_r($bi1000); echo ' billetes de $1000 pesos</pre>';
			$va1000 = $bi1000*1000;
			if ($valor2 - $va1000 >= 500) {
				$valor3 = $valor2 - $va1000;
				$mon500 = intval(($valor3/500));
				echo '<pre>son '; print_r($mon500); echo ' monedas de $500 pesos</pre>';
				$va500 = $mon500*500;
				if ($valor3 - $va500 >= 200) {
					$valor4 = $valor3 - $va500;
					$mon200 = intval(($valor4/200));
					echo '<pre>son '; print_r($mon200); echo ' monedas de $200 pesos</pre>';
					$va200 = $mon200*200;
					if ($valor4 - $va200 >= 100) {
						$valor5 = $valor4 - $va200;
						$mon100 = intval(($valor5/100));
						echo '<pre>son '; print_r($mon100); echo ' monedas de $100 pesos</pre>';
					}
				}elseif ($valor3 - $va500 >= 100) {
					$valor4 = $valor3 - $va500;
					$mon100 = intval(($valor4/100));
					echo '<pre>son '; print_r($mon100); echo ' monedas de $100 pesos</pre>';
				}

			}elseif ($valor2 - $va1000 >= 200) {
					$valor3 = $valor2 - $va1000;
					$mon200 = intval(($valor3/200));
					echo '<pre>son '; print_r($mon200); echo ' monedas de $200 pesos</pre>';
					$va200 = $mon200*200;
					if ($valor3 - $va200 >= 100) {
						$valor4 = $valor3 - $va200;
						$mon100 = intval(($valor4/100));
						echo '<pre>son '; print_r($mon100); echo ' monedas de $100 pesos</pre>';
					}
			}elseif ($valor2 - $va1000 >= 100){
						$valor3 = $valor2 - $va1000;
						$mon100 = intval(($valor3/100));
						echo '<pre>son '; print_r($mon100); echo ' monedas de $100 pesos</pre>';
			}
		}elseif ($valor1 - $va5 >= 500) {
			$valor2 = $valor1 - $va5;
			$mon500 = intval(($valor2/500));
			echo '<pre>son '; print_r($mon500); echo ' monedas de $500 pesos</pre>';
			$va500 = $mon500*500;
			if ($valor2 - $va500 >= 200) {
				$valor3 = $valor2 - $va500;
				$mon200 = intval(($valor3/200));
				echo '<pre>son '; print_r($mon200); echo ' monedas de $200 pesos</pre>';
				$va200 = $mon200*200;
				if ($valor3 - $va200 >= 100) {
					$valor4 = $valor3 - $va200;
					$mon100 = intval(($valor4/100));
					echo '<pre>son '; print_r($mon100); echo ' monedas de $100 pesos</pre>';
				}
			}elseif ($valor2 - $va500 >= 100) {
				$valor4 = $valor2 - $va500;
				$mon100 = intval(($valor4/100));
				echo '<pre>son '; print_r($mon100); echo ' monedas de $100 pesos</pre>';
			}
		}elseif ($valor1 - $va5 >= 200) {
			$valor2 = $valor1 - $va5;
			$mon200 = intval(($valor2/200));
			echo '<pre>son '; print_r($mon200); echo ' monedas de $200 pesos</pre>';
			$va200 = $mon200*200;
			if ($valor2 - $va200 >= 100) {
				$valor3 = $valor2 - $va200;
				$mon100 = intval(($valor3/100));
				echo '<pre>son '; print_r($mon100); echo ' monedas de $100 pesos</pre>';
			}else{

			}
		}elseif ($valor1 - $va5 >= 100) {
			$valor2 = $valor1 - $va5;
			$mon100 = intval(($valor2/100));
			echo '<pre>son '; print_r($mon100); echo ' monedas de $100 pesos</pre>';
		}
	}elseif ($valor - $val10 >=2000) {
		$valor1 = $valor - $val10;
		$bi2000 = intval(($valor1/2000));
		echo '<pre>son '; print_r($bi2000); echo ' billetes de $2000 pesos</pre>';
		$va2000 = $bi2000*2000;
		if ($valor1 - $va2000 >= 1000) {
			$valor2 = $valor1 - $va2000;
			$bi1000 = intval(($valor2/1000));
			echo '<pre>son '; print_r($bi1000); echo ' billetes de $1000 pesos</pre>';
			$va1000 = $bi1000*1000;
			if ($valor2 - $va1000 >= 500) {
				$valor3 = $valor2 - $va1000;
				$mon500 = intval(($valor3/500));
				echo '<pre>son '; print_r($bi1000); echo ' monedas de $5000 pesos</pre>';
				$va1000 = $bi1000*1000;
			}elseif ($valor2 - $va1000 >= 200) {
				$valor3 = $valor2 - $va1000;
				$bi1000 = intval(($valor2/1000));
				echo '<pre>son '; print_r($bi1000); echo ' billetes de $1000 pesos</pre>';
				$va1000 = $bi1000*1000;

			}elseif ($valor2 - $va1000 >= 100) {
				$valor3 = $valor2 - $va1000;
			}
		}elseif ($valor1 - $va2000 >= 500) {
			# code...
		}
		elseif ($valor1 - $va2000 >= 200) {
			# code...
		}
		elseif ($valor1 - $va2000 >= 100) {
			$valor1 = $valor - $val10;
			$mon100 = intval(($valor1/100));
			echo '<pre>son '; print_r($mon100); echo ' monedas de $100 pesos</pre>';
		}
	}elseif ($valor - $val10 >=1000) {
		# code...
	}elseif ($valor - $val10 >=500) {
		# code...
	}elseif ($valor - $val10 >=200) {
		# code...
	}elseif ($valor - $val10 >=100) {
		# code...
	}

}elseif ($valor >= 5000) {
	# code...
}
?>