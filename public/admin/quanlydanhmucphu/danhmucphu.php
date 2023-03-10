<?php
$sql_xuat_danhmucphu = "SELECT * FROM bang_danhmucphu,bang_danhmuc WHERE bang_danhmucphu.id_danhmuc=bang_danhmuc.id_danhmuc ORDER BY bang_danhmucphu.id_danhmucphu DESC";
$row_xuat_danhmucphu = mysqli_query($conn, $sql_xuat_danhmucphu);
?>


<table style="width: 100%;height: 100%;padding: 0;margin: 0;">
    <tr style="border-left: none;border-right: none;border-top: none;">
        <th style="border-bottom: none; width: 5%;">ID</th>
        <th style="border-bottom: none; width: 60%;">Tên danh mục phụ</th>
        <th style="border-bottom: none; text-align: center;">Thứ tự</th>
        <th colspan="2">Quản lý</th>
    </tr>
    <?php
    $j=0;
    while ($line = mysqli_fetch_array($row_xuat_danhmucphu)) {
        $j++;
        if ($admin['id_danhmuc'] == $line['id_danhmuc']) {
    ?>
            <tr>
                <td ><?php echo $j ?></td>
                <td style="border-bottom: none;"><?php echo $line['tendanhmucphu'] ?></td>
                <td style="border-bottom: none; text-align: center;"><?php echo $line['thutudanhmucphu'] ?></td>
                <th>
                    <a href="?admin=quanlydanhmucsanpham&query=editdanhmucphu&iddanhmucphu=<?php echo $line['id_danhmucphu'] ?>">Sửa</a>
                </th>
                <th>
                    <a href="quanlydanhmucphu/xuly.php?query=deletedanhmuc&iddanhmucphu=<?php echo $line['id_danhmucphu'] ?>">Xóa</a>
                </th>

            </tr>
    <?php
        }
    }
    ?>
</table>