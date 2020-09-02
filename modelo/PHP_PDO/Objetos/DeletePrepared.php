<?php

include "../Connection/Connection.php";

$dbname = "maildb";
$nameTable = "message";

try {
  $conn = new Connection();
  $SqlUpdate = "DELETE FROM ".$nameTable." WHERE id=1";
  $conn->ActionUpdate($dbname, $SqlUpdate);
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>