<?php

require 'function.php';

query("SELECT * FROM mahasiswa");

$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<button><a href="tambah.php">Tambah data mahasiswa</a></button>
<br></br>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Nrp</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $mahasiswa as $row ) : ?>
	<tr>
		<td><?= $i ?></td>
		<td>
			<a href="">Ubah</a>
			<a href="hapus.php?id=<?= $row["id"]; ?>">Hapus</a>
		</td>
		<td><img src="img/<?= $row["gambar"]; ?>" width="70"></td>
		<td><?= $row["nrp"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
	</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</body>
</html>