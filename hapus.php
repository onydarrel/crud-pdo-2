<?php

include "db.php";

$table = "DELETE FROM pesan WHERE id='$_GET[hapus]'";
$data = $konek->prepare($table);
$data->execute();

header("Location:index.php");
