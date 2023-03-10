<?php
include("../config/config.php");
$tendanhmuc = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
$danhmuc = $_POST['danhmuc'];
if (isset($_POST['themdanhmucphu'])) {
    if ($tendanhmuc == '') {
        echo "Tên danh mục không thể trống. Vui lòng điển tên danh mục";
    } elseif ($thutu == '') {
        echo "Thứ tự danh mục không thể trống. Vui lòng điền thứ tự danh mục";
    } else {
        $spl_them = "INSERT INTO bang_danhmucphu(tendanhmucphu,thutudanhmucphu,id_danhmuc) VALUE ('$tendanhmuc','$thutu','$danhmuc')";
        mysqli_query($conn, $spl_them);
        header('Location:../index.php?admin=quanlydanhmucsanpham&query=them');
    }
} elseif (isset($_POST['editdanhmucphu'])) {
    $tendanhmuc = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];
    $danhmuc = $_POST['danhmuc'];
    
    $spl_update = "UPDATE bang_danhmucphu SET tendanhmucphu='$tendanhmuc',thutudanhmucphu='$thutu',id_danhmuc='$danhmuc' WHERE id_danhmucphu='$_GET[iddanhmucphu]'";
    mysqli_query($conn, $spl_update);
    header('Location:../index.php?admin=quanlydanhmucsanpham&query=them');
} else {
    $sql_delete = "DELETE FROM bang_danhmucphu WHERE id_danhmucphu='$_GET[iddanhmucphu]'";
    mysqli_query($conn, $sql_delete);
    header('Location:../index.php?admin=quanlydanhmucsanpham&query=them');
}
