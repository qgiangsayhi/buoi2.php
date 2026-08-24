<?php
$chuoi = "Tôi học HTML";
$chuoiCu = "HTML";
$chuoiMoi = "PHP";

$ketQua = str_replace($chuoiCu, $chuoiMoi, $chuoi);

echo "Chuỗi ban đầu: " . $chuoi . "<br>";
echo "Chuỗi sau khi thay thế: " . $ketQua;
?>
