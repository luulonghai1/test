<?php
$sql_xuat_danhmucphu = "SELECT * FROM bang_danhmucphu,bang_danhmuc WHERE bang_danhmucphu.id_danhmuc=bang_danhmuc.id_danhmuc ORDER BY bang_danhmucphu.id_danhmucphu ASC";
$row_xuat_danhmucphu = mysqli_query($conn, $sql_xuat_danhmucphu);
?>



<?php
while ($line = mysqli_fetch_array($row_xuat_danhmucphu)) {
    if ($row_danhmuc['id_danhmuc'] == $line['id_danhmuc']) {
        include('li-sub-menu.php');
    }
}
?>
