<?php 
date_default_timezone_set("Asia/Jakarta");

include 'koneksi.php';
if (isset($_POST['submit'])){
    #code.. 
    //var_dump($_POST);
    //ambil data dari form

    $nama =htmlspecialchars ($_POST["nama"]);
    $alamat =htmlspecialchars ($_POST["alamat"]);
    $jenis_kelamin =htmlspecialchars ($_POST["jenis_kelamin"]);
    $agama =htmlspecialchars ($_POST["agama"]);
    $sekolah_asal =htmlspecialchars ($_POST["sekolah_asal"]);
    $foto_maba =htmlspecialchars ($_POST["foto_maba"]);

$query = " INSERT INTO calon_mhs
            VALUES
            ('', '$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal', '$foto_maba')
            ";
    mysqli_query($conn, $query);

     //cek data sudah diinput/belum
     if(mysqli_affected_rows($conn) > 0){
         echo"
            <script>
                alert('data berhasil diinput..!');
                document.location.href ='view.php'
            </script>
         ";
     }else{
      echo"
        <script>
            alert('data gagal diinput..!');
            document.location.href ='inputdata.php'
        </script>
      ";
     }

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="tema/fontawesome/css/all.min.css">

    <title>CRUD</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">SIPEMABA ll Kampus Herni</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <div class="text-white">
                   <?php echo date('l,d-m-y') ?>
               </div>
            </div>
        </div>
    </nav>

    <!-- sidebar -->

    <div class="row mt-4">
        <div class="col-md-2 mt-2 pr-3 pt-4 bg-secondary">
          <!-- menu -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-columns"></i> Dahsboard</a><hr class="bg-dark">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="view.php"><i class="fas fa-users"></i> Calon Mahasiswa</a><hr>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="inputdata.php"><i class="fas fa-user-edit"></i> Input CaMaBa</a><hr>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher"></i> Daftar Dosen</a><hr>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="#"><i class="far fa-calendar-alt"></i> Jadwal Kuliah</a><hr>
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-5">
          <!-- konten -->
          <h3><i class="fas fa-user-edit"></i> Input Calon Mahasiswa Baru</h3><hr>

            <form method="post" action="">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" required autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" id="alamat" name="alamat" row="4" required autocomplete="off"></textarea>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Jenis_kelamin" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option selected>Open this select menu</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <select class="form-select" aria-label="agama" id="agama" name="agama" required>
                        <option selected>Open this select menu</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sekolah_asal" class="form-label">Sekolah Asal</label>
                    <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" required autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="foto_maba" class="form-label">Foto Maba</label>
                    <input type="text" class="form-control" id="foto_maba" name="foto_maba" required autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Input Data</button>
            </form>


        </div>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>