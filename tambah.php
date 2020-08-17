<?php

include "db.php";

$table = "INSERT INTO pesan VALUES ('','$_POST[nama]','$_POST[alamat]')";
$data = $konek->prepare($table);
$data->execute();

header("Location:index.php");
