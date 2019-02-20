<header>
	<div class="jumbotron jumbotron-fluid bg-dark text-white m-0">
	    <div class="container">
			<div class="row">	
				<div class="col">
					<h1>Programmer Pengguna Linux</h1>
					<p class="lead">Belajar apapun tentang programming dengan linux, sama-sama belajar.</p>
				</div>
			</div>		
		</div>
	</div>
</header>
<article class="card-post my-5">
    <div class="container">
        <div class="row">
            <?php
                $batas = 6;	
                $halaman = @$_GET['page'];
                if(empty($halaman)){
                    $posisi = 0;
                    $halaman = 1;
                }else{
                    $posisi = ($halaman - 1) * $batas;
                }
                $query = mysqli_query($db, "SELECT * FROM tbl_artikel ORDER BY Tanggal_artikel DESC LIMIT $posisi,$batas");
                $row = mysqli_num_rows($query);
                while($artikel = mysqli_fetch_array($query)){
            ?>
            <div class="col-md-6 col-lg-4 mb-4 d-flex">
                <div class="card card-shadow">
                    <img class="card-img-top lazyloaded" src="http://localhost/codiweb/image.php?img=artikel/<?=$artikel['Img_artikel']?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a class="text-dark" href="?page=post&id=<?=$artikel['Id_artikel']?>"> <?=$artikel['Judul_artikel']?></a>
                        </h5>
                    </div>
                </div>
            </div>
            <?php    
            } 
            ?>
            <br>
            <?php
                $paging = mysqli_query($db,"SELECT * FROM tbl_artikel");
                $jumData = mysqli_num_rows($paging);
                $jumHalaman = ceil($jumData/$batas);
            ?>
            <div class="col-12 mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link"  href="" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>  
                        </li>
                        <?php 
                        for($u=1; $u<=$jumHalaman; $u++){
                            if ($u != $halaman) {
                                echo '<li class="page-item"><a class="page-link" href=\"?page=artikel&halaman='.$u.'">'.$u.'</a></li>';
                            }else{
                                echo '<li class="page-item"><a class="page-link" href="">$u</a></li>';
                            }
                        }
                        ?>
                        <li class="disabled page-item"><a class="page-link" href="">...</a></li>
                        <li class="page-item"><a class="page-link" href="">20</a></li>
                        <li class="page-item" >
                            <a class="page-link" href="" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a> 
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</article>
<section>
    <div class="jumbotron jumbotron-fluid mb-0">
        <div class="container">
            <div class="row">
                
                <div class="col">
                    
                    <p class="lead">
                        Masukkan email kamu biar nggak ketinggalan update dari <b>Codiweb...</b>
                    </p>
                    <form class="form-inline">
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="email" class="form-control" placeholder="email@contoh.com">
                        </div>
                        <button type="submit" class="btn btn-info mb-2">Berlangganan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <img src="Asset/img/about-section.svg" class="w-100 p-4" >
            </div>
            <div class="col-md-8 col-sm-12">
                <h2 class="my-3">Tentang Codiweb</h2>
                <p>
                Petani Kode adalah blog yang membahas seputar dunia pemrograman dan Linux. Tersedia tips dan panduan pemrograman menggunakan Linux yang bisa diikuti oleh siapa saja yang tertarik melakukan pemrograman menggunakan Linux. Tidak menutup kemungkinan juga, ada beberapa panduan yang menggunakan Windows. <a href="#"> Baca Selengkapnya...</a>
                </p>
                <p>
                    Saat ini topik yang sering dibahas seputar
                    <a href="">#PHP</a>
                    <a href="">#java</a>
                    <a href="">#python</a>
                    <a href="">#javascript</a>
                    dan 
                    <a href="">#Git</a>
                </p>
                <a class="btn btn-primary" href="">Join Group!</a>
                <a class="btn btn-outline-info" href="">Ngobrol</a>
            </div>
        </div>
    </div>
</section>