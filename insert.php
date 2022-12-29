<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <main>
    <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Ubah Data</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href='index.php' class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href='logout.php' class="nav-link">Logout</a></li>

      </ul>
    </header>
<?php
include 'session.php';
include "koneksi.php";

?>
<h3>Tambah Data Baru<h3>
    <div class="container">
        <form action="postdata.php" method="post" enctype="multipart/form-data">
            <div class=" mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama"
                    name="nama">
            </div>
            <div class=" mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Alamat Lengkap" name="alamat">
            </div>
            <div class=" mb-3">
                <label for="exampleFormControlInput1" class="form-label">No. HP</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nohp">
            </div>
            <label for="jenkel" class="form-label">Jenis Kelamin</label>
            <div class="form-check">

                <input class="form-check-input" type="radio" name="jenkel" value="l" >
                <label class="form-check-label" for="laki-laki">
                    Laki-Laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenkel" value="p" >
                <label class="form-check-label" for="perempuan">
                    Perempuan
                </label>
            </div><br>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email"
                    name="email">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="foto" name="foto">
            </div>
            <button type="submit" value="submit" class="btn btn-primary">Kirim</button>
    </div>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into syllabus set  
    year='$_POST[year]',
    month='$_POST[month]',
    week='$_POST[week]',
    date='$_POST[date]',
    mon='$_POST[mon]',
    tue='$_POST[tue]',
    wed='$_POST[wed]'");

echo "Data barang baru telah tersimpan";
echo "<meta http-equiv=refresh content=1;URL='database.php'>";}

?>