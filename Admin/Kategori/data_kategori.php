<div class="card-home bdr-biru">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h2 class="d-inline-block ">Data Kategori</h2>
                <a href="?page=tambah_kategori" role="button" class="btn btn-default bg-biru float-right">
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
                                $no = 1;
                                if(isset($_GET['pageno'])){
                                    $pageno = $_GET['pageno'];
                                }else{
                                    $pageno = 1;
                                }
                                $records_per_page = 6;
                                $offset = ($pageno-1) * $records_per_page; 
                                $pages_sql = mysqli_query($db, "SELECT COUNT(Id_kategori) AS jumKtg FROM tbl_kategori");
                                $row = mysqli_fetch_array($pages_sql)[0];
                                $row_page = ceil($row / $records_per_page);
                                
                                $sql = mysqli_query($db, "SELECT * FROM tbl_kategori LIMIT $offset,$records_per_page");
                                while($data = mysqli_fetch_array($sql)){
                                    //echo "<br>test";
                                
                                // var_dump(mysqli_fetch_array($sql));
                                // die();
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
                <?php  
                    
                    
                ?>
                <p class="float-left">Jumlah Data : <?php echo $row; ?></p>
                <nav aria-label="Page navigation example" class="float-right">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="?page=data_kategori&pageno=-1">First</a></li>
                        <li class="page-item <?php if($pageno >= 1){echo 'disabled';}?>">
                            <a class="page-link" href="<?php if($pageno <= 1){echo '#';} else {echo '?page=data_kategori&pageno='.($pageno - 1);} ?>">prev</a>
                        </li>
                        <li class="page-item<?php if($pageno >= $row_page){echo 'disabled';}?>"><a class="page-link" href="<?php if($pageno >= $row_page){echo '#';} else {echo '?page=data_kategori&pageno='.($pageno + 1);}?>"></a></li>
                        <li class="page-item"><a class="page-link" href="?page=data_kategori&pageno=<?=$row_page++;?>">Next</a></li>
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