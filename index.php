<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<title>Data Mahasiswa</title>
<link rel="icon" href="img/icon_mhs.png">
</head>

<body>
<div class="jumbotron jumbotron-fluid">
<h2 class="display-4 text-center">Aplikasi Data Mahasiswa</h2>
</div>

<hr>
<form class="" action="tambah.php" method="get">
<input type="submit" name="submit" value="Tambah Data" class="btn btn-outline-primary">
</form>

<?php
include "koneksi.php";
$koneksiObj=new Koneksi();
$koneksi= $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal : " . $koneksi->connect_error);
}else{
	echo "";
}

$qry="select * from mahasiswa";
$data = $koneksi->query($qry);
 ?>

<table border="2" rules="all" cellpadding="3">
  <tr bgcolor="#ddd">
    <th width="20%"> NIM </th>
    <th width="40%"> NAMA </th>
    <th width="20%"> JURUSAN </th>
		<th colspan="2">OPSI</th>
  </tr>

<div id="footer">
        Copyright &copy; 2018
        Designed by Fauziah Nur Rahmawati
    </div>
    
  <?php
  if ($data -> num_rows <= 0){
    echo "<tr><td>";
    echo "DATA NIHIL";
    echo "</td></tr>";
  }else {
    while ($row = $data -> fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row['nim']."</td>";
      echo "<td>".$row['nama']."</td>";
      echo "<td>".$row['jurusan']."</td>";

      echo '<td> <a href ="edit.php?nim='.
        $row["nim"].'">Ubah</a>';
			echo '<td> <a href ="hapus.php?nim='.
	      $row["nim"].'">Hapus</a>';
      echo "</tr>";
    }
  }
    ?>

</table>
