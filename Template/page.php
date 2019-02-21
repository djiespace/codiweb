<div class="container my-5">
    <div class="row">
        <div class="col-sm-12 col-lg-8 post-outer mb-2">
            <article class="card">
                <div class="card-body p-md-5">
                    <?php
                        if(isset($_GET['url']) && !empty($_GET['url'])){
                            $url = $_GET['url'];
                            $page = mysqli_query($db, "SELECT * FROM tbl_page WHERE Url_page='$url'");
                            if(mysqli_num_rows($page)){
                                while($data_page = mysqli_fetch_array($page)){
                    ?>
                    <div class="post-content my-5">
                       <?=$data_page['Isi_page']?>
                    </div>
                    <?php
                    }}}
                    ?>
                </div>
            </article>
        </div>
       <?php require_once ("Template/Widget/post_sidebar.php"); ?>
    </div>
</div>