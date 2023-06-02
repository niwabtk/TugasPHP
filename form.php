<link rel="stylesheet" href="css/tip.css">
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "koneksi.php";
if ($_POST['act']=="add"){
$sql_add="INSERT INTO santri (id,nama,alamat,no_hp,jenkel,email,gambar) VALUES ("
."'".$_POST['id']."',
'".$_POST['nama']."',
'".$_POST['alamat']."',
'".$_POST['no_hp']."',
'".$_POST['jenkel']."',
'".$_POST['email']."',
'".$_POST['gambar']."') ";
@mysqli_query($kon,$sql_add);
echo'<script>alert("Data Berhasil Disimpan");window.location ="index.php";</script>';
}

?>
<div id="daftar">
    <p align="center">&raquo;Tambah data&laquo;</p>
    <form method="post" enctype="multipart/form-data">
        <table class="0px">
            <tr>
                <td>nama :</td>
                <td><input name="nama" size="25" class="texbox"></td>
            </tr>
            <tr>
                <td>Alamat:</td>
                <td><input name="alamat" size="25" class="texbox"></td>
            </tr>
            <tr>
                <td>Telepon :</td>
                <td><input type="number" name="no_hp" size="25" class="texbox"></td>
            </tr>
            <tr>
                <td>jenkel:</td>
                <td>
                    <input type="radio" name="jenkel" value="L" class="textfield">L
                    <input type="radio" name="jenkel" value="P">P
                </td>
            </tr>
            <tr>
                <td>email :</td>
                <td><input name="email" size="25" class="texbox"></td>
            </tr>
            <tr>
                <td>gambar :</td>
                <td><input type="file" name="gambar"></td>
            </tr>
        </table>
        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn">
            <input type="hidden" name="act" value="add">
        </div>
    </form>
</div>
