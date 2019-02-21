<div class="container my-5">
    <div class="row">
        <div class="col-sm-12 col-lg-12 post-outer mb-2">
        <div class="list-group">
            <li class="list-group-item text-center bg-codiweb text-white"><h4>Arsip Artikel</h4></li>
            <?php
                $no = 1;
                $query = mysqli_query($db, "SELECT * FROM tbl_artikel ORDER BY Tanggal_artikel DESC")or die(mysql_error);;
                while($artikel = mysqli_fetch_assoc($query)){
            ?>
            <a href="?page=post&slug=<?=$artikel['Slug_artikel']?>" class="list-group-item list-group-item-action"><?=$no++?>. <b><?=$artikel['Judul_artikel']?></b><span class="badge badge-pill badge-dark float-right"><?=$artikel['Tanggal_artikel']?></span></a>
            <?php
                }
            ?>  
        </div>
        </div>
    </div>
</div>