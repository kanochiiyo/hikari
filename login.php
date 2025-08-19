<?php
include(__DIR__ . "/templates/header.php");
?>

<main>
  <div class="container-fluid login-page d-flex justify-content-center align-items-center vh-100 font-inter">

    <div class="card login-card border-0 shadow-lg">
      <div class="card-body p-5">
        <h3 class="card-title text-center font-poppins fw-bold mb-2">Sign In</h3>
        <p class="text-center text-muted mb-4">Selamat datang kembali!</p>

        <form>
          <div class="mb-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" class="form-control" id="username" placeholder="admin">
          </div>
          <div class="mb-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="••••••••">
          </div>
          <div class="d-flex justify-content-between align-items-center mb-4">
            <!-- <div class="form-check">
              <input type="checkbox" class="form-check-input" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Remember me</label>
            </div> -->
            <a href="#" class="small text-decoration-none">Forgot Password?</a>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</main>

</body>
</html>