
<?php
include "ProbarExcepcion.php";
include "menu.php";

echo "-------------------------------------------------------------------------------------------------------------------------------<br>";
echo "EJEMPLO 1<br>";
echo "-------------------------------------------------------------------------------------------------------------------------------<br>";
// Ejemplo 1
try {
    $o = new ProbarExcepcion(ProbarExcepcion::THROW_CUSTOM);
} catch (MiExcepcion $e) {      // Será atrapada
	echo "<br>";
	echo "<br>-----------------------------------------------<br>";
    echo "Atrapada mi excepción";
	echo "<br>".$e;
	echo "<br>-----------------------------------------------<br>";
	echo "<br>";
    $e->funcionPersonalizada();
} catch (Exception $e) {        // Skipped
	echo "<br>";
	echo "<br>-----------------------------------------------<br>";
    echo "Atrapada la Excepción Predeterminada\n", $e;
	echo "<br>-----------------------------------------------<br>";
	echo "<br><br><br>";
}
// Continuar la ejecución
// var_dump($o); // Null
