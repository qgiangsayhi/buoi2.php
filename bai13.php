<?php
$chuoi = "PHP,HTML,CSS,JavaScript";

$mang = explode(",", $chuoi);

echo "Các phần tử trong mảng:<br>";

foreach ($mang as $phanTu) {
    echo $phanTu . "<br>";
}
?>
