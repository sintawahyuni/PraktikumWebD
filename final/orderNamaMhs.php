<?php 
    include "config.php";

    $nim    = $_GET['nim'];
    $nama   = $_GET['nama'];
    $jk     = $_GET['jk'];
    $agama  = $_GET['agama'];
    $cari   = $_GET['cari'];

    if(($nama=="asc")&&($jk=="all")&&($agama=="all")){ 
        $query = mysqli_query($mysqli, "SELECT*FROM mahasiswa ORDER BY nama ASC");
    }
    else if(($nama=="asc")&&($jk=="all")&&($agama<>"all")){ 
        $query = mysqli_query($mysqli, "SELECT* FROM mahasiswa WHERE agama = '$agama'ORDER BY nama ASC");
    }
    else if(($nama=="asc")&&($jk<>"all")&&($agama=="all")){ 
        $query = mysqli_query($mysqli, "SELECT* FROM mahasiswa WHERE jk = '$jk'ORDER BY nama ASC");
    }
    else if(($nama=="asc")&&($jk<>"all")&&($agama<>"all")){
        $query = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE jk = '$jk' AND agama = '$agama' ORDER BY nama ASC");
    }
    else if(($nama=="desc")&&($jk=="all")&&($agama=="all")){ 
        $query = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY nama DESC");
    }
    else if(($nama=="desc")&&($jk=="all")&&($agama<>"all")){ 
        $query = mysqli_query($mysqli, "SELECT* FROM mahasiswa WHERE agama = '$agama' ORDER BY nama DESC");
    }
    else if(($nama=="desc")&&($jk<>"all")&&($agama=="all")){ 
        $query = mysqli_query($mysqli, "SELECT* FROM mahasiswa WHERE jk = '$jk'ORDER BY nama DESC");
    }
    else if(($nama=="desc")&&($jk<>"all")&&($agama<>"all")){
        $query = mysqli_query($mysqli, "SELECT* FROM mahasiswa WHERE jk = '$jk' AND agama = '$agama' ORDER BY nama DESC");
    }
    else{
        echo "tidak ditemukan";
    }
?>
<?php 
    include "config.php";
    $nomor = 1;
    while($data = mysqli_fetch_array($query)){
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