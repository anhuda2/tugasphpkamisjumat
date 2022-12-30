<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>

<body>
  <main>
    <?php
    include 'session.php';

    ?>
    <div class="container">
      <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
          </svg>
          <span class="fs-4">Database Anda</span>
        </a>

        <ul class="nav nav-pills">
          <li class="nav-item"><a href='index.php' class="nav-link active" aria-current="page">Home</a></li>
          <li class="nav-item"><a href='logout.php' class="nav-link">Logout</a></li>


        </ul>
      </header>
      <style>
        .div-1 {
          background-color: #FFF;
        }
      </style>
      <div class="container mt-5">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">No HP</th>
              <th scope="col">Jenis kelamin</th>
              <th scope="col">Email</th>
              <th scope="col">Option</th>
            </tr>
            </tr>
          </thead>
          <a class="btn btn-lg btn-primary" href="insert.php" role="button">Create New Data »</a>
          <tbody>
            <?php
            include "koneksi.php";

            $id = 1;
            $ambildata = mysqli_query($koneksi, "select * from data_siswa");
            while ($tampil = mysqli_fetch_array($ambildata)) {

          

              echo "
                <tr>
                    <td>$id</td>
                    <td>$tampil[nama]</td>
                    <td>$tampil[alamat]</td>
                    <td>$tampil[notelp]</td>
                    <td>$tampil[gender]</td>
                    <td>$tampil[email]</td>";

             
              echo "
                  <td><a href='edit.php?id=$tampil[id]'> Edit </a></td>
            <td><a href='delete.php?id=$tampil[id]'> Delete </a></td>
                </tr>";

              $id++;
            }
            ?>

          </tbody>
        </table>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
</body>

</html>