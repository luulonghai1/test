<?php
$sql_newsp = "SELECT * FROM bang_sanpham ORDER BY id_sanpham DESC ";
$row_newsp = mysqli_query($conn, $sql_newsp);

?>

<?php

$i = 0;
while ($row_pro = mysqli_fetch_array($row_newsp)) {
    if ($row_pro['phanloai'] == '1' && $i < 5) {

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
        $i++;
    }
}
?>