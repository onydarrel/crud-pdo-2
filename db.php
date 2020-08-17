<?php
try {
  $konek = new PDO('mysql:host=localhost;dbname=pdo-crud', "root", "");
  $konek->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Status : Terkoneksi dengan Database PDO";
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage();
  die();
}
