<div class="card-home bdr-biru">
    <div class="card-body">
        <?php
            require_once ("../Config/config.php");
            $id = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM tbl_kategori WHERE Id_kategori='$id'");
            $data=mysqli_fetch_array($query);
            if(isset($_POST['update_kategori'])){
                $img = $_FILES['img']['tmp_name'];
                $img_name = time() . preg_replace("/\s+/", "-", $_FILES['img']['name']);
                $img_temporary = $_FILES['img']['tmp_name'];
                $img_path = realpath('..') . '/Asset/img/';
                $query =mysqli_query($db, "UPDATE tbl_kategori SET Nama_kategori='$kategori' Img_kategori='$img_name' WHERE Id_kategori='$id'");
                if($query){
                    if (move_uploaded_file($img_temporary, $img_path . $img_name)) {
                        echo '<script language="javascript" >alert("Kategori Berhasil diupdate."); document.location="?page=data_kategori&pesan=sukses";</script>';
                    } else {
                        echo '<script language="javascript" >alert("Gagal updateload"); document.location="?page=tambah_kategori&pesan=gagal";</script>';
                    }
                }else{
                    header("location:?page=data_kategori&pesan=gagal_update");
                }
            }
        ?>
    <form action="" method="post" class="align-items-center">
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
                <button onclick="goBack()" type="submit" class="btn btn-default bg-biru float-left" name=""><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                <button type="submit" class="btn btn-default bg-biru float-right" name="update_kategori"><i class="fa fa-check"></i> Update</button>
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

