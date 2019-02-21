<div class="card-home bdr-biru">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h2 class="d-inline-block ">Update Profile</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <?php
                    $id = $_GET['id'];
                    $query = mysqli_query($db, "SELECT * FROM tbl_user WHERE Id_user='$id'");
                    $data = mysqli_fetch_array($query);
                ?>
                <form method="post" action="?page=update_user_action" enctype="multipart/form-data">
                    <input type="hidden" value="<?=$id?>" name="id">
                    <div class="form-group">
                        <label for="inputNama">
                            Nama Lengkap :
                        </label>
                        <input type="text" name="nama" class="form-control" id="inputNama" value="<?=$data['Nama_lengkap']?>">
                    </div>
                    <div class="form-group">
                        <label for="inputUname">
                            Username:
                        </label>
                        <input type="text" name="uname" class="form-control" id="inputUname" value="<?=$data['Username']?>">
                    </div>
                    <div class="form-group">
                        <label for="inputPass">
                            Password :
                        </label>
                        <input type="password" name="pw" class="form-control" id="inputPass" value="<?=$data['Password']?>">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">
                            Email :
                        </label>
                        <input type="email" name="email" class="form-control" id="inputEmail" value="<?=$data['Email']?>">
                    </div>
                    <div class="form-group">
                        <label for="inputImg">
                            Image User :
                        </label>
                        <input type="file" class="form-control-file" id="inputImg" name="img" value="<?=$data['Img_user']?>">
                    </div>
                    <div class="form-group">
                        <label for="inputIsi">
                            Isi Artikel :
                        </label>
                        <textarea type="text" name="isi" class="form-control ckeditor" id="inputIsi ckeditor"><?php echo $data['Deskripsi']; ?></textarea>
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