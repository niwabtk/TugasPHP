<?php
  // Mengambil nilai dari parameter id
  $siswa = $_GET['id'];
  
  // Koneksi ke database
  $db = mysqli_connect("localhost", "root", "", "pelajaran");
  
  // Menghapus data dari database
  mysqli_query($db, "DELETE FROM santri WHERE id='$siswa'");
  
  // Menutup koneksi ke database
  mysqli_close($db);
  
  // Meneruskan ke halaman list.php
  header("Location: index.php");
?>
