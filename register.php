<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IchaShop - LoginPage</title>
    <!-- logika daftar -->
    <?php
    include "./layout/user/bootstrap.php";
    include "./service/database.php";
    include "./service/session.php";
    path("./layout/user/style.css");
    $session = new Session();

    //register
    if (isset($_POST["daftar"])) {
        $session->register($_POST["username"], $_POST["password"], $_POST["email"], $db);
    }

    //Protected privillage
    //protect privillage
    $role = $session->getSession("role", true);
    if ($role == "admin"){
        $session->navigate("./page/AdminPage.php");
    } else if ($role == "user") {
        $session->navigate("./page/MainPage.php");
    }
    ?>
</head>

<body id="RegisterPage">
    <div class="container d-flex min-vh-100 align-items-center justify-content-center">
        <div class="card p-5">
            <div class="text-center mb-5">
                <i class="bi bi-person-add"></i>
                <h5 class="text-center font-weight-bold">Daftar ke IchaShop</h5>
            </div>
            <form action="register.php" method="POST">
                <div class="mb-2">
                    <input class="form-control" placeholder="Username" type="text" name="username" autocomplete="off" />
                </div>
                <div class="mb-2">
                    <input class="form-control" placeholder="Password" type="password" name="password" />
                </div>
                <div class="mb-2">
                    <input class="form-control" placeholder="Email" type="email" name="email" />
                </div>
                <div class="d-flex justify-content-center mb-5">
                    <input class="btn btn-primary font-weight-bold" type="submit" value="Daftar" name="daftar" />
                </div>
                <div class="mb-2">
                    <p>Sudah punya akun ? <a class="card-link" href="./index.php">Masuk disini</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>