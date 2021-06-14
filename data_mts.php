<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login_tendik.php");
}

$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "dbsekolah";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$nis        = "";
$nama       = "";
$alamat     = "";
$kelas      = "";
$sukses     = "";
$error      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "delete from dbmts where id = '$id'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data, Halaman akan direfresh dalam 5 detik!";
    }else{
        $error  = "Gagal melakukan delete data, Halaman akan direfresh dalam 5 detik!";
    }
}
if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from dbmts where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nis        = $r1['nis'];
    $nama       = $r1['nama'];
    $alamat     = $r1['alamat'];
    $kelas      = $r1['kelas'];

    if ($nis == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $nis        = $_POST['nis'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $kelas      = $_POST['kelas'];

    if ($nis && $nama && $alamat && $kelas) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update dbmts set nis = '$nis',nama='$nama',alamat = '$alamat',kelas='$kelas' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate, Halaman akan direfresh dalam 5 detik!";
            } else {
                $error  = "Data gagal diupdate, Halaman akan direfresh dalam 5 detik!";
            }
        } else { //untuk insert
            $sql1   = "insert into dbmts(nis,nama,alamat,kelas) values ('$nis','$nama','$alamat','$kelas')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru, Halaman akan direfresh dalam 5 detik!";
            } else {
                $error      = "Gagal memasukkan data, Halaman akan direfresh dalam 5 detik!";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Database - MTs Nurul Ilmi</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="YPI.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@500&display=swap" rel="stylesheet">
        <style>
            .mx-auto {
                width: 65%;
            }

            .card {
                margin-top: 10px;
            }
            
            #font-amru{
                font-family: 'Mulish', sans-serif;
            }
        </style>
    </head>
    
    
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="YPI.png" class="mb-2" alt="..." />      Database MTs Nurul Ilmi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="landing-page-tendik.php">Kembali Ke Halaman Sebelumnya</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" style="padding-bottom: 10%; 
                                        padding-top: 100px;">
            
        
        
        <!-- Input Data -->
        <div class="jumbotron">
            <div class="container">
                <div class="col-lg-12 text-center mt-5 mb-5">
                    <h3 class="display-4" id="font-amru">Database Siswa/i MTs Nurul Ilmi</h3>
                </div>
            </div>
        </div>
        
        
        <div class="mx-auto">
        <!-- untuk memasukkan data -->
            <div class="card">
                <div class="card-header" style="color : black">
                    Buat / Edit Data
                </div>
                <div class="card-body">
                    <?php
                    if ($error) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error ?>
                        </div>
                    <?php
                        header("refresh: 5; url=data_mts.php");
                    }
                    ?>
                    <?php
                    if ($sukses) {
                    ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $sukses ?>
                        </div>
                    <?php
                        header("refresh: 5; url=data_mts.php");
                    }
                    ?>
                    <form action="" method="POST">
                        <div class="mb-3 row">
                            <label for="nis" class="col-sm-2 col-form-label" style="color: black">NIS</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nis" name="nis" value="<?php echo $nis ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label" style="color : black">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="alamat" class="col-sm-2 col-form-label" style="color : black">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="kelas" class="col-sm-2 col-form-label" style="color : black">Kelas</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="kelas" id="kelas">
                                    <option value="">- Pilih Kelas -</option>
                                    <option value="VII" <?php if ($kelas == "I") echo "selected" ?>>VII</option>
                                    <option value="VIII" <?php if ($kelas == "II") echo "selected" ?>>VIII</option>
                                    <option value="IX" <?php if ($kelas == "III") echo "selected" ?>>IX</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                        </div>
                    </form>
                </div>
            </div>
            
            </div>
            </header>

        
        <div class="mx-auto" style="width: 80%">
            <!-- untuk mengeluarkan data -->
            <div class="card">
                <div class="card-header text-white bg-secondary">
                    Data Siswa/i MTs Nurul Ilmi
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIS</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql2   = "select * from dbmts order by id desc";
                            $q2     = mysqli_query($koneksi, $sql2);
                            $urut   = 1;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $id         = $r2['id'];
                                $nis        = $r2['nis'];
                                $nama       = $r2['nama'];
                                $alamat     = $r2['alamat'];
                                $kelas      = $r2['kelas'];

                            ?>
                                <tr>
                                    <th scope="row"><?php echo $urut++ ?></th>
                                    <td scope="row"><?php echo $nis ?></td>
                                    <td scope="row"><?php echo $nama ?></td>
                                    <td scope="row"><?php echo $alamat ?></td>
                                    <td scope="row"><?php echo $kelas ?></td>
                                    <td scope="row">
                                        <a href="data_mts.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                        <a href="data_mts.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>            
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; YPI Qowwiy Azizi 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://id-id.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
