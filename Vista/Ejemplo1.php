<?php
include "ProbarExcepcion.php";
include "menu.php";
include "filtro.php";

echo "-------------------------------------------------------------------------------------------------------------------------------<br>";
echo "EJEMPLO 1<br>";
echo "-------------------------------------------------------------------------------------------------------------------------------<br>";

/*-------------------------------------------------------------
  valida campos obligatorios
  impide envio de datos con excepciones personalizadas
//-------------------------------------------------------------*/
$variable[0] = "";
$variable[1] = "aaa";
$variable[2] = "aaa";
	
try {
	$rrr = Evaluar222($variable);
	$o = new ProbarExcepcion($rrr);
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
//-------------------------------------------------------------
//var_dump($o); // Null
//-------------------------------------------------------------