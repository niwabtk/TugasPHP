<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data santri</title>
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<!-- <?php
    // Proses autentikasi dan pengecekan login
    // session_start();
    // if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    //     header('Location: login.html');
    //     exit();
    // }
?> -->
<table class="table table-striped border-primary">
    <h1>&raquo;Data santri&laquo;</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">id</th>
                <th scope="col">nama</th>
                <th scope="col">alamat</th>
                <th scope="col">Telepon</th>
                <th scope="col">jenis kelamin</th>
                <th scope="col">email</th>
                <th scope="col">gambar</th>
                <th scope="col">Lanjutan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';

            $sql = "SELECT * FROM santri";
            $query = mysqli_query($kon, $sql);
            $Nomor = 1;
            while($siswa = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$Nomor++."</td>";
                echo "<td>".$siswa['id']."</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['no_hp']."</td>";
                echo "<td>".$siswa['jenkel']."</td>";
                echo "<td>".$siswa['email']."</td>";
                echo "<td>".$siswa['gambar']."</td>";

                echo "<td>";
                echo "<button class='btn btn-success'> <a href='edit.php?id=".$siswa['id']."' class='text-decoration-none text-dark'>Edit</a></button> ";
                echo "<button class='btn btn-danger'> <a href='hapus.php?id=".$siswa['id']."' class='text-decoration-none text-white'>Hapus</a></button>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
</body>
</html>
