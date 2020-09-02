<?php
include "ProbarExcepcion.php";
include "menu.php";
echo "-------------------------------------------------------------------------------------------------------------------------------<br>";
echo "EJEMPLO 4<br>";
echo "-------------------------------------------------------------------------------------------------------------------------------<br>";
// Ejemplo 4
try {
    $o = new ProbarExcepcion();
	echo "Se ejecuto la accion correctamente.</br>";
} catch (Exception $e) {        // Saltado, sin excepción
    echo "Atrapada la Excepción Predeterminada\n", $e;
}

// Continuar la ejecución
var_dump($o); // ProbarExcepcion
echo "\n\n";





