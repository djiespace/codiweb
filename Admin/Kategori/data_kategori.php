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
        <div class="row mt-5 mb-5">
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
                                $query = mysqli_query($db,"SELECT * FROM tbl_kategori");
                                $num = mysqli_num_rows($query);
                                while($kategori=mysqli_fetch_array($query)){   
                            ?>
                            <tr>
                                <th class="row"><?php echo $no++; ?></th>
                                <td><?php echo $kategori['Img_kategori']; ?></td>
                                <td><?php echo $kategori['Nama_kategori']; ?></td>
                                <td>
                                    <a href="?page=update_kategori&id=<?php echo $kategori['Id_kategori']; ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="update"><i class="fa fa-edit"></i></a>
                                    <a href="?page=delete_kategori&id=<?php echo $kategori['Id_kategori']; ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                                 }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip(top)
    })
</script>