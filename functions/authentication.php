<?php
require_once(__DIR__ . "/connection.php");

function isLogged()
{
  if (isset($_SESSION['login'])) {
    return true;
  }
  return false;
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
  session_destroy();
}

?>