<?php
$username = "Bilsyp";
$password = "XIAw_UifJ/9ka@fX";
$servername = "localhost";
$databases = "phpdasar";

$conn = mysqli_connect($servername, $username, $password, $databases);
// $query = "SELECT * FROM mahasiswa";

function querys($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

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

</body>

</html>