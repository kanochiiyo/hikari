<?php
require_once(__DIR__ . "/connection.php");

function isLogged()
{
  if (isset($_SESSION['login'])) {
    return true;
  }
  return false;
}

function login($data)
{
  if (isset($_POST["submit"])) {
    $mysql = getConnection();
    $username = strtolower(mysqli_real_escape_string($mysql, $data["username"]));
    $password = $data["password"];

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

    if (password_verify($password, $row["password"])) { 
      $_SESSION["login"] = true;
      $_SESSION["user"] = $username;
      header("Location: index.php");
      exit;
    }
  }
}

function isAdmin()
{
  $connection = getConnection();

  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $result = $connection->query("SELECT * FROM users WHERE username = '$username'");

    $userData = $result->fetch_object();

    if ($userData->role === "1") {
      return true;
    }
  }
  return false;
}

function isStaff()
{
  $connection = getConnection();

  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    $result = $connection->query("SELECT * FROM users WHERE username = '$username'");

    $userData = $result->fetch_object();

    if ($userData->role === "2") {
      return true;
    }
  }
  return false;
}

function logout(): void
{
  $_SESSION = [];
  session_destroy();
  session_unset();
}

?>