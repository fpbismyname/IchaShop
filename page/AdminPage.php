<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin - IchaShop</title>
    <?php
    include "../layout/bootstrap.php";
    include "../service/session.php";
    include "../service/database.php";
    $produk = getDataProduk($db);
    $session = new Session();

    path("../layout/style.css");

    //protect privillage
    $role = $session->getSession("role", true);
    if ($role == "user") {
        $session->navigate("./MainPage.php");
    } else if ($role == null || empty($role)) {
        $session->navigate("../index.php");
    }

    if (isset($_POST["logout"])) {
        $session->setSession("role", null, true);
        $session->navigate("../index.php");
    }

    ?>
</head>

<body id="AdminPage">
    <div class="container">
        <div class="container">
            <div class="container-fluid p-5">
                <h1 class="text-center text-light">Halaman Admin - IchaShop</h1>
                <form class="d-flex flex-row border-0 justify-content-center" method="POST">
                    <button type="submit" name="logout" class="btn btn-danger mb-5">Logout</button>
                </form>
                <div class="container d-flex flex-row justify-content-center">
                    <div class="card d-flex flex-row justify-content-center border-0 shadow">
                        <form class="p-5 d-flex justify-content-center" method="POST">
                            <div class="d-flex flex-column justify-content-center text-center">
                                <div class="mb-3">
                                    <h2 class="text-center text-dark">Tambah Barang</h2>
                                </div>
                                <div class="mb-3">
                                    <input placeholder="Kategori" type="option" class="form-control"/>
                                </div>
                                <div class="mb-3">
                                    <input placeholder="Nama barang" type="text" class="form-control"/>
                                </div>
                                <div class="mb-3">
                                    <input placeholder="Harga" type="number" class="form-control"/>
                                </div>
                                <div class="mb-3">
                                    <input placeholder="Image" type="file" class="form-control"/>
                                </div>
                                <div class="mb-3">
                                    <textarea placeholder="Detail Deskripsi" type="text" style="resize:none; height:200px;" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="create" class="btn btn-primary">Tambah barang</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid d-flex flex-row flex-wrap justify-content-center">
            <?php while ($row = $produk->fetch_assoc()) { ?>
                <div class="card border-0 shadow m-4 d-flex p-2 text-center" style="width:18rem; height:fit-content; cursor:pointer;">
                <div class="d-flex flex-row justify-content-center">
                    <img class="card-image-top" src="https://learning.enggar.net/wp-content/uploads/2017/05/WebLayoutElements.png" width="250px">
                </div>
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $row["nama"] ?></h5>
                        <p class="card-subtitle text-center p-3">Rp.<?php echo $row["harga"] ?></p>
                        <p class="text-wrap"><?php echo $row["detail"] ?></p>
                        <form class="form-control border-0 justify-content-center d-flex" method="POST">
                            <button type="submit" name="update" class="btn btn-primary mx-2">Edit</button>
                            <button type="submit" name="delete" class="btn btn-danger mx-2">Delete</button>
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>