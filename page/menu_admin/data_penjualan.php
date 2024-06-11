<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data penjualan- IchaShop</title>
    <?php
    include "../../layout/user/bootstrap.php";
    include "../../service/session.php";
    include "../../service/database.php";

    $session = new Session();
    //memulai sesi
    $session->init();

    if (isset($_POST["dt_produk"])) {
        $session->navigate("./data_produk.php");
    }
    if (isset($_POST["dt_penjualan"])) {
        $session->navigate("./data_penjualan.php");
    }
    if (isset($_POST["dt_pelanggan"])) {
        $session->navigate("./data_pelanggan.php");
    }
    if (isset($_POST["dt_pesanan"])) {
        $session->navigate("./data_pesanan.php");
    }

    //Logout
    if (isset($_POST["logout"])) {
        $session->setSession("role", null, false);
        $session->navigate("../../index.php");
    }

    //Message
    $session->getSession("message", false);

    if (!isset($_SESSION['message'])) {
        $session->setSession('message', null, false);
    } else if (isset($_SESSION['message'])) {
        echo "<script>alert('" . $session->getSession("message", false) . "')</script>";
        $session->setSession('message', null, false);
    }
    ?>
</head>

<body style="background-color: rgb(105, 27, 121);">
    <div class="d-flex flex-column">
        <div class="d-flex flex-row min-vh-100">
            <div class="d-flex" style="width:25%">
                <?php include "../../layout/admin/sidebar.php" ?>
            </div>
            <div class="d-flex flex-column" style="width:100%">
            </div>
        </div>
    </div>
</body>

</html>