
<?php 
class Calcula {
	public function calcular($a, $b, $c) {
		$delta = ($b^2 -4 * $a *$c);
		if ($delta > 0) {
	        $x1 = (-$b+ $delta ^ 1/2)/(2 * $a);
	        $x2 = (-$b- $delta ^ 1/2)/(2 * $a);
	        echo ("O valor de X1 é: ".$x1);
	        echo ("<br>O valor de X2 é: ".$x2);
		 
		} else {
			echo "Delta menor que 0, não foi possivel resolver"; 
		}
	}
}

$sant = Calcula::calcular(1,3,4 );
print_r($sant);	
 ?>