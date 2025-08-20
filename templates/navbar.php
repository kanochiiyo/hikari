<?php
require_once(__DIR__ . "/../functions/authentication.php");
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg fixed-top font-montserrat 
  <?php if ($currentPage !== 'index.php')
    echo 'navbar-solid'; ?>">

  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="assets/logo.png" alt="HIKARI LOGO"></a>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav justify-content-center flex-grow-1 par-text">
        <li class="nav-item">
          <a class="nav-link <?php if ($currentPage === 'index.php')
            echo 'active'; ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($currentPage === 'about.php')
            echo 'active'; ?>" href="about.php">Tentang
            Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#products">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#contact">Kontak</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Artikel
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="artikel.php?kategori=destinasi">Destinasi Populer</a></li>
            <li><a class="dropdown-item" href="artikel.php?kategori=tips">Tips Traveling</a></li>
            <li><a class="dropdown-item" href="artikel.php?kategori=kuliner">Kuliner Jepang</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="artikel.php">Lihat Semua Artikel</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <?php if (isLogged()) { ?>
      <a class="navbar-brand text-decoration-none font-montserrat text-white" href="logout.php">Logout</a>
    <?php } else { ?>
      <a class="navbar-brand text-decoration-none font-montserrat text-white" href="login.php">Login</a>
    <?php } ?>
  </div>
</nav>