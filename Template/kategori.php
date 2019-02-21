<div class="container my-5">
    <div class="row">
        <div class="col-sm-12 col-lg-8 post-outer mb-2">
            <article class="card">
                <div class="card-body">
                <?php 
                    if(isset($_GET['id']) && !empty($_GET['id'])){
                    $id = abs($_GET['id']);
                    $ktgh = mysqli_query($db,"SELECT * FROM tbl_kategori WHERE Id_kategori='$id'");
                    $h = mysqli_fetch_assoc($ktgh);
                ?>
                <div class="post-header">
                    <h2 class="card-title mb-3"><?=$h['Nama_kategori']?></h2>
                </div>                
                <div class="post-content my-5">
                    <ol class="kategori">
                    <?php
                    if(mysqli_num_rows($query)){
                        $query = mysqli_query($db, "SELECT * FROM tbl_artikel WHERE Id_kategori='$id' ORDER BY Id_artikel ASC");
                        while($data = mysqli_fetch_assoc($query)){
                            $ktg_id = $data['Id_kategori'];
                            $ktg = mysqli_query($db,"SELECT * FROM tbl_kategori WHERE Id_kategori='$ktg_id'");
                            $data_ktg = mysqli_fetch_assoc($ktg);
                    ?>
                        <li><a href="?page=post&slug=<?=$data['Slug_artikel']?>"><?=$data['Judul_artikel']?></a></li>
                        <?php } }}else{
                                // echo '<h1>Not Found</h1>';
                            }?>
                    </ol>
                </div>
                </div>
            </article>
        </div>
       <?php require_once ("Template/Widget/kategori_sidebar.php");?>
    </div>
</div>