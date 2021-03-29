<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <style type="text/css">
    body{
      background-color: black;
      font-style: italic;
      color: white;
    }
  </style>
  <br>
  <br>
  <center>
  <h1>Silahkan Isi Biodata Anda</h1>
  </center>
  <!--untuk mengatur dan pengambilan data  -->
    <form style="width: 1000px" action="tampilanbiodata.php" method="POST">
         <table style="width: 980px;">
        <tr>
            <td>NPM</td>
            <td> : </td>
            <td><input type="text" name="NPM"></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td> : </td>
            <td><input type="text" name="Nama"></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td> : </td>
            <td><input type="text" name="Umur"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td> : </td>
            <td><input type="text" name="Jurusan"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td> : </td>
            <td><input type=radio name=Kelamin value="Laki-Laki">Laki-Laki
                <input type=radio name=Kelamin value=Perempuan>Perempuan
            </td>
        </tr>
        <tr>
            <td>Alamat </td>
            <td> : </td>
            <td><input type="textfield" name="Alamat"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="tambah data"></td>
        </tr>
    </form>
</table>
</body>
</html>
