<?php
include("session.php");
include("koneksi.php");
mysqli_query($koneksi,"DELETE FROM `data_siswa` where   id='$_GET[id]'");
echo"Data Telah dihapus
<meta http-equiv=refresh content=1;URL='database.php'>";
?>