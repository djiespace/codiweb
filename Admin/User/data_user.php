<?php
    $query = mysqli_query($db,"SELECT * FROM tbl_user");
    $data=mysqli_fetch_array($query);
?>
<div class="card-home bdr-biru">
    <div class="card-body">
        <div class="row">
            <div class="col-3">
                <img src="http://localhost/codiweb/image.php?img=<?=$data['Img_user']?>" class="img-thumbnail mx-auto d-block" width="200px" height="200px">
            </div>
            <div class="col-9">
                <h2 class="d-inline-block ">Data User</h2>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <th class="row">Nama Lengkap :</th>
                            <td><?=$data['Nama_lengkap']?></td>
                        </tr>
                        <tr>
                            <th class="row">Email :</th>
                            <td><?=$data['Email']?></td>
                        </tr>
                        <tr>
                            <th class="row">Username :</th>
                            <td><?=$data['Username']?></td>
                        </tr>
                        <tr>
                            <th class="row">Deskripsi :</th>
                            <td><?=$data['Deskripsi']?></td>
                        </tr>
                        
                    </tbody>
                </table>
                <a class="btn btn-primary float-right" href="?page=update_user&id=<?=$data['Id_user']?>" role="button">
                    <i class="fa fa-edit"></i> Update Data
                </a>
            </div>
        </div>
    </div>
</div>