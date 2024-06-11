<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk - IchaShop</title>
    <?php
    include "../../user/bootstrap.php";
    include "../../../service/database.php";
    include "../../../service/session.php";
    $session = new Session();

    //Check privillage
    $role = $session->getSession("role", true);
    if ($role == "user") {
        $session->navigate("./MainPage.php");
    } else if ($role == null || empty($role)) {
        $session->navigate("../index.php");
    }

    //Check Insert Data
    if (isset($_POST["update"])) {
        $id = $_GET["id"];
        $barang = $_POST["nama_barang"];
        $kategori = isset($_POST["kategori_barang"]) ? $_POST["kategori_barang"] : '';
        $harga = $_POST["harga_barang"];
        $gambar = $_FILES["gambar_barang"];
        $gambar_temp = $_FILES["gambar_barang"]["tmp_name"];
        $gambar_name = $_FILES["gambar_barang"]["name"];
        $detail = $_POST["deskripsi_barang"];
        $gambar_des_data = "../../../img/" . $gambar_name;
        $gambar_des = "../../img/" . $gambar_name;

        if ($barang == "" || $kategori == "" || $harga == "" || $gambar == null || $detail == "") {
            $session->alert("Form tidak boleh ada yang kosong");
        } else {
            if (move_uploaded_file($gambar_temp, $gambar_des_data)) {
                try {
                    if (updateDataProduk($db, $id, $barang, $kategori, $harga, $gambar_des, $detail)) {
                        $session->navigate("../../../page/menu_admin/data_produk.php");
                        $session->setSession("message", "Edit Berhasil !", true);
                        $session->fixResub();
                    } else {
                        $session->alert("Upload gagal !");
                    }
                } catch (Exception $e) {
                    $session->alert("Nama barang tidak boleh sama !");
                }
            } else {
                $session->alert("Upload Gagal !");
            }
        }
    }

    if(isset($_POST["back"])){
        $session->navigate("../../../page/menu_admin/data_produk.php");
    }

    ?>
</head>

<body style="background-color: rgb(105, 27, 121);">
    <div class="container d-flex flex-column justify-content-center min-vh-100 align-items-center">
        <form class="d-flex flex-row justify-content-center p-5" method="POST">
            <button type="submit" name="back" class="btn btn-primary d-flex align-items-center"><i class="px-2 bi bi-arrow-left d-flex flex-row justify-content-center"></i>Kembali</button>
        </form>
        <div class="card d-flex flex-row justify-content-center border-0 shadow">
            <form class="p-5 d-flex justify-content-center" method="POST" enctype="multipart/form-data">
                <div class="d-flex flex-column justify-content-center text-center">
                    <div class="mb-3">
                        <h2 class="text-center text-dark">Edit Produk</h2>
                    </div>
                    <div class="mb-3">
                        <input placeholder="Nama barang" type="text" class="form-control" name="nama_barang" />
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="kategori_barang" id="kategori">
                            <option value="" selected disabled hidden>Kategori</option>
                            <option value="1">Baju</option>
                            <option value="2">Celana</option>
                            <option value="3">Akresoris</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input placeholder="Harga" type="number" class="form-control" name="harga_barang" />
                    </div>
                    <div class="mb-3">
                        <input placeholder="Image" type="file" class="form-control" name="gambar_barang" />
                    </div>
                    <div class="mb-3">
                        <textarea placeholder="Detail Deskripsi" type="text" style="resize:none; height:200px;" class="form-control" name="deskripsi_barang"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="update" class="btn btn-primary">Edit produk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>