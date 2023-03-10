<div class="text-center">
    <p id="content-main">Thêm danh mục phụ</p>
</div>
<table>
    <form method="POST" action="quanlydanhmucphu/xuly.php">
        <tr>
            <td>Danh mục chính</td>
            <td>
                <select name="danhmuc" id="">
                    <?php
                    $sql_danhmuc = "SELECT * FROM bang_danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
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
            <td>Tên danh mục phụ</td>
            <td>
                <input type="text" name="tendanhmuc">
            </td>
        </tr>

        <tr>
            <td>Thứ tự</td>
            <td><input type="text" name="thutu"></td>
        </tr>
        <tr>
            <td style="padding: 0;" colspan="2"><input class="btn-tsx" type="submit" value="Thêm" name="themdanhmucphu"></td>
        </tr>
    </form>
</table>