<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data penjualan- IchaShop</title>
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
                    <h1 class="p-4 rounded-pill text-light fs-3" style="background-color: rgb(171, 71, 190);"><i class="bi bi-tag-fill m-2"></i>Data Penjualan</i></h1>
                </div>
                <div class="d-flex m-5">
                    <table class="table table-borderless table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Penjual</th>
                                <th scope="col">Barang Terjual</th>
                                <th scope="col">Omset</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ahmad</td>
                                <td>50</td>
                                <td>Rp. 2,500,000.00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Budi</td>
                                <td>30</td>
                                <td>Rp. 1,500,000.00</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Cici</td>
                                <td>20</td>
                                <td>Rp. 1,000,000.00</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Diana</td>
                                <td>40</td>
                                <td>Rp. 2,000,000.00</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Eko</td>
                                <td>35</td>
                                <td>Rp. 1,750,000.00</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Fani</td>
                                <td>25</td>
                                <td>Rp. 1,250,000.00</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Gina</td>
                                <td>45</td>
                                <td>Rp. 2,250,000.00</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Hana</td>
                                <td>30</td>
                                <td>Rp. 1,500,000.00</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Ivan</td>
                                <td>20</td>
                                <td>Rp. 1,000,000.00</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Joko</td>
                                <td>40</td>
                                <td>Rp. 2,000,000.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>