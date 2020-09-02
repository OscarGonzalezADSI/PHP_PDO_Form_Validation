<?php
// POO
include "../controlador/Validaciones/MiExcepcion.php";
include "../controlador/Validaciones/ProbarExcepcion.php";


// Programacion estructural
include "../controlador/Validaciones/EstructuraDatos.php";
// Funciones aplicadas en el ciclo
include "../controlador/Validaciones/Funciones.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$dataPOST = [
		[$name, empty($_POST["name"])],
		[$email, empty($_POST["email"])],
		[$website, empty($_POST["website"])],
		[$comment, empty($_POST["comment"])],
		[$gender, empty($_POST["gender"])]
	];

	for ($i=0; count($dataPOST)-$i; $i++){
		if ($dataPOST[$i][1]) {
			echo $dataError[$i][1] = $dataRequired[$i][1];
		} else {
			$data = $dataCamp[$i][1];
			$dataTest[$i][1] = test_input($_POST[$data]);
			if($dataCamp[$i][2]== "String"){
				$Format = test_Format($dataTest[$i][1]);
				if($Format!==""){
					$dataError[$i][1] = $Format;
				}
			}elseif($dataCamp[$i][2]== "email"){
				$Email = test_Email($dataTest[$i][1]);
				if($Email!==""){
					$dataError[$i][1] = $Email;
				}
			}elseif($dataCamp[$i][2]== "URL"){
				$URL = test_URL($dataTest[$i][1]);
				if($URL!==""){
					$dataError[$i][1] = $URL;
				}
			}
		}
	}
    $clave = $_POST["llave"];
	echo "-------------------------------------------------------------------------------------------------------------------------------<br>";
	echo "EJEMPLO 1<br>";
	echo "-------------------------------------------------------------------------------------------------------------------------------<br>";
	
	include "../controlador/Validaciones/filtro.php";
	include "../controlador/Validaciones/CamposObligatorios.php";

	//-------------------------------------------------------------
	//var_dump($o); // Null
	//-------------------------------------------------------------
}
	
	
