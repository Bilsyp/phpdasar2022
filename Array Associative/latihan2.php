<?php

// if (!isset($_GET["jurusan"])) {
//     # code...
//     header("Location: latihan.php");
//     exit;
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h1><?= $_GET["name"]; ?></h1>
        <h1><?php echo $_GET["jurusan"]; ?></h1>
        <a href="latihan.php">Kembali</a>
    </div>


</body>

</html>