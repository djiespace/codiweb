<div class="card-home bdr-biru">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h2 class="d-inline-block ">Data Page</h2>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-12">
            <p class="text-danger">*Untuk data page ini defaultnya dari codiweb hanya bisa di edit tidak bisa di tambah</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Page</th>
                            <th scope="col">Url Page</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $query = mysqli_query($db, "SELECT * FROM tbl_page ");
                            $num = mysqli_num_rows($query);
                            while($data=mysqli_fetch_array($query)){

                        ?>
                            <tr>
                                <th class="row">
                                    <?=$no++?>
                                </th>
                                <td>
                                    <?php echo $data['Nama_page']; ?>
                                </td>
                                <td>
                                    <?php echo $data['Url_page']; ?>
                                </td>
                                <td>
                                    <a href="?page=detail_page&id=<?=$data['Id_page']; ?>" class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="detail"><i class="fa fa-search"></i></a>
                                    <a href="?page=update_page&id=<?=$data['Id_page']; ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="update"><i class="fa fa-edit"></i></a>
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