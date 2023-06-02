<?php
  // ambil data dari form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // cek apakah username dan password cocok dengan data yang ada di database
  if ($username == "admin" && $password == "1234") {
    // jika cocok, arahkan ke halaman dashboard
    header("Location: index.php");
  } else {
    // jika tidak cocok, tampilkan pesan error
    echo '<script>alert("Username atau password salah!")</script>';
  }
?>
