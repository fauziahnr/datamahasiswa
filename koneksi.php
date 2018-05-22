<?php
class Koneksi{
  private $server="localhost";
  private $username="id476822_dev1";
  private $password = "amayun1703";
  private $db = "id476822_mahasiswa";
  private $hubungan;

  function ambilKoneksi(){
    $hubungan= new mysqli($this ->server, $this->username,
    $this->password, $this->db);
    return $hubungan;
  }
}
 ?>
