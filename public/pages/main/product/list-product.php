<?php
$sql_sanpham = "SELECT * FROM bang_sanpham,bang_danhmuc WHERE bang_sanpham.id_danhmuc=bang_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
$row_sanpham = mysqli_query($conn, $sql_sanpham);
$id_danhmuc = $_GET['id'];
?>

<?php
while ($row_pro = mysqli_fetch_array($row_sanpham)) {
    if ($row_pro['id_danhmuc'] == $id_danhmuc) {

?>

        <div class="col-xs-6 col-md-3 col-lg-20 pro-loop product-li">
            <div class=" product-block">
                <div class="product-img">
                    <a class="image" href="" title="<?php echo $row_pro['tensanpham']; ?>">
                        <picture style="position: relative;">
                            <img src="admin/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="">
                        </picture>
                        <picture style="position: absolute;" class="img2">
                            <img src="admin/quanlysp/uploads/<?php echo $row_pro['hinhanh2'] ?>" alt="">
                        </picture>
                    </a>
                    <div class="button-add product-quick-wiew">
                        <button type="submit" title="Mua ngay" class="action" onclick="">
                            <span>Mua ngay</span>
                            <i class="bi bi-cart-fill"></i>
                        </button>
                        <button type="submit" title="Xem chi tiết" class="action" onclick="">
                            <span>Xem chi tiết</span>
                            <i class="bi bi-eyeglasses"></i>
                        </button>

                    </div>
                </div>

                <div class="product-detail">
                    <div class="pro-name">
                        <div class="box-detail">
                            <p style="font-weight: 500;"><?php echo $row_pro['tensanpham'] ?></p>
                        </div>
                    </div>

                    <div class="pro-prices">
                        <span>
                            <?php echo number_format($row_pro['gia'], 0, ',', ',') . '₫'; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>

<?php
    }
}
?>