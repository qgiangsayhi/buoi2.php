<?php
$mang = array("PHP", "HTML", "CSS", "JavaScript");

$chuoi = implode(", ", $mang);

echo "Mảng ban đầu:<br>";

foreach ($mang as $phanTu) {
    echo $phanTu . "<br>";
}

echo "<br>Chuỗi sau khi nối: " . $chuoi;
?>
