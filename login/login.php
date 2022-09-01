<!DOCTYPE html>
<?php if (isset($_POST["submit"])) {
    # code...
    // cek username dan password
    if ($_POST["username"] == "admin" && $_POST['password'] == "123") {
        # code...
        header("Location: admin.php");
        exit;
    } else {
        $err = true;
    }
} ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Framework/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../Framework/fontawesome/css/all.css">
</head>
<style>
label {
    display: block !important;
    padding-bottom: 20px;
}

body {
    background: url("../img/why.jpg") center center/cover;
    height: 100vh;

}

.card {
    background: rgba(0, 0, 0, 0.4) !important;
    transition: 850ms;
}

.card:hover {
    border: 1px solid white !important;
}

input {
    background: rgba(0, 0, 0, 0.4) !important;
    color: white !important;

}

.card-content[data-visible="false"] {
    display: none;

}

.card:hover .card-content[data-visible="false"] {
    display: block;

}
</style>

<body>
    <div class="container">
        <div class="card  text-light mt-5">
            <div class="card-body">
                <h1 class=" text-center">Login <span class="text-primary">F</span>orm</h1>
                <!-- // ! sadasdasdasd todo  -->
                <?php
                if (isset($err)) : ?>
                <h1 class="text-danger">Password / Username Salah</h1>
                <?php endif ?>

                <form method="POST">
                    <div class="input-groups mt-4">
                        <label for="Username" class="form-label">Username</label>
                        <input class="form-control" name="username" type="text" placeholder="Username" required
                            name="username" id="Username">
                    </div>
                    <div class="input-groups mt-4">
                        <label for="Email">Email</label>
                        <input class="form-control" name="email" type="email" placeholder="Email" id="Email">
                    </div>
                    <div class="input-groups mt-4">
                        <label for="password">Password</label>
                        <input class="form-control" required name="password" type="password" placeholder="Password"
                            id="password">
                    </div>
                    <div class="info d-flex justify-content-between align-items-center">
                        <button type="submit" name="submit" class="btn btn-primary mt-2">Login</button>
                        <button class="btn btn-info mt-2 text-light">Sign Up</button>

                    </div>

                </form>
            </div>
        </div>

    </div>
</body>

</html>