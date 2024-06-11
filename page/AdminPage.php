<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin - IchaShop</title>
    <?php
    include "../layout/user/bootstrap.php";
    include "../service/session.php";
    include "../service/database.php";
    $session = new Session();

    //fix resubmission
    // $session->fixResub();

    $produk = getDataProduk($db);

    path("../layout/user/style.css");
    
    //memulai sesi
    $session->init();

    $session->getSession("message", false);

    if (!isset($_SESSION['message'])) {
        $session->setSession('message', null, false);
    } else if (isset($_SESSION['message'])) {
        echo "<script>alert('" . $session->getSession("message", false) . "')</script>";
        $session->setSession('message', null, false);
    }

    //protect privillage
    $role = $session->getSession("role", false);
    if ($role == "user") {
        $session->navigate("./MainPage.php");
    } else if ($role == null || empty($role)) {
        $session->navigate("../index.php");
    }

    if (isset($_POST["logout"])) {
        $session->setSession("role", null, false);
        $session->navigate("../index.php");
    }
    if (isset($_POST["tambah"])) {
        $session->navigate("../layout/admin/crud/create.php");
    }

    ?>
</head>

<body id="AdminPage">
    <div class="container p-5">
        <div id="liveAlertPlaceholder"></div>
        <div class="container d-flex flex-column">
            <h1 class="text-center text-light">Halaman Admin - IchaShop</h1>
            <form class="d-flex flex-row border-0 justify-content-center" method="POST">
                <button type="submit" name="logout" class="btn btn-danger mb-5">Logout</button>
            </form>

        </div>
        <div class="container-fluid d-flex flex-row flex-wrap justify-content-center">
            <div class="container-fluid d-flex flex-row justify-content-center pt-5 pb-3 text-light">
                <div class="d-flex flex-column justify-content-center">
                    <div class="d-flex">
                        <h2>Preview produk</h2>
                    </div>
                    <div class="d-flex justify-content-center pt-5">
                        <form class="" method="POST">
                            <button type="submit" name="tambah" class="btn btn-primary"><i class="bi bi-plus d-flex flex-row justify-content-center"></i>Tambah barang</button>
                        </form>
                    </div>
                </div>
            </div>

            <?php include "../layout/admin/content.php" ?>
        </div>
    </div>
</body>

</html>