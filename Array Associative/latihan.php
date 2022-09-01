<?php
$username = "ACIU";
$password = "5678";

$array = [[
    "name" => "Bilal Syahputra",
    "jurusan" => "Teknologi informasi"
], [
    "name" => "Agus",
    "jurusan" => "Teknologi Mesin"
]]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>

</head>


<body>


    <?php foreach ($array as $item) : ?>
    <a class="text-info"
        href="latihan2.php?name=<?php echo $item["name"]; ?>&jurusan=<?php echo $item["jurusan"]; ?>"><?php echo $item["name"]; ?></a>
    <?php endforeach; ?>
</body>

</html>