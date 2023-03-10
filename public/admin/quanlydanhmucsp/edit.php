<?php
$sql_edit_danhmucsp = "SELECT * FROM bang_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
$row_edit_danhmucsp = mysqli_query($conn, $sql_edit_danhmucsp);

?>
<div class="text-center">
    <p id="content-main">Sửa danh mục sản phẩm</p>
</div>
<table>
    <form method="POST" action="quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
        <?php
        while ($line = mysqli_fetch_array($row_edit_danhmucsp)) {
        ?>
            <tr>
                <td>Tên danh mục</td>
                <td>
                    <input type="text" value="<?php echo $line['tendanhmuc'] ?>" name="tendanhmuc">
                </td>
            </tr>
            <tr>
                <td>Thứ tự</td>
                <td><input type="text" value="<?php echo $line['thutu'] ?>" name="thutu"></td>
            </tr>
            <tr>
                <td style="padding: 0;" colspan="2"><input class="btn-tsx" type="submit" value="Apply" name="editdanhmuc"></td>
            </tr>
        <?php
        }
        ?>
    </form>
</table>