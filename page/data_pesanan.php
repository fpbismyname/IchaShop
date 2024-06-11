<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data pesanan - IchaShop</title>
    <?php
    include "../layout/user/bootstrap.php";
    include "../service/session.php";
    include "../service/database.php";

    $session = new Session();
    //memulai sesi
    $session->init();
    //protect privillage
    $role = $session->getSession("role", false);
    if ($role == "user") {
        $session->navigate("./MainPage.php");
    } else if ($role == null || empty($role)) {
        $session->navigate("../index.php");
    }


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
                    <h1 class="p-4 rounded-pill text-light fs-3" style="background-color: rgb(171, 71, 190);"><i class="bi bi-cart-fill m-2"></i>Data Pesanan</i></h1>
                </div>
                <div class="d-flex m-5">
                    <table class="table table-borderless table-striped table-hover">
                        <tr>
                            <th>No.</th>
                            <th>Nama Barang</th>
                            <th>Nama Pembeli</th>
                            <th>Nomor Pembeli</th>
                            <th>Qty</th>
                            <th>Total Harga</th>
                            <th>Keterangan</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Kemeja Lengan Panjang</td>
                            <td>Ahmad</td>
                            <td>081234567890</td>
                            <td>2</td>
                            <td>Rp. 500,000.00</td>
                            <td><span class="badge badge-success rounded-pill d-inline">Sudah Bayar</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Celana Jeans</td>
                            <td>Budi</td>
                            <td>085678901234</td>
                            <td>1</td>
                            <td>Rp. 300,000.00</td>
                            <td><span class="badge badge-warning rounded-pill d-inline">Belum Bayar</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Dress Wanita</td>
                            <td>Cici</td>
                            <td>081111111111</td>
                            <td>1</td>
                            <td>Rp. 800,000.00</td>
                            <td><span class="badge badge-success rounded-pill d-inline">Sudah Bayar</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Kaos Oblong</td>
                            <td>Diana</td>
                            <td>085555555555</td>
                            <td>1</td>
                            <td>Rp. 150,000.00</td>
                            <td><span class="badge badge-warning rounded-pill d-inline">Belum Bayar</span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Jaket Kulit</td>
                            <td>Eko</td>
                            <td>081222222222</td>
                            <td>2</td>
                            <td>Rp. 1,200,000.00</td>
                            <td><span class="badge badge-success rounded-pill d-inline">Sudah Bayar</span></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Rok Wanita</td>
                            <td>Fani</td>
                            <td>085666666666</td>
                            <td>1</td>
                            <td>Rp. 400,000.00</td>
                            <td><span class="badge badge-warning rounded-pill d-inline">Belum Bayar</span></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Sepatu Sneakers</td>
                            <td>Gina</td>
                            <td>081333333333</td>
                            <td>1</td>
                            <td>Rp. 600,000.00</td>
                            <td><span class="badge badge-success rounded-pill d-inline">Sudah Bayar</span></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Tas Wanita</td>
                            <td>Hana</td>
                            <td>085777777777</td>
                            <td>2</td>
                            <td>Rp. 900,000.00</td>
                            <td><span class="badge badge-warning rounded-pill d-inline">Belum Bayar</span></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Kemeja Polo</td>
                            <td>Ivan</td>
                            <td>081444444444</td>
                            <td>1</td>
                            <td>Rp. 450,000.00</td>
                            <td><span class="badge badge-success rounded-pill d-inline">Sudah Bayar</span></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Celana Training</td>
                            <td>Joko</td>
                            <td>085888888888</td>
                            <td>1</td>
                            <td>Rp. 250,000.00</td>
                            <td><span class="badge badge-warning rounded-pill d-inline">Belum Bayar</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>