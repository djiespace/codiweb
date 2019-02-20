<div class="card-home bdr-biru">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h2 class="d-inline-block ">Update Artikel</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <?php
                    $id = $_GET['id'];
                    $query = mysqli_query($db, "SELECT * FROM tbl_artikel WHERE Id_artikel='$id'");
                    $data = mysqli_fetch_array($query);
                ?>
                <form method="post" action="?page=update_artikel_action" enctype="multipart/form-data">
                    <input type="hidden" value="<?=$id?>" name="id">
                    <div class="form-group">
                        <label for="inputJudul">
                            Judul Artikel :
                        </label>
                        <input type="text" name="judul" class="form-control" id="inputJudul" value="<?=$data['Judul_artikel']?>">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Pilih Kategori</label>
                        <select class="form-control" id="kategori"  name="kategori">
                        <?php
                        $sql = mysqli_query($db, "SELECT * FROM tbl_kategori ORDER BY Nama_kategori DESC");
                        $row = mysqli_num_rows($sql);
                        while($ktg=mysqli_fetch_array($sql)){
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
                        <input type="file" class="form-control-file" id="inputImg" name="img" value="<?=$data['Img_artikel']?>">
                    </div>
                    <div class="form-group">
                        <label for="inputIsi">
                            Isi Artikel :
                        </label>
                        <textarea type="text" name="isi" class="form-control" id="inputIsi"><?php echo $data['Isi_artikel']; ?></textarea>
                    </div>
                    <a onclick="goBack()" class="btn btn-default bg-biru float-left text-white" role="button"><i class="fa fa-arrow-left"></i> Sebelumnya</a>
                    <button type="submit" class="btn btn-default bg-biru float-right"><i class="fa fa-check"></i> Update</button>
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