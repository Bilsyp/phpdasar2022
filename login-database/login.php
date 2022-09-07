<?php #endregion

require 'function.php';
$mhs = querys("SELECT * FROM mahasiswa");
var_dump($mhs);

// $result = mysqli_query($conn, $query);

// Ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() fungsinya mengembalikan array numerik = indexnya angka [0]
// mysqli_fetch_assoc() fungsinya mengembalikan array associative = indexnya ['nama']  ;
// mysqli_fetch_array() fungsinay mengembalikan array associative = indexnya flexsibel ['nama'] / [0] tapi data yang di output double;

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Framework/bootstrap/css/bootstrap.css">
</head>
<style>
label {
    padding: 10px 0;
}

img {
    width: 100px;
    height: 80px;
}
</style>

<body>
    <main class="container">

        <h1>Daftar Mahasiswa</h1>

        <a href="tambah.php">Tambah Data Mahasiswa</a>

        <table class="table table-dark table-striped text-center">
            <thead>
                <tr>
                    <th>
                        No.1
                    </th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                </tr>
                <?php $i = 1; ?>
            <tbody>
                <?php foreach ($mhs as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><a href="">Ubah</a>|<a href="hapus.php?id=<?= $row['id']; ?>"
                            onclick="return confirm('yakin')">hapus</a></td>
                    <td><img class=" img-responsive" src="../img/<?= $row['gambar']; ?>" alt=""></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['jurusan']; ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
            </thead>

        </table>

    </main>

</body>

</html>