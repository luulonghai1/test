<div class="wraper-home-banner">
    <?php
    if (isset($_GET['index'])) {
        $tam = $_GET['index'];
    } else {
        $tam = '';
    }
    if($tam == 'trangchu' ){
        include("banner/banner-home.php");
    }
    else {
       
    }

    ?>
</div>