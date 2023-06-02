<?php
$db = mysqli_connect("localhost", "root", "", "pelajaran");
?>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM santri WHERE id = '$id'";
$result = mysqli_query($db, $query);
$data = mysqli_fetch_assoc($result);
// ECHO Var_dump($data);
?>
<!-- <head>
<link rel="stylesheet" href="css/edit.css">
</head> -->
<link rel="stylesheet" href="css/edit.css">
<form action="edit.php?id=<?=$_GET['id']?>" method="POST">		
	<table>
		<tr>
				<input type="hidden" name="id" value="<?php echo $data['id'] ?>">

			<td>Nama</td>
			<td>
				<input type="text" name="nama" value="<?php echo $data['nama']?> ">
			</td>					
		</tr>	
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
		</tr>	
		<tr>
			<td>Telepon</td>
			<td><input type="number" name="no_hp" value="<?php echo $data['no_hp'] ?>"></td>					
		</tr>	
		<tr>
        <tr>
			<td>Jenis kelamin</td>
			<td> <input type="radio" <?= ($data['jenkel'] == 'L') ? 'checked' : '' ?> name="jenkel" value="L">L<input type='radio' name='jenkel' <?= ($data['jenkel'] == 'P') ? 'checked' : '' ?> value="P">P</td>
            
           					
		</tr>	
        <tr>
			<td>email</td>
			<td><input type="email" name="email" value="<?php echo $data['email'] ?>"></td>					
		</tr>
        <tr>
			<td>gambar</td>
			<td><input type="file" name="gambar" value="<?php echo $data['gambar'] ?>"></td>					
		</tr>	
			<td></td>
			<td><input type="submit" name="submit" value="Simpan"></td>					
		</tr>				
	</table>
</form>
<?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $jenkel = $_POST['jenkel'];
    $email = $_POST['email'];
    $gambar = $_POST['gambar'];
    $query = "UPDATE santri SET nama = '$nama', alamat = '$alamat', no_hp = '$no_hp', jenkel = '$jenkel', email = '$email', gambar = '$gambar' WHERE `id` = '$id'";
    mysqli_query($db, $query);
    header("location: index.php");
}
?>
