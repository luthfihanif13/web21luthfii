<?php
include_once 'Controller/pelanggan.php';
$pembeli = new pembeli;

if (isset($_POST['submit'])) {
    $addpembeli = $pembeli->addpembeli($_POST['nama_pembeli'], $_POST['email'], $_POST['no_hp'], $_POST['alamat']);
    if ($addpembeli) {
        echo "<script>alert('Data pembeli ditambahkan!');window.location = 'index1.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pembeli</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="navbar">
        <div class="navbar">
            <div class="container">
                <center>
                    <h2>Data Luthfish Market</h2>
                    <hr>
                </center>
            </div>
        </div>
    </section>
    <center>
        <div class="container">
            <h3>Tambah Data Pembeli</h3>
            <form action="" method="POST">
                <table border="1" cellpadding="7">
                    <tr>
                        <td for="nama">Nama </td>
                        <td><input type="text" name="Nama" placeholder="Nama Lengkap" require></td>
                    </tr>
                    <br>
                    <tr>
                        <td for="email">Email</td>
                        <td><input type="email" name="Email" placeholder="Email" require></td>
                    </tr>
                    <br>
                    <tr>
                        <td for="no_hp">Nomor HP</td>
                        <td><input type="number" name="no_hp" placeholder="Nomor HP" require></td>
                    </tr>
                    <br>
                    <tr>
                        <td for="alamat">Alamat</td>
                        <td><input type="text" name="Alamat" require></td>
                    </tr>
                    <td><button type="submit" name="tambah" value="Simpan">Simpan</button></td>

                </table>
            </form>
        </div>
    </center>
    <section class="footer">
        <div class="footer">
            <b>
                <p>Copyright &copy; 2022 Luthfish Market</p>
            </b>
        </div>
    </section>
</body>

</html>