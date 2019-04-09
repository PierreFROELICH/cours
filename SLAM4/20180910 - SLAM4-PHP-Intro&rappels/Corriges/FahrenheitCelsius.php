<!DOCTYPE html>
<html>
<head>
	<title>FahrenheitCelsius</title>
</head>
<body>
	<?php
	/*F° = (C° x (9/5)) + 32
	C° = (F°-32) x (5/9)*/
		function celsiusInFahrenheit($celsius)
		{
			$fahrenheit = ($celsius * (9/5)) + 32;
			return $fahrenheit;
		}

		function fahrenheitInCelsius($fahrenheit)
		{
			$celsius = ($fahrenheit - 32) * (5/9);
			return $celsius;
		}

		echo 'Convertion de 14°C en °F <br>';
		echo '14°C = '. celsiusInFahrenheit(14).'°F <br>';

		echo 'Convertion de 57.2°F en °C <br>';
		echo '57.2°F ='. fahrenheitInCelsius(57.2).'°C)<br>';

	?>
</body>
</html>
