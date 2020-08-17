<?php

include "db.php";

$table = "UPDATE pesan SET nama='$_POST[nama]', alamat='$_POST[alamat]' WHERE id='$_POST[id]'";
$data = $konek->prepare($table);
$data->execute();

header("Location:index.php");
