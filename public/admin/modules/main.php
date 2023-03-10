<div class="container-fluid">
    <div class="row">
        <?php
        if (isset($_GET['admin']) && isset($_GET['query'])) {
            $tam = $_GET['admin'];
            $query = $_GET['query'];
        } else {
            $tam = '';
            $query = '';
        }

        if ($tam == 'quanlydanhmucsanpham' && $query == 'them') {
            include("quanlydanhmucsp/them.php");
            include("quanlydanhmucphu/them.php");
            include("quanlydanhmucphu/lietke.php");
            include("quanlydanhmucsp/xuatdanhmuc.php");
        } 
        elseif ($tam == 'quanlydanhmucsanpham' && $query == 'editdanhmuc') {
            include("quanlydanhmucsp/edit.php");
        } elseif ($tam == 'quanlydanhmucsanpham' && $query == 'editdanhmucphu') {
            include("quanlydanhmucphu/edit.php");
        } 
        elseif ($tam == 'quanlysanpham' && $query == 'them') {
            include("quanlysp/them.php");
            include("quanlysp/xuatdanhsachsp.php");
        } 
        elseif ($tam == 'quanlysanpham' && $query == 'editsanpham') {
            include("quanlysp/edit.php");
        } 
        else {
            include("modules/dashboard.php");
        }
        ?>
    </div>
</div>