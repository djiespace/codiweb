<div class="card-home bdr-biru">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h2 class="d-inline-block ">Data Kategori</h2>
                <a href="?page=tambah_kategori" role="button" class="btn btn-primary float-right">
                    <i class="fa fa-plus"></i> Tambah Kategori
                </a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Image Kategori</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                $halaman = 6;
                                $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                                $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                                $result = mysqli_query($db,"SELECT * FROM tbl_kategori");
                                $total = mysqli_num_rows($result);
                                $pages = ceil($total/$halaman);            
                                $query = mysqli_query($db,"SELECT * FROM tbl_kategori ORDER BY Id_kategori ASC LIMIT $mulai, $halaman")or die(mysql_error);
                                $no =$mulai+1;
                                while ($data = mysqli_fetch_assoc($query)) {
                                ?>
                            <tr>
                                <th class="row"><?php echo $no++; ?></th>
                                <td><img class="icon" src="http://localhost/codiweb/image.php?img=kategori/<?=$data['Img_kategori']?>"></td>
                                <td><?php echo $data['Nama_kategori']; ?></td>
                                <td>
                                    <a href="?page=update_kategori&id=<?php echo $data['Id_kategori']; ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="update"><i class="fa fa-edit"></i></a>
                                    <a href="?page=delete_kategori&id=<?php echo $data['Id_kategori']; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                                 }
                                 mysqli_close($db);   
                            ?>
                    </tbody>
                </table>
                <p class="float-left">Jumlah Data : <?php echo $pages; ?></p>
                <nav aria-label="Page navigation example" class="float-right">
                    <ul class="pagination">
                    <?php for ($i=1; $i<=$pages ; $i++){ ?>
                        <li class="page-item"><a class="page-link" href="?page=data_kategori&halaman=<?=$i?>"><?=$i?></a></li>
                    <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip(top)
    })
</script>