<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD-PDO</title>
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <!-- datatables -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

</head>

<body>

  <div class="container">
    <h1>CRUD-PDO</h1>

    <form action="tambah.php" method="post">
      <div class="mb-3">
        <input type="text" name="nama" class="form-control" placeholder="nama">
      </div>
      <div class="mb-3">
        <textarea class="form-control" name="alamat" rows="3" placeholder="alamat"></textarea>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary btn-sm mb-3">Simpan</button>
      </div>
    </form>

    <hr>

    <table id="datatables" class="table table-hover table-bordered table-sm" style="width:100%">
      <thead class="table-success text-center">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Opsi</th>
        </tr>
      </thead>
      <tbody>

        <?php
        include "db.php";
        $table = "SELECT * FROM pesan";
        $data = $konek->prepare($table);
        $data->execute();

        // looping data dari table pesan
        $no = 1;
        while ($pesan = $data->fetch(PDO::FETCH_OBJ)) {
        ?>

          <tr>
            <td class="text-center"><?php echo $no ?></td>
            <td><?php echo $pesan->nama ?></td>
            <td><?php echo $pesan->alamat ?></td>
            <td class="text-center">
              <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-warning btn-sm" href="update.php?edit=<?php echo $pesan->id ?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="hapus.php?hapus=<?php echo $pesan->id ?>">Hapus</a>
              </div>
            </td>
          </tr>

        <?php $no++;
        } ?>

      </tbody>
    </table>

  </div><!-- /container -->

  <!-- datatables JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
      $('#datatables').DataTable();
    });
  </script>
</body>

</html>