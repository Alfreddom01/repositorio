<!DOCTYPE html>
<html lang ="en">
<head>



</head>

<body>
	<?php 
	echo "<h1>mi primer script php </h1>";
	$z=5;
 function mifuncion(){
 global $z;
echo "<p> variable z dentro de la funcion	es :</p>";
$z++; 
}
mifuncion();
mifuncion();
mifuncion();

//echo " <p> variable x fuera de la funciones:  $z</p>";

//echo $z;

?>
</body>
</html>
