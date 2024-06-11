<?php
include "../service/database.php";
$produk = getDataProduk($db);

if ($produk->num_rows != 0) {
?>
    <div class="my-5" id="content">
        <div class="d-flex flex-column justify-content-center">
            <div class="d-flex flex-row justify-content-center m-5">
                <h1 class="p-5 rounded-pill text-light fs-3" style="background-color: rgb(171, 71, 190);"><i class="bi bi-bag-fill m-4"></i>Temukan produk keinginan anda !</i></h1>
            </div>
        </div>
        <div class="d-flex flex-row flex-wrap justify-content-center">
            <?php while ($row = $produk->fetch_assoc()) { ?>
                <div class="card border-0 shadow m-4 d-flex justify-content-center" style="width:18rem; height:fit-content; cursor:pointer;">
                    <div class="d-flex flex-row justify-content-center">
                        <img class="p-4" src="<?php echo $row["image"] ?>" width="250px">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex flex-row justify-content-center">
                            <h5 class="card-title text-center"><?php echo $row["nama"] ?></h5>
                        </div>
                        <div class="d-flex flex-row justify-content-center">
                            <p class="badge badge-primary text-center my-3" style="font-size: 1rem;">Rp.<?php echo $row["harga"] ?></p>
                        </div>
                        <div class="d-flex flex-row justify-content-center">
                            <p class="text-wrap"><?php echo $row["detail"] ?></p>
                        </div>
                        <div class="d-flex flex-row justify-content-center">
                            <a href="#"" class="btn btn-primary mx-2">Beli</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } else { ?>
    <div class="my-5" id="content">
        <div class="d-flex flex-column justify-content-center">
            <div class="d-flex flex-row justify-content-center m-5">
                <h1 class="p-5 rounded-pill text-light fs-3" style="background-color: rgb(171, 71, 190);"><i class="bi bi-bag-fill m-4"></i>Temukan produk keinginan anda !</i></h1>
            </div>
        </div>
        <div class="d-flex m-5 flex-column">
            <div class="d-flex flex-column justify-content-center m-5">
                <div class="d-flex justify-content-center">
                    <i class="bi bi-cart-x-fill text-dark m-3"></i>
                </div>
                <div class="d-flex justify-content-center">
                    <h1 class="rounded-pill fs-3 text-dark">Produk belum tersedia</h1>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php } ?>