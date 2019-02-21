<div class="col-sm-12 col-lg-4">
    <h5>Susah Belajar Programming?</h5>
    <p>
        Dapatkan panduan dan tips eksklusif dari Codiweb untuk membantumu belajar pemrograman
    </p>
    <form>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="*Nama">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="*Email">
        </div>
        <button class="btn btn-primary btn-block">Ya, Saya Mau!</button>
    </form>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title m-0">Artikel Terbaru</h4>
        </div>
        <div class="list-group list-group-flush">
        <?php
            $batas = 5;
            $query = mysqli_query($db, "SELECT * FROM tbl_artikel ORDER BY Tanggal_artikel DESC LIMIT $batas");
            $row = mysqli_num_rows($query);
            while($artikel = mysqli_fetch_array($query)){
        ?>
            <a class="list-group-item list-group-item-action flex-column align-items-start" href="?page=post&slug=<?=$artikel['Slug_artikel']?>">
                <div class="row">
                    <div class="col-12">
                        <img src="http://localhost/codiweb/image.php?img=artikel/<?=$artikel['Img_artikel']?>" class="rounded float-left mr-3" width="100" height="auto">
                        <h6 class="mb-1"><?=$artikel['Judul_artikel']?></h6>
                        <small class="text-secondary"><?=$artikel['Tanggal_artikel']?></small>
                    </div>
                </div>
            </a>
        <?php
        }
        ?>
        </div>
    </div>
</div>