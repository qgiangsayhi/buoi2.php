<?php
$chuoi = "Hello PHP";
$chuoiCon = "Hello";

if (substr($chuoi, 0, strlen($chuoiCon)) === $chuoiCon) {
    echo "Chuỗi bắt đầu bằng '$chuoiCon'";
} else {
    echo "Chuỗi không bắt đầu bằng '$chuoiCon'";
}
?>
