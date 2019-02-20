<div class="card-home bdr-biru">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h2 class="d-inline-block ">Tulis Artikel</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <form method="post" action="?page=tambah_artikel_action" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputJudul">
                            Judul Artikel :
                        </label>
                        <input type="text" name="judul" class="form-control" id="inputJudul" placeholder="Masukkan Judul Artikel">
                    </div>
                    <div class="form-group">
                       
                        <label for="kategori">Pilih Kategori</label>
                        <select class="form-control" id="kategori"  name="kategori">
                        <?php
                        $query = mysqli_query($db, "SELECT * FROM tbl_kategori ORDER BY Nama_kategori DESC");
                        $data = mysqli_num_rows($query);
                        while($ktg=mysqli_fetch_array($query)){
                        ?>
                        <option value="<?=$ktg['Id_kategori']?>"><?=$ktg['Nama_kategori']?></option>
                        <?php 
                        }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputImg">
                            Image Artikel :
                        </label>
                        <input type="file" class="form-control-file" id="inputImg" name="img">
                    </div>
                    <div class="form-group">
                        <label for="inputIsi">
                            Isi Artikel :
                        </label>
                        <textarea type="text" class="form-control" id="inputIsi" name="isi"></textarea>
                    </div>
                    <a onclick="goBack()" class="btn btn-default bg-biru float-left text-white" role="button"><i class="fa fa-arrow-left"></i> Sebelumnya</a>
                    <button class="btn btn-default bg-biru float-right" type="submit"><i class="fa fa-check"></i> Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>