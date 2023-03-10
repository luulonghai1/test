<?php
$sql_edit_danhmucphu = "SELECT * FROM bang_danhmucphu WHERE id_danhmucphu='$_GET[iddanhmucphu]' LIMIT 1";
$row_edit_danhmucphu = mysqli_query($conn, $sql_edit_danhmucphu);

?>
<div class="text-center">
    <p id="content-main">Sửa danh mục phụ</p>
</div>
<table>
    <?php
    while ($line = mysqli_fetch_array($row_edit_danhmucphu)) {
    ?>
        <form method="POST" action="quanlydanhmucphu/xuly.php?iddanhmucphu=<?php echo $line['id_danhmucphu'] ?>" enctype="multipart/form-data">
            <tr>
                <td>Danh mục chính</td>
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
                <td>Tên danh mục phụ</td>
                <td>
                    <input type="text" value="<?php echo $line['tendanhmucphu'] ?>" name=" tendanhmuc">
                </td>
            </tr>
            <tr>
                <td>Thứ tự</td>
                <td><input type="text" name="thutu" value="<?php echo $line['thutudanhmucphu'] ?>"></td>
            </tr>

            
            <tr>
                <td style="padding: 0;" colspan="2"><input class="btn-tsx" type="submit" value="Apply" name="editdanhmucphu"></td>
            </tr>

        </form>
    <?php
    }
    ?>
</table>