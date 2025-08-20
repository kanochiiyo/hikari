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

  //   $name = $formData["name"];
  $username = strtolower(stripslashes($formData["username"]));
  $email = strtolower($formData["email"]);
  $password = mysqli_real_escape_string($connection, $formData["password"]);
  $confirmpassword = mysqli_real_escape_string($connection, $formData["confirmpassword"]);

  // cek udah ada yg make belom usernamenya
  $result = $connection->query("SELECT username FROM users WHERE username = '$username'");
  if ($result->fetch_assoc()) {
    echo "<script>
    alert('Login gagal. Username tidak tersedia.');
    </script>";
    return false;
  }

  // kalo password & confirm nggak sama
  if ($password != $confirmpassword) {
    echo "<script>
    alert('Login gagal. Password salah!');
    </script>";
    return false;
  }

  // enkripsi password pake password hash
  $password = password_hash($password, PASSWORD_DEFAULT);

  $connection->query("INSERT INTO users VALUES (null, '$username', '$email', '$password', 0)");

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

    if ($row["password"] == $password) {
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