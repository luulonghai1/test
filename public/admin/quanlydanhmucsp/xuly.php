<?php
include("../config/config.php");
$tendanhmuc = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
if (isset($_POST['themdanhmuc'])) {
    if ($tendanhmuc == '') {
        echo "Tên danh mục không thể trống. Vui lòng điển tên danh mục";
    } elseif ($thutu == '') {
        echo "Thứ tự danh mục không thể trống. Vui lòng điền thứ tự danh mục";
    } else {
        $spl_them = "INSERT INTO bang_danhmuc(tendanhmuc,thutu) VALUE ('$tendanhmuc','$thutu')";
        mysqli_query($conn, $spl_them);
        header('Location:../index.php?admin=quanlydanhmucsanpham&query=them');
    }
} elseif (isset($_POST['editdanhmuc'])) {
    $spl_update = "UPDATE bang_danhmuc SET tendanhmuc='$tendanhmuc',thutu='$thutu' WHERE id_danhmuc='$_GET[iddanhmuc]'";
    mysqli_query($conn, $spl_update);
    header('Location:../index.php?admin=quanlydanhmucsanpham&query=them');
} else {
    $sql_delete = "DELETE FROM bang_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]'";
    mysqli_query($conn, $sql_delete);
    header('Location:../index.php?admin=quanlydanhmucsanpham&query=them');
}
?>
