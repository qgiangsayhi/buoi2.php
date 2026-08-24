<?php
$chuoi = "Xin chao PHP";
$chuoiCon = "PHP";

$doDai = strlen($chuoiCon);
$phanCuoi = substr($chuoi, -$doDai);

if ($phanCuoi === $chuoiCon) {
    echo "Chuỗi kết thúc bằng '$chuoiCon'";
} else {
    echo "Chuỗi không kết thúc bằng '$chuoiCon'";
}
?>
