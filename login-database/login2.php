<?php #endregion

$username = "Bilsyp";
$password = "XIAw_UifJ/9ka@fX";
$servername = "localhost";
$databases = "phpdasar";

$conn = mysqli_connect($servername, $username, $password, $databases);
$query = "SELECT * FROM mahasiswa";

$result = mysqli_query($conn, $query);

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
            </thead>
            <?php $i = 1; ?>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><a href="">Ubah</a>|<a href="">hapus</a></td>
                    <td><img class="img-responsive" src="../img/<?= $row['gambar']; ?>" alt=""></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['jurusan']; ?></td>
                </tr>
                <?php $i++; ?>
                <?php endwhile; ?>
            </tbody>
        </table>
        <div class="card bg-dark text-light p-4 d-none">
            <form action="" method="POST">
                <div class="input-groupss">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username">

                </div>
                <div class="input-groupss">
                    <label for="nrp">nrp</label>
                    <input type="text" class="form-control" name="nrp" id="nrp">

                </div>
                <div class="input-groupss">
                    <label for="email">email</label>
                    <input type="email" class="form-control" name="email" id="email">

                </div>
                <div class="input-groupss">
                    <label for="jurusan">jurusan</label>
                    <input type="text" class="form-control" name="jurusan" id="jurusan">

                </div>
                <div class="input-groupss">
                    <label for="gambar">gambar</label>
                    <input type="file" class="form-control" name="file" id="">

                </div>
                <button class="mt-3 btn btn-primary">Submit</button>
            </form>
        </div>
    </main>

</body>

</html>