<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kampus</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    .menu{
        width: 100%;
        height: 100px;
        background-color:#34495e;
        position: fixed;
        top: 0px;
    }
   .boxProfil{
        height: 300px;
        width: 100%;
        /* background-color: lawngreen; */
        margin-top: 170px;
    }
    .pagination{
        display: inline;
        margin-left: 35%;
        
    }
    .pagination a{
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
        border: 1px solid #ddd;
        color: black;
    }
    .pagination a.active{
        background-color:#34495e ;
        color: white;
        border: 1px solid #34495e;
    }
    .pagination a:hover:not(.active) {background-color: #ddd;}
   .copy{
       height: 50px;
       width: 100%;
       background-color:#34495e;
       text-align: center;
       position: absolute;
       bottom: 0;
   }
</style>
<body>
    <div class="menu">
        <img src="gambar/unud.png" class="logo">
        <div class="tag">
            <p style="font-size: larger;"><b>UNIVERSITAS UDAYANA</b><br>
            <i>Unggul, Mandiri, Berbudaya</i></p>
        </div>
        <table cellpadding="20px" class="tableMenu">
            <tr>
                 <td><a href="index.php">Beranda</a></td>
                 <td><a href="tentang.php">Tentang Kampus</a></td>
                 <td><a href="profil.php">Profil Pengajar</a></td>
                 <td><a href="kontak.php">Kontak</a></td>
            </tr>
        </table>
    </div>
    <div class="boxProfil">
        <div class="boxFotoProfil">
            <div class="boxEachF" style="float: left; margin-left: 120px;">
                <img src="gambar/ava1.png" class="boxEachF">
            </div>
            <div class="boxEachF" style="float: left; margin-left: 150px;">
                <img src="gambar/ava3.png" class="boxEachF">
            </div>
            <div class="boxEachF" style="float: left; margin-left: 180px;">
                <img src="gambar/ava1.png" class="boxEachF">
            </div>
            <div class="boxEachF" style="float: right; margin-right: 150px;">
                <img src="gambar/ava3.png" class="boxEachF">
            </div>
            <div class="boxEachF" style="float: right; margin-right: 120px;">
                <img src="gambar/ava1.png" class="boxEachF">
            </div>
        </div>
        <div class="boxDes" style="float: left; margin-left: 60px;">
            <center>
                Budi Doremi
                <br>12345678987654234   
                <br>budidoremi@cs.unud.ac.id
                <br>Jl.Ahmad Dahlan 1 No.4
            </center>
        </div>
        <div class="boxDes" style="float: left; margin-left: 50px;">
            <center>
                Nyoman Parwati Sari Murni
                <br>12345678987654243   
                <br>sarimurni@cs.unud.ac.id
                <br>Jl.Ahmad Dahlan 1 No.9
            </center>
        </div>
        <div class="boxDes" style="float: left; margin-left: 60px;">
            <center>
                I Gede Mawang Putra 
                <br>12345678987654299   
                <br>putramawang@cs.unud.ac.id
                <br>Jl.Ahmad Dahlan 9 No.4
            </center>
        </div>
        <div class="boxDes" style="float: left; margin-left: 70px;">
            <center>
                Tomingse Rahman Putra 
                <br>12345678987654277   
                <br>tomingse@cs.unud.ac.id
                <br>Jl.Ahmad Dahlan 99 No.4
            </center>
        </div>
        <div class="boxDes" style="float: left; margin-left: 30px;">
            <center>
                Dewi Rahmawati
                <br>12345678987688234   
                <br>dewdewi@cs.unud.ac.id
                <br>Jl.Ahmad Yani 1 No.4
            </center>
        </div>
    </div>
    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
    </div>
   <div class="copy">
       <p style="color: white;">Copyright 2020 || Universitas Udayana</p>
   </div>
</body>
</html>