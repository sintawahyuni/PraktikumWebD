<?php
include_once("config.php");

if(isset($_POST['update'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $hasil = mysqli_query($mysqli, "UPDATE tb_biodata SET nama='$nama',email='$email',alamat='$alamat' WHERE nim=$nim");

    header("Location:index.php");
}
?>
<?php
$nim = $_GET['nim'];

$hasil = mysqli_query($mysqli, "SELECT * FROM tb_biodata WHERE nim = $nim");

while($user = mysqli_fetch_array($hasil))
{
    $nama = $user['nama'];
    $email = $user['email'];
    $alamat = $user['alamat'];
}
?>
<html>
<head>  
    <title>Edit Biodata</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
form{
    margin-left:25%;
}
input{
    border: 2px solid #f3a683;
}
</style>
<body>
<div class="container">
    <h1>Edit Biodata Mahasiswa</h1>
    <a href="index.php">Halaman Utama</a>
    <form action="edit.php" method="post" name="editForm">
        <table cellpadding="8px">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td><input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>></td>
                <td><input type="submit" name="update" value="Update" style="border:none; background-color: #f3a683;"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>