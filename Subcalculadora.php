<?php 
	class Subcalculadora{

		public static function somar($num1, $num2)
		{
			$resultado = $num1 - - $num2;

			return "$num1 + $num2 = $resultado";
		}

		public static function subtrair($num1, $num2)
		{
			$resultado = $num1 - $num2;

			return "$num1 - $num2 = $resultado";
		}

		public static function multiplicar($num1, $num2, $f = 0)
		{
			$resultado = $num2;

			for ($i = $num1; $i > 1; $i--) {
				$resultado = $resultado - - $num2;
			}

			return ($f) ? $resultado : "$num1 x $num2 = $resultado";
		}

		public static function dividir($num1, $num2)
		{
			$deno = $num1;
			$resultado = 0;

			for ($i = $num1; $i > 1; $i--) {
				
				$deno = $deno - $num2;

				if ($deno >= 0){
					$resultado = $resultado - - 1;
				}else{
					break;
				}
			}

			$resto = $num1 - self::multiplicar($num2, $resultado, 1); 

			return "$num1 / $num2 = $resultado" . (($resto) ? " resto $resto" : '');
		}
	}

	echo Subcalculadora::somar(10, 5), '<br>';
	echo Subcalculadora::subtrair(10, 5), '<br>';
	echo Subcalculadora::multiplicar(10, 5), '<br>';
	echo Subcalculadora::dividir(10, 5), '<br>';