<div class="card-home bdr-biru">
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <a href="?page=data_user" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> Profile</a>
            <a class="list-group-item list-group-item-action dropdown-btn">
                <i class="fa fa-sticky-note"></i> Artikel 
            </a>
            <div class="dropdown-container">
                <a href="?page=data_artikel"><i class="fa fa-list"></i> Data Artikel</a>
                <a href="?page=tambah_artikel"><i class="fa fa-edit"></i> Tulis Artikel</a>
            </div>
            <a class="list-group-item list-group-item-action dropdown-btn">
                <i class="fa fa-list-ul"></i> Kategori
            </a>
            <div class="dropdown-container">
                <a href="?page=data_kategori"><i class="fa fa-list"></i> Data Kategori</a>
                <a href="?page=tambah_kategori"><i class="fa fa-edit"></i> Tambah Kategori</a>
            </div>            <a href="?data_page" class="list-group-item list-group-item-action">Data Page</a>
            <a href="login.php" class="list-group-item list-group-item-action">Logout</a>
        </ul>
    </div>
   
</div>
<script type="text/javascript">
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        } else {
        dropdownContent.style.display = "block";
        }
    });
    } 
</script>