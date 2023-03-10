<div class="main-theme">
    <?php
    if (isset($_GET['quanly'])) {
        $tam = $_GET['quanly'];
    } else {
        $tam = '';
    }
    if ($tam == 'danhmucsanpham') {
        include('main/danhmuc/danhmuc.php');
    } else if ($tam == 'blog') {
        include('main/blog.php');
    } else if ($tam == 'lienhe') {
        include('main/lienhe.php');
    }
    
    else{
        include('main/index.php');
    }



    ?>
</div>