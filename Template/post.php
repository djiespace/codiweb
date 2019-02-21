<div class="container my-5">
    <div class="row">
        <div class="col-sm-12 col-lg-8 post-outer mb-2">
            <article class="card">
                <?php
                    if(isset($_GET['slug']) && !empty($_GET['slug'])){
                        $slug = $_GET['slug'];
                        $query = mysqli_query($db, "SELECT * FROM tbl_artikel WHERE Slug_artikel='$slug' ORDER BY Tanggal_artikel DESC");
                        if(mysqli_num_rows($query)){
                            while($artikel = mysqli_fetch_array($query)){
                ?>
                <div class="card-body p-md-5">
                    <div class="post-header">
                        <div class="mb-3">
                            <img class="rounded-circle md-1" src="Asset/img/codiweb-logo-2.svg" width="32" height="32">
                            <a class="align-midle text-dark" href="index,php"><?=$artikel['Penulis_artikel']?></a>
                            <small class="align-midle text-muted">. Terakhir update <time><?=$artikel['Tanggal_artikel']?></time></small>
                        </div>
                    </div>
                    <h2 class="card-title mb-3"><?=$artikel['Judul_artikel']?></h2>
                    <hr>
                    <div class="post-content my-5">
                        <p>
                            <img src="http://localhost/codiweb/image.php?img=artikel/<?=$artikel['Img_artikel']?>" class="img-fluid">
                        </p>
                        <p>
                            <?=$artikel['Isi_artikel']?>
                        </p>
                    </div>
                </div>
                <?php
                        }
                    }
                } 
                ?>
            </article>
        </div>
       <?php require_once ("Template/Widget/post_sidebar.php"); ?>
    </div>
</div>