<?php 
    include 'config.php';

    $nip            = $_POST['nip'];
    $nama           = $_POST['nama'];
    $email          = $_POST['email'];
    $jk             = $_POST['jk'];
    $no_telp        = $_POST['no_telp'];
    $status_admin   = 'Aktif';   
    $password       = md5($_POST['password']); 
    $level          = '1';
    $status_akun    = 'Aktif';

    mysqli_query($mysqli, "START TRANSACTION;");

    $save_admin = mysqli_query($mysqli, "INSERT INTO admin (nip, nama, email, jk, no_telp, status_admin) VALUES (
        '$nip',
        '$nama',
        '$email',
        '$jk',
        '$no_telp',
        '$status_admin'
    )");

    $save_user = mysqli_query($mysqli, "INSERT INTO user (id, password, level, status_akun) VALUES (
        '$nip',
        '$password',
        '$level',
        '$status_akun'
    )");

    if ($save_admin && $save_user) {
        mysqli_query($mysqli, "COMMIT;");
    } 
    else {
        mysqli_query($mysqli, "ROLLBACK;");
    }
?>