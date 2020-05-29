<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login</title>
  </head>
  <body>
    <div class="container" style="background: #fff; padding: 20px; border-radius: 5px; margin-top: 70px;">
        <img src="gambar/unud.png" class="logoLogin">
        <center><h2 style="margin-top:30px;"><b>Login</b></h2></center>
        <div class="alert alert-primary" role="alert" id="alert">
            A simple primary alert—check it out!
        </div>
        <form method="post" id="form-login" class="login"action="actionLogin.php">
        <div class="row" style="margin-top:20px;">
            <div class="col-lg-2 col-md-2"><b>NIP/NIM</b></div>
            <div class="col-lg-3 col-md-3"><b>
                <input type="text" name="id" id="id" class="form-control" placeholder="Masukkan NIP/NIM">
            </b></div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-lg-2 col-md-2"><b>Password</b></div>
            <div class="col-lg-4 col-md-4"><b>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
            </b></div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-lg-2 col-md-2"><b></b></div>
            <div class="col-lg-3 col-md-3"><b>
                <button type="submit" class="btn btn-primary" id="btn-submit"><b>Login</b></button>
            </b></div>
        </div>
        </form>
    </div>
    <script src="js/jquery.js"></script>
    <!-- <script type="text/javascript">
	$(document).ready(function(){
        $("#alert").hide();
		$("#btn-submit").click(function(){
			var data = $('#form-login').serialize();
            $.ajaxSetup({ cache: false });
            e.preventDefault();
			$.ajax({
				type: 'POST',
				url: "actionLogin.php",
				data: data,
				success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        load(mhsRegis.php);
                    }
                    else if(dataResult.statusCode==300){
                        load(mhsRegis.php);
                    }
                    else if(dataResult.statusCode==400){
                        alert("mahasiswa");
                        $('#body').load('mhsDashboard.php');
                    }
                    else if(dataResult.statusCode==500){
                        load(mhsRegis.php);
                    }
                    else{
                        load(mhsRegis.php);
                    }
				}
			});
		});
	});
	</script> -->
  </body>
</html>