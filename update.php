<?php

include "db.php";

$table = "SELECT * FROM pesan WHERE id='$_GET[edit]'";
$data = $konek->prepare($table);
$data->execute();
$pesan = $data->fetch(PDO::FETCH_OBJ);
?>

<h3>Form Ubah</h3>
<form action="proses_update.php" method="post">
  <input type="hidden" name="id" value="<?php echo $pesan->id ?>"> 
  Nama : <input type="text" name="nama" value="<?php echo $pesan->nama ?>">
  <br>
  Alamat : <textarea name="alamat" cols="30" rows="10"><?php echo $pesan->alamat ?></textarea>
  <br>
  <button type="submit">Simpan</button>
</form>