<?php
if (empty($_POST['nama'])){
    header("Location:datakosong.php");
} else {
    echo "<center>Nama :".$_POST['nama']."</center><br>";
}
?>