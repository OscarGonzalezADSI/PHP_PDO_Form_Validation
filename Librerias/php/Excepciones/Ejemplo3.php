<?php
include "ProbarExcepcion.php";
include "menu.php";

echo "-------------------------------------------------------------------------------------------------------------------------------<br>";
echo "Ejemplo 3<br>";
echo "-------------------------------------------------------------------------------------------------------------------------------<br>";
// Ejemplo 3
try {
    $o = new ProbarExcepcion(ProbarExcepcion::THROW_CUSTOM);
} catch (MiExcepcion $e) {      // Será atrapada
	echo "<br>";
	echo "<br>-----------------------------------------------<br>";
    echo "Atrapada la Excepción Predeterminada\n", $e;
	echo "<br>-----------------------------------------------<br>";
	echo "<br>";
}
// Continuar la ejecución
// var_dump($o); // Null
