<?php
$chuoi = "Hello@PHP#2026!";

$ketQua = preg_replace('/[^a-zA-Z0-9]/', '*', $chuoi);

echo "Chuỗi ban đầu: " . $chuoi . "<br>";
echo "Chuỗi sau khi thay thế: " . $ketQua;
?>
