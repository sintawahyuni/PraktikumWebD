<html lang="en">
<head>
    <title>Tambah Biodata</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
table{
    margin-top: 30px;
    width:80%;
}
h1{
    margin-top:20px;
}
form{
    margin-left:20%;
}
input{
    border-radius:5px;
    height: 30px;
    width:300px;
    border: 2px solid #f3a683;
}
}
</style>
<body>
<div class="container">
    <h1>Tambah Biodata</h1>
    <a href="index.php">Halaman Utama</a>
    <form action="add.php" method="post" name="formAdd">
    <table width="50%" cellpadding="8px;">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>NIM</td>
                <td><input type="number" name="nim"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan"style="border:none; background-color: #f3a683;"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];

        include_once("config.php");

        $hasil = mysqli_query($mysqli, "INSERT INTO tb_biodata VALUES('$nama', '$nim', '$email', '$alamat')");

        $message = "Biodata Berhasil Ditambahkan ";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    ?>
</div>
</body>
</html>