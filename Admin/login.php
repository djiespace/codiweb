<?php
    require_once ('Config/config.php'); 
?>
<html>
<head>
	<title>Codiweb</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="icon" href="../Asset/img/codiweb-logo-2.svg">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../Asset/css/main_admin.css"/> -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
	
	<link rel="stylesheet" type="text/css" href="../Asset/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../Asset/line-awesome/css/line-awesome.min.css"/>
	<script type="text/javascript" src="../Asset/js/jquery.js"></script>
	<script type="text/javascript" src="../Asset/js/bootstrap.min.js"></script>
	
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:100px;">
            <div class="col-4 mx-auto">
            <?php if(isset($_GET['pesan'])) { ?>
                <div class="form-group alert alert-warning">
                    <?php 
                    if($_GET['pesan'] == "gagal"){
                        echo "<p><i class=fa fa-warning></i> Login Gagal ! username dan password salah</p>";
                    }if($_GET['pesan'] == "logout"){
                        echo "<p><i class=fa fa-warning></i> Anda telah berhasil logout</p>";
                    }if($_GET['pesan'] == "belum_login"){
                        echo "<p><i class=fa fa-warning></i> Anda harus login untuk mengakses halaman admin</p>";
                    }
                    ?>
                </div>
            <?php } ?>
                <div class="card bg-dark" style="color:#fff; box-shadow: 0 4px 8px 0 rgba(14, 30, 37, .16);">
                    <div class="card-body">
                        <img src="../Asset/img/codiweb-logo-2.svg" class="mx-auto d-block mb-1" width="100px" height="100px" >
                        <form method="POST" action="login_action.php">
                            <div class="form-group">
                                <label for="username">Username :</label>
                                <input class="form-control" type="text" id="username" name="username" placeholder="Username...">
                            </div>
                            <div class="form-group">
                                <label for="password">Password :</label>
                                <input class="form-control" type="password" id="password" name="password" placeholder="Password...">
                            </div>
                            
                            <button class="btn btn-primary btn-block" type="submit">login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
	