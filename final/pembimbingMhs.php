<?php
session_start();

$id     = $_SESSION['idUser'];
$level  = $_SESSION['level'];

if (empty($_SESSION['idUser'])){
  echo "<script>alert('Mohon login terlebih dahulu'); location.href='login.php';</script>";
}

if($level != 'Mahasiswa'){
  echo "<script>alert('Maaf, Anda Tidak Dapat Mengakses Halaman Ini'); location.href='login.php';</script>";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Sistem Informasi Kampus</title>
  </head>
  <body>
  <div class="container-fluid menu">
    <div class="container">
        <div class="row boxAtas">
            <div class="col-sm-1">
                <img src="gambar/unud.png" class="logo">
            </div>
            <div class="col-sm-4 tag">
                <p>Universitas Udayana
                <br>Unggul, Mandiri, Berbudaya</p>
            </div>
            <div class="col-sm-7 nav">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link link" href="dashboardMhs.php">Beranda</a>
                </li>
                <li class="nav-item" style="margin-left:50px;">
                    <a class="nav-link link" href="kelasMhs.php">Kelas</a>
                </li>
                <li class="nav-item" style="margin-left:50px;">
                    <a class="nav-link link" href="pembimbingMhs.php">Pembimbing</a>
                </li>
                <li class="nav-item" style="margin-left:50px;">
                    <a class="nav-link link" href="dataDosen.php">Data Dosen</a>
                </li>
                <li class="nav-item" style="margin-left:50px;">
                    <a class="nav-link link" href="logout.php">Logout</a>
                </li>
            </ul>
         </div>
        </div>
    </div>
    <div class="container" style="background: #fff; padding: 20px; border-radius: 10px; margin-top: 10px;">
        <?php 
            include 'config.php';
            $getData    = mysqli_query($mysqli, "SELECT nim, nama, jk, tmp_lahir, tgl_lahir, alamat, agama, no_telp, fakultas, prodi, status_mhs FROM mahasiswa WHERE nim='$id'");
            $data       = mysqli_fetch_array($getData);
            $nim        = $data['nim']; 
            $nama       = $data['nama'];
            $jk         = $data['jk'];
            $tmp_lahir  = $data['tmp_lahir'];
            $tgl_lahir  = $data['tgl_lahir'];
            $alamat     = $data['alamat'];
            $agama      = $data['agama'];
            $no_telp    = $data['no_telp'];
            $fakultas   = $data['fakultas'];
            $prodi      = $data['prodi'];
            $status_mhs = $data['status_mhs'];
        ?>
        <table class="table table-striped">
            <tr>
                <th>NIM</th>
                <td><?php echo $nim; ?></td>
                <th>Agama</th>
                <td><?php echo $agama; ?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><?php echo $nama; ?></td>
                <th>No Telp</th>
                <td><?php echo $no_telp; ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $jk; ?></td>
                <th>Fakultas</th>
                <td><?php echo $fakultas; ?></td>
            </tr>
            <tr>
                <th>Tempat, Tgl Lahir</th>
                <td><?php echo $tmp_lahir.", ".$tgl_lahir; ?></td>
                <th>Program Studi</th>
                <td><?php echo $prodi; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo $alamat; ?></td>
                <th>Status Mahasiswa</th>
                <td><?php echo $status_mhs; ?></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <th></th>
                <td><a href="editProfil.php"><button class="btn btn-primary btn-sm">Edit Profile</button></a></td>
            </tr>
        </table>
        <h2 style="margin-top:10px;"><b>Data Pembimbing</b></h2>
        <table class="table table-striped table-sm table-bordered" style="margin-top:15px;">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIP Dosen</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                </tr>
                </thead>
                <tbody id="tabel">
                <?php 
                    include "mysqliect.php";
                    $query_mysqli = mysqli_query($mysqli, "
                    SELECT DISTINCT a.nip_dosen, b.nama AS nama_dosen, b.email, b.no_telp FROM bimbingan a INNER JOIN dosen b ON a.`nip_dosen`=b.`nip` 
                    ")or die(mysql_error());
                    $nomor = 1;
                    while($data = mysqli_fetch_array($query_mysqli)){
                    $nip_dosen = $data['nip_dosen'];
                ?>
                <tr>
                    <td align="center" rowspan='2'><?php echo $nomor++; ?></td>
                    <td><?php echo $data['nip_dosen']; ?></td>
                    <td><?php echo $data['nama_dosen']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['no_telp']?></td>
                </tr>
                <tr>
                    <td colspan='7'>
                        Mahasiswa terdaftar:
                        <ul>
                        <?php 
                            $getKelas = mysqli_query($mysqli, "SELECT a.nim, a.nama FROM mahasiswa a INNER JOIN bimbingan b ON a.`nim`=b.`nim_mhs` WHERE b.nip_dosen='$nip_dosen'");
                            while($dataKelas = mysqli_fetch_array($getKelas)){
                                echo "<li><b>".$dataKelas['nim']."</b> ".$dataKelas['nama']."</li>";
                            }
                        ?>
                        </ul>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
    </div>
    <script src="js/jquery.js"></script>
  </body>
</html>