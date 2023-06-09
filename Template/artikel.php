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
                $halaman = 6;
                $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                $result = mysqli_query($db,"SELECT * FROM tbl_artikel");
                $total = mysqli_num_rows($result);
                $pages = ceil($total/$halaman);          
                $query = mysqli_query($db, "SELECT * FROM tbl_artikel ORDER BY Tanggal_artikel DESC LIMIT $mulai,$halaman")or die(mysql_error);;
                $no = $mulai+1; 
                while($artikel = mysqli_fetch_assoc($query)){
            ?>
            <div class="col-md-6 col-lg-4 mb-4 d-flex">
                <div class="card card-shadow">
                    <a hidden><?=$no?></a>
                    <img class="card-img-top lazyloaded" src="http://localhost/codiweb/image.php?img=artikel/<?=$artikel['Img_artikel']?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a class="text-dark" href="?page=post&slug=<?=$artikel['Slug_artikel']?>"> <?=$artikel['Judul_artikel']?></a>
                        </h5>
                    </div>
                </div>
            </div>
            <?php    
            } 
            ?>
            <br>
            <div class="col-12 mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php for ($i=1; $i<=$pages ; $i++){ ?>
                        <li class="page-item"><a class="page-link" href="?page=artikel&halaman=<?=$i?>"><?=$i?></a></li>
                        <?php } ?>
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
<script>
    function goBack() {
        window.history.back();
    }
</script>