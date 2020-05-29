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
                <li class="nav-item" style="margin-left:40px;">
                    <a class="nav-link link" href="kelasMhs.php">Kelas</a>
                </li>
                <li class="nav-item" style="margin-left:40px;">
                    <a class="nav-link link" href="pembimbingMhs.php">Pembimbing</a>
                </li>
                <li class="nav-item" style="margin-left:40px;">
                    <a class="nav-link link" href="dataDosen.php">Data Dosen</a>
                </li>
                <li class="nav-item" style="margin-left:40px;">
                    <a class="nav-link link" href="logout.php">Logout</a>
                </li>
            </ul>
         </div>
        </div>
    </div>

<div class="container" style="background: #fff; padding: 20px; border-radius: 5px; margin-top: 70px;">
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
        </table>
        <div class="row" style="margin-top:50px;">
            <div class="col-lg-2 col-md-2">
                <button class="btn btn-primary btn-sm btn-block"><b>Data Mahasiswa</b></button>
            </div>
            <div class="col-lg-2 col-md-2">
                <button class="btn btn-primary btn-sm btn-block"><b>Data Dosen</b></button>
            </div>
        </div>
        <h2 style="margin-top:10px;"><b>Data Mahasiswa</b></h2>
        <div class="row">
            <div class="col-lg-3 col-md-3">
            <b>NIM</b>
                <select id="nim" class="form-control">
                    <option value="asc">--- sorting by nim</option>
                    <option value="asc">Urutkan ascending</option>
                    <option value="desc">Urutkan descending</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-3">
            <b>Nama</b>
                <select id="nama" class="form-control">
                    <option value="asc">--- sorting by nama</option>
                    <option value="asc">Urutkan dari a-z</option>
                    <option value="desc">Urutkan dari z-a</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-3">
            <b>Jenis Kelamin</b>
                <select id="jk" class="form-control">
                    <option value="all">--- filter by jk</option>
                    <option value="p">Perempuan</option>
                    <option value="l">Laki-laki</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-3">
            <b>Agama</b>
                <select id="agama" class="form-control">
                    <option value="all">--- filter by agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Kong Hu Cu">Kong Hu Cu</option>   
                </select>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-lg-12 col-md-12">
                <b>Pencarian</b>
                <input type="text" class="form-control" id="cari" placeholder="Cari nama/nim">
            </div>
        </div>
        <table class="table table-striped table-sm table-bordered" style="margin-top:15px;">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>TTL</th>
                    <th>Alamat</th>
                    <th>Agama</th>
                    <th>No Telp</th>
                    <th>Fakultas</th>
                    <th>Prodi</th>
                </tr>
                </thead>
                <tbody id="tabel">
                <?php 
                    include "config.php";
                    $query_mysqli = mysqli_query($mysqli, "SELECT * FROM mahasiswa")or die(mysql_error());
                    $nomor = 1;
                    while($data = mysqli_fetch_array($query_mysqli)){
                ?>
                <tr>
                    <td align="center"><?php echo $nomor++; ?></td>
                    <td><?php echo $data['nim']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td align="center"><?php echo $data['jk']; ?></td>
                    <td><?php echo $data['tmp_lahir'].", ".$data['tgl_lahir'];; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['agama']; ?></td>
                    <td><?php echo $data['no_telp']; ?></td>
                    <td><?php echo $data['fakultas']; ?></td>
                    <td><?php echo $data['prodi']; ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
    </div>
    <script src="js/jquery.js"></script>
    <!-- Pencarian -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#cari").keyup(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var agama = $("#agama").val();
          var nama  = $("#nama").val();
          if (cari != ""){
            $("#tabel").html("<tr><td colspan=10><img src='img/loading.gif'/></td></tr>") 
            $.ajax({
              type:"get",
              url:"mhsKeyup.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&agama="+agama+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          }
          else
          {
            $.ajax({
              url:"mhsKeyup.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&agama="+agama+"&nama="+nama,
              cache: false,
              success: function(msg){
                $("#tabel").html(msg);
              }
            });
          }
        });
      });
    </script>
    <!-- Filter -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#agama, #jk").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var agama = $("#agama").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10><img src='img/loading.gif'/></td></tr>")  
          $.ajax({
              type:"get",
              url:"filterMhs.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&agama="+agama+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
    <!-- Sorting Nama -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#nama").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var agama = $("#agama").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10><img src='img/loading.gif'/></td></tr>")  
          $.ajax({
              type:"get",
              url:"orderNamaMhs.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&agama="+agama+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
    <!-- Sorting Nim -->
    <script type="text/javascript">
      $(document).ready(function() {
        $("#nim").change(function() {
          var cari  = $("#cari").val(); 
          var nim   = $("#nim").val(); 
          var jk    = $("#jk").val();
          var agama = $("#agama").val();
          var nama  = $("#nama").val();
          $("#tabel").html("<tr><td colspan=10><img src='img/loading.gif'/></td></tr>")  
          $.ajax({
              type:"get",
              url:"orderNimMhs.php",
              data:"cari="+cari+"&nim="+nim+"&jk="+jk+"&agama="+agama+"&nama="+nama,
              success: function(data){
                $("#tabel").html(data);
              }
            });
          });
      });
    </script>
  </body>
</html>