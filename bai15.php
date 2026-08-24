<?php
$chuoi = "PHP";

$themDau = str_pad($chuoi, 6, "*", STR_PAD_LEFT);
$themCuoi = str_pad($chuoi, 6, "*", STR_PAD_RIGHT);

echo "Chuỗi ban đầu: " . $chuoi . "<br>";
echo "Thêm vào đầu: " . $themDau . "<br>";
echo "Thêm vào cuối: " . $themCuoi;
?>
