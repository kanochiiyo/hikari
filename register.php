<?php
session_start();
require_once(__DIR__ . "/functions/connection.php");
require_once(__DIR__ . "/functions/authentication.php");

if (isset($_POST["submit"])) {
  $result = register($_POST);
  if ($result) {
    echo "<script>
    alert('Sign up berhasil.');
    document.location.href = 'login.php';
    </script>";
  }
}
if (isLogged()) {
  header("Location:index.php");
}

include(__DIR__ . "/templates/header.php");
?>

<main>
  <div class="container-fluid register-page d-flex justify-content-center align-items-center vh-100 font-inter">

    <div class="card login-card border-0 shadow-lg">
      <div class="card-body p-5">
        <h3 class="card-title text-center font-poppins fw-bold mb-2">Register</h3>
        <p class="text-center text-muted mb-4">Buat akun baru!</p>

        <form method="post">
          <div class="mb-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="admin">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="emaik" class="form-control" name="email" id="email" placeholder="admin@hikaritravel.com">
          </div>
          <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="••••••••">
          </div>
          <div class="mb-4">
            <label for="password2" class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control" name="password2" id="password2" placeholder="••••••••">
          </div>
          <div class="d-flex justify-content-between align-items-center">

          </div>
          <p class="text-muted text-center mb-4">Already have an account? Login <a href="login.php">here</a></p>
          <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Register</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</main>

</body>

</html>