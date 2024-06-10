<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IchaShop - LoginPage</title>
    <!-- logika login  -->
    <?php
    include "./layout/bootstrap.php";
    include "./service/database.php";
    include "./service/session.php";
    path("./layout/style.css");


    $session = new Session();
    
    //Setup Login
    if (isset($_POST["login"])) {
        echo $session->login($_POST["username"], $_POST["password"], $db);
    }

    //Show popup setelah berhasil daftar
    if (isset($_SESSION["regis"])) {

        $registered = $_SESSION["regis"];
        if ($registered) {
            echo "<script>alert('Daftar berhasil !')</script>";
            unset($_SESSION["regis"]);
        }
    }
    ?>
</head>

<body id="LoginPage">
    <div class="container d-flex flex-column min-vh-100 align-items-center justify-content-center">
        <div class="card p-5">
            <div class="text-center mb-5">
                <i class="bi bi-person-circle"></i>
                <h5 class="text-center font-weight-bold">Login ke IchaShop</h5>
            </div>
            <form action="index.php" method="POST">
                <div class="mb-2">
                    <input class="form-control" placeholder="Username" type="text" name="username" autocomplete="off" />
                </div>
                <div class="mb-2">
                    <input class="form-control" placeholder="Password" type="password" name="password" />
                </div>
                <div class="d-flex justify-content-center mb-5">
                    <input class="btn btn-primary font-weight-bold" type="submit" value="Masuk" name="login" />
                </div>
                <div class="mb-2">
                    <p>Belum punya akun ? <a class="card-link" href="./register.php">Daftar disini</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>