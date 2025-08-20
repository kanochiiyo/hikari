<?php
function getConnection()
{
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "hikari";

  $mysql = mysqli_connect($host, $user, $pass, $db);
  if (!$mysql) {
    die("Tidak bisa terhubung dengan database.");
  }
  return $mysql;
}
?>