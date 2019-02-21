<footer class="container-fluid border bg-white border-bottom-0 border-left-0 border-right-0">
    <div class="container pt-3 pb-3 pt-md-5 pb-md-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-0 mb-sm-3">
                <ul class="nav justify-content-center justify-content-lg-start">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <?php
                    // $no = 1;
                    $query_page = "SELECT * FROM tbl_page";
                    $conn = mysqli_query($db,$query_page); 
                    while($page = mysqli_fetch_array($conn)){
                    ?>
                    <li class="nav-item"><a class="nav-link" href="?page=page&url=<?=$page['Url_page']?>"><?=$page['Nama_page']?></a></li>
                    <?php
                    }
                    ?>
                    <li class="nav-item"><a class="nav-link" href="?page=arsip">Arsip</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12 text-center text-md-right pt-2">
                &copy; 2019 <a href="index.php">Codiweb</a>            
            </div>
        </div>
    </div>
</footer>