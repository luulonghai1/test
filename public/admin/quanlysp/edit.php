<?php
$sql_edit_sp = "SELECT * FROM bang_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
$row_edit_sp = mysqli_query($conn, $sql_edit_sp);

?>
<div class="text-center">
    <p id="content-main">Sửa sản phẩm</p>
</div>
<table>
    <?php
    while ($line = mysqli_fetch_array($row_edit_sp)) {
    ?>
        <form method="POST" action="quanlysp/xuly.php?idsanpham=<?php echo $line['id_sanpham'] ?>" enctype="multipart/form-data">
            <tr>
                <td>Danh mục sản phẩm</td>
                <td>
                    <select name="danhmuc" id="">
                        <?php
                        $sql_danhmuc = "SELECT * FROM bang_danhmuc ORDER BY id_danhmuc DESC";
                        $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                            if ($row_danhmuc['id_danhmuc'] == $line['id_danhmuc']) {
                        ?>
                                <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>

                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Danh mục sản phẩm</td>
                <td>
                    <select name="danhmucphu" id="">
                        <?php
                        $sql_danhmucphu = "SELECT * FROM bang_danhmucphu ORDER BY id_danhmucphu DESC";
                        $query_danhmucphu = mysqli_query($conn, $sql_danhmucphu);
                        while ($row_danhmucphu = mysqli_fetch_array($query_danhmucphu)) {
                            if ($row_danhmucphu['id_danhmucphu'] == $line['id_danhmucphu']) {
                        ?>
                                <option selected value="<?php echo $row_danhmucphu['id_danhmucphu'] ?>"><?php echo $row_danhmucphu['tendanhmucphu'] ?></option>

                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row_danhmucphu['id_danhmucphu'] ?>"><?php echo $row_danhmucphu['tendanhmucphu'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Tên sản phẩm</td>
                <td>
                    <input type="text" value="<?php echo $line['tensanpham'] ?>" name=" tensanpham">
                </td>
            </tr>
            <tr>
                <td>Mã</td>
                <td><input type="text" name="masanpham" value="<?php echo $line['masanpham'] ?>"></td>
            </tr>

            <tr>
                <td>Giá </td>
                <td><input type="text" name="gia" value="<?php echo $line['gia'] ?>"></td>
            </tr>

            <tr>
                <td>Số lượng</td>
                <td><input type="text" name="soluong" value="<?php echo $line['soluong'] ?>"></td>
            </tr>

            <tr>
                <td>Hình ảnh</td>
                <td>
                    <img class="img-upload" src="quanlysp/uploads/<?php echo $line['hinhanh'] ?>" alt="">
                    <input type="file" name="hinhanh">
                </td>
            </tr>

            <tr>
                <td>Hình ảnh 2</td>
                <td>
                    <img class="img-upload" src="quanlysp/uploads/<?php echo $line['hinhanh2'] ?>" alt="">
                    <input type="file" name="hinhanh2" value="<?php echo $line['hinhanh2'] ?>">
                </td>
            </tr>

            <tr id="mota">
                <td>Mô tả</td>
                <td>
                    <textarea class="form-control" id="" name="mota" style="width: 100%;"><?php echo $line['mota'] ?></textarea>
                </td>
            </tr>

            <tr>
                <td>Phân loại</td>
                <td>

                    <select name="phanloai" id="">
                        <?php
                        if ($line['phanloai'] == '0') {
                        ?>
                            <option value="0">Sản phẩm mới</option>
                            <option value="1">Sản phẩm bán chạy</option>
                            <option value="2">none</option>
                        <?php
                        } elseif ($line['phanloai'] == '1') {
                        ?>
                            <option value="1">Sản phẩm bán chạy</option>
                            <option value="0">Sản phẩm mới</option>
                            <option value="2">none</option>
                        <?php
                        } else {
                        ?>
                            <option value="2">none</option>
                            <option value="0">Sản phẩm mới</option>
                            <option value="1">Sản phẩm bán chạy</option>
                        <?php
                        }
                        ?>


                    </select>
                </td>
            </tr>
            <tr>
                <td style="padding: 0;" colspan="2"><input class="btn-tsx" type="submit" value="Apply" name="editsanpham"></td>
            </tr>

        </form>
    <?php
    }
    ?>
</table>