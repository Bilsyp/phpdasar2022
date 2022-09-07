<!DOCTYPE html>
<html lang="en">

<?php
require "function.php";

if (isset($_POST["submit"])) {
    // var_dump($_POST);


    // cek apakah data berhasil di tambahankan atau tidak;

    if (tambah($_POST) > 0) {
        # code...
        echo "
        <script>

        alert('DATA BERHASIL DITAMBAHKAN');

        document.location.href = 'login.php';

        </script>
        
        ";
    } else {
        echo "
        <script>

        alert('DATA GAGAL DITAMBAHKAN');

        </script>
        
        ";
    }
}

?>

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
</style>

<body>
    <div class="container">
        <h1 class="text-center">Tambah Data <span class="text-primary">Mahasiswa</span></h1>
        <div class="card bg-dark text-light p-4 ">
            <form action="" method="POST">
                <div class="input-groupss">
                    <label for="nama">Nama</label>
                    <input type="text" required class="form-control" name="nama" id="nama">

                </div>
                <div class="input-groupss">
                    <label for="nrp">nrp</label>
                    <input type="text" required class="form-control" name="nrp" id="nrp">

                </div>
                <div class="input-groupss">
                    <label for="email">email</label>
                    <input type="email" required class="form-control" name="email" id="email">

                </div>
                <div class="input-groupss">
                    <label for="jurusan">jurusan</label>
                    <input type="text" required class="form-control" name="jurusan" id="jurusan">

                </div>
                <div class="input-groupss">
                    <label for="gambar">gambar</label>
                    <input type="file" class="form-control" name="gambar" id="gambar">

                </div>
                <button class="mt-3 btn btn-primary" type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>