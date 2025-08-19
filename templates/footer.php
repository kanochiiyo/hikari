<footer class="footer pt-5 pb-4 font-poppins" id="footer">
  <div class="container text-center text-md-start">
    <div class="row">

      <div class="col-md-4 col-lg-4 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 fw-bold font-poppins text-white">Hikari Travel</h5>
        <p class="font-montserrat footer-text">
          Membantu Anda menemukan cahaya baru dalam setiap perjalanan ke Jepang. Kami menyediakan pengalaman otentik
          dengan layanan premium.
        </p>
      </div>

      <div class="col-md-2 col-lg-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 fw-bold font-poppins text-white">Links</h5>
        <p><a href="index.php" class="footer-link">Home</a></p>
        <p><a href="about.php" class="footer-link">Tentang Kami</a></p>
        <p><a href="#products" class="footer-link">Paket Tour</a></p>
        <p><a href="#contact" class="footer-link">Kontak</a></p>
      </div>

      <div class="col-md-3 col-lg-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 fw-bold font-poppins text-white">Kontak</h5>
        <p class="footer-text"><i class="fas fa-home me-3"></i> Yogyakarta, Indonesia</p>
        <p class="footer-text"><i class="fas fa-envelope me-3"></i> info@hikaritravel.com</p>
        <p class="footer-text"><i class="fas fa-phone me-3"></i> +62 812 3456 7890</p>
      </div>
    </div>

    <hr class="my-4">

    <div class="row align-items-center">
      <div class="col-md-7 col-lg-8">
        <p class="mb-0 footer-text">
          © 2025 Designed by:
          <a href="#" class="footer-link fw-bold">Andini Andaresta</a>
        </p>
      </div>
      <div class="col-md-5 col-lg-4">
        <div class="text-center text-md-end">
          <a href="#" class="footer-link me-4"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="footer-link me-4"><i class="fab fa-twitter"></i></a>
          <a href="#" class="footer-link"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
  const nav = document.querySelector('.navbar');

  window.addEventListener('scroll', function () {
    if (window.scrollY > 50) {
      nav.classList.add('navbar-scrolled');
    } else {
      nav.classList.remove('navbar-scrolled');
    }
  });
</script>
</body>

</html>