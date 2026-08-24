<?php
$chuoi = "Tôi đang học PHP";
$chuoiCon = "PHP";

if (strpos($chuoi, $chuoiCon) !== false) {
    echo "Chuỗi có chứa '$chuoiCon'";
} else {
    echo "Chuỗi không chứa '$chuoiCon'";
}
?>
