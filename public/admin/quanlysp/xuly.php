<?php
include('../config/config.php');

if (isset($_POST['themsanpham'])) {
    $tensanpham = $_POST['tensanpham'];
    $masp = $_POST['masanpham'];
    $giasp = $_POST['gia'];
    $soluong = $_POST['soluong'];
    //add img
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];

    $hinhanh2 = $_FILES['hinhanh2']['name'];
    $hinhanh_tmp2 = $_FILES['hinhanh2']['tmp_name'];

    $mota = $_POST['mota'];
    $phanloai = $_POST['phanloai'];
    $danhmuc = $_POST['danhmuc'];
    $danhmucphu = $_POST['danhmucphu'];


    $spl_them = "INSERT INTO bang_sanpham(tensanpham,masanpham,gia,soluong,hinhanh,hinhanh2,mota,phanloai,id_danhmuc,id_danhmucphu) VALUE ('" . $tensanpham . "','" . $masp . "','" . $giasp . "','" . $soluong . "','" . $hinhanh . "','" . $hinhanh2 . "','" . $mota . "','" . $phanloai . "','" . $danhmuc . "','" . $danhmucphu . "')";
    mysqli_query($conn, $spl_them);
    move_uploaded_file($hinhanh_tmp, 'UPLOADS/' . $hinhanh);
    move_uploaded_file($hinhanh_tmp2, 'UPLOADS/' . $hinhanh2);
    header('Location:../index.php?admin=quanlysanpham&query=them');
} elseif (isset($_POST['editsanpham'])) {
    $tensanpham = $_POST['tensanpham'];
    $masp = $_POST['masanpham'];
    $giasp = $_POST['gia'];
    $soluong = $_POST['soluong'];
    //add img
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];

    $hinhanh2 = $_FILES['hinhanh2']['name'];
    $hinhanh_tmp2 = $_FILES['hinhanh2']['tmp_name'];

    $mota = $_POST['mota'];
    $phanloai = $_POST['phanloai'];
    $danhmuc = $_POST['danhmuc'];
    $danhmucphu = $_POST['danhmucphu'];

    if ($hinhanh != '') {
        move_uploaded_file($hinhanh_tmp, 'UPLOADS/' . $hinhanh);

        // $sql = "SELECT * FROM bang_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
        // $query = mysqli_query($conn, $sql);
        // while ($admin = mysqli_fetch_array($query)) {
        //     unlink('UPLOADS/' . $admin['hinhanh']);
        // }
        $spl_update = "UPDATE bang_sanpham SET tensanpham='$tensanpham',masanpham='$masp',gia='$giasp',soluong='$soluong',hinhanh='$hinhanh',mota='$mota',phanloai='$phanloai',id_danhmuc='$danhmuc',id_danhmucphu='$danhmucphu' WHERE id_sanpham='$_GET[idsanpham]'";
    } elseif ($hinhanh2 != '') {
        move_uploaded_file($hinhanh_tmp2, 'UPLOADS/' . $hinhanh2);

        // $sql = "SELECT * FROM bang_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
        // $query = mysqli_query($conn, $sql);
        // while ($admin = mysqli_fetch_array($query)) {
        //     unlink('UPLOADS/' . $admin['hinhanh']);
        // }
        $spl_update = "UPDATE bang_sanpham SET tensanpham='$tensanpham',masanpham='$masp',gia='$giasp',soluong='$soluong',hinhanh2='$hinhanh2',mota='$mota',phanloai='$phanloai',id_danhmuc='$danhmuc',id_danhmucphu='$danhmucphu' WHERE id_sanpham='$_GET[idsanpham]'";
    } else {
        $spl_update = "UPDATE bang_sanpham SET tensanpham='$tensanpham',masanpham='$masp',gia='$giasp',soluong='$soluong',mota='$mota',phanloai='$phanloai',id_danhmuc='$danhmuc',id_danhmucphu='$danhmucphu' WHERE id_sanpham='$_GET[idsanpham]'";
        move_uploaded_file($hinhanh_tmp, 'UPLOADS/' . $hinhanh);
        move_uploaded_file($hinhanh_tmp2, 'UPLOADS/' . $hinhanh2);
    }

    mysqli_query($conn, $spl_update);
    header('Location:../index.php?admin=quanlysanpham&query=them');
} else {
    // $sql = "SELECT * FROM bang_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
    // $query = mysqli_query($conn, $sql);
    // while ($admin = mysqli_fetch_array($query)) {
    //     unlink('UPLOADS/' . $admin['hinhanh']);
    //     unlink('UPLOADS/' . $admin['hinhanh2']);
    // }
    $sql_delete = "DELETE FROM bang_sanpham WHERE id_sanpham='$_GET[idsanpham]'";
    mysqli_query($conn, $sql_delete);
    header('Location:../index.php?admin=quanlysanpham&query=them');
}
