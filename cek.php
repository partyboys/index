<?php
if (file_exists("data.json")) {
    $cek = file_get_contents('data.json');
}else {
    echo "<br> User Belum Di Tambahkan !!";
}
$js = json_decode($cek, true);
$user = $js['userName'];
$pass = $js['passUser'];

if($_GET['user'] == $user and $_GET['pass'] == $pass) {
    echo "<br><br> LOGIN SUKSES !!";
} else {
    echo "<br><br> USERNAME/PASSWORD KAMU SALAH !!";
}







 ?>
