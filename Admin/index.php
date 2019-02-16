<?php
	require_once ('Config/config.php');
	session_start();
    if ($_SESSION['status'] != "login") {
        header("location:login.php?pesan=belum_login");
	}
	function clean_dump($val)
	{
		print '<pre>';
		var_dump($val);
		print '</pre>';
	}
?>
<html>
<head>
	<title>Codiweb</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="icon" href="../Asset/img/codiweb-logo-2.svg">
	<link rel="stylesheet" type="text/css" href="../Asset/css/main_admin.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	
	<!-- <link rel="stylesheet" type="text/css" href="../Asset/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="../Asset/line-awesome/css/line-awesome-font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="../Asset/line-awesome/css/line-awesome.min.css"/>
	<script type="text/javascript" src="../Asset/js/jquery.js"></script>
	<script type="text/javascript" src="../Asset/js/bootstrap.min.js"></script> -->
	
</head>
<body class="bg-light">
	<nav class="navbar navbar-expand-lg navbar-dark bg-biru fixed-top">
        <div class="container">
			<div class="navbar-brand">
				<img src="../Asset/img/codiweb-logo-2.svg" width="50" height="50" class="">
				Selamat Datang, <?php echo $_SESSION['username']; ?>
			</div>
        </div>
	</nav>
	
	<div class="container main">
		<div class="row mt-5" >
			<div class="col-3">
				<div class="sidebar">
					<?php require_once ("sidebar.php"); ?>
				</div>
			</div>
			<div class="col-9">
				<?php
					switch (@$_GET['page']) {
						case 'data_user':
							include "User/data_user.php";
						break;
						case '':
							include "User/data_user.php";
						break;
						case 'data_artikel':
							include "Artikel/data_artikel.php";
						break;
						case 'tambah_artikel':
							include "Artikel/form_tambah.php";
						break;
						case 'update_artikel':
							include "Artikel/form_update.php";
						break;
						case 'tambah_artikel_action':
							include "Artikel/tambah.php";
						break;
						case 'delete_artikel':
							include "Artikel/delete.php";
						break;
						case 'data_kategori':
							include "Kategori/data_kategori.php";
						break;
						case 'tambah_kategori':
							include "Kategori/form_tambah.php";
						break;
						case 'update_kategori':
							include "Kategori/form_update.php";
						break;
						case 'tambah_kategori_action':
							include "Kategori/tambah.php";
						break;
						case 'update_kategori_action':
							include "Kategori/update.php";
						break;
						case 'delete_kategori':
							include "Kategori/delete.php";
						break;
						case 'update_user':
							include "User/form_update.php";
						break;
						case 'panduan':
							include "panduan.php";
						break;
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>
	
	