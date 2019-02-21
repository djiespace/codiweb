<div class="col-sm-12 col-lg-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title m-0">Tutorial Lainnya :</h5>
        </div>
        <?php
            $query = mysqli_query($db, "SELECT * FROM tbl_kategori ORDER BY Nama_kategori ASC");
            while($data=mysqli_fetch_array($query)){
        ?>
        <div class="list-group list-group-flush">
            <a href="?page=kategori&id=<?=$data['Id_kategori']?>" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="row">
                    <div class="col-12" style="font-size: 20px;">
                        <div class="align-midle">
                            <img class="icon" src="http://localhost/codiweb/image.php?img=kategori/<?=$data['Img_kategori']?>">
                            <?=$data['Nama_kategori']?>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php
        }
        ?>
    </div>
</div>