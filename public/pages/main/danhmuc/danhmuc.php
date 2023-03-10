<?php
$sql_menu = "SELECT * FROM bang_danhmuc,bang_sanpham WHERE bang_danhmuc.id_danhmuc=bang_sanpham.id_danhmuc AND bang_sangpham.id_danhmuc='$_GET[id]' ORDER BY bang_sanpham.id_danhmuc DESC";
$query_menu = mysqli_query($conn, $sql_danhmuc);
$id_danhmuc = $_GET['id'];
?>
<?php
$sql_danhmucphu = "SELECT * FROM bang_sanpham,bang_danhmucphu WHERE bang_sanpham.id_danhmucphu=bang_danhmucphu.id_danhmucphu ORDER BY id_sanpham DESC";
$row_danhmucphu = mysqli_query($conn, $sql_danhmucphu);

?>

<section class="section section-collection">
    <div class="wrapper-heading-home text-center">
        <div class="container-fluid">
            <div class="classify" data-aos="fade-up" data-aos-duration="1000">

            </div>
            <?php
            while ($row_title = mysqli_fetch_array($query_menu)) {
                if ($row_title['id_danhmuc'] == $id_danhmuc) {
                    echo $row_title['tendanhmuc'];
                }
            }

            while ($danhmucphu = mysqli_fetch_array($row_danhmucphu)) {
                if ($danhmucphu['id_danhmucphu'] == $id_danhmuc) {
                    echo $danhmucphu['tendanhmucphu'];
                }
            }
            ?>
        </div>
    </div>
    <div class="wraper-conllection-1">
        <div class="container-fluid">
            <div class="row" height: auto;">
                <div class="content-product-list">
                    <?php
                    include('pages/main/product/list-product.php');
                    ?>
                </div>
                <div class="wiew-more-prod text-center">
                    <a class="buttum btn-home-wiew-more" href="">
                        Xem thêm
                    </a>
                </div>
            </div>
</section>