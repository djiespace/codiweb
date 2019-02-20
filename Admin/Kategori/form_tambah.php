<div class="card-home bdr-biru">
    <div class="card-body">
    <form action="?page=tambah_kategori_action" method="post" class="align-items-center" enctype="multipart/form-data">
        <div class="form-row my-2">
            <label for="img" class="col-sm-2 col-form-label">Image Kategori </label>
            <div class="col-sm-10">
                <input name="img" type="file" id="img" class="form-control-file">
            </div>
        </div>
        <div class="form-row my-2">
            <label for="inputNama" class="col-sm-2 col-form-label">Tambah Kategori </label>
            <div class="col-sm-10">
                <input name="kategori" type="text" class="form-control" id="inputNama" placeholder="Masukkan Nama Kategori">
            </div>
        </div>
        <div class="form-row my-4">
            <div class="col">
                <a onclick="goBack()" class="btn btn-default bg-biru float-left text-white" role="button"><i class="fa fa-arrow-left"></i> Sebelumnya</a>
                <button type="submit" class="btn btn-default bg-biru float-right" name="tambah_kategori"><i class="fa fa-check"></i> Tambah</button>
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
