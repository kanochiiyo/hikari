<?php
require_once(__DIR__ . "/connection.php");

function isLogged()
{
  if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    return true;
  }
  return false;
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