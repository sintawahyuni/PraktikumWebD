<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Universitas Udayana</title>
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
    .copy{
   height: 50px;
   width: 100%;
   background-color:#34495e;
   text-align: center;
   line-height: 3;
   bottom: 20px;
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
                 <td><a href="http://localhost:8080/prak_pbw/tugasSession/index.php">Beranda</a></td>
                 <td><a href="http://localhost:8080/prak_pbw/tugasSession/tentang.php">Tentang Kampus</a></td>
                 <td><a href="http://localhost:8080/prak_pbw/tugasSession/profil.php">Profil Pengajar</a></td>
                 <td><a href="http://localhost:8080/prak_pbw/tugasSession/kontak.php">Kontak</a></td>
             </tr>
         </table>
     </div>
     <div class="formLogin">
         <h2 style="text-align:center;margin-bottom:20px;">Login Form</h2>
         <form method="post" action="loginAction.php" class="forml">
            <label>Email</label><br>
            <input type="email" name="email"><br><br>
            <label>Password</label><br>
            <input type="password" name="password"><br><br>
            <button type="submit">Submit</button>
         </form>
     </div>
 </body>
 </html>