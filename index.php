<?php
session_start();
include(__DIR__ . "/templates/header.php");
include(__DIR__ . "/templates/navbar.php");

if (!isset($_SESSION["login"])) {
  header("Location:signin.php");
  exit();
}

?>

<main>
  <section class="hero" id="hero">
    <div class="container d-flex flex-column justify-content-center text-start text-white">
      <h5 class="font-montserrat">HIKARI TRAVEL</h5>
      <h1 class="headline display-4 fw-bold font-poppins">Temukan Cahaya Baru di Jepang</h1>
      <h3 class="lead font-montserrat">Jelajahi keindahan otentik, dari kota modern hingga kuil kuno bersama kami.</h3>
    </div>
  </section>
  <section class="profile" id="profile">
    <div class="container-fluid p-5">
      <div class="row g-4">
        <div class="col-6 d-flex">
          <div class="d-flex flex-column me-3" style="flex: 1;">
            <div class="bg-secondary mb-3 rounded" style="height:180px;"></div>
            <div class="bg-secondary mb-3 rounded" style="height:180px;"></div>
            <div class="d-flex justify-content-between">
              <div class="bg-secondary rounded" style="height:180px; width:48%;"></div>
              <div class="bg-secondary rounded" style="height:180px; width:48%;"></div>
            </div>
          </div>
          <div class="bg-secondary rounded" style="flex: 1; height:580px;"></div>
        </div>

        <div class="col-6 d-flex align-items-center">
          <div class="ps-5">
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
            <a href="#contact" class="btn btn-dark btn-lg px-4">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="products py-5 bg-light" id="products">
    <div class="container">
      <div class="row mb-4 text-center">
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
        <?php foreach ($packages as $pkg): ?>
          <div class="col-4">
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
      <div class="row mb-4 text-center">
        <div class="col">
          <h2 class="display-6 fw-bold font-poppins">Galeri Perjalanan</h2>
        </div>
      </div>
      <div class="row g-3">
        <?php foreach ($gallery as $img): ?>
          <div class="col-3">
            <img src="<?= $img['gambar'] ?>" alt="<?= $img['alt'] ?>" class="img-fluid gallery-grid-img rounded">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
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
      <div class="row mb-5 text-center">
        <div class="col">
          <h5 class="font-montserrat text-sec fw-semibold">TESTIMONI</h5>
          <h2 class="display-6 fw-bold font-poppins">Apa Kata Klien Kami</h2>
        </div>
      </div>

      <div class="row g-4">
        <?php foreach ($testimonials as $testimonial): ?>
          <div class="col-4">
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
  <!-- End Testimonials -->

  <!-- Contact -->
  <section class="contact py-5 bg-light" id="contact">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-6">
          <h2 class="display-6 fw-bold font-poppins">We're here to help</h2>
          <p class="font-montserrat text-secondary mb-4">Our dedicated team is ready to support you.</p>

          <form>
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

        <div class="col-6">
          <div class="contact-image-container rounded shadow-lg">
            
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Contact -->
</main>


<?php
include(__DIR__ . "/templates/footer.php");
?>