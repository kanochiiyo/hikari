<?php
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
      </ul>
    </div>

    <a class="navbar-brand text-decoration-none font-montserrat text-white" href="login.php">Sign In</a>
  </div>
</nav>