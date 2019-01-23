<?php
    include "Config/config.php";
?>
<html>
<head>
	<title>Codiweb</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="icon" href="Asset/img/codiweb-logo-2.svg">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Asset/css/main.css"/>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!--
	<link rel="stylesheet" type="text/css" href="Asset/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="Asset/font-awesome/css/font-awesome.css"/>
	<script type="text/javascript" src="asset/js/jquery.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
	-->
</head>
<body class="bg-light">

	<nav class="navbar navbar-expand-lg navbar-dark bg-codiweb sticky-top">
        <div class="container">
            <a class="navbar-brand " href="index.php">
				<img class="d-inline-block align-top" src="Asset/img/codiweb-logo-2.svg" height="32" alt="codiweb logo">
				Codiweb
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="?page=kategori">PHP</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?page=kategori">Java</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?page=kategori">Python</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?page=kategori">Javascript</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="?page=kategori">Git</a>
					</li>
                </ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Kata Kunci" aria-label="Search">
					<button class="btn btn-info my-2 my-sm-0" type="submit">Cari</button>
				</form>
				
            </div>
        </div>
	</nav>
	