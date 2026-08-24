<?php
$chuoi = "Tôi đang học PHP";
$chuoiCon = "PHP";

$viTri = strpos($chuoi, $chuoiCon);

if ($viTri !== false) {
    echo "Tìm thấy chuỗi '$chuoiCon' tại vị trí: " . $viTri;
} else {
    echo "Không tìm thấy chuỗi '$chuoiCon'";
}
?>
