
<?php

include "../Connection/PDOSelectSTMT.php";

?>
<a href="../../../Vista/Formulario.php?clave=6">Formulario</a>
<table style='border: solid 1px black;'>
<tr>
	<th>Id</th>
	<th>Firstname</th>
	<th>Lastname</th>
</tr>
<?php
$dbname = "maildb";
$SqlSelect = "SELECT * FROM message";
try {
  $origen = new PDOSelectSTMT();
  $origen -> action($dbname, $SqlSelect);
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$origen = null;
?>
</table>