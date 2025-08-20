<?php
require_once(__DIR__ . "/functions/connection.php");
include(__DIR__ . "/templates/header.php");
include(__DIR__ . "/templates/navbar.php");

$mysql = getConnection();
?>

<main class="py-5" style="margin-top: 60px;">
  <div class="container font-inter">
    <?php
    if (isset($_GET['id']) && !empty($_GET['id'])) {
      $id = mysqli_real_escape_string($mysql, $_GET['id']);
      $query_detail = "SELECT judul, konten, gambar, tanggal_publikasi FROM articles WHERE id = '$id'";
      $result_detail = mysqli_query($mysql, $query_detail);
      $article = mysqli_fetch_assoc($result_detail);

      if ($article) {
        ?>
        <div class="row gx-5">

          <article>
            <header class="mb-4">
              <h1 class="display-5 fw-bold font-poppins mb-3   text-center"><?= htmlspecialchars($article['judul']) ?></h1>
              <div class="text-muted fst-italic mb-2">
                Diposting pada <?= date('d F Y', strtotime($article['tanggal_publikasi'])) ?>
              </div>
            </header>
            <figure class="mb-4">
              <img class="img-fluid rounded" src="<?= htmlspecialchars($article['gambar']) ?>"
                alt="<?= htmlspecialchars($article['judul']) ?>" style="width: 100%; height: auto; object-fit: cover;" />
            </figure>
            <section class="mb-5 article-content">
              <?= nl2br(htmlspecialchars($article['konten'])) ?>
            </section>
          </article>

        </div>
        <?php
      } else {
        echo "<div class='alert alert-warning text-center'>Artikel tidak ditemukan. <a href='article.php'>Kembali ke daftar artikel</a>.</div>";
      }

    } else {

      ?>
      <div class="text-center mb-5">
        <h5 class="font-montserrat text-sec fw-semibold">ARTIKEL KAMI</h5>
        <h2 class="display-6 fw-bold font-poppins">Wawasan Terbaru dari Tim Hikari</h2>
      </div>
      <div class="row g-4">
        <?php
        $query_all = "SELECT id, judul, LEFT(konten, 120) as cuplikan, gambar FROM artikel ORDER BY tanggal_publikasi DESC";
        $result_all = mysqli_query($mysql, $query_all);

        if (mysqli_num_rows($result_all) > 0) {
          while ($article_item = mysqli_fetch_assoc($result_all)) {
            ?>
            <div class="col-md-4">
              <div class="card product-card h-100 shadow-sm border-0">
                <img src="<?= htmlspecialchars($article_item['gambar']) ?>" class="card-img-top"
                  alt="<?= htmlspecialchars($article_item['judul']) ?>" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title font-poppins fw-bold"><?= htmlspecialchars($article_item['judul']) ?></h5>
                  <p class="card-text font-montserrat text-secondary small">
                    <?= htmlspecialchars($article_item['cuplikan']) ?>...
                  </p>
                  <a href="article.php?id=<?= $article_item['id'] ?>" class="btn btn-primary mt-auto">Baca Selengkapnya</a>
                </div>
              </div>
            </div>
            <?php
          }
        } else {
          echo "<p class='text-center'>Belum ada artikel yang dipublikasikan.</p>";
        }
        ?>
      </div>
      <?php
    }
    ?>
  </div>
</main>

<?php
include(__DIR__ . "/templates/footer.php");
?>