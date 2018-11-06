<?php
 require 'functions.php';
  $mahasiswa = query("SELECT * FROM mahasiswa")
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<h1> Daftar Mahasiswa</h1>
<a href = "tambah_data.php"> Tambah Data Mahasiswa</a>
<table class="table table-striped">
<tr>
<thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Gambar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
</tr>
<?php $i = 1?>
<!--  kita buat contoh data static -->
<?php while ($row = mysqli_fetch_assoc($result)): ?>
<tr>
    <td><?= $i; ?></td>
    <td><?= $row["Nama"]; ?></td>
    <td><?= $row["Nim"]; ?></td>
    <td><?= $row["Email"]; ?></td>
    <td><?= $row["Jurusan"]; ?></td>
    <td><img src = "image/<?php echo $row["Gambar"]; ?>" alt ="" height = "100" width = "100" srcset = ""></td>
    <td>
        <a href = "">Edit</a>
        <a href = "hapus.php?id=<?php echo $row["id"];?>"onclick="return confirm('Apakah data ini akan dihapus?')">Hapus</a>
    </td>
</tr>       
<?php $i++ ?>
<?php endwhile;?>
</body>
</html>