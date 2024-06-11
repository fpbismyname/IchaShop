<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus produk</title>
    <?php
    include "../../user/bootstrap.php";
    include "../../../service/database.php";
    include "../../../service/session.php";
    $session = new Session();

    $id = $_GET["id"];
    $nama = $_GET["name"];

    if (isset($_POST["yakin"])) {
        if (deleteProduk($db, $id)) {
            $session->navigate("../../../page/data_produk.php");
            $session->setSession("message", "Hapus Berhasil !", true);
            // $session->fixResub();
        } else {
            $session->alert("Hapus Gagal !");
        }
    }
    if (isset($_POST["batal"])) {
        $session->navigate("../../../page/data_produk.php");
        $session->fixResub();
    }

    ?>
</head>

<body style="background-color: rgb(105, 27, 121)">
    <div class="container d-flex flex-column min-vh-100 align-items-center justify-content-center">
        <div class="card p-5">
            <div class="text-center mb-5">
                <i class="bi bi-exclamation-circle-fill" style="font-size:34pt"></i>
                <h5 class="text-center font-weight-bold">Apakah anda yakin ingin menghapus</h5>
                <h5 class="text-center font-weight-bold"><?php echo $nama ?> ?</h5>
            </div>
            <form method="POST">
                <div class="d-flex flex-row justify-content-center mb-5">
                    <input class="btn btn-primary font-weight-bold m-2" type="submit" value="Yakin" name="yakin" />
                    <input class="btn btn-danger font-weight-bold m-2" type="submit" value="Batal" name="batal" />
                </div>
            </form>
        </div>
    </div>
</body>

</html>