<?php
$sql_phanloai_sanpham = "SELECT * FROM bang_sanpham ORDER BY id_sanpham DESC";
$row_phanloai_sanpham = mysqli_query($conn, $sql_phanloai_sanpham);
$row_phanloai = mysqli_fetch_array($row_phanloai_sanpham);
?>

<div class="home-slider slider-sm slider-xm">
    <div class="homepage-slider">
        <a id="slider-link" href="">
            <img src="IMAGES/img_slider_top_menu/biasx_42791f54eaa549438045a1762776cbb9.jpg" alt="" style="width: 100%;">
        </a>
    </div>
</div>
<section class="section section-collection">
    <div class="wrapper-heading-home text-center">
        <div class="container-fluid">
            <div class="classify" data-aos="fade-up" data-aos-duration="1000">
                <h2>
                    <a namespace="sanphammoi" href="pages/main/sanphammoi.php">Sản phẩm mới</a>
                </h2>
            </div>
        </div>
    </div>
    <div class="wraper-conllection-1">
        <div class="container-fluid">
            <div class="row" height: auto;">
                <div class="content-product-list">

                    <?php include("product/new-product.php"); ?>
                </div>

                <div class="wiew-more-prod text-center">
                    <a class="buttum btn-home-wiew-more" href="">
                        Xem thêm
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-collection">
    <div class="wrapper-heading-home text-center">
        <div class="container-fluid">
            <div class="classify" data-aos="fade-up" data-aos-duration="1000">
                <h2>
                    <a href="./page-sanpham/index.php?phanloai=0">TOP sản phẩm bán chạy</a>
                </h2>
            </div>
        </div>
    </div>
    <div class="wraper-conllection">
        <div class="container-fluid">
            <div class="row" height: auto;>
                <div class="content-product-list">
                    <?php include("product/best-selling-product.php"); ?>
                </div>
            </div>
        </div>

        <div class="wiew-more-prod text-center">
            <a class="buttum btn-home-wiew-more" href="">
                Xem thêm
            </a>
        </div>
    </div>
</section>