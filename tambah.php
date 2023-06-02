<?php
class Mahasiswa {
    public $no;
    public $id;
    public $nama;
    public $alamat;
    public $telepon;
    public $jenis_kelamin;
    public $email;
    public $gambar;

    public function __construct($no, $id, $nama, $alamat, $telepon, $jenis_kelamin, $email, $gambar) {
        $this->no = $no;
        $this->id = $id;
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->telepon = $telepon;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->email = $email;
        $this->gambar = $gambar;
    }
}

// Fungsi untuk menambahkan mahasiswa ke dalam daftar mahasiswa
function tambahkan_mahasiswa(&$daftar_mahasiswa, $no, $id, $nama, $alamat, $telepon, $jenis_kelamin, $email, $gambar) {
    $mahasiswa = new Mahasiswa($no, $id, $nama, $alamat, $telepon, $jenis_kelamin, $email, $gambar);
    $daftar_mahasiswa[] = $mahasiswa;
    echo "Mahasiswa berhasil ditambahkan!";
}

// Contoh penggunaan
$daftar_mahasiswa = array();
tambahkan_mahasiswa($daftar_mahasiswa, 1, "001", "John Doe", "Jl. Jenderal Sudirman", "081234567890", "Laki-laki", "johndoe@example.com", "gambar.jpg");
?>