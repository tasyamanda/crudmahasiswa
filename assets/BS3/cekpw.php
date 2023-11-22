<?php
$password = 'admin'; // Ganti dengan password yang ingin Anda hash
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;
?>