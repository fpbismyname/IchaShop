<?php
include "../service/database.php";
$produk = getDataProduk($db);
?>
<div class="container-fluid" id="content">
    <div class="d-flex flex-column justify-content-center p-5">
        <i class="bi bi-basket-fill text-center p-3" style="font-size:54px"></i>
        <h1 class="text-center">Temukan barang keinginan anda disini</h1>
    </div>
    <div class="container d-flex flex-row flex-wrap justify-content-center">
        <?php while ($row = $produk->fetch_assoc()) { ?>
            <div class="card border-0 shadow m-4 d-flex p-2" style="width:18rem; height:fit-content; cursor:pointer;">
                <div class="d-flex flex-row justify-content-center">
                    <img class="card-image-top" src="<?php echo $row["image"]?>" width="250px">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $row["nama"] ?></h5>
                    <p class="card-subtitle text-center p-3">Rp.<?php echo $row["harga"] ?></p>
                    <p class="text-wrap"><?php echo $row["detail"] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>