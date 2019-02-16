<div class="card-home bdr-biru">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h2 class="d-inline-block ">Data Artikel</h2>
                <a href="?page=tambah_artikel" role="button" class="btn btn-default bg-biru float-right">
                    <i class="fa fa-plus"></i> Tambah Artikel
                </a>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Tanggal Published</th>
                            <th scope="col">penulis</th>
                            <th scope="col">Judul Artikel</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once ('../Config/config.php');
                            $query = mysqli_query($db, "SELECT * FROM tbl_artikel ORDER BY Id_artikel DESC");
                            $num = mysqli_num_rows($query);
                            while($artikel=mysqli_fetch_array($query)){

                        ?>
                            <tr>
                                <th class="row">
                                    <?php echo $artikel['Id_artikel']; ?>
                                </th>
                                <td>
                                    <?php echo $artikel['Tanggal_artikel']; ?>
                                </td>
                                <td>
                                    <?php echo $_SESSION['username']; ?>
                                </td>
                                <td>
                                    <?php echo $artikel['Judul_artikel']; ?>
                                </td>
                                <td>
                                    <a href="?page=update_artikel&id=<?php echo $artikel['Id_artikel']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <a href="?page=delete_artikel&id=<?php echo $artikel['Id_artikel']; ?>" onclick="return confirm(\Anda Yakin?\)" class="btn btn-danger"><i class="fa fa-trash"></i></a>

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