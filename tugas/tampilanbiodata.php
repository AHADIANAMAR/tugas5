 <style type="text/css">
    body{
      background-color: black;
      font-style: italic;
      color: white;
    }
  </style>
  <center><h1>Data Yang Anda Isi</h1></center>
  <!--unutuk mendeklarasikan variabel -->
<?php
$NPM = $_POST['NPM'];
$Nama = $_POST['Nama'];
$Umur = $_POST['Umur'];
$Jurusan = $_POST['Jurusan'];
$Kelamin = $_POST['Kelamin'];
$Alamat = $_POST['Alamat'];
if ($NPM == "") {
    echo "<center>Isi NPM anda</center><br>";
} elseif ($Nama == "") {
    echo "<center>Isi Nama Anda anda</center><br>";
} elseif ($Jurusan == "") {
    echo "<center>Isi Jurusan Anda anda</center><br>";
} elseif ($Kelamin == "") {
    echo "<center>Isi Jenis Kelamin  anda</center><br>";
} elseif ($Alamat == "") {
    echo "<center>Isi Alamat anda</center><br>";
} else {
    echo "<center>Npm : $NPM</center><br>" ;
    echo "<center>Nama : $Nama</center><br>";
    echo "<center>Umur : $Umur</center><br>";
    echo "<center>Jurusan : $Jurusan</center><br>";
    echo "<center>Jenis Kelamin : $Kelamin</center><br>";
    echo "<center>Alamat : $Alamat</center><br>";
}
?>
