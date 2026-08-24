<?php
$email = "abc@gmail.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo $email . " email hợp lệ";
} else {
    echo $email . " email không hợp lệ";
}
?>
