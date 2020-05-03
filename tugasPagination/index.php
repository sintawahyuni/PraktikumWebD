<!DOCTYPE html>
<?php
include_once("config.php");
?>
<html lang="en">
<head>
    <title>Pagination</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="container">
       <h1>Daftar Buku Perpustakaan SukaCita</h1>
       <p>Tabel berikut merupakan daftar list buku sejumlah 15 buku yang akan dibuatkan <i>pagination</i>, dimana setiap halaman memuat 5 daftar buku</p>
    <center>
        <table border="1" cellpadding="8px">
        <tr>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
        </tr>
<?php 
  $halaman = 5;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $total = mysqli_num_rows(mysqli_query($mysqli, "SELECT* FROM buku"));
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($mysqli, "SELECT * FROM buku LIMIT $mulai, $halaman")or die(mysql_error);
  $no =$mulai+1;
 
  while ($data = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
      <td><?php echo $data['id_buku'];?></td>                  
      <td><?php echo $data['judul']; ?></td>  
      <td><?php echo $data['pengarang']; ?></td>  
      <td><?php echo $data['penerbit']; ?></td>                        
    </tr>
    <?php               
  } 
  ?>
    </table>
</center>
<div class="">
    <?php for ($i=1; $i<=$pages; $i++){ ?>
    <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a> 
    <?php } ?>
</div>
    </div> 
</body>
</html>