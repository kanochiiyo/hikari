<?php
include(__DIR__ . "/templates/header.php");
include(__DIR__ . "/templates/navbar.php");
?>

<main>
  <!-- Hero -->
  <section class="hero" id="hero">
    <div class="container d-flex flex-column justify-content-center text-start text-white">
      <h5 class="font-montserrat">HIKARI TRAVEL</h5>
      <h1 class="headline display-4 fw-bold font-poppins">Temukan Cahaya Baru di Jepang</h1>
      <h3 class="lead font-montserrat">Jelajahi keindahan otentik, dari kota modern hingga kuil kuno bersama kami.</h3>
    </div>
  </section>
  <!-- End Hero -->

  <!-- Profile -->
  <section class="profile" id="profile">
    <div class="container-fluid p-5">
      <div class="row g-4">

        <!-- Col 1+2: Gallery gabung jadi 6 kolom -->
        <div class="col-md-6 d-flex">
          <!-- Bagian kiri: kotak kecil -->
          <div class="d-flex flex-column me-3" style="flex: 1;">
            <div class="bg-secondary mb-3" style="height:180px;"></div>
            <div class="bg-secondary mb-3" style="height:180px;"></div>
            <div class="d-flex justify-content-between">
              <div class="bg-secondary" style="height:180px; width:48%;"></div>
              <div class="bg-secondary" style="height:180px; width:48%;"></div>
            </div>
          </div>
          <!-- Bagian kanan: kotak tinggi -->
          <div class="bg-secondary" style="flex: 1; height:580px;"></div>
        </div>

        <!-- Col 3: Teks -->
        <div class="col-md-6 d-flex align-items-center">
          <div class="ps-md-5">
            <h6 class="font-montserrat fw-semibold mb-2" style="color: #e5b84b">About Coder →</h6>
            <h2 class="display-4 fw-bold font-poppins mb-3">
              Most Trusted <br>
              <span class="text-dark">Japanese Travel Agent</span>
            </h2>
            <p class="font-montserrat text-secondary mb-4">
              Kami adalah penyedia layanan tour Jepang yang menghadirkan pengalaman
              liburan tak terlupakan dengan paket wisata tematik, pemandu profesional,
              dan mitra lokal terpercaya. Lorem ipsum dolor sit amet, consectetur
              adipiscing elit. Lorem ipsum dolor sit amet consectetur.
            </p>
            <a href="#contact" class="btn btn-danger btn-lg px-4">Read more</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- add kelebihan, pengalaman angka counter -->
  <!-- End Profile -->

  <!-- Products -->
  <section class="products py-5 bg-light" id="products">
    <div class="container">
      <div class="row mb-4 text-center">
        <div class="col">
          <h5 class="font-montserrat text-primary fw-semibold">PAKET TOUR</h5>
          <h2 class="display-6 fw-bold font-poppins">Pilih Petualangan Anda Berikutnya</h2>
        </div>
      </div>

      <?php
      $packages = [
        [
          "gambar" => "assets/package-1.png",
          "judul" => "Winter Wonderland di Hokkaido",
          "harga" => 15500000,
          "durasi" => "5 Hari 4 Malam",
          "rating" => 4.8
        ],
        [
          "gambar" => "assets/package-2.png",
          "judul" => "Pesona Klasik Kyoto & Osaka",
          "harga" => 12800000,
          "durasi" => "4 Hari 3 Malam",
          "rating" => 4.9
        ],
        [
          "gambar" => "assets/package-3.png",
          "judul" => "Jelajah Metropolitan Tokyo",
          "harga" => 11500000,
          "durasi" => "4 Hari 3 Malam",
          "rating" => 4.7
        ],
      ];
      ?>

      <div class="row g-4">
        <?php foreach ($packages as $pkg): ?>
          <div class="col-md-6 col-lg-4">
            <div class="card product-card h-100 shadow-sm border-0">
              <div class="product-card-img-container">
                <img src="<?= $pkg['gambar'] ?>" class="card-img-top"
                  alt="<?= $pkg['judul'] ?>">
                <div class="product-card-rating">
                  <i class="fa fa-star"></i> <?= $pkg['rating'] ?>
                </div>
              </div>  
              <div class="card-body d-flex flex-column">
                <h5 class="card-title font-poppins fw-bold"><?= $pkg['judul'] ?></h5>
                <p class="card-text font-montserrat text-secondary small mb-3">
                  <i class="fa fa-clock me-1"></i> <?= $pkg['durasi'] ?>
                </p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                  <p class="mb-0 font-poppins fw-bold fs-5 text-primary">
                    Rp <?= number_format($pkg['harga'], 0, ',', '.') ?>
                  </p>
                  <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- End Products -->

  <!-- Gallery  -->
  <!-- End Gallery -->

  <!-- Client Testimonial -->
  <!-- End Client Testimonial -->

  <!-- Contact -->
  <!-- End Contact -->
</main>


<?php
include(__DIR__ . "/templates/footer.php");
?>