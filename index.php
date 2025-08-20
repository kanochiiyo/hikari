<?php
session_start();
include(__DIR__ . "/templates/header.php");
include(__DIR__ . "/templates/navbar.php");
require_once(__DIR__ . "/functions/authentication.php");

?>

<main>
  <section class="hero" id="hero">
    <div class="container d-flex flex-column justify-content-center text-start text-white">
      <h5 class="font-montserrat" data-aos="fade-up">HIKARI TRAVEL</h5>
      <h1 class="headline display-4 fw-bold font-poppins" data-aos="fade-up" data-aos-delay="200">Temukan Cahaya Baru di
        Jepang</h1>
      <h3 class="lead font-montserrat" data-aos="fade-up" data-aos-delay="400">Jelajahi keindahan otentik, dari kota
        modern hingga kuil kuno bersama kami.</h3>
    </div>
  </section>

  <section class="profile py-5" id="profile">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-6 d-flex" data-aos="fade-right">
          <div class="d-flex flex-column me-3" style="flex: 1;">
            <div class="gallery-container mb-3">
              <img src="assets/kyoto.jpg" alt="Jalanan di Kyoto">
            </div>
            <div class="gallery-container mb-3">
              <img src="assets/osaka.png" alt="Dotonbori Osaka">
            </div>
            <div class="d-flex justify-content-between">
              <div class="gallery-container-small">
                <img src="assets/sapporo.png" alt="Salju di Sapporo">
              </div>
              <div class="gallery-container-small">
                <img src="assets/package-4.png" alt="Hutan Bambu Arashiyama">
              </div>
            </div>
          </div>
          <div class="gallery-container-large" style="flex: 1;">
            <img src="assets/yamanashi.jpg" alt="Pemandangan Gunung Fuji">
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
          <div class="ps-lg-5">
            <h6 class="font-montserrat fw-semibold mb-2" style="color: #e5b84b">TENTANG KAMI →</h6>
            <h2 class="display-4 fw-bold font-poppins mb-3">
              Merancang Perjalanan, <br>
              <span class="text-dark">Bukan Sekadar Liburan</span>
            </h2>
            <p class="font-montserrat text-secondary mb-4">
              Di Hikari Travel, kami percaya setiap perjalanan ke Jepang adalah sebuah cerita personal. Kami hadir untuk
              membantu Anda merangkai setiap babnya, dari menemukan kuliner tersembunyi hingga merasakan ketenangan kuil
              kuno.
            </p>
            <a href="about.php" class="btn btn-primary my-3">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="products py-5 bg-light" id="products">
    <div class="container">
      <div class="row mb-4 text-center" data-aos="fade-up">
        <div class="col">
          <h5 class="font-montserrat text-sec fw-semibold">PAKET TOUR</h5>
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
        <?php foreach ($packages as $index => $pkg): ?>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
            <div class="card product-card h-100 shadow-sm border-0">
              <div class="product-card-img-container">
                <img src="<?= $pkg['gambar'] ?>" class="card-img-top" alt="<?= $pkg['judul'] ?>">
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
                  <p class="mb-0 font-poppins fw-bold fs-5 text-sec">
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


  <?php
  $gallery = [
    ["gambar" => "assets/yamanashi.jpg", "alt" => "Pemandangan Gunung Fuji"],
    ["gambar" => "assets/kyoto.jpg", "alt" => "Jalanan di Kyoto"],
    ["gambar" => "assets/osaka.png", "alt" => "Dotonbori Osaka"],
    ["gambar" => "assets/sapporo.png", "alt" => "Salju di Sapporo"],
    ["gambar" => "assets/package-1.png", "alt" => "Ski di Jepang"],
    ["gambar" => "assets/package-2.png", "alt" => "Camping di Gunung Fuji"],
    ["gambar" => "assets/package-3.png", "alt" => "Fushimi Inari Kyoto"],
    ["gambar" => "assets/package-4.png", "alt" => "Hutan Bambu Arashiyama"]
  ];
  ?>
  <section class="gallery-grid py-5" id="gallery-grid">
    <div class="container">
      <div class="row mb-4 text-center" data-aos="fade-up">
        <div class="col">
          <h2 class="display-6 fw-bold font-poppins">Galeri Perjalanan</h2>
        </div>
      </div>
      <?php if (isLogged()) { ?>
        <button class="btn btn-primary my-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUpload"
          aria-expanded="false" aria-controls="collapseUpload" data-aos="fade-up" data-aos-delay="100">
          <i class="fas fa-upload me-2"></i>Unggah Gambar
        </button>

        <div class="collapse" id="collapseUpload">
          <div class="card card-body border-2 shadow-sm mb-4 font-inter">
            <h5 class="card-title mb-3">Form Unggah Gambar Baru</h5>

            <form action="upload.php" method="POST" enctype="multipart/form-data">

              <div class="mb-3">
                <label for="formFile" class="form-label">Pilih file gambar</label>
                <input class="form-control" type="file" id="formFile" name="gambar" required>
                <div class="form-text">
                  Hanya format JPG, PNG, atau GIF yang diizinkan. Ukuran maks 1MB.
                </div>
              </div>

              <div class="mb-3">
                <label for="altText" class="form-label">Deskripsi Gambar (Alt Text)</label>
                <input type="text" class="form-control" id="altText" name="alt"
                  placeholder="Contoh: Pemandangan matahari terbenam di pantai" required>
              </div>

              <button type="submit" class="btn btn-primary">
                <i class="fas fa-check me-2"></i>Kirim Gambar
              </button>
            </form>
          </div>
        </div>
      <?php } ?>
      <div class="row g-3">
        <?php foreach ($gallery as $index => $img): ?>
          <div class="col-lg-3 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="<?= ($index % 4) * 100 ?>">
            <img src="<?= $img['gambar'] ?>" alt="<?= $img['alt'] ?>" class="img-fluid gallery-grid-img rounded">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php
  $testimonials = [
    [
      'foto' => 'assets/client-1.png',
      'nama' => 'Sophia Kartika',
      'jabatan' => 'Travel Enthusiast',
      'testimoni' => 'Pengalaman paling tak terlupakan! Pemandu lokalnya sangat ramah dan membuat perjalanan saya ke Kyoto sangat berkesan.',
      'rating' => 5
    ],
    [
      'foto' => 'assets/client-2.png',
      'nama' => 'Citra Lestari',
      'jabatan' => 'CEO, Startup Maju',
      'testimoni' => 'Layanan yang sangat profesional. Hikari Travel mengatur perjalanan bisnis saya dengan sempurna. Sangat direkomendasikan.',
      'rating' => 5
    ],
    [
      'foto' => 'assets/client-3.png',
      'nama' => 'Budi Santoso',
      'jabatan' => 'Fotografer',
      'testimoni' => 'Sebagai fotografer, saya mendapatkan spot-spot terbaik berkat itinerary kustom dari tim Hikari. Hasil fotonya luar biasa!',
      'rating' => 5
    ]
  ];
  ?>

  <section class="testimonials py-5" id="testimonials">
    <div class="container">
      <div class="row mb-5 text-center" data-aos="fade-up">
        <div class="col">
          <h5 class="font-montserrat text-sec fw-semibold">TESTIMONI</h5>
          <h2 class="display-6 fw-bold font-poppins">Apa Kata Klien Kami</h2>
        </div>
      </div>

      <div class="row g-4">
        <?php foreach ($testimonials as $index => $testimonial): ?>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
            <div class="card testimonial-card h-100 border-0 shadow-sm">
              <div class="card-body text-center p-4">
                <img src="<?= $testimonial['foto'] ?>" alt="Foto <?= $testimonial['nama'] ?>"
                  class="testimonial-img rounded-circle shadow-sm">
                <h5 class="card-title font-poppins fw-bold mt-4"><?= $testimonial['nama'] ?></h5>
                <p class="text-muted small mb-3"><?= $testimonial['jabatan'] ?></p>
                <p class="testimonial-text font-montserrat fst-italic text-secondary">
                  "<?= $testimonial['testimoni'] ?>"
                </p>
                <div class="rating-stars">
                  <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                    <i class="fa fa-star"></i>
                  <?php endfor; ?>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <section class="contact py-5 bg-light" id="contact">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right">
          <h2 class="display-6 fw-bold font-poppins">We're here to help</h2>
          <p class="font-montserrat text-secondary mb-4">Our dedicated team is ready to support you.</p>

          <form class="font-montserrat">
            <div class="row">
              <div class="col-6 mb-3">
                <label for="firstName" class="form-label small">First name</label>
                <input type="text" class="form-control" id="firstName">
              </div>
              <div class="col-6 mb-3">
                <label for="lastName" class="form-label small">Last name</label>
                <input type="text" class="form-control" id="lastName">
              </div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label small">Email</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
              <label for="topic" class="form-label small">Choose a topic</label>
              <select class="form-select" id="topic">
                <option selected>Select from list</option>
                <option value="1">Paket Wisata</option>
                <option value="2">Itinerary Kustom</option>
                <option value="3">Lainnya</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label small">Message <span class="text-muted">(optional)</span></label>
              <textarea class="form-control" id="message" rows="4"></textarea>
            </div>
            <div class="form-check mb-4">
              <input class="form-check-input" type="checkbox" value="" id="privacyCheck">
              <label class="form-check-label small" for="privacyCheck">
                By checking this, you agree to our privacy policy.
              </label>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg">Send message</button>
            </div>
          </form>
        </div>

        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
          <div class="map-container rounded shadow-lg">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.267704714557!2d110.41549671184765!3d-7.782316246821574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59909f987bff%3A0xf431a4c4717e7fcf!2sFakultas%20Teknik%20Industri!5e0!3m2!1sid!2sid!4v1755687635317!5m2!1sid!2sid"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>


<?php
include(__DIR__ . "/templates/footer.php");
?>