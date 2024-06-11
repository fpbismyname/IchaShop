<?php try {
    while ($row = $produk->fetch_assoc()) { ?>
        <div class="card border-0 shadow m-4 d-flex p-2 text-center" style="width:18rem; height:fit-content; cursor:pointer;">
            <div class="d-flex flex-row justify-content-center">
                <img class="card-image-top" src="<?php echo $row["image"] ?>" width="250px">
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
<?php }
} catch (Exception $e) {
    $session->fixResub();
} ?>