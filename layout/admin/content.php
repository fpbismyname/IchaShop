<?php
try {

    if ($produk->num_rows != 0) {
        while ($row = $produk->fetch_assoc()) { ?>
            <div class="card border-0 shadow m-4 d-flex p-2 text-center" style="width:18rem; height:fit-content; cursor:pointer;">
                <div class="d-flex flex-row justify-content-center">
                    <img class="card-image-top" src="<?php echo $row["image"] ?>" width="250px">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $row["nama"] ?></h5>
                    <p class="card-subtitle text-center p-3">Rp.<?php echo $row["harga"] ?></p>
                    <p class="text-wrap"><?php echo $row["detail"] ?></p>
                    <a href="../layout/admin/crud/update.php?id=<?php echo $row["id"] ?>" class="btn btn-primary mx-2">Edit</a>
                    <a href="../layout/admin/crud/delete.php?id=<?php echo $row["id"] ?>&name=<?php echo $row["nama"] ?>" #" class="btn btn-danger mx-2">Delete</a>
                </div>
            </div>
        <?php
        }
    } else {
        ?>
        <div class="d-flex m-5 flex-column">
            <div class="d-flex flex-column justify-content-center m-5">
                <div class="d-flex justify-content-center">
                    <i class="bi bi-cart-x-fill text-light m-3 fs-1"></i>
                </div>
                <div class="d-flex justify-content-center">
                    <h1 class="rounded-pill fs-3 text-light">Produk belum ditambahkan</h1>
                </div>
            </div>
        </div>
<?php    }
} catch (Exception $e) {
    $session->fixResub();
} ?>