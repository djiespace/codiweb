<div class="card-home bdr-biru">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h2 class="d-inline-block ">Data Artikel</h2>
                <a href="?page=tambah_artikel" role="button" class="btn btn-primary float-right">
                    <i class="fa fa-plus"></i> Tambah Artikel
                </a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Tanggal Published</th>
                            <th scope="col">penulis</th>
                            <th scope="col">Gambar Artikel</th>
                            <th scope="col">Judul Artikel</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                             
                            $halaman = 5;
                            $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                            $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                            $result = mysqli_query($db,"SELECT * FROM tbl_artikel");
                            $total = mysqli_num_rows($result);
                            $pages = ceil($total/$halaman);                           
                            $query = mysqli_query($db, "SELECT * FROM tbl_artikel ORDER BY Id_artikel DESC LIMIT $mulai, $halaman")or die(mysql_error);
                            $no = $mulai+1;
                            while($artikel=mysqli_fetch_assoc($query)){

                        ?>
                            <tr>
                                <th class="row"><?php echo $no++; ?></th>
                                <td><?php echo $artikel['Tanggal_artikel']; ?></td>
                                <td><?php echo $artikel['Penulis_artikel']; ?></td>
                                <td><img class="icon-artikel" src="http://localhost/codiweb/image.php?img=artikel/<?=$artikel['Img_artikel']?>"></td>
                                <td><?php echo $artikel['Judul_artikel']; ?></td>
                                <td>
                                    <a href="?page=update_artikel&id=<?php echo $artikel['Id_artikel']; ?>" class="btn btn-primary" data-placement="top" title="update"><i class="fa fa-edit"></i></a>
                                    <a href="?page=delete_artikel&id=<?php echo $artikel['Id_artikel']; ?>" class="btn btn-danger" data-placement="top" title="delete"><i class="fa fa-trash"></i></a>

                                </td>
                            </tr>
                            <?php 
                                }
                                mysqli_close($db);
                                ?>
                    </tbody>
                </table>
                <p class="float-left">Jumlah Data : <?php echo $total; ?></p>
                <nav aria-label="Page navigation example" class="float-right">
                    <ul class="pagination">
                    <?php for ($i=1; $i<=$pages ; $i++){ ?>
                        <li class="page-item"><a class="page-link" href="?page=data_artikel&halaman=<?=$i?>"><?=$i?></a></li>
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