<?php
function getConnection()
{
  $conn = null;
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $db = "hope";

  try {
    $conn = new mysqli($host, $user, $pass, $db);
  } catch (Exception $e) {
    die('Maaf koneksi gagal: ' . $e->getMessage());
  }

  return $conn;
}
?>