<?php
	require_once ('Config/config.php');
?>
<html>
<head>
	<title>Codiweb</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="icon" href="Asset/img/codiweb-logo-2.svg">
	<link rel="stylesheet" type="text/css" href="Asset/css/main.css"/>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> -->
	
	<link rel="stylesheet" type="text/css" href="Asset/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="Asset/css/bootstrap-grid.min.css"/>
	<link rel="stylesheet" type="text/css" href="Asset/css/bootstrap-reboot.min.css"/>
	<link rel="stylesheet" type="text/css" href="Asset/line-awesome/css/line-awesome-font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="Asset/line-awesome/css/line-awesome.min.css"/>
	<script type="text/javascript" src="Asset/js/jquery.js"></script>
	<script type="text/javascript" src="Asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Asset/js/bootstrap.bundle.min.js"></script>

	
</head>
<body class="bg-light">
	<nav class="navbar navbar-expand-lg navbar-dark bg-codiweb" role="navigation">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <img src="Asset/img/codiweb-logo-2.svg" width="30" height="30" class="d-inline-block align-top">
                Codiweb
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<?php
					$batas = 5;
					$query = mysqli_query($db,"SELECT * FROM tbl_kategori ORDER BY Id_kategori ASC LIMIT $batas")or die(mysqli_error);
					while($menu = mysqli_fetch_assoc($query)){
					?>
					<li class="nav-item">
						<a class="nav-link" href="?page=kategori&id=<?=$menu['Id_kategori']?>"><?=$menu['Nama_kategori']?></a>
					</li>
					<?php } ?>
				</ul>
				<form action=""class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<a href="?page=search" class="btn btn-info my-2 my-sm-0" name="cari" type="">Search</a>
				</form>
			</div>
        </div>
    </nav>