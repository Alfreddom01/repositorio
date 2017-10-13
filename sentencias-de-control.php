<!DOCTYPE html>
<html lang ="en">
<head>



</head>

<body>
	<?php 
			
		$booleano=false;
		if ($booleano) {
			echo "<h2> entrando al IF</h2>";

		}else{
			echo "<h2>......... No entro en el if</h2>";

		}
		$a=10;
		$b=7;
		if ($a<$b){
			echo "a es menor que b";
		} else if($b<$a){
		echo "b es menor que a";
		}else{
			echo "a y b son iguales";
		}
		////////
		$a='hola';
		switch($a){
			case 'hola';
			echo "<h2>hola desde case hola</h2";
			break;
			default;
			#code...
			break;

		}
		$b=5;
		while($b<=10) {
			echo "<h3>while</h3>";
			$b++;

		}

		for ($i=0; $i <5; $i++) {
			"echo <h3>hola desde for</h3>";
		}
		foreach ($asistentes as $nombre ) {
			echo "<h1>".$nombre." esta reprobado...... BUENO NO XD </h1>";

			}

		foreach ($materias as $clave => $curso) {
			echo "<h2>la materia $curso tiene clave $clave</h2>";
		}
		//funcio que uestra algo
		function ponerh1($value='hola')
		{
			echo"<h1>$value</h1>";
		}
		ponerh1($texto);
		ponerh1();
		//funcion que arroja algo 
		function suma($a,$b)
		{
			return $a+$b;

		}
		ponerh1(suma(2,4));
		$var=suma(43,49);


?>
</body>
</html>
