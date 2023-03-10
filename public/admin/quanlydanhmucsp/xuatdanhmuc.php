<?php
$sql_xuat_danhmucsp = "SELECT * FROM bang_danhmuc ORDER BY thutu DESC";
$row_xuat_danhmucsp = mysqli_query($conn, $sql_xuat_danhmucsp);

?>

<?php
$sql_xuat_danhmucphu = "SELECT * FROM bang_danhmucphu,bang_danhmuc WHERE bang_danhmucphu.id_danhmuc=bang_danhmuc.id_danhmuc ORDER BY bang_danhmucphu.id_danhmucphu DESC";
$row_xuat_danhmucphu = mysqli_query($conn, $sql_xuat_danhmucphu);

?>


<div class="text-center">
    <p id="content-main">Danh mục đã thêm</p>
</div>
<table style="border: 2px solid #000;">
    <tr style="border: 2px solid #000;">
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Danh mục phụ</th>
        <th>Thứ tự</th>
        <th colspan="2">Quản lý</th>

    </tr>
    <?php
    $i = 0;
    while ($admin = mysqli_fetch_array($row_xuat_danhmucsp)) {
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $admin['tendanhmuc'] ?></td>
            <td style="padding: 0; border: none;">

                <?php include('quanlydanhmucphu/danhmucphu.php'); ?>

            </td>
            <td style="text-align: center;"><?php echo $admin['thutu'] ?></td>
            <th>
                <a href="?admin=quanlydanhmucsanpham&query=editdanhmuc&iddanhmuc=<?php echo $admin['id_danhmuc'] ?>">Sửa</a>
            </th>
            <th>
                <a href="quanlydanhmucsp/xuly.php?query=deletedanhmuc&iddanhmuc=<?php echo $admin['id_danhmuc'] ?>">Xóa</a>
            </th>

        </tr>
    <?php
    }
    ?>
</table>