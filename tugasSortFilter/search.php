<?php
include "config.php";

$nim = $_GET['nim'];
$jalur = $_GET['jalur'];
$cari = $_GET['cari'];

if($jalur=="all"){
    $query = mysqli_query($mysqli, "SELECT * FROM tb_mhs WHERE nama LIKE '%$cari%' OR nim like '%$cari%'");
}
else if($jalur<>"all"){
    $query = mysqli_query($mysqli, "SELECT * FROM tb_mhs WHERE jalur = '$jalur' AND (nama LIKE '%$cari%' OR nim like '%$cari%')");
}
?>
<?php
include "config.php";
$no = 1;
while($data = mysqli_fetch_array($query)){
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $data['nim']; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['jalur']; ?></td>
    <td><?php echo $data['alamat']; ?></td>
</tr>
<?php } ?>