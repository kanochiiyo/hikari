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
            <h6 class="font-montserrat fw-semibold mb-2" style="color: #1a374d">About Coder →</h6>
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

  <!-- End Profile -->
</main>




<?php
include(__DIR__ . "/templates/footer.php");
?>