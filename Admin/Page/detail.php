<div class="card-home bdr-biru">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h2 class="d-inline-block ">Detail Page</h2>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <?php
                    $id = $_GET['id'];
                    $query = mysqli_query($db, "SELECT * FROM tbl_page WHERE Id_page='$id'");
                    $num = mysqli_num_rows($query);
                    $data=mysqli_fetch_array($query);
                ?>
                <div class="form-group">
                    <label for="inputJudul">
                        Nama Page :
                    </label>
                    <input type="text" class="form-control" id="inputJudul" value="<?=$data['Nama_page']?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputJudul">
                        Url Page :
                    </label>
                    <input type="text" class="form-control" id="inputJudul" value="<?=$data['Url_page']?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputIsi">
                        Isi Artikel :
                    </label>
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page"><?=$data['Isi_page']?></li>
                    </ol>
                    </nav>               
                </div>
                <a class="btn btn-info float-right" href="?page=update_page&id=<?=$data['Id_page']?>" role="button"><i class="fa fa-edit"></i> Update Data</a>
            </div>
        </div>
    </div>
</div>