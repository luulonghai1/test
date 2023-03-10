<?php
$sql_xuat_sp = "SELECT * FROM bang_sanpham,bang_danhmuc WHERE bang_sanpham.id_danhmuc=bang_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
$row_xuat_sp = mysqli_query($conn, $sql_xuat_sp);

$sql_danhmucphu = "SELECT * FROM bang_sanpham,bang_danhmucphu WHERE bang_sanpham.id_danhmucphu=bang_danhmucphu.id_danhmucphu ORDER BY id_sanpham DESC";
$row_danhmucphu = mysqli_query($conn, $sql_danhmucphu);
$danhmucphu = mysqli_fetch_array($row_danhmucphu);
?>

<div class="text-center">
    <p id="content-main">Danh sách sản phẩm đã thêm</p>
</div>
<table style="max-width: 100%;">
    <thead>
        <tr style="border: 2px solid #000;">
            <th>STT</th>
            <th>Danh mục sản phẩm</th>
            <th>Danh mục sản phẩm phụ</th>
            <th>Tên sản phẩm</th>
            <th>Mã</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>HÌnh ảnh</th>
            <th>HÌnh ảnh 2</th>
            <th>Mô tả</th>
            <th>Phân loại</th>
            <th colspan="2">
                Quản lý
            </th>


        </tr>
        <?php
        $i = 0;
        while ($admin = mysqli_fetch_array($row_xuat_sp)) {

            $i++;
        ?>
            <tr>
                <td style="padding: 0;">
                    <textarea readonly name="" id="" cols="1" rows="6" style="text-align: center;padding: 0;"><?php echo $i ?></textarea>
                </td>
                <td>
                    <textarea readonly name="" id="" cols="10" rows="6"><?php echo $admin['tendanhmuc'] ?></textarea>
                </td>

                <td>
                    <textarea readonly name="" id="" cols="10" rows="6"><?php echo $danhmucphu['tendanhmucphu'] ?></textarea>
                </td>

                <td style="padding: 0;">
                    <textarea readonly name="" id="" cols="30" rows="6"><?php echo $admin['tensanpham'] ?></textarea>
                </td>
                <td>
                    <textarea readonly name="" id="" cols="10" rows="6"><?php echo $admin['masanpham'] ?></textarea>
                </td>
                <td>
                    <textarea readonly name="" id="" cols="20" rows="6"><?php echo $admin['gia'] ?></textarea>
                </td>
                <td>
                    <textarea readonly name="" id="" cols="5" rows="6"><?php echo $admin['soluong'] ?></textarea>
                </td>
                <td class="img-upload">
                    <img src="quanlysp/uploads/<?php echo $admin['hinhanh'] ?>" alt="img-sanpham">
                    </div>
                </td>
                <td class="img-upload">
                    <img src="quanlysp/uploads/<?php echo $admin['hinhanh2'] ?>" alt="img-sanpham">
                    </div>
                </td>
                <td style="padding: 0;">
                    <textarea readonly name="" id="" cols="30" rows="6"><?php echo $admin['mota'] ?></textarea>
                </td>

                <td>
                    <textarea readonly name="" id="" cols="20" rows="6"><?php
                                                                        if ($admin['phanloai'] == '0') {
                                                                            echo 'Sản phẩm mới';
                                                                        } elseif ($admin['phanloai'] == '1') {
                                                                            echo 'Sản phẩm bán chạy';
                                                                        } else if ($admin['phanloai'] == '2') {
                                                                            echo 'none';
                                                                        }
                                                                        ?></textarea>
                </td>

                <th>
                    <a href="?admin=quanlysanpham&query=editsanpham&idsanpham=<?php echo $admin['id_sanpham'] ?>">Sửa</a>
                </th>
                <th>
                    <a href="quanlysp/xuly.php?idsanpham=<?php echo $admin['id_sanpham'] ?>">Xóa</a>
                </th>

            </tr>
        <?php
        }
        ?>
    </thead>
</table>