<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data pelanggan - IchaShop</title>
    <?php
    include "../layout/user/bootstrap.php";
    include "../service/session.php";
    include "../service/database.php";

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
        $session->navigate("../index.php");
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
                <?php include "../layout/admin/sidebar.php" ?>
            </div>
            <div class="d-flex flex-column p-5" style="width:100%">
                <div class="d-flex flex-row justify-content-center mt-5">
                    <h1 class="p-4 rounded-pill text-light fs-3" style="background-color: rgb(171, 71, 190);"><i class="bi bi-people-fill m-2"></i>Data Pembelian</i></h1>
                </div>
                <div class="d-flex m-5">
                    <table class="table table-borderless table-striped table-hover">
                        <tr>
                            <th>No.</th>
                            <th>Nama Pelanggan</th>
                            <th>Nomor HP</th>
                            <th>Jumlah Pembelian</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Ahmad</td>
                            <td>081234567890</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Budi</td>
                            <td>085678901234</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Cici</td>
                            <td>081111111111</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Diana</td>
                            <td>085555555555</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Eko</td>
                            <td>081222222222</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Fani</td>
                            <td>085666666666</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Gina</td>
                            <td>081333333333</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Hana</td>
                            <td>085777777777</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Ivan</td>
                            <td>081444444444</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Joko</td>
                            <td>085888888888</td>
                            <td>6</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>