<?php
include "ProbarExcepcion.php";
include "menu.php";

echo "-------------------------------------------------------------------------------------------------------------------------------<br>";
echo "EJEMPLO 2<br>";
echo "-------------------------------------------------------------------------------------------------------------------------------<br>";
// Ejemplo 2
try {
    $o = new ProbarExcepcion(ProbarExcepcion::THROW_DEFAULT);
} catch (MiExcepcion $e) {      // Este tipo no coincide
	echo "<br>";
	echo "<br>-----------------------------------------------<br>";
    echo "Atrapada mi excepción";
	echo "<br>".$e;
	echo "<br>-----------------------------------------------<br>";
	echo "<br>";
    $e->funcionPersonalizada();
} catch (Exception $e) {        // Will be caught
	echo "<br>";
	echo "<br>-----------------------------------------------<br>";
    echo "Atrapada la Excepción Predeterminada\n", $e;
	echo "<br>-----------------------------------------------<br>";
	echo "<br><br><br>";
}
// Continuar la ejecución
// var_dump($o); // Null
