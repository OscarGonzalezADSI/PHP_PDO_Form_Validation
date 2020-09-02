<?php
include "../Connection/Connection.php";

$dbname = "maildb";
$nameTable = "message";

try {
  $conn = new Connection();
  $SqlUpdate = "UPDATE ".$nameTable." SET name='hhh' WHERE id=1";
  $conn->ActionUpdate($dbname, $SqlUpdate);
} catch(PDOException $e) {
  echo $SqlUpdate . "<br>" . $e->getMessage();
}

$conn = null;
?>



































