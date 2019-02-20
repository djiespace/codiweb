<div class="card-home bdr-biru">
    <div class="card-body">
        <?php
            $id = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM tbl_kategori WHERE Id_kategori='$id'");
            $data=mysqli_fetch_array($query);  
        ?>
    <form action="?page=update_kategori_action" method="post" class="align-items-center" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$id?>">
        <div class="form-row my-2">
            <label for="img" class="col-sm-2 col-form-label">Image Kategori </label>
            <div class="col-sm-10">
                <input name="img" type="file" id="img" class="form-control-file" value="<?=$data['Img_kategori']?>">
            </div>
        </div>
        <div class="form-row my-2">
            <label for="inputNama" class="col-sm-2 col-form-label">Tambah Kategori </label>
            <div class="col-sm-10">
                <input name="kategori" type="text" class="form-control" id="inputNama" value="<?=$data['Nama_kategori']?>" placeholder="Masukkan Nama Kategori">
            </div>
        </div>
        <div class="form-row my-4">
            <div class="col">
                <a onclick="goBack()" class="btn btn-default bg-biru float-left text-white" role="button"><i class="fa fa-arrow-left"></i> Sebelumnya</a>
                <button type="submit" class="btn btn-default bg-biru float-right" name="update_artikel"><i class="fa fa-check"></i> Update</button>
            </div>
        </div>
    </form> 
    </div>
</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>

