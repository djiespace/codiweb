<div class="container my-5">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-sm-12 col-lg-8">
        <form action="" method="get">
            <div class="form-row">
                <div class="form-group col-md-10">
                    <input class="form-control mr-sm-2" type="search" id="input" name="cari" placeholder="Search" aria-label="Search">
                </div>
                <div class="form-group col-md-2">
                    <button class="btn btn-info my-2 my-sm-0" name="cari" id="cari">Search</button>
                </div>
            </div>
        </form>
        <?php 
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                // echo "<b>Hasil pencarian : ".$cari."</b>";
            }
        ?>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-12 col-lg-12 post-outer mb-2">
        <div id="list" class="list-group">
            <li class="list-group-item text-center bg-codiweb text-white"><h4>Search</h4></li>
            <?php
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $data = mysql_query("SELECT Id_kategori FROM tbl_kategori WHERE Nama_kategori LIKE '%".$cari."%' LIMIT 1"); 
            }
            else{
                $data = mysql_query("SELECT Judul_artikel,Slug_artikel,Tanggal_artikel FROM tbl_artikel WHERE Id_kategori=$cari"); 
            }
            while($q=mysqli_fetch_array($data)){
            ?>
            <a href="?page=post&slug=<?=$q['Slug_artikel']?>" class="list-group-item"><?=$q['Judul_artikel']?><span class="badge badge-dark float-right"><?=$q['Tanggal_artikel']?></span></a>
            <?php
            }
            ?>
        </div>
        </div>
    </div>
</div>
<!-- <script>
    var i;
    $("#cari").click(function(){
        // alert($("#input").val());
        $.get("http://localhost/codiweb/ajax.php?cari="+$("#input").val(), function(data, status){
            // alert("Data: " + data + "\nStatus: " + status);
            // console.log(data);
            // $( "#list" ).append( "<p>Test</p>" );
            $(".remove").remove();
            for (i = 0; i < data.length; i++) {
                $( "#list" ).append( "<li class=\"remove list-group-item\">"+data[i].Judul_artikel+data[i].Slug_artikel+data[i].Tanggal_artikel+"</li>" );
            } 
        });

    }); 
</script> -->