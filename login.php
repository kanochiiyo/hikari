<?php
session_start();
require_once(__DIR__ . "/functions/connection.php");
$mysql = getConnection();

if (isset($_SESSION["login"])) {
  header("Location:index.php");
  exit();
}

if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($mysql, "SELECT * FROM users WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row["password"] == $password) {
      $_SESSION["login"] = true;
      $_SESSION["user"] = $username;

      header("Location: index.php");
      exit;
    }
  }
  $error = true;
}

include(__DIR__ . "/templates/header.php");
?>

<main>
  <div class="container-fluid login-page d-flex justify-content-center align-items-center vh-100 font-inter">

    <div class="card login-card border-0 shadow-lg">
      <div class="card-body p-5">
        <h3 class="card-title text-center font-poppins fw-bold mb-2">Sign In</h3>
        <p class="text-center text-muted mb-4">Selamat datang kembali!</p>
        <?php if (isset($error)) { ?>
          <p style="color: red;">Username / Password salah!</p>
        <?php } ?>

        <form method="post">
          <div class="mb-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="admin">
          </div>
          <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="••••••••">
          </div>
          <div class="d-flex justify-content-between align-items-center mb-4">
            <!-- <div class="form-check">
              <input type="checkbox" class="form-check-input" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Remember me</label>
            </div> -->
            <!-- <a href="#" class="small text-decoration-none">Forgot Password?</a> -->
          </div>
          <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Sign In</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</main>

</body>

</html>