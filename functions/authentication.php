<?php
require_once(__DIR__ . "/connection.php");

function isLogged()
{
  if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    return true;
  }
  return false;
}

function register($formData)
{
  $connection = getConnection();

  $username = strtolower(stripslashes($formData["username"]));
  $email = strtolower($formData["email"]);
  $password = mysqli_real_escape_string($connection, $formData["password"]);
  $confirmpassword = mysqli_real_escape_string($connection, $formData["password2"]);

  $result = $connection->query("SELECT username FROM users WHERE username = '$username'");
  if ($result->fetch_assoc()) {

    echo "<script>
    alert('Registrasi gagal. Username tidak tersedia.');
    </script>";
    return false;
  }

  if ($password != $confirmpassword) {
    echo "<script>
    alert('Registrasi gagal. Konfirmasi password tidak cocok!');
    </script>";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  $connection->query("INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')");

  return ($connection->affected_rows) ? true : false;
}

function login($data)
{
  $mysql = getConnection();
  $username = mysqli_real_escape_string($mysql, $data["username"]);
  $password = $data["password"];

  $result = mysqli_query($mysql, "SELECT * FROM users WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);


    if (password_verify($password, $row["password"])) {
      $_SESSION["login"] = true;
      $_SESSION["user"] = $username;
      return true;
    }
  }

  return false;
}

function logout()
{
  $_SESSION = [];
  session_unset();
  session_destroy();
}
?>