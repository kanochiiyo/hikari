<?php
session_start();
require_once(__DIR__ . "/../functions/authentication.php");
require_once(__DIR__ . "/connection.php");

$mysql = getConnection();

if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
  $gambar = upload();
  if (!$gambar) {
    return false;
  }
}


function upload()
{
  $nama = $_FILES["gambar"]["name"];
  $size = $_FILES["gambar"]["size"];
  $error = $_FILES["gambar"]["error"];
  $tmp = $_FILES["gambar"]["tmp_name"];
  $alt_text = htmlspecialchars($_POST['alt']);

  // Cek ada gambar yg diupload
  if ($error == 4) {
    echo "<script>
    alert('Upload gagal. Pilih gambar terlebih dahulu');
    </script>";
    return false;
  }

  $extValid = ['jpg', 'jpeg', 'png', 'gif'];
  $ext = explode(".", $nama);
  $ext = strtolower(end($ext));

  if (!in_array($ext, $extValid)) {
    echo "<script>
    alert('Upload gagal. Ekstensi tidak valid.');
    </script>";
  }

  if ($size > 1000000) {
    echo "<script>
    alert('Upload gagal. Ukuran gambar terlalu besar.');
    </script>";
  }

  $newNama = uniqid();
  $newNama .= '.';
  $newNama .= $ext; 
  move_uploaded_file($tmp, '../assets/' . $newNama);

  return $newNama;
}

?>