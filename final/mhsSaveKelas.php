<?php 
    include 'config.php';

    $nim_mhs = $_POST['nim_mhs'];
    $id_kelas= $_POST['id_kelas'];

    mysqli_query($mysqli, "INSERT INTO kelas_mhs (nim_mhs, id_kelas) VALUES ('$nim_mhs','$id_kelas')"); 

?>