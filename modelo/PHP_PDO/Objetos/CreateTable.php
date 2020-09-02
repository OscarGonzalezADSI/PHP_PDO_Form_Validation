<?php
include "../Connection/PDOCreateTable.php";

$base = "maildb";
$nameTable = "message";
$SqlCreateTable  = "CREATE TABLE ".$nameTable." (
					id INT AUTO_INCREMENT PRIMARY KEY,
					name VARCHAR(35) NOT NULL,
					email VARCHAR(35) NOT NULL,
					website VARCHAR(35),
					comment VARCHAR(35),
					gender VARCHAR(35) NOT NULL
					);";
try {
  $origen = new PDOCreateTable();
  $origen->action($base, $SqlCreateTable);
  $origen = null;
  echo "Se creo la tabla " . $nameTable . " base de datos: " . $base;
} catch(PDOException $e) {
  echo "Create failed: ";
  echo $SqlCreateTable;
  echo $e->getMessage();
}

?>




























