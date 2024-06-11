<?php
if (isset($_POST["logout"])) {
  $session->setSession("role", null, true);
  $session->navigate("../index.php");
}
?>
<nav class="navbar navbar-expand sticky-top">
  <i class="bi bi-bag-heart-fill d-flex mx-3 text-light"></i>
  <div class="container-fluid ml-0">
    <a class="navbar-brand font-weight-bold" href="../page/Mainpage.php">IchaShop</a>
    <div class="d-flex">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../page/Mainpage.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../page/produk.php">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../page/kategori.php">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../page/kontak.php">Kontak</a>
        </li>
        <form method="POST" class="d-flex mx-2">
          <input class="btn btn-sm btn-outline-warning" type="submit" name="logout" value="Logout" />
        </form>
    </div>
  </div>
</nav>