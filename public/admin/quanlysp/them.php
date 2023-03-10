<?php
$sql_danhmuc = "SELECT * FROM bang_danhmuc ORDER BY id_danhmuc ASC";
$query_danhmuc = mysqli_query($conn, $sql_danhmuc);

$sql_danhmucphu = "SELECT * FROM bang_danhmucphu ORDER BY id_danhmucphu ASC";
$query_danhmucphu = mysqli_query($conn, $sql_danhmucphu);
?>

<div class="text-center">
    <p id="content-main">Thêm sản phẩm</p>
</div>
<table>
    <form method="POST" action="quanlysp/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Danh mục sản phẩm</td>
            <td>
                <select name="danhmuc" id="">
                    <?php
                    while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                        <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
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
                    while ($row_danhmucphu = mysqli_fetch_array($query_danhmucphu)) {

                    ?>
                        <option value="<?php echo $row_danhmucphu['id_danhmucphu'] ?>"><?php echo $row_danhmucphu['tendanhmucphu'] ?></option>

                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tên sản phẩm</td>
            <td>
                <input type="text" name="tensanpham">
            </td>
        </tr>
        <tr>
            <td>Mã</td>
            <td><input type="text" name="masanpham"></td>
        </tr>

        <tr>
            <td>Giá </td>
            <td><input type="text" name="gia"></td>
        </tr>

        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong"></td>
        </tr>

        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>

        <tr>
            <td>Hình ảnh 2</td>
            <td><input type="file" name="hinhanh2"></td>
        </tr>

        <tr id="mota">
            <td>Mô tả</td>
            <td>
                <textarea class="form-control" id="" name="mota" style="width: 100%;"></textarea>
            </td>
        </tr>

        <tr>
            <td>Phân loại</td>
            <td>
                <select name="phanloai" id="">
                    <option value="0">Sản phẩm mới</option>
                    <option value="1">Sản phẩm bán chạy</option>
                    <option value="2">none</option>
                </select>
            </td>
        </tr>
        <tr>
            <td style="padding: 0;" colspan="2"><input class="btn-tsx" type="submit" value="Thêm sản phẩm" name="themsanpham"></td>
        </tr>
    </form>
</table>