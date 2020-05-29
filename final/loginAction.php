<?php
include "config.php";

$email = $_POST['email'];
$password = $_POST['password'];
$data = mysqli_query($mysqli, "SELECT id, nama, email, password, peran FROM tb_user WHERE email='$email' AND password='$password'");

$hasil = mysqli_fetch_array($data);

$hasilId = $hasil['id'];
$hasilNama = $hasil['nama'];
$hasilEmail = $hasil['email'];
$hasilPwd = $hasil['password'];
$hasilPeran = $hasil['peran'];

if($hasilPeran=="dosen"){
    session_start();
    $_SESSION['id'] = $hasilId;
    $_SESSION['nama']= $hasilNama;
    $_SESSION['email']= $hasilEmail;
    $_SESSION['password']= $hasilPwd;
    $_SESSION['peran']= $hasilPeran;
    echo"<script>alert('Selamat Datang Dosen'); location.href='indexDosen.php'</script>";
}
else if($hasilPeran=="mahasiswa"){
    session_start();
    $_SESSION['id'] = $hasilId;
    $_SESSION['nama']= $hasilNama;
    $_SESSION['email']= $hasilEmail;
    $_SESSION['password']= $hasilPwd;
    $_SESSION['peran']= $hasilPeran;
    echo"<script>alert('Selamat Datang Mahasiswa'); location.href='indexMahasiswa.php'</script>";
}
else{
    echo"<script>alert('Maaf, Login Gagal')</script>";
}
?>