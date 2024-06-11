<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin - IchaShop</title>
    <?php
    include "..\layout\user\bootstrap.php";
    include "..\service\session.php";
    include "..\service\database.php";
    $session = new Session();

    //fix resubmission
    // $session->fixResub();

    path("../layout/user/style.css");

    //memulai sesi
    $session->init();

    //protect privillage
    $role = $session->getSession("role", false);
    if ($role == "user") {
        $session->navigate("./MainPage.php");
    } else if ($role == null || empty($role)) {
        $session->navigate("../index.php");
    }

    //Logout
    if (isset($_POST["logout"])) {
        $session->setSession("role", null, false);
        $session->navigate("../index.php");
    }

    //Menu
    if (isset($_POST["dt_produk"])) {
        $session->navigate("./menu_admin/data_produk.php");
    }
    if (isset($_POST["dt_penjualan"])) {
        $session->navigate("./menu_admin/data_penjualan.php");
    }
    if (isset($_POST["dt_pelanggan"])) {
        $session->navigate("./menu_admin/data_pelanggan.php");
    }
    if (isset($_POST["dt_pesanan"])) {
        $session->navigate("./menu_admin/data_pesanan.php");
    }
    ?>
</head>

<body id="AdminPage">
    <div class="d-flex flex-column">
        <div class="d-flex flex-row min-vh-100">
            <div class="d-flex" style="width:25%">
                <?php include "../layout/admin/sidebar.php" ?>
            </div>
            <div class="d-flex flex-column" style="width:100%">
                <div class="d-flex flex-row justify-content-center p-5">
                    <div class="d-flex flex-column justify-content-center align-items-center" style="padding-top:100px;">
                        <h1 class="font-weight-bold text-light text-center">Welcome to Admin</h1>
                        <i class="bi bi-bag-heart text-center text-light" style="font-size: 250pt;"></i>
                        <h1 class="font-weight-bold text-light text-center" style="font-size:64pt;">IchaShop</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>