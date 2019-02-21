<div class="card-home bdr-biru">
    <div class="card-body">
        <?php
            $id = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM tbl_page WHERE Id_page='$id'");
            $data=mysqli_fetch_array($query);  
        ?>
    <form action="?page=update_page_action" method="post" class="align-items-center" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$id?>">
        <div class="form-group">
            <label for="inputNama">
            Nama Page :
            </label>
            <input type="text" name="nama" class="form-control" id="inputNama" value="<?=$data['Nama_page']?>">
        </div>
        <div class="form-group">
            <label for="inputUrl">
            Url_page :
            </label>
            <input type="text" name="url" class="form-control" id="inputUrl" value="<?=$data['Url_page']?>">
        </div>
        <div class="form-group">
            <label for="inputIsi">
            Isi Page :
            </label>
            <textarea type="text" name="isi" class="form-control ckeditor" id="inputIsi ckeditor"><?php echo $data['Isi_page']; ?></textarea>
        </div>
        <div class="form-row my-4">
            <div class="col">
                <button type="submit" class="btn btn-primary  float-right" name="update-artikel"><i class="fa fa-check"></i> Update</button>
            </div>
        </div>
    </form> 
    </div>
</div>
