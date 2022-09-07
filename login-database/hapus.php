<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require 'function.php';

    $id = $_GET['id'];

    if (hapus($id) > 0) {
        # code...
        echo "
        <script>

        alert('DATA BERHASIL DIhapus');

        document.location.href = 'login.php';

        </script>
        
        ";
    } else {
        echo "
        <script>

        alert('DATA GAGAL DIHAPUS');

        </script>
        
        ";
    }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>