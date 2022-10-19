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
    <div class="container"><br>
      <a href="addpembeli.php">Tambah data Pembeli</a>
      <br><br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">email</th>
            <th scope="col">no_hp</th>
            <th scope="col">alamat</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include_once 'Controller/pelanggan.php';
          $pembeli = new pembeli;
          $row = $pembeli->getAll();
          $number = 1;
          foreach ($row as $item) {
          ?>
            <tr>
              <th scope="row"><?php echo $number ?></th>
              <td><?php echo $item['nama_pembeli'] ?> ||
              <td><?php echo $item['email'] ?> || 
              <td><?php echo $item['no_hp'] ?> ||
              <td><?php echo $item['alamat'] ?> ||
            </tr>
          <?php
            $number++;
          }
          ?>
        </tbody>
      </table>
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