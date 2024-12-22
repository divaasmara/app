<html>
<head>
  <title>PWEB A</title>
  <style>
    html{
        font-family: Arial;
    }
    *{
        box-sizing: border-box;
    }
    body{
        /* background-color: #5393e0; */
    }
    table{
        background-color: white;
    }
    h1{
        display: flex;
        justify-content: center;
    }
    .buton{
        margin-left: 20px;
        padding: 20 20;
        border-radius: 10px;
        background-color: #1b72de;
        text-decoration: none;
        color: white;
    }
    .buton:hover{
        transition: 0.5s;
        padding: 20 20;
        border-radius: 10px;
        background-color: #5393e0;
        text-decoration: none;
        color: white;
    }
    .foto{
        display: flex;
        justify-content: center;
        width: 160px;
        height: 90px;
    }
  </style>
</head>
<body>
  <h1>Data Siswa</h1><br><br>
  <table border="1" width="100%">
  <tr>
    <th>Foto</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Telepon</th>
    <th>Alamat</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM siswa");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td class=\"foto\"><img src='images/".$data['foto']."'></td>";
    echo "<td>".$data['nis']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['jenis_kelamin']."</td>";
    echo "<td>".$data['telp']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table><br><br>
  <a class="buton" href="form_simpan.php">Tambah Data</a>
</body>
</html>